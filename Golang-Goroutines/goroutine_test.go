package golang_goroutines

import (
	"fmt"
	"time"
	"testing"
)

func HelloWorld() {
	fmt.Println("Hello World")
}

func TestCreateGoroutine(t *testing.T) {
	go HelloWorld()
	fmt.Println("Ups")

	time.Sleep(1 * time.Second)
}

func DisplayNumber(number int) {
	fmt.Println("Display ", number)
}

func TestManyGoroutine(t *testing.T) {
	for i := 0; i < 100000; i++ {
		go DisplayNumber(i)	
	}

	time.Sleep(10 * time.Second)
}

func GiveMeResponse(channel chan string) {
	time.Sleep(2 * time.Second)
	channel <- "Give Me Response"
}

func OnlyIn(channel chan <- string) {
	time.Sleep(2 * time.Second)
	channel <- "Only In"
}

func OnlyOut(channel <- chan string) {
	data := <-channel
	fmt.Println(data)
}