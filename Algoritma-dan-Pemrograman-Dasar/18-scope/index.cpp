#include <iostream>
using namespace std;

// Scope
// scope adalah ruang lingkup atau tempat dimana variabel dapat diakses. variabel yang dideklarasikan di dalam function hanya dapat diakses di dalam function tersebut, sedangkan variabel yang dideklarasikan di luar function dapat diakses di dalam function tersebut dan function lainnya.
// scope variabel dapat dibagi menjadi 2, yaitu: local scope dan global scope.

// global scope adalah variabel yang dideklarasikan di luar function dan dapat diakses di dalam function tersebut dan function lainnya.
// berikut adalah contoh penggunaan global scope:
int a = 10; // deklarasi variabel b di luar function main()
void globalScope()
{
    cout << "Nilai a di dalam function globalScope: " << a << endl;
}

// local scope adalah variabel yang dideklarasikan di dalam function dan hanya dapat diakses di dalam function tersebut.
// berikut adalah contoh penggunaan local scope:
void localScope()
{
    int a = 5; // deklarasi variabel a di dalam function localScope
    void cekLocalScope()
    {
        int b = 10; // deklarasi variabel b di dalam function cekLocalScope
        cout << "Nilai a di dalam function cekLocalScope: " << a << endl;
    }
    cekLocalScope(); // memanggil function cekLocalScope()
    cout << "Nilai b di dalam function localScope: " << b << endl;
}

int main()
{
    localScope();  // memanggil function localScope()
    globalScope(); // memanggil function globalScope()

    return 0;
}