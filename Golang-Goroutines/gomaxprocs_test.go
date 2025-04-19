package golang_goroutines

import (
	"fmt"
	"runtime"
	"testing"
)

func TestGetGomaxprocs(t *testing.T) {
	cpuTotal := runtime.NumCPU()
	fmt.Println("cpuTotal:", cpuTotal)

	threadTotal := runtime.GOMAXPROCS(-1)
	fmt.Println("threadTotal:", threadTotal)

	totalGoroutines := runtime.NumGoroutine()
	fmt.Println("totalGoroutines:", totalGoroutines)
}

func TestChangeGomaxprocs(t *testing.T) {
	cpuTotal := runtime.NumCPU()
	fmt.Println("cpuTotal:", cpuTotal)

	runtime.GOMAXPROCS(20)
	threadTotal := runtime.GOMAXPROCS(-1)
	fmt.Println("threadTotal:", threadTotal)

	totalGoroutines := runtime.NumGoroutine()
	fmt.Println("totalGoroutines:", totalGoroutines)
}
