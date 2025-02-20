/**
 * Queue adalah struktur data yang mengikuti prinsip FIFO (First In First Out).
 * Elemen pertama yang dimasukkan ke dalam queue akan menjadi elemen pertama yang dikeluarkan.
 * Operasi yang biasa dilakukan pada queue adalah enqueue (menambahkan elemen ke dalam queue),
 */
#include <iostream>
using namespace std;

struct queue
{
    int arr[5];
    int front = -1;
    int rear = -1;
};

void enqueue(queue &q, int data)
{
    // Cek apakah queue penuh
    if (q.rear == 4)
    {
        cout << "Queue is full" << endl;
    }
    else
    {
        // Tambahkan elemen ke posisi rear dan perbarui rear
        q.rear++;
        q.arr[q.rear] = data;
        // Jika elemen pertama ditambahkan, perbarui front
        if (q.front == -1)
        {
            q.front = 0;
        }
    }
}

void dequeue(queue &q)
{
    // Cek apakah queue kosong
    if (q.front == -1)
    {
        cout << "Queue is empty" << endl;
    }
    else
    {
        // Hapus elemen dari posisi front dan perbarui front
        cout << "Dequeued element: " << q.arr[q.front] << endl;
        if (q.front == q.rear)
        {
            // Jika hanya ada satu elemen, reset queue
            q.front = -1;
            q.rear = -1;
        }
        else
        {
            q.front++;
        }
    }
}

void display(queue q)
{
    // Cek apakah queue kosong
    if (q.front == -1)
    {
        cout << "Queue is empty" << endl;
    }
    else
    {
        // Tampilkan semua elemen dalam queue
        for (int i = q.front; i <= q.rear; i++)
        {
            cout << q.arr[i] << " ";
        }
        cout << endl;
    }
}

void peek(queue q)
{
    // Cek elemen di posisi front
    if (q.front == -1)
    {
        cout << "Queue is empty" << endl;
    }
    else
    {
        cout << "Front element: " << q.arr[q.front] << endl;
    }
}

int main()
{
    queue q;
    // Tambahkan elemen ke dalam queue
    enqueue(q, 1);
    enqueue(q, 2);
    enqueue(q, 3);
    enqueue(q, 4);
    enqueue(q, 5);
    // Tampilkan elemen dalam queue
    display(q);
    // Coba tambahkan elemen ke queue yang penuh
    enqueue(q, 6);
    // Hapus elemen dari queue
    dequeue(q);
    dequeue(q);
    // Tampilkan elemen dalam queue setelah penghapusan
    display(q);
    // Tampilkan elemen di posisi front
    peek(q);
    return 0;
}