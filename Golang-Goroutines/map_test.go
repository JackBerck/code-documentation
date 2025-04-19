package golang_goroutines

import (
	"fmt"
	"sync"
	"testing"
)

func AddToMap(data *sync.Map, value int) {
	data.Store(value, value)
}

func TestMap(t *testing.T) {
	data := sync.Map{}
	group := sync.WaitGroup{}

	for i := 0; i < 10; i++ {
		group.Add(1)
		go func(i int) {
			defer group.Done()
			AddToMap(&data, i)
		}(i)
	}

	group.Wait()

	data.Range(func(key, value interface{}) bool {
		fmt.Printf("Key: %v, Value: %v\n", key, value)
		return true
	})
}
