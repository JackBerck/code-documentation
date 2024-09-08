#include <iostream>
using namespace std;

int main()
{
    // Deret Fibonacci
    // Deret fibonacci adalah deret yang anggotanya merupakan penjumlahan dari dua anggota sebelumnya.
    // Rumus deret fibonacci:
    // f(n) = f(n-1) + f(n-2)
    // Berikut pengerjaan deret fibonacci:
    int jumlahDeret; // inisiaisasi jumlah deret fibonacci
    cout << "Masukkan jumlah deret fibonacci: ";
    cin >> jumlahDeret; // input jumlah deret fibonacci

    // for loop untuk menampilkan deret fibonacci
    for (int i = 0; i < jumlahDeret; i++)
    {
        // jika i = 0 atau i = 1 maka cetak i dan lanjutkan perulangan
        if (i == 0 || i == 1)
        {
            cout << i << " ";
            continue;
        }
        // inisialisasi variabel hasil, a, dan b
        int hasil = 0, a = 0, b = 1;
        // for loop untuk menghitung deret fibonacci
        for (int j = 1; j < i; j++)
        {
            hasil = a + b;
            a = b;
            b = hasil;
        }
        cout << hasil << " ";
    }

    return 0;
}