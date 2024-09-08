#include <iostream>
using namespace std;

int main()
{
    // Variabel
    // variabel adalah tempat penyimpanan data yang memiliki tipe data dan nama tertentu (mirip dengan variabel dalam matematika).
    // berikut rumus deklarasi variabel:
    // tipe_data nama_variabel = nilai_variabel;
    // berikut adalah contoh deklarasi variabel:
    int a = 5; // variabel a bertipe int (integer) dengan nilai 5
    // variabel juga bisa tidak memiliki nilai awal atau bahkan berisi variabel lain
    int b; // variabel b bertipe int (integer) tanpa nilai awal

    // Tipe Data
    // tipe data adalah jenis data yang bisa disimpan dalam variabel. Tipe data yang sering digunakan dalam C++ antara lain: int, float, double, char, bool, dan string.
    int c = 5;                    // tipe data int (integer) bisa menyimpan bilangan bulat
    float d = 5.5;                // tipe data float bisa menyimpan bilangan desimal
    double e = 5.123123123123123; // tipe data double bisa menyimpan bilangan desimal dengan presisi lebih tinggi
    char f = 'a';                 // tipe data char bisa menyimpan karakter (hanya satu karakter)
    bool g = true;                // tipe data bool bisa menyimpan nilai true atau false
    string h = "Hello, World!";   // tipe data string bisa menyimpan teks atau kalimat
    // masih banyak tipe data lain yang bisa digunakan dalam C++ (untuk kali ini kita hanya akan membahas tipe data yang sering digunakan)

    return 0;
}