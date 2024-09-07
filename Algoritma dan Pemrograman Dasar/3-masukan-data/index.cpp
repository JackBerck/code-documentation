#include <iostream>
using namespace std;

int main()
{
    // Masukan Data
    // masukan data adalah data yang dimasukkan ke dalam program melalui keyboard atau file atau mungkin dari perangkat atau program lain. untuk mengubah nilai variabel atau digunakan dalam operasi lain dalam program. Masukan data bisa berupa angka, karakter, teks, atau bahkan file.
    // cara memasukkan data ke dalam program C++ adalah dengan menggunakan cin.
    // berikut adalah rumus penggunaan cin:
    // cin >> nama_variabel;
    // berikut adalah contoh penggunaan cin:
    int a;    // deklarasi variabel a bertipe int (integer)
    cin >> a; // memasukkan data dari keyboard ke variabel a
    // cin akan menunggu sampai pengguna memasukkan data dari keyboard, kemudian data tersebut akan disimpan ke variabel a.

    cout << "Nilai a adalah " << a; // menampilkan nilai variabel a ke layar

    return 0;
}

// quick note: cin dan cout adalah dua fungsi yang digunakan untuk masukan dan keluaran data dalam C++ yang merupakan bagian dari library iostream. cin adalah singkatan dari console input sedangkan cout adalah singkatan dari console output.
// quick tips: perbedaan antara cin dan cout adalah pada arah data atau simbol yang digunakan. cin diikuti dengan >> (data masuk ke program) sedangkan cout diikuti dengan << (data keluar dari program).