/**
 * Binary Search merupakan algoritma pencarian yang membagi data menjadi dua bagian dan mencari elemen yang dicari di salah satu bagian tersebut.
 */

#include <iostream>
using namespace std;

// Fungsi untuk melakukan pencarian biner
int binary_search(int arr[], int n, int key)
{
    int low = 0;        // Inisialisasi low ke indeks pertama
    int high = n - 1;   // Inisialisasi high ke indeks terakhir
    while (low <= high) // Loop sampai low kurang dari atau sama dengan high
    {
        int mid = low + (high - low) / 2; // Hitung indeks tengah
        if (arr[mid] == key)              // Periksa apakah elemen tengah adalah kunci
        {
            return mid; // Jika ditemukan, kembalikan indeks
        }
        else if (arr[mid] < key) // Jika elemen tengah kurang dari kunci
        {
            low = mid + 1; // Pindahkan pointer low ke mid + 1
        }
        else // Jika elemen tengah lebih besar dari kunci
        {
            high = mid - 1; // Pindahkan pointer high ke mid - 1
        }
    }
    return -1; // Jika kunci tidak ditemukan, kembalikan -1
}

int main()
{
    int arr[] = {1, 2, 3, 4, 5};            // Inisialisasi array
    int n = 5;                              // Ukuran array
    int key = 3;                            // Kunci yang akan dicari
    int index = binary_search(arr, n, key); // Panggil fungsi pencarian biner
    if (index != -1)                        // Jika kunci ditemukan
    {
        cout << "Elemen ditemukan pada indeks " << index << endl; // Cetak indeks
    }
    else // Jika kunci tidak ditemukan
    {
        cout << "Elemen tidak ditemukan" << endl; // Cetak pesan tidak ditemukan
    }
    return 0; // Kembalikan 0 untuk menunjukkan eksekusi berhasil
}