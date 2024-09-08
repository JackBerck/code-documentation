#include <iostream>
using namespace std;

int main()
{
    // While Loop
    // while loop adalah salah satu jenis perulangan yang ada di C++ yang digunakan untuk mengulang blok kode selama kondisi yang diberikan bernilai benar (true)
    // while loop memiliki 2 jenis yaitu: while loop dan do while loop
    // 1. while loop: perulangan akan dilakukan jika kondisi bernilai benar (true)
    // berikut adalah rumus penggunaan while loop di C++:
    // while (kondisi) {
    //     // blok kode yang akan diulang
    // }
    // perulangan while akan terus berjalan selama kondisi yang diberikan bernilai benar (true) dan jika kondisi bernilai salah (false), maka perulangan akan berhenti
    // berikut contoh penggunaan while loop di C++:
    int a = 1;
    while (a <= 10)
    {
        cout << "Nilai a: " << a << endl;
        a++;
    }

    // 2. do while loop: perulangan akan dilakukan minimal 1 kali walaupun kondisi bernilai salah (false)
    // berikut adalah rumus penggunaan do while loop di C++:
    // do {
    //     // blok kode yang akan diulang
    // } while (kondisi);
    // perulangan do while akan terus berjalan minimal 1 kali walaupun kondisi yang diberikan bernilai salah (false) dan jika kondisi bernilai benar (true), maka perulangan akan terus berjalan
    // berikut contoh penggunaan do while loop di C++:
    int b = 10;
    do
    {
        cout << "Nilai b: " << b << endl;
        b--;
    } while (b <= 1);

    return 0;
}