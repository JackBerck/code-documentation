#include <iostream>
using namespace std;

int main()
{
    // Assignment Operator
    // operator assignment adalah operator yang digunakan untuk memberikan nilai pada variabel atau objek dengan menggunakan operator = (sama dengan)
    // terdapat beberapa operator assignment yang bisa digunakan di C++ yaitu:
    // =, +=, -=, *=, /=, %=, &=, |=, ^=, <<=, >>=
    // berikut rumus penggunaan operator assignment:
    // variabel = nilai;

    // Contoh penggunaan operator assignment
    // operator = untuk memberikan nilai pada variabel
    int a = 10;
    cout << "Nilai a: " << a << endl;

    // operator += untuk menambahkan nilai pada variabel
    a += 5; // a = a + 5
    cout << "Nilai a: " << a << endl;

    // operator -= untuk mengurangkan nilai pada variabel
    a -= 5; // a = a - 5
    cout << "Nilai a: " << a << endl;

    // operator *= untuk mengalikan nilai pada variabel
    a *= 5; // a = a * 5
    cout << "Nilai a: " << a << endl;

    // operator /= untuk membagi nilai pada variabel
    a /= 5; // a = a / 5
    cout << "Nilai a: " << a << endl;

    // operator %= untuk mendapatkan sisa bagi pada variabel
    a %= 5; // a = a % 5
    cout << "Nilai a: " << a << endl;

    // operator &= untuk melakukan operasi bitwise AND pada variabel
    a &= 5; // a = a & 5
    cout << "Nilai a: " << a << endl;

    // operator |= untuk melakukan operasi bitwise OR pada variabel
    a |= 5; // a = a | 5
    cout << "Nilai a: " << a << endl;

    // operator ^= untuk melakukan operasi bitwise XOR pada variabel
    a ^= 5; // a = a ^ 5
    cout << "Nilai a: " << a << endl;

    // operator <<= untuk melakukan operasi bitwise shift left pada variabel
    a <<= 5; // a = a << 5
    cout << "Nilai a: " << a << endl;

    // operator >>= untuk melakukan operasi bitwise shift right pada variabel
    a >>= 5; // a = a >> 5
    cout << "Nilai a: " << a << endl;

    return 0;
}

// quick note: namun kebanyakan operator assignment yang digunakan adalah operator =, +=, -=, *=, /=, %=, karena operator lainnya jarang digunakan dalam pemrograman C++ (tergantung preferensi masing-masing programmer).