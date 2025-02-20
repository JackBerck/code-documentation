/**
 * Double linked list terdiri dari elemen-elemen individu, dimana masing-masing dihubungkan dengan dua pointer.
 */
#include <iostream>
using namespace std;

struct node
{
    int data;
    node *next;
    node *prev;
};

node *head = NULL, *current = NULL;

void insertFirst(int data)
{
    // Membuat node baru
    node *newNode = new node;
    newNode->data = data;
    newNode->prev = NULL;
    newNode->next = NULL;

    if (head == NULL)
    {
        // Jika list kosong, head menunjuk ke node baru
        head = newNode;
    }
    else
    {
        // Jika list tidak kosong, sisipkan node baru di depan
        newNode->next = head;
        head->prev = newNode;
        head = newNode;
    }
}

void insertLast(int data)
{
    // Membuat node baru
    node *newNode = new node;
    newNode->data = data;
    newNode->prev = NULL;
    newNode->next = NULL;

    if (head == NULL)
    {
        // Jika list kosong, head menunjuk ke node baru
        head = newNode;
    }
    else
    {
        // Jika list tidak kosong, sisipkan node baru di akhir
        current = head;
        while (current->next != NULL)
        {
            current = current->next;
        }
        current->next = newNode;
        newNode->prev = current;
    }
}

void insertAfter(int key, int data)
{
    // Membuat node baru
    node *newNode = new node;
    newNode->data = data;
    newNode->prev = NULL;
    newNode->next = NULL;

    // Mencari node dengan nilai key
    current = head;
    while (current != NULL && current->data != key)
    {
        current = current->next;
    }

    if (current != NULL)
    {
        // Jika node dengan nilai key ditemukan, sisipkan node baru setelahnya
        newNode->next = current->next;
        newNode->prev = current;
        if (current->next != NULL)
        {
            current->next->prev = newNode;
        }
        current->next = newNode;
    }
    else
    {
        // Jika node dengan nilai key tidak ditemukan
        cout << "Key not found" << endl;
    }
}

void deleteFirst()
{
    if (head == NULL)
    {
        // Jika list kosong
        cout << "List is empty" << endl;
    }
    else
    {
        // Menghapus node pertama
        node *temp = head;
        head = head->next;
        if (head != NULL)
        {
            head->prev = NULL;
        }
        delete temp;
    }
}

void deleteLast()
{
    if (head == NULL)
    {
        // Jika list kosong
        cout << "List is empty" << endl;
    }
    else
    {
        // Menghapus node terakhir
        current = head;
        while (current->next != NULL)
        {
            current = current->next;
        }
        if (current->prev != NULL)
        {
            current->prev->next = NULL;
        }
        delete current;
    }
}

void deleteKey(int key)
{
    if (head == NULL)
    {
        // Jika list kosong
        cout << "List is empty" << endl;
    }
    else
    {
        // Mencari node dengan nilai key
        current = head;
        while (current != NULL && current->data != key)
        {
            current = current->next;
        }

        if (current != NULL)
        {
            // Jika node dengan nilai key ditemukan, hapus node tersebut
            if (current->prev != NULL)
            {
                current->prev->next = current->next;
            }
            if (current->next != NULL)
            {
                current->next->prev = current->prev;
            }
            delete current;
        }
        else
        {
            // Jika node dengan nilai key tidak ditemukan
            cout << "Key not found" << endl;
        }
    }
}

void display()
{
    // Menampilkan semua node dalam list
    current = head;
    while (current != NULL)
    {
        cout << current->data << " ";
        current = current->next;
    }
    cout << endl;
}

void reverse()
{
    // Membalik urutan node dalam list
    node *temp = NULL;
    current = head;
    while (current != NULL)
    {
        temp = current->prev;
        current->prev = current->next;
        current->next = temp;
        current = current->prev;
    }
    if (temp != NULL)
    {
        head = temp->prev;
    }
}

int main()
{
    // Menyisipkan node di awal
    insertFirst(10);
    insertFirst(20);
    insertFirst(30);
    // Menyisipkan node di akhir
    insertLast(40);
    insertLast(50);
    // Menyisipkan node setelah node dengan nilai 20
    insertAfter(20, 25);
    // Menampilkan list
    display();
    // Menghapus node pertama
    deleteFirst();
    // Menghapus node terakhir
    deleteLast();
    // Menghapus node dengan nilai 25
    deleteKey(25);
    // Menampilkan list
    display();
    // Membalik urutan list
    reverse();
    // Menampilkan list
    display();

    return 0;
}