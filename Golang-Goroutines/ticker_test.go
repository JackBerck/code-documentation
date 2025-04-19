package golang_goroutines

import (
	"fmt"
	"testing"
	"time"
)

func TestTicker(t *testing.T) {
	ticker := time.NewTicker(1 * time.Second)
	
	go func() {
		time.Sleep(3 * time.Second)
		ticker.Stop()
	}()

	for tick := range ticker.C {
		fmt.Println("Tick ", tick, " ", time.Now())
	}

}
