/**
 * Rekursif adalah teknik pemrograman dimana sebuah fungsi memanggil dirinya sendiri.
 * Fungsi rekursif terdiri dari dua bagian: basis dan rekurens.
 * Basis adalah kondisi dimana fungsi berhenti memanggil dirinya sendiri.
 * Rekurens adalah bagian dimana fungsi memanggil dirinya sendiri.
 */
#include <iostream>
using namespace std;

int factorial(int n)
{
    // Basis: jika n adalah 0, kembalikan 1
    if (n == 0)
    {
        return 1;
    }
    else
    {
        // Rekurens: kalikan n dengan hasil faktorial dari n-1
        return n * factorial(n - 1);
    }
}

int main()
{
    int n;
    // Minta pengguna memasukkan angka
    cout << "Enter a number: ";
    cin >> n;
    // Tampilkan hasil faktorial dari angka yang dimasukkan
    cout << "Factorial of " << n << " is " << factorial(n) << endl;
    return 0;
}