#include <iostream>
using namespace std;

int main()
{
    // Segitiga Siku-Siku
    // Segitiga siku-siku adalah segitiga yang salah satu sudutnya adalah sudut siku-siku.
    // Berikut pengerjaan segitiga siku-siku:
    int tinggiSegitiga; // inisialisasi tinggi segitiga
    cout << "Masukkan tinggi segitiga: ";
    cin >> tinggiSegitiga; // input tinggi segitiga

    // for loop untuk menampilkan segitiga siku-siku
    for (int i = 1; i <= tinggiSegitiga; i++)
    {
        // for loop untuk menampilkan bintang sebanyak i untuk merepresentasikan baris ke-i segitiga siku-siku
        for (int j = 1; j <= i; j++)
        {
            cout << "*";
        }
        cout << endl;
    }

    return 0;
}