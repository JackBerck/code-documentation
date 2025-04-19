package helper

import (
	"fmt"
	"runtime"
	"testing"

	"github.com/stretchr/testify/assert"
	"github.com/stretchr/testify/require"
)

func BenchmarkHelloWorldTable(b *testing.B) {
	tests := []struct {
		name     string
		request string
	} {
		{
			name: "HelloWorldTable(Zaki)",
			request: "Zaki",
		},
		{
			name: "HelloWorldTable(Kaka)",
			request: "Kaka",
		},
		{
			name: "HelloWorldTable(Joko)",
			request: "Joko",
		},
	}

	for _, test := range tests {
		b.Run(test.name, func(b *testing.B) {
			for i := 0; i < b.N; i++ {
				HelloWorld(test.request)
			}
		})
	}
}

func BenchmarkHelloWorldSub(b *testing.B) {
	b.Run("BenchmarkHelloWorldSub1", func(b *testing.B) {
		for i := 0; i < b.N; i++ {
			HelloWorld("Zaki")
		}
	})

	b.Run("BenchmarkHelloWorldSub2", func(b *testing.B) {
		for i := 0; i < b.N; i++ {
			HelloWorld("Zaki")
		}
	})
}

func BenchmarkHelloWorld(b *testing.B) {
	for i := 0; i < b.N; i++ {
		HelloWorld("Zaki")
	}
}

func TestTableHello(t *testing.T) {
	tests := []struct {
		name     string
		request string
		expected string
	} {
		{
			name: "HelloWorld(Eko)",
			request: "Eko",
			expected: "Hello, Eko",
		},
		{
			name: "HelloWorld(Budi)",
			request: "Budi",
			expected: "Hello, Budi",
		},
		{
			name: "HelloWorld(Joko)",
			request: "Joko",
			expected: "Hello, Joko",
		},
	}

	for _, test := range tests {
		t.Run(test.name, func(t *testing.T) {
			result := HelloWorld(test.request)
			assert.Equal(t, test.expected, result)
		})
	}
}

func TestSubTest(t *testing.T) {
	t.Run("SubTest1", func(t *testing.T) {
		assert.Equal(t, 1, 1, "The two numbers should be the same.")
		fmt.Println("SubTest1 done")
	})

	t.Run("SubTest2", func(t *testing.T) {
		assert.Equal(t, 2, 2, "The two numbers should be the same.")
		fmt.Println("SubTest2 done")
	})
}

func TestMain(m *testing.M) {
	fmt.Println("TestMain setup")
	m.Run()
	fmt.Println("TestMain teardown")
}

func TestSkip(t *testing.T) {
	if runtime.GOOS == "windows" {
		t.Skip("Can't run on Windows")
	}

	fmt.Println("TestSkip done")
}

func TestHelloAssert(t *testing.T) {
	result := HelloWorld("Assert")
	assert.Equal(t, "Hello, Assert", result, "The two words should be the same.")
	fmt.Println("TestHelloAssert done")
}

func TestHelloRequire(t *testing.T) {
	result := HelloWorld("Require")
	require.Equal(t, "Hello, Require", result, "The two words should be the same.")
	fmt.Println("TestHelloRequire done (this line will not be printed)")
}

func TestHelloFail(t *testing.T) {
	result := HelloWorld("Fail")
	if result != "Hello, World" {
		t.Fail()
	}

	fmt.Println("TestHelloFail done")
}

func TestHelloFailNow(t *testing.T) {
	result := HelloWorld("FailNow")
	if result != "Hello, World" {
		t.FailNow()
	}

	fmt.Println("TestHelloFailNow done (this line will not be printed)")
}

func TestHelloFatal(t *testing.T) {
	result := HelloWorld("Fatal")
	if result != "Hello, World" {
		t.Fatal("Fatal error")
	}

	fmt.Println("TestHelloFatal done (this line will not be printed)")
}

func TestHelloError(t *testing.T) {
	result := HelloWorld("Error")
	if result != "Hello, World" {
		t.Error("Error")
	}

	fmt.Println("TestHelloError done")
}
