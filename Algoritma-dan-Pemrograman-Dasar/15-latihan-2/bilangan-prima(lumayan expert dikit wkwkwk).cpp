#include <iostream>
using namespace std;

int main()
{
    // Bilangan Prima
    // Bilangan prima adalah bilangan yang hanya habis dibagi oleh 1 dan bilangan itu sendiri.
    // Berikut adalah cara menentukan bilangan prima:
    int angka; // inisialisasi angka
    cout << "Masukkan angka: ";
    cin >> angka; // input angka

    // Menentukan apakah angka adalah bilangan prima atau bukan
    if (angka < 2)
    {
        cout << angka << " bukan bilangan prima" << endl;
    }
    else
    {
        bool isPrima = true;
        for (int i = 2; i * i <= angka; i++) // optimasi dengan hanya memeriksa hingga akar kuadrat angka
        {
            if (angka % i == 0)
            {
                isPrima = false;
                break;
            }
        }
        if (isPrima)
        {
            cout << angka << " adalah bilangan prima" << endl;
        }
        else
        {
            cout << angka << " bukan bilangan prima" << endl;
        }
    }

    return 0; // menambahkan return 0 sebagai standar praktik baik dalam C++
}
