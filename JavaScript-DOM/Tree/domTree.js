// DOM tree adalah representasi halaman" html di dalam browser dan representasinya berbentuk pohon

// di dalam DOM tree dibagi menjadi beberapa jenis antara lain
// elementNode = simpul elemen, atau elemen elemen html
// textNode = simpul text, atau text yang berada didalam elemen html atau di dalam atribut html
// attributNode = simpul atribut, atau atribut elemen html

// dan masih banyak lagi seperti elemen, atribut, text, cdata section, etity reference, etity, dan lain"



// HTML COLLECTION DAN NODELIST
// struktur datanya mirip array
// keduanya merupakan kumpulan node 
// nodeList dapat berupa node apapun, sedangkan HTMLcollection hanya harus berupa elemen HTML saja
// HTMLcollection bersifat live sedangkan nodeList tidak



// STRUKTUR HIERARKI DOM

// root node
// node yang menjadi sumber dari node" yang lain di dalam DOM(document)

// parentNode
// node yang berada satu tingkat di atas node yang lain(misal head dan body memiliki parent html)

// childNode
// node yang berada satu tingkat di bawah node yang lain(misal head dan body child dari html)