package golangcontext

import (
	"context"
	"fmt"
	"runtime"
	"testing"
	"time"
)

func TestContext(t *testing.T) {
	background := context.Background()
	fmt.Println(background)

	todo := context.TODO()
	fmt.Println(todo)
}

func TestContextWithValue(t *testing.T) {
	contextA := context.Background()

	contextB := context.WithValue(contextA, "b", "B")
	contextC := context.WithValue(contextA, "c", "C")

	contextD := context.WithValue(contextB, "d", "D")
	contextE := context.WithValue(contextB, "e", "E")

	contextF := context.WithValue(contextC, "f", "F")

	fmt.Println(contextA.Value("a")) // nil
	fmt.Println(contextB.Value("b")) // B
	fmt.Println(contextC.Value("c")) // C
	fmt.Println(contextD.Value("d")) // D
	fmt.Println(contextE.Value("e")) // E
	fmt.Println(contextF.Value("f")) // F

	fmt.Println(contextB.Value("c")) // nil
	fmt.Println(contextC.Value("b")) // nil
	fmt.Println(contextD.Value("b")) // B
}

func CreateCounter(ctx context.Context) chan int {
	destination := make(chan int)
	go func() {
		defer close(destination)
		counter := 1
		for {
			select {
			case <-ctx.Done():
				return
			default:
				destination <- counter
				counter++
				time.Sleep(1 * time.Second)
			}
		}
	}()
	return destination
}

func TestContextWithCancel(t *testing.T) {
	fmt.Println("Go Total", runtime.NumGoroutine())

	ctx, cancel := context.WithCancel(context.Background())

	destination := CreateCounter(ctx)
	for n := range destination {
		fmt.Println(n)
		if n == 10 {
			break
		}
	}
	cancel()

	time.Sleep(1 * time.Second)
	fmt.Println("cancel")
	fmt.Println("Go Total", runtime.NumGoroutine())
}

func TestContextWithTimeout(t *testing.T) {
	fmt.Println("Go Total", runtime.NumGoroutine())

	ctx, cancel := context.WithTimeout(context.Background(), 5 * time.Second)
	defer cancel()

	destination := CreateCounter(ctx)
	for n := range destination {
		fmt.Println(n)
	}
	cancel()

	time.Sleep(1 * time.Second)
	fmt.Println("cancel")
	fmt.Println("Go Total", runtime.NumGoroutine())
}

func TestContextWithDeadline(t *testing.T) {
	fmt.Println("Go Total", runtime.NumGoroutine())

	ctx, cancel := context.WithDeadline(context.Background(), time.Now().Add(5 * time.Second))
	defer cancel()

	destination := CreateCounter(ctx)
	for n := range destination {
		fmt.Println(n)
	}
	cancel()

	time.Sleep(1 * time.Second)
	fmt.Println("cancel")
	fmt.Println("Go Total", runtime.NumGoroutine())
}
