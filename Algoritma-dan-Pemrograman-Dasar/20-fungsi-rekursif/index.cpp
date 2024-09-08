#include <iostream>
using namespace std;

// Fungsi Rekursif
// fungsi rekursif adalah fungsi yang memanggil dirinya sendiri. fungsi rekursif biasanya digunakan untuk menyelesaikan permasalahan yang dapat dipecahkan menjadi sub-permasalahan yang lebih kecil. fungsi rekursif harus memiliki kondisi terminasi agar tidak terjadi pemanggilan fungsi secara terus menerus (infinite loop).
// berikut adalah contoh penggunaan fungsi rekursif.
int factorial(int n) // fungsi factorial untuk menghitung faktorial dari n.
{
    if (n == 0) // jika n = 0, maka nilai faktorial = 1.
    {
        return 1;
    }
    else // jika n != 0, maka nilai faktorial = n * factorial(n - 1).
    {
        return n * factorial(n - 1);
    }
}

int main()
{
    int n = 5;                                                            // inisialisasi n = 5.
    cout << "Faktorial dari " << n << " adalah " << factorial(n) << endl; // cetak hasil faktorial dari n.
    return 0;
}