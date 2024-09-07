#include <iostream>
using namespace std;

int main()
{
    // Increment dan Decrement
    // operator increment dan decrement adalah operator yang digunakan untuk menambah atau mengurangkan nilai variabel sebanyak 1 (satu)
    // terdapat dua jenis operator increment dan decrement yaitu:
    // 1. Prefix Increment dan Decrement (++variabel, --variabel)
    // 2. Postfix Increment dan Decrement (variabel++, variabel--)
    // berikut rumus penggunaan operator increment dan decrement:
    // variabel++; // postfix increment
    // ++variabel; // prefix increment
    // berikut contoh penggunaan operator increment dan decrement:
    int a = 10;
    cout << "Nilai a: " << a << endl;
    a++;
    cout << "Sekarang nilai a: " << a << endl;

    int b = 10;
    cout << "Nilai b: " << b << endl;
    b--;
    cout << "Sekarang nilai b: " << b << endl;

    return 0;
}

// quick note: operator increment dan decrement hanya bisa digunakan pada variabel yang memiliki tipe data integer (int, short, long, dll) dan karakter (char)
// quick note: perbedaan antara prefix dan postfix increment dan decrement adalah pada saat operator tersebut dijalankan pada variabel. jika prefix increment dan decrement, maka nilai variabel akan diubah terlebih dahulu sebelum digunakan. sedangkan jika postfix increment dan decrement, maka nilai variabel akan digunakan terlebih dahulu sebelum diubah.