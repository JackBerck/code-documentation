#include <iostream>
using namespace std;

// Pointer
// Pointer adalah variabel yang menyimpan alamat memori dari variabel lain. Pointer digunakan untuk mengakses variabel lain melalui alamat memori variabel tersebut. Pointer dideklarasikan dengan menambahkan tanda asterisk (*) sebelum nama variabel dan diikuti dengan tipe data variabel yang ditunjuk oleh pointer dilanjut dengan insialisasi pointer dengan alamat memori variabel yang ditunjuk menggunakan tandan ampersand (&).
// berikut adalah sintaks deklarasi pointer:
// tipe_data *nama_pointer = &nama_variabel_yang_akan_ditunjuk;

// berikut adalah contoh penggunaan pointer.
int main()
{
    int a = 5; // deklarasi variabel a dengan nilai 5.
    int *p;    // deklarasi pointer p.
    p = &a;    // inisialisasi pointer p dengan alamat memori variabel a.

    cout << "Nilai a: " << a << endl;                     // cetak nilai a.
    cout << "Alamat a: " << &a << endl;                   // cetak alamat memori variabel a.
    cout << "Nilai p: " << p << endl;                     // cetak nilai pointer p.
    cout << "Alamat p: " << &p << endl;                   // cetak alamat memori pointer p.
    cout << "Nilai yang ditunjuk oleh p: " << *p << endl; // cetak nilai yang ditunjuk oleh pointer p.

    return 0;
}