package golang_goroutines

import (
	"fmt"
	"sync"
	"testing"
	"time"
)

func TestPool(t *testing.T) {
	pool := &sync.Pool{
		New: func() interface{} {
			return "asdf"
		},
	}

	pool.Put("hello")
	pool.Put("hai")
	pool.Put("holla")

	for i := 0; i < 10; i++ {
		go func() {
			v := pool.Get()
			fmt.Println(v)
			time.Sleep(1 * time.Second)
			pool.Put(v)
		}()
	}

	time.Sleep(11 * time.Second)
}
