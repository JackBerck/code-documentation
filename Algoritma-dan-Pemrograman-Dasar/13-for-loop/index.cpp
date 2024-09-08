#include <iostream>
using namespace std;

int main()
{
    // For Loop
    // for loop adalah perulangan yang terhitung (counted loop) yang digunakan untuk melakukan perulangan sebanyak n kali.
    // for loop terdiri dari 3 bagian yaitu inisialisasi, kondisi, dan increment/decrement.
    // berikut adalah rumus dari for loop:
    // for(inisialisasi; kondisi; increment/decrement){
    //     statement;
    // }
    // inisialisasi adalah bagian yang digunakan untuk menginisialisasi variabel yang digunakan dalam for loop.
    // kondisi adalah bagian yang digunakan untuk menentukan kapan for loop akan berhenti.
    // increment/decrement adalah bagian yang digunakan untuk menambah atau mengurangi nilai variabel yang digunakan dalam for loop.
    // berikut contoh penggunaan for loop:
    for (int i = 0; i < 5; i++)
    {
        cout << "Perulangan ke-" << i << endl;
    }

    return 0;
}