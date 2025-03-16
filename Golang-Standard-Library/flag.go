package main

import (
	"fmt"
	"flag"
)

func main() {
	username := flag.String("username", "John", "Enter your username")
	password := flag.String("password", "Doe", "Enter your password")
	host := flag.String("host", "localhost", "Enter your host")
	port := flag.Int("port", 8080, "Enter your port")

	flag.Parse()

	fmt.Println("Username:", *username)
	fmt.Println("Password:", *password)
	fmt.Println("Host:", *host)
	fmt.Println("Port:", *port)
}