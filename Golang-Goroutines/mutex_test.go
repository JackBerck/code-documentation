package golang_goroutines

import (
	"fmt"
	"sync"
	"testing"
	"time"
)

func TestMutex(t *testing.T) {
	x := 0
	mutex := sync.Mutex{}

	for i := 1; i <= 1000; i++ {
		go func() {
			for j := 1; j <= 100; j++ {
				mutex.Lock()
				x++
				mutex.Unlock()
			}
		}()
	}

	time.Sleep(5 * time.Second)
	fmt.Println("x = ", x)
}

type BackAccount struct {
	RWmutex sync.RWMutex
	balance int
}

func (b *BackAccount) AddBalance(amount int) {
	b.RWmutex.Lock()
	b.balance = b.balance + amount
	b.RWmutex.Unlock()
}

func (b *BackAccount) GetBalance() int {
	b.RWmutex.RLock()
	balance := b.balance
	b.RWmutex.RUnlock()
	return balance
}

func TestRWMutexTest(t *testing.T) {
	account := BackAccount{}

	for i := 0; i < 100; i++ {
		go func() {
			for j := 0; j < 100; j++ {
				account.AddBalance(1)
				fmt.Println(account.GetBalance())
			}
		}()
	}

	time.Sleep(5 * time.Second)
	fmt.Println("Final balance is ", account.GetBalance())
}

type UserBalance struct {
	sync.Mutex
	Name    string
	Balance int
}

func (u *UserBalance) Lock() {
	u.Mutex.Lock()
}

func (u *UserBalance) Unlock() {
	u.Mutex.Unlock()
}

func (u *UserBalance) Change(amount int) {
	u.Balance += amount
}

func Transfer(user1 *UserBalance, user2 *UserBalance, amount int) {
	user1.Lock()
	fmt.Println("Lock", user1.Name)
	user1.Change(-amount)

	time.Sleep(1 * time.Second)

	user2.Lock()
	fmt.Println("Lock", user2.Name)
	user2.Change(amount)

	time.Sleep(1 * time.Second)
	user1.Unlock()
	user2.Unlock()
}
func TestDeadlock(t *testing.T) {
	user1 := UserBalance{Name: "User 1", Balance: 1000}
	user2 := UserBalance{Name: "User 2", Balance: 1000}

	go Transfer(&user1, &user2, 100)
	go Transfer(&user2, &user1, 100)

	time.Sleep(5 * time.Second)
	fmt.Println("Final balance is ", user1.Balance, user2.Balance)
}
