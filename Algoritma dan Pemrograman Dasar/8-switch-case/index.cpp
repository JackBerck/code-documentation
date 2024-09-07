#include <iostream>
using namespace std;

int main()
{
    // Switch Case
    // switch case adalah struktur kontrol yang digunakan untuk mengambil keputusan berdasarkan nilai dari sebuah variabel atau ekspresi. switch case akan mengevaluasi nilai dari variabel atau ekspresi tersebut dan akan menjalankan blok kode yang sesuai dengan nilai tersebut.
    // switch case terdiri dari beberapa blok yaitu blok switch, blok case, dan blok default. blok switch berisi variabel atau ekspresi yang akan dievaluasi. blok case berisi nilai yang akan dibandingkan dengan nilai dari variabel atau ekspresi yang ada di blok switch. blok default bersifat opsional dan akan dijalankan jika tidak ada blok case yang sesuai dengan nilai dari variabel atau ekspresi yang ada di blok switch.
    // berikut adalah rumus dari switch case:
    // switch (variabel atau ekspresi) {
    //     case nilai1:
    //         // blok kode yang akan dijalankan jika variabel atau ekspresi bernilai nilai1
    //         break; // break digunakan untuk menghentikan eksekusi dari blok kode yang ada di dalam case
    //     case nilai2:
    //         // blok kode yang akan dijalankan jika variabel atau ekspresi bernilai nilai2
    //         break; // break digunakan untuk menghentikan eksekusi dari blok kode yang ada di dalam case
    //     default:
    //         // blok kode yang akan dijalankan jika variabel atau ekspresi tidak sama dengan nilai1 dan nilai2
    // }
    // berikut adalah contoh penggunaan switch case dalam program C++:
    int pilihan = 2; // variabel pilihan bertipe int (integer) dengan nilai 2
    switch (pilihan)
    {
    case 1:
        cout << "Anda memilih nomor 1" << endl; // menampilkan "Anda memilih nomor 1" ke layar
        break;
    case 2:
        cout << "Anda memilih nomor 2" << endl; // menampilkan "Anda memilih nomor 2" ke layar
        break;
    default:
        cout << "Anda tidak memilih nomor 1 atau 2" << endl; // menampilkan "Anda tidak memilih nomor 1 atau 2" ke layar
    }

    return 0;
}