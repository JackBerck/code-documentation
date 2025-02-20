/**
 * Bubble Sort adalah metode pengurutan algoritma dengan cara melakukan penukaran data secara terus menerus sampai bisa dipastikan dalam suatu iterasi tertentu tidak ada lagi perubahan/penukaran.
 */
#include <iostream>
using namespace std;

int main()
{
    // Inisialisasi array dengan 10 elemen
    int arr[10] = {12, 4, 234, 235, 234, 2, 335, 435, 34, 5};
    int n = 10;

    // Loop untuk mengontrol jumlah iterasi
    for (int i = 0; i < n; i++)
    {
        // Loop untuk membandingkan elemen bersebelahan
        for (int j = 0; j < n - i - 1; j++)
        {
            // Jika elemen saat ini lebih besar dari elemen berikutnya, tukar posisi
            if (arr[j] > arr[j + 1])
            {
                int temp = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = temp;
            }
        }
    }

    // Loop untuk mencetak elemen array yang sudah diurutkan
    for (int i : arr)
    {
        cout << i << " ";
    }
}