/**
 * Sequential Search (Pencarian Berurutan) adalah algoritma pencarian sederhana yang memeriksa setiap elemen dalam sebuah array secara berurutan.
 * Algoritma ini bekerja dengan cara membandingkan elemen yang dicari dengan setiap elemen dalam array.
 * Jika elemen yang dicari ditemukan, algoritma akan mengembalikan indeks elemen tersebut.
 */
#include <iostream>
using namespace std;

int sequential_search(int arr[], int n, int key)
{
    // Loop untuk iterasi dari elemen pertama hingga elemen terakhir
    for (int i = 0; i < n; i++)
    {
        // Cek apakah elemen saat ini adalah elemen yang dicari
        if (arr[i] == key)
        {
            return i; // Kembalikan indeks elemen yang ditemukan
        }
    }
    return -1; // Kembalikan -1 jika elemen tidak ditemukan
}

int main()
{
    // Inisialisasi array dan elemen yang akan dicari
    int arr[] = {5, 4, 3, 2, 1};
    int n = 5;
    int key = 3;
    // Panggil fungsi sequential_search untuk mencari elemen
    int index = sequential_search(arr, n, key);
    // Tampilkan hasil pencarian
    if (index != -1)
    {
        cout << "Element found at index " << index << endl;
    }
    else
    {
        cout << "Element not found" << endl;
    }
    return 0;
}