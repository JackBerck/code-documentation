// include <iostream> adalah perintah untuk memasukkan library iostream ke dalam program. iostream(input output stream/aliran masukan dan keluaran) adalah library yang berisi fungsi-fungsi input dan output, seperti cout dan cin (bisa dibilang fungsi utama).
#include <iostream>
// using namespace std; adalah perintah untuk menggunakan namespace std. Namespace adalah tempat penyimpanan yang berisi fungsi-fungsi yang bisa digunakan dalam program. std adalah namespace yang berisi fungsi-fungsi standar yang sering digunakan dalam program C++.
using namespace std;

// int main() adalah fungsi utama dalam program C++. Fungsi ini akan dijalankan pertama kali ketika program dijalankan.
// fungsi main() harus mengembalikan nilai bertipe int (integer). Jika program berjalan dengan sukses, maka nilai yang dikembalikan adalah 0 (tipe data dan function akan dibahas lebih lanjut di bab selanjutnya).
int main()
{
    // cout adalah fungsi yang digunakan untuk menampilkan data ke layar. cout adalah singkatan dari console output.
    cout << "Hello, World!";

    // return 0; adalah perintah untuk mengembalikan nilai 0 ke sistem operasi. Nilai 0 menunjukkan bahwa program berjalan dengan sukses.
    return 0;
}