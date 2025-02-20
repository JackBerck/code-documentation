/**
 * Insertion Sort adalah algoritma pengurutan yang membandingkan elemen satu per satu dan memindahkan elemen tersebut ke posisi yang tepat.
 * Algoritma ini bekerja dengan cara membandingkan elemen pertama dengan elemen kedua, kemudian membandingkan elemen kedua dengan elemen ketiga, dan seterusnya.
 */
#include <iostream>
using namespace std;

void insertion_sort(int arr[], int n)
{
    // Loop untuk iterasi dari elemen kedua hingga elemen terakhir
    for (int i = 1; i < n; i++)
    {
        // Simpan elemen saat ini dalam variabel 'current'
        int current = arr[i];
        // Inisialisasi indeks elemen sebelumnya
        int j = i - 1;
        // Pindahkan elemen yang lebih besar dari 'current' ke satu posisi ke depan dari posisi saat ini
        while (arr[j] > current && j >= 0)
        {
            arr[j + 1] = arr[j];
            j--;
        }
        // Tempatkan 'current' pada posisi yang tepat
        arr[j + 1] = current;
    }
}

int main()
{
    // Inisialisasi array yang akan diurutkan
    int arr[] = {5, 4, 3, 2, 1};
    int n = 5;
    // Panggil fungsi insertion_sort untuk mengurutkan array
    insertion_sort(arr, n);
    // Cetak elemen array yang telah diurutkan
    for (int i = 0; i < n; i++)
    {
        cout << arr[i] << " ";
    }
    return 0;
}