/**
 * Selection Sort adalah algoritma pengurutan yang memilih elemen terkecil dari array dan menukarnya dengan elemen pertama.
 * Algoritma ini kemudian memilih elemen terkecil dari subarray yang belum diurutkan dan menukarnya dengan elemen kedua, dan seterusnya.
 */
#include <iostream>
using namespace std;

void selection_sort(int arr[], int n)
{
    // Loop untuk iterasi dari elemen pertama hingga elemen kedua terakhir
    for (int i = 0; i < n - 1; i++)
    {
        // Inisialisasi indeks elemen minimum
        int min_index = i;
        // Loop untuk menemukan elemen terkecil di subarray yang belum diurutkan
        for (int j = i + 1; j < n; j++)
        {
            if (arr[j] < arr[min_index])
            {
                min_index = j;
            }
        }
        // Tukar elemen terkecil dengan elemen pertama di subarray yang belum diurutkan
        swap(arr[i], arr[min_index]);
    }
}

int main()
{
    // Inisialisasi array yang akan diurutkan
    int arr[] = {5, 4, 3, 2, 1};
    int n = 5;
    // Panggil fungsi selection_sort untuk mengurutkan array
    selection_sort(arr, n);
    // Cetak elemen array yang telah diurutkan
    for (int i = 0; i < n; i++)
    {
        cout << arr[i] << " ";
    }
    return 0;
}