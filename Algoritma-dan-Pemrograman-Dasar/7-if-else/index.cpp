#include <iostream>
using namespace std;

int main()
{
    // If Else
    // if else adalah struktur kontrol yang digunakan untuk mengambil keputusan. if else akan mengevaluasi ekspresi boolean yang diberikan dan akan menjalankan blok kode yang sesuai dengan hasil evaluasi tersebut.
    // if else terdiri dari dua blok yaitu blok if dan blok else. blok if akan dijalankan jika hasil evaluasi ekspresi boolean adalah true (1) dan blok else akan dijalankan jika hasil evaluasi ekspresi boolean adalah false (0).
    // else bersifat opsional dan tidak harus digunakan dalam struktur if else.
    // biasanya terdapat struktur kontrol lainnya jika kondisi if yang pertama tidak terpenuhi. struktur kontrol tersebut adalah else if. else if akan mengevaluasi ekspresi boolean yang diberikan dan akan menjalankan blok kode yang sesuai dengan hasil evaluasi tersebut jika kondisi if sebelumnya tidak terpenuhi.
    // berikut adalah rumus dari if else:
    // if (ekspresi boolean) {
    //     // blok kode yang akan dijalankan jika ekspresi boolean bernilai true
    // } else if (ekspresi boolean) {
    //     // blok kode yang akan dijalankan jika ekspresi boolean bernilai true
    // } else {
    //     // blok kode yang akan dijalankan jika ekspresi boolean bernilai false
    // }
    // berikut adalah contoh penggunaan if else dalam program C++:
    int nilaiRudi = 80; // variabel nilaiRudi bertipe int (integer) dengan nilai 80
    if (nilaiRudi >= 75)
    {
        cout << "Rudi lulus" << endl; // menampilkan "Rudi lulus" ke layar
    }
    else
    {
        cout << "Rudi tidak lulus" << endl; // menampilkan "Rudi tidak lulus" ke layar
    }

    return 0;
}

// note: didalam pemrograman terdapat yang namanya camelCase dan snake_case. camelCase adalah gaya penulisan dimana setiap kata dalam frasa diawali dengan huruf besar kecuali kata pertama. contoh camelCase: namaDepan, namaBelakang, namaTengah. snake_case adalah gaya penulisan dimana setiap kata dalam frasa dipisahkan dengan underscore (_). contoh snake_case: nama_depan, nama_belakang, nama_tengah. dalam C++ lebih disarankan menggunakan camelCase. selain itu, juga terdapat yang namanya PascalCase. PascalCase adalah gaya penulisan dimana setiap kata dalam frasa diawali dengan huruf besar tanpa ada spasi. contoh PascalCase: NamaDepan, NamaBelakang, NamaTengah. PascalCase biasanya digunakan untuk penamaan class.
// saran: sebaiknya gunakan camelCase dalam penulisan variabel, function, dan lain-lain dalam C++. dan gunakan bahasa yang mudah dimengerti dan dalam bahasa inggris.