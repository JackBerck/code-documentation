#include <iostream>
using namespace std;

// Function
// function adalah blok kode yang memiliki nama dan dapat digunakan kembali di dalam program. biasanya digunakan untuk memecah program menjadi bagian-bagian yang lebih kecil sehingga lebih mudah dibaca dan dikelola. function dapat menerima argumen dan mengembalikan nilai (return), atau tidak menerima argumen dan tidak mengembalikan nilai sama sekali (return).
// function dapat dideklarasikan di luar fungsi main() atau di dalam fungsi main().
// berikut adalah sintaks dari function:
// tipeData namaFunction(parameter) {
//     // kode program
//     return <nilai>; // jika function mengembalikan nilai
// }
// parameter adalah variabel yang digunakan untuk menerima nilai dari luar function dan digunakan di dalam function.
// nilai adalah nilai yang dikembalikan oleh function (kek bahasa mudahnya itu tipeData namaFunction = nilai).
// jika function tidak mengembalikan nilai, maka tipeData di depan namaFunction adalah void.
// berikut adalah contoh penggunaan function:
// function tambah yang dapat mengembalikan nilai
int tambah(int a, int b)
{
    return a + b; // mengembalikan nilai a + b ke function yang memanggil
}

// function kurang yang tidak mengembalikan nilai
void kurang(int a, int b)
{
    cout << "Hasil pengurangan " << a << " - " << b << " = " << a - b << endl;
}

int main()
{
    int a = 5; // inisialisasi variabel a dengan nilai 5
    int b = 3; // inisialisasi variabel b dengan nilai 3

    int c = tambah(a, b); // memanggil function tambah() dengan argumen a (5) dan b (3)
    cout << "Hasil penjumlahan " << a << " + " << b << " = " << c << endl;

    kurang(a, b); // memanggil function kurang() dengan argumen a (5) dan b (3)
    // karena function kurang() tidak mengembalikan nilai, maka variabel d tidak akan mendapatkan nilai apapun
    return 0;
}