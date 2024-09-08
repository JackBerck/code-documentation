#include <iostream>
using namespace std;

// Default Argument
// default argumen adalah nilai yang diberikan pada parameter fungsi jika tidak ada argumen yang diberikan saat pemanggilan fungsi.
// default argumen hanya diperbolehkan pada parameter terakhir fungsi. default argumen harus diberikan pada deklarasi fungsi, tidak pada definisi fungsi.
// berikut adalah contoh penggunaan default argumen pada fungsi.
void print(int a = 12, int b = 10) // default argumen a = 12, b = 10 ditulis seperti deklarasi variabel.
{
    cout << "a = " << a << ", b = " << b << endl; // cetak nilai a dan b.
}

int main()
{
    print(5);      // memanggil fungsi print dengan argumen a = 5, b = 10.
    print(10, 20); // memanggil fungsi print dengan argumen a = 10, b = 20.
    return 0;
}