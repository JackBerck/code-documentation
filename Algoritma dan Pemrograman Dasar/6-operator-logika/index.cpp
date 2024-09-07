#include <iostream>
using namespace std;

int main()
{
    // Operator Logika
    // operator logika adalah operator yang digunakan untuk menggabungkan dua buah nilai boolean. operator logika yang sering digunakan dalam program C++ antara lain: AND (&&), OR (||), dan NOT (!).
    // operator logika AND (&&) akan menghasilkan nilai true (1) jika kedua nilai yang digabungkan bernilai true (1). operator logika OR (||) akan menghasilkan nilai true (1) jika salah satu nilai yang digabungkan bernilai true (1). operator logika NOT (!) akan menghasilkan nilai true (1) jika nilai yang digabungkan bernilai false (0).
    // berikut adalah tabel kebenaran dari operator logika AND (&&), OR (||), dan NOT (!):
    // | A | B | A && B | A || B | !A |
    // |---|---|--------|--------|----|
    // | 0 | 0 |   0    |   0    | 1  |
    // | 0 | 1 |   0    |   1    | 1  |
    // | 1 | 0 |   0    |   1    | 0  |
    // | 1 | 1 |   1    |   1    | 0  |
    // penggunaan operator logika dalam program C++ sama seperti dalam matematika boolean.
    // berikut adalah contoh penggunaan operator logika dalam program C++:
    bool a = true;                                                                                             // variabel a bertipe boolean dengan nilai true
    bool b = false;                                                                                            // variabel b bertipe boolean dengan nilai false
    cout << "Apakah a dan b bernilai true? " << (a && b) << " (kalau 1 itu benar kalau 0 itu salah)" << endl;  // menampilkan hasil operasi logika a && b ke layar
    cout << "Apakah a atau b bernilai true? " << (a || b) << " (kalau 1 itu benar kalau 0 itu salah)" << endl; // menampilkan hasil operasi logika a || b ke layar
    cout << "Apakah a bernilai false? " << (!a) << " (kalau 1 itu benar kalau 0 itu salah)" << endl;           // menampilkan hasil operasi logika !a ke layar

    return 0;
}