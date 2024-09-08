#include <iostream>
using namespace std;

int main()
{
    // Ganjil Genap
    // Ganjil adalah bilangan yang habis dibagi 2 dengan sisa 1.
    // Genap adalah bilangan yang habis dibagi 2 tanpa sisa.
    // Berikut pengerjaan ganjil genap:
    int angka; // inisialisasi angka
    cout << "Masukkan angka: ";
    cin >> angka; // input angka

    // if else untuk menentukan angka ganjil atau genap
    // jika angka habis dibagi 2 tanpa sisa maka angka genap
    if (angka % 2 == 0)
    {
        cout << angka << " adalah bilangan genap" << endl;
    }
    else // jika angka habis dibagi 2 dengan sisa 1 maka angka ganjil
    {
        cout << angka << " adalah bilangan ganjil" << endl;
    }

    return 0;
}