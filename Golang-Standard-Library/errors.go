package main

import (
	"errors"
	"fmt"
)

var (
	ErrBadRequest     = errors.New("Bad Request")
	ErrNotFound       = errors.New("Not Found")
	ErrInternalServer = errors.New("Internal Server Error")
)

func GetByid(id string) error {
	if id == "" {
		return ErrBadRequest
	}

	if id != "John" {
		return ErrNotFound
	}

	return nil
}

func main() {
	name := "Jack"
	err := GetByid(name)
	if err != nil {
		if errors.Is(err, ErrBadRequest) {
			fmt.Println("Bad Request")
		} else if errors.Is(err, ErrNotFound) {
			fmt.Println("Not Found")
		} else {
			fmt.Println("Unknown Error")
		}
	}
}
