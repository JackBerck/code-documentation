#include <iostream>
using namespace std;

int main()
{
    // Break & Continue
    // break digunakan untuk menghentikan perulangan (program yang sedang berjalan) sedangkan continue digunakan untuk melanjutkan perulangan(seperti nge-skip program yang ada di bawahnya).
    // berikut rumus dari break & continue:
    // for(inisialisasi; kondisi; increment/decrement){
    //     if(kondisi){
    //         break;
    //     }
    //     if(kondisi){
    //         continue;
    //     }
    //     statement;
    // }
    // berikut contoh penggunaan break & continue:
    for (int i = 0; i < 10; i++)
    {
        if (i == 3)
        {
            continue; // skip perulangan ke-3
        }
        if (i == 6)
        {
            break; // hentikan perulangan ketika i = 6
        }
        cout << "Perulangan ke-" << i << endl;
    }

    return 0;
}