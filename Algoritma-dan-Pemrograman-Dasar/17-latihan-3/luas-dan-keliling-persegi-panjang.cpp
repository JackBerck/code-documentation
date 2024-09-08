#include <iostream>
using namespace std;

// function luasPersegiPanjang yang mengembalikan nilai luas persegi panjang dari panjang dan lebar yang diberikan (parameter)
int luasPersegiPanjang(int panjang, int lebar)
{
    return panjang * lebar;
}

// function kelilingPersegiPanjang yang mengembalikan nilai keliling persegi panjang dari panjang dan lebar yang diberikan (parameter)
int kelilingPersegiPanjang(int panjang, int lebar)
{
    return 2 * (panjang + lebar);
}

int main()
{
    int panjang, lebar;           // deklarasi variabel panjang dan lebar
    cout << "Masukkan panjang: "; // output untuk meminta input panjang
    cin >> panjang;               // input panjang
    cout << "Masukkan lebar: ";   // output untuk meminta input lebar
    cin >> lebar;                 // input lebar

    cout << "Luas persegi panjang: " << luasPersegiPanjang(panjang, lebar) << endl;         // output luas persegi panjang
    cout << "Keliling persegi panjang: " << kelilingPersegiPanjang(panjang, lebar) << endl; // output keliling persegi panjang

    return 0;
}