#include <iostream>
using namespace std;

int main()
{
    // Kalkulator Sederhana
    // kalkulator sederhana adalah program yang dapat melakukan operasi matematika sederhana seperti penjumlahan, pengurangan, perkalian, dan pembagian. kalkulator sederhana ini akan meminta input dari pengguna berupa dua bilangan dan operasi matematika yang diinginkan, kemudian akan menampilkan hasil dari operasi matematika tersebut.
    // berikut adalah contoh program kalkulator sederhana menggunakan switch case dalam program C++:
    float bilangan1, bilangan2; // variabel bilangan1 dan bilangan2 bertipe float (bilangan desimal)
    char operasi;               // variabel operasi bertipe char (karakter)
    float hasil;                // variabel hasil bertipe float (bilangan desimal)

    cout << "Masukkan bilangan pertama: "; // menampilkan "Masukkan bilangan pertama: " ke layar
    cin >> bilangan1;                      // meminta input bilangan pertama dari pengguna dan menyimpannya ke variabel bilangan1
    cout << "Masukkan bilangan kedua: ";   // menampilkan "Masukkan bilangan kedua: " ke layar
    cin >> bilangan2;                      // meminta input bilangan kedua dari pengguna dan menyimpannya ke variabel bilangan2

    cout << "Pilih operasi matematika (+, -, *, /): "; // menampilkan "Pilih operasi matematika (+, -, *, /): " ke layar
    cin >> operasi;                                    // meminta input operasi matematika dari pengguna dan menyimpannya ke variabel operasi

    switch (operasi)
    {
    case '+':
        hasil = bilangan1 + bilangan2;                                                                  // menjumlahkan bilangan1 dan bilangan2 dan menyimpan hasilnya ke variabel hasil
        cout << "Hasil penjumlahan dari " << bilangan1 << " + " << bilangan2 << " = " << hasil << endl; // menampilkan hasil penjumlahan ke layar
        break;
    case '-':
        hasil = bilangan1 - bilangan2;                                                                  // mengurangkan bilangan1 dengan bilangan2 dan menyimpan hasilnya ke variabel hasil
        cout << "Hasil pengurangan dari " << bilangan1 << " - " << bilangan2 << " = " << hasil << endl; // menampilkan hasil pengurangan ke layar
        break;
    case '*':
        hasil = bilangan1 * bilangan2;                                                                // mengalikan bilangan1 dengan bilangan2 dan menyimpan hasilnya ke variabel hasil
        cout << "Hasil perkalian dari " << bilangan1 << " * " << bilangan2 << " = " << hasil << endl; // menampilkan hasil perkalian ke layar
        break;
    case '/':
        if (bilangan2 != 0)
        {
            hasil = bilangan1 / bilangan2;                                                                // membagi bilangan1 dengan bilangan2 dan menyimpan hasilnya ke variabel hasil
            cout << "Hasil pembagian dari " << bilangan1 << " / " << bilangan2 << " = " << hasil << endl; // menampilkan hasil pembagian ke layar
        }
        else
        {
            cout << "Error: Bilangan kedua tidak boleh nol" << endl; // menampilkan pesan error jika bilangan kedua adalah nol
        }
        break;
    default:
        cout << "Error: Operasi matematika tidak valid" << endl; // menampilkan pesan error jika operasi matematika tidak valid
    }

    return 0;
}