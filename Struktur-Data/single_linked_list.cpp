/**
 * Program ini merupakan implementasi dari single linked list
 * Single linked list adalah struktur data yang terdiri dari node-node yang saling terhubung satu arah dengan node lainnya.
 * Setiap node memiliki dua bagian, yaitu data dan pointer yang menunjuk ke node berikutnya.
 */
#include <iostream>
using namespace std;

struct node
{
    int data;
    node *next;
};

node *head = NULL, *current = NULL;

// Fungsi untuk menambahkan node di awal list
void insertFirst(int data)
{
    node *newNode = new node;
    newNode->data = data;

    if (head == NULL)
    {
        head = newNode;
        newNode->next = NULL;
    }
    else
    {
        newNode->next = head;
        head = newNode;
    }
}

// Fungsi untuk menambahkan node di akhir list
void insertLast(int data)
{
    node *newNode = new node;
    newNode->data = data;
    newNode->next = NULL;

    if (head == NULL)
    {
        head = newNode;
    }
    else
    {
        current = head;
        while (current->next != NULL)
        {
            current = current->next;
        }
        current->next = newNode;
    }
}

// Fungsi untuk menambahkan node setelah node dengan nilai tertentu
void insertAfter(int key, int data)
{
    node *newNode = new node;
    newNode->data = data;

    current = head;
    while (current != NULL && current->data != key)
    {
        current = current->next;
    }

    if (current != NULL)
    {
        newNode->next = current->next;
        current->next = newNode;
    }
    else
    {
        cout << "Key not found" << endl;
    }
}

// Fungsi untuk menghapus node pertama
void deleteFirst()
{
    if (head == NULL)
    {
        cout << "List is empty" << endl;
    }
    else
    {
        node *temp = head;
        head = head->next;
        delete temp;
    }
}

// Fungsi untuk menghapus node terakhir
void deleteLast()
{
    if (head == NULL)
    {
        cout << "List is empty" << endl;
    }
    else
    {
        current = head;
        while (current->next->next != NULL)
        {
            current = current->next;
        }
        delete current->next;
        current->next = NULL;
    }
}

// Fungsi untuk menghapus node dengan nilai tertentu
void deleteKey(int key)
{
    if (head == NULL)
    {
        cout << "List is empty" << endl;
    }
    else
    {
        current = head;
        while (current->next != NULL && current->next->data != key)
        {
            current = current->next;
        }

        if (current->next != NULL)
        {
            node *temp = current->next;
            current->next = current->next->next;
            delete temp;
        }
        else
        {
            cout << "Key not found" << endl;
        }
    }
}

// Fungsi untuk menampilkan list
void display()
{
    current = head;
    while (current != NULL)
    {
        cout << current->data << " ";
        current = current->next;
    }
    cout << endl;
}

// Fungsi untuk membalik urutan list
void reverse()
{
    node *prev = NULL, *next = NULL;
    current = head;
    while (current != NULL)
    {
        next = current->next;
        current->next = prev;
        prev = current;
        current = next;
    }
    head = prev;
}

int main()
{
    // Menambahkan node di awal list
    insertFirst(10);
    insertFirst(25);

    // Menambahkan node di akhir list
    insertLast(40);
    insertLast(50);

    // Menambahkan node setelah node dengan nilai tertentu
    insertAfter(25, 25);

    // Menghapus node pertama
    deleteFirst();

    // Menghapus node terakhir
    deleteLast();

    // Menghapus node dengan nilai tertentu
    deleteKey(40);

    // Membalik urutan list
    reverse();

    // Menampilkan list
    display();

    return 0;
}