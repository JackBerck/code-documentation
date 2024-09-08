#include <iostream>
using namespace std;

// fungsi rekursif untuk menghitung nilai kombinasi (nCr) untuk mendapatkan elemen di segitiga pascal
int hitungKombinasi(int n, int r)
{
    // base case: jika r == 0 atau r == n, hasilnya selalu 1
    if (r == 0 || r == n)
    {
        return 1;
    }
    // jika tidak, gunakan rumus rekursif: kombinasi(n, r) = kombinasi(n-1, r-1) + kombinasi(n-1, r)
    return hitungKombinasi(n - 1, r - 1) + hitungKombinasi(n - 1, r);
}

// fungsi untuk mencetak segitiga pascal hingga tingkat n
void cetakSegitigaPascal(int n)
{
    // loop untuk setiap tingkat dari 0 hingga n-1
    for (int i = 0; i < n; i++)
    {
        // mencetak spasi untuk memberikan format segitiga
        for (int j = 0; j < n - i - 1; j++)
        {
            cout << " ";
        }
        // loop untuk mencetak nilai pada tingkat ke-i
        for (int j = 0; j <= i; j++)
        {
            // mencetak nilai kombinasi pada tingkat ke-i dan posisi ke-j
            cout << hitungKombinasi(i, j) << " ";
        }
        // baris baru setelah mencetak satu tingkat dari segitiga pascal
        cout << endl;
    }
}

int main()
{
    int jumlahTingkat;
    cout << "masukkan jumlah tingkat segitiga pascal: ";
    cin >> jumlahTingkat;               // membaca jumlah tingkat yang ingin dicetak dari pengguna
    cetakSegitigaPascal(jumlahTingkat); // memanggil fungsi untuk mencetak segitiga pascal
    return 0;                           // mengakhiri program
}
