#include <iostream>
using namespace std;

int main()
{
    // Aritmatika
    // aritmatika adalah operasi matematika yang bisa dilakukan dalam program C++. operasi aritmatika yang sering digunakan antara lain: penjumlahan (+), pengurangan (-), perkalian (*), pembagian (/), dan modulus atau sisa bagi (%).
    // dan untuk menggunakan operasi aritmatika dalam program C++ kita bisa menggunakannya sama seperti dalam matematika biasa.
    // berikut adalah contoh penggunaan operasi aritmatika dalam program C++:

    // penjumlahan
    int a = 5;                                              // variabel a bertipe int (integer) dengan nilai 5
    int b = 2;                                              // variabel b bertipe int (integer) dengan nilai 2
    int c = a + b;                                          // variabel c bertipe int (integer) dengan nilai a + b
    cout << "Hasil penjumlahan a + b adalah " << c << endl; // menampilkan hasil penjumlahan a + b ke layar

    // pengurangan
    int d = a - b;                                          // variabel d bertipe int (integer) dengan nilai a - b
    cout << "Hasil pengurangan a - b adalah " << d << endl; // menampilkan hasil pengurangan a - b ke layar

    // perkalian
    int e = a * b;                                        // variabel e bertipe int (integer) dengan nilai a * b
    cout << "Hasil perkalian a * b adalah " << e << endl; // menampilkan hasil perkalian a * b ke layar

    // pembagian
    int f = a / b;                                        // variabel f bertipe int (integer) dengan nilai a / b
    cout << "Hasil pembagian a / b adalah " << f << endl; // menampilkan hasil pembagian a / b ke layar

    // modulus atau sisa bagi
    int g = a % b;                                      // variabel g bertipe int (integer) dengan nilai a % b
    cout << "Hasil modulus a % b adalah " << g << endl; // menampilkan hasil modulus a % b ke layar

    return 0;
}

// CATATAN: pasti banyak yang mengira bahwa hasil dari pembagian a / b adalah 2.5, tapi sebenarnya hasil dari pembagian a / b adalah 2. karena variabel f bertipe int (integer) yang artinya hasil dari pembagian a / b akan dibulatkan ke bawah. jika ingin hasil pembagian yang sebenarnya, maka kita bisa menggunakan tipe data float atau double.
// quick note: operasi aritmatika dalam C++ bisa dilakukan dengan tipe data int, float, double, dan sebagainya. dan hasil dari operasi aritmatika akan mengikuti tipe data dari variabel yang digunakan dalam operasi tersebut.
// endl (end line) adalah manipulator yang digunakan untuk membuat baris baru atau newline. manipulator adalah fungsi yang digunakan untuk memanipulasi atau mengubah output yang akan ditampilkan ke layar. manipulator endl digunakan untuk membuat baris baru atau newline (bisa dibilang enter lah ya).