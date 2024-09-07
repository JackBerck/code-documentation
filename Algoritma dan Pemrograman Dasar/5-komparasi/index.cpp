#include <iostream>
using namespace std;

int main()
{
    // Komparasi
    // komparasi adalah operasi perbandingan yang digunakan untuk membandingkan dua buah nilai. operasi komparasi akan menghasilkan nilai boolean yaitu true (1) atau false (0).
    // operasi komparasi yang sering digunakan dalam program C++ antara lain: lebih besar (>), lebih kecil (<), sama dengan (==), tidak sama dengan (!=), lebih besar sama dengan (>=), dan lebih kecil sama dengan (<=).
    // penggunaan operasi komparasi dalam program C++ sama seperti dalam matematika biasa.
    // berikut adalah contoh penggunaan operasi komparasi dalam program C++:
    int a = 5;                                                                                                 // variabel a bertipe int (integer) dengan nilai 5
    int b = 2;                                                                                                 // variabel b bertipe int (integer) dengan nilai 2
    cout << "Apakah a lebih besar dari b? " << (a > b) << " (kalau 1 itu benar kalau 0 itu salah ya)" << endl; // menampilkan hasil perbandingan a > b ke layar

    return 0;
}

// quick note: operasi komparasi dalam C++ akan menghasilkan nilai boolean yaitu true (1) atau false (0). nilai true (1) akan muncul jika perbandingan benar dan nilai false (0) akan muncul jika perbandingan salah. ini mengacu pada konsep binary dalam komputer yang hanya mengenal dua nilai yaitu 0 dan 1.