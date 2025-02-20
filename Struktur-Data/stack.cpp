/**
 * Program ini adalah implementasi stack menggunakan array.
 * Stack adalah struktur data yang mengikuti prinsip LIFO (Last In First Out), yaitu data yang terakhir dimasukkan akan pertama kali dikeluarkan.
 * Operasi yang biasa dilakukan pada stack adalah push (menambahkan elemen ke dalam stack), pop (mengeluarkan elemen dari stack), dan peek (melihat elemen teratas dari stack).
 */
#include <iostream>
using namespace std;

struct stack
{
    int arr[5];
    int top = -1;
};

void push(stack &s, int data)
{
    // Cek apakah stack penuh
    if (s.top == 4)
    {
        cout << "Stack is full" << endl;
    }
    else
    {
        // Tambahkan elemen ke posisi top dan perbarui top
        s.top++;
        s.arr[s.top] = data;
    }
}

void pop(stack &s)
{
    // Cek apakah stack kosong
    if (s.top == -1)
    {
        cout << "Stack is empty" << endl;
    }
    else
    {
        // Hapus elemen dari posisi top dan perbarui top
        cout << "Popped element: " << s.arr[s.top] << endl;
        s.top--;
    }
}

void display(stack s)
{
    // Cek apakah stack kosong
    if (s.top == -1)
    {
        cout << "Stack is empty" << endl;
    }
    else
    {
        // Tampilkan semua elemen dalam stack dari top ke bottom
        for (int i = s.top; i >= 0; i--)
        {
            cout << s.arr[i] << " ";
        }
        cout << endl;
    }
}

void peek(stack s)
{
    // Cek elemen di posisi top
    if (s.top == -1)
    {
        cout << "Stack is empty" << endl;
    }
    else
    {
        cout << "Top element: " << s.arr[s.top] << endl;
    }
}

void reverse(stack &s)
{
    // Membalik urutan elemen dalam stack menggunakan stack sementara
    stack temp;
    while (s.top != -1)
    {
        push(temp, s.arr[s.top]);
        pop(s);
    }
    s = temp;
}

int main()
{
    stack s;
    // Tambahkan elemen ke dalam stack
    push(s, 10);
    push(s, 20);
    push(s, 30);
    push(s, 40);
    push(s, 50);
    // Coba tambahkan elemen ke stack yang penuh
    push(s, 60);
    // Tampilkan elemen dalam stack
    display(s);
    // Tampilkan elemen di posisi top
    peek(s);
    // Membalik urutan elemen dalam stack
    reverse(s);
    // Tampilkan elemen dalam stack setelah dibalik
    display(s);
    // Hapus elemen dari stack
    pop(s);
    pop(s);
    pop(s);
    pop(s);
    pop(s);
    // Coba hapus elemen dari stack yang kosong
    pop(s);
    // Tampilkan elemen dalam stack setelah penghapusan
    display(s);
}
