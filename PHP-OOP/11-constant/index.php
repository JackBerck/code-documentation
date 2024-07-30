<?
/* 
-------- CLASS ----------
Di dalam pemrograman berorientasi objek (OOP), sebuah class adalah sebuah blueprint atau cetakan untuk menciptakan INSTANCE dari objek-objek yang memiliki data dan perilaku yang disebut dengan atribut (property) dan metode (fungsi) yang sama. Class menyediakan struktur dasar yang mendefinisikan bagaimana sebuah objek harus dibentuk.

Dalam PHP, untuk membuat sebuah class, Anda dapat menggunakan kata kunci `class` diikuti dengan nama class yang ingin Anda buat dan dibatasi dengan kurung kurawal "{}" untuk menyimpan property dan method. Berikut adalah contoh sederhana cara membuat sebuah class dalam PHP:

// Mendefinisikan class "Person"
class Person {
    // Atribut atau properti dari class
    public $name;
    public $age;

    // Metode atau fungsi dari class
    public function greet() {
        return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}

// Membuat objek dari class "Person"
$person1 = new Person();
$person1->name = "John";
$person1->age = 25;

// Memanggil metode greet()
echo $person1->greet(); // Output: Hello, my name is John and I am 25 years old.
?>
```

*catatan: penamaan class diusakah menggunakan huruf kapital disetiap kata termasuk kata pertama

Dalam contoh di atas, kita telah membuat sebuah class bernama `Person` yang memiliki dua properti yaitu `$name` dan `$age`, serta sebuah metode bernama `greet()` yang mengembalikan salam dengan nama dan umur yang diberikan. Setelah itu, kita membuat sebuah objek dari class `Person` dengan menggunakan kata kunci `new`, dan mengisi nilai properti `$name` dan `$age`, lalu memanggil metode `greet()` dari objek yang telah dibuat.
*/

/* 
------ OBJECT -------
Untuk membuat sebuah objek dalam PHP, Anda harus menggunakan class yang telah didefinisikan sebelumnya. Objek adalah instansi atau contoh konkret dari sebuah class, yang memiliki akses ke semua properti dan metode yang didefinisikan di dalam class tersebut.

Berikut adalah contoh cara membuat objek dalam PHP:

// Mendefinisikan class "Person"
class Person {
    // Atribut atau properti dari class
    public $name;
    public $age;

    // Metode atau fungsi dari class
    public function greet() {
        return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}

// Membuat objek dari class "Person"
$person1 = new Person();
$person1->name = "John";
$person1->age = 25;

// Memanggil metode greet() dari objek
echo $person1->greet(); // Output: Hello, my name is John and I am 25 years old.

// Membuat objek lain dari class "Person"
$person2 = new Person();
$person2->name = "Alice";
$person2->age = 30;

// Memanggil metode greet() dari objek lain
echo $person2->greet(); // Output: Hello, my name is Alice and I am 30 years old.
?>
```

Dalam contoh di atas, kita membuat dua objek (`$person1` dan `$person2`) dari class `Person` yang sama. Kita kemudian mengisi nilai properti `$name` dan `$age` untuk setiap objek, dan memanggil metode `greet()` dari masing-masing objek tersebut untuk menampilkan pesan salam dengan nilai yang sesuai.

*banyak object dapat dibuat dengan menggunakan satu class saja
*object dibuat dengan menggunakan keyword new
*/

/* 
------- PROPERTY DAN METHOD --------
Property (Atribut):

Property adalah variabel yang terkait dengan suatu objek atau class.
Property merepresentasikan karakteristik atau data yang dimiliki oleh objek tersebut.
Variabel yang ada di dalam object disebut dengan member variable.
Setiap objek yang dibuat dari sebuah class memiliki salinan dari setiap property yang didefinisikan dalam class tersebut.
Pembuatan property dilakukan dengan menambahkan visibility di depannya menggunakan keyword `public`, `protected`, atau `private` diikuti dengan nama property dan nilai awal jika diperlukan.
Property dideklarasikan di dalam class dan bisa diakses melalui objek yang dibuat dari class tersebut.
Contoh property bisa berupa nama, umur, alamat, dan sebagainya.

Method (Fungsi):

Method adalah fungsi yang terkait dengan suatu objek atau class.
Method merepresentasikan perilaku atau tindakan yang bisa dilakukan oleh objek tersebut.
Method dapat mengakses dan memanipulasi property objek.
Method juga dideklarasikan di dalam class dan bisa dipanggil melalui objek yang dibuat dari class tersebut.
Pembuatan method dilakukan dengan menambahkan visibility di depannya menggunakan keyword `public`, `protected`, atau `private` diikuti dengan nama method dan blok kode yang berisi implementasi method tersebut (tidak ditambahkan visibility tidak apa apa namun dengan nilai default public).
Contoh method bisa berupa greet(), walk(), eat(), dan sebagainya.
*/

/* 
------ CONSTRUCTOR ------
Constructor adalah metode khusus dalam sebuah class yang dieksekusi secara otomatis ketika sebuah objek dari class tersebut dibuat. Constructor biasanya digunakan untuk melakukan inisialisasi awal terhadap objek, seperti mengatur nilai awal untuk properti-properti objek.

Di dalam PHP, constructor didefinisikan dengan nama khusus `__construct()`. Ketika Anda membuat objek dari sebuah class, PHP secara otomatis mencari metode `__construct()` dalam class tersebut dan menjalankannya.

Berikut adalah contoh penggunaan constructor dalam PHP:

class Person {
    public $name;
    public $age;

    // Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        echo "A new person object has been created.";
    }

    public function greet() {
        return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}

// Membuat objek dari class "Person" dengan constructor
$person1 = new Person("John", 25);

// Memanggil method greet()
echo $person1->greet(); // Output: Hello, my name is John and I am 25 years old.
?>
```

Dalam contoh di atas, constructor `__construct()` menerima dua parameter, yaitu `$name` dan `$age`, dan kemudian menginisialisasi properti `$name` dan `$age` dengan nilai-nilai yang diberikan. Ketika objek `$person1` dibuat menggunakan `new Person("John", 25)`, constructor dipanggil otomatis untuk melakukan inisialisasi. Selain melakukan inisialisasi, constructor juga menampilkan pesan "A new person object has been created.".

Constructor memungkinkan Anda untuk menyediakan nilai awal untuk properti-properti objek, sehingga menghindari kebutuhan untuk menginisialisasi properti secara terpisah setelah objek dibuat. Ini membuat kode lebih bersih dan lebih mudah dipahami.
*/

/*
------ OBJECT TYPE ------
Object Type adalah tipe data yang digunakan untuk mendefinisikan objek dari sebuah class. Dalam PHP, object type digunakan untuk menentukan tipe data dari parameter atau return value yang harus berupa objek dari class tertentu.

Object type digunakan untuk memastikan bahwa parameter yang diterima oleh suatu fungsi atau metode adalah objek dari class yang diinginkan, sehingga meminimalisir kesalahan dan mempermudah debugging. Jika parameter yang diterima bukan objek dari class yang diharapkan, PHP akan menghasilkan error.

Berikut adalah contoh penggunaan object type dalam PHP:
public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
    echo "A new person object has been created.";
}

public function greet() {
    return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
}
*/

/*
------ INHERITENCE ------
Inheritance (Pewarisan) adalah konsep dalam pemrograman berorientasi objek (OOP) yang memungkinkan sebuah class (child class) untuk mewarisi properti dan metode dari class lain (parent class). Dengan inheritance, Anda dapat membuat class baru yang menggunakan properti dan metode yang telah didefinisikan dalam class yang sudah ada.

Child class mewarisi semua properti dan metode dari parent class, dan dapat menambahkan properti dan metode tambahan atau mengubah properti dan metode yang sudah ada. Dengan inheritance, Anda dapat membuat hierarki class yang memungkinkan Anda untuk mengelompokkan class-class yang memiliki kesamaan properti dan metode.

Berikut adalah contoh penggunaan inheritance dalam PHP:
// Parent class
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        echo "A new person object has been created.";
    }

    public function greet() {
        return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}

// Child class inheriting from Person class
class Student extends Person {
    public $grade;

    public function __construct($name, $age, $grade) {
        parent::__construct($name, $age);
        $this->grade = $grade;
    }

    public function study() {
        return $this->name . " is studying in grade " . $this->grade;
    }
}

// Creating objects from both classes
$person1 = new Person("John", 25);
$student1 = new Student("Alice", 18, 12);

// Calling methods from both classes
echo $person1->greet(); // Output: Hello, my name is John and I am 25 years old.
echo $student1->greet(); // Output: Hello, my name is Alice and I am 18 years old.
echo $student1->study(); // Output: Alice is studying in grade 12.
*/

/*
------ OVERRIDING ------
Overriding adalah konsep dalam pemrograman berorientasi objek (OOP) yang memungkinkan child class untuk mengganti (override) implementasi dari metode yang diwarisi dari parent class. Dengan overriding, child class dapat memberikan implementasi yang berbeda untuk metode yang sudah ada di parent class.

Untuk melakukan overriding, child class harus mendeklarasikan metode dengan nama yang sama dengan metode yang diwarisi dari parent class. Ketika metode tersebut dipanggil dari objek child class, PHP akan menggunakan implementasi metode yang ada di child class, bukan di parent class.

Berikut adalah contoh penggunaan overriding dalam PHP:


*/

/*
-------- VISIBILITY ----------
Visibility adalah konsep dalam pemrograman berorientasi objek (OOP) yang mengatur aksesibilitas dari properti dan metode dalam sebuah class. Dengan visibility, Anda dapat mengontrol bagaimana properti dan metode dalam class dapat diakses dari luar class.

Di dalam PHP, terdapat tiga tingkatan visibility yang dapat digunakan untuk properti dan metode dalam sebuah class, yaitu: public, protected, dan private.
Public (publik): Properti atau metode yang dideklarasikan sebagai public dapat diakses dari luar class, baik dari dalam class itu sendiri, class turunan (child class), atau dari luar class.
Protected (terlindungi): Properti atau metode yang dideklarasikan sebagai protected hanya dapat diakses dari dalam class itu sendiri dan class turunan (child class), namun tidak dapat diakses dari luar class.
Private (pribadi): Properti atau metode yang dideklarasikan sebagai private hanya dapat diakses dari dalam class itu sendiri, namun tidak dapat diakses dari class turunan (child class) maupun dari luar class.
*/

/*
------ SETTER GETTER -------
Setter dan Getter adalah metode khusus dalam sebuah class yang digunakan untuk mengatur (set) dan mengambil (get) nilai dari properti dalam sebuah class. Setter digunakan untuk mengatur nilai properti, sedangkan Getter digunakan untuk mengambil nilai properti.

Setter dan Getter biasanya digunakan untuk properti yang memiliki visibility private atau protected, sehingga nilai properti tersebut tidak dapat diakses secara langsung dari luar class. Dengan menggunakan Setter dan Getter, Anda dapat mengontrol aksesibilitas dan validasi nilai properti tersebut.

Berikut adalah contoh penggunaan Setter dan Getter dalam PHP:
class Person {
    private $name;

    // Setter
    public function setName($name) {
        $this->name = $name;
    }

    // Getter
    public function getName() {
        return $this->name;
    }
}

$person1 = new Person();
$person1->setName("John");
echo $person1->getName(); // Output: John
*/

/*
------ STATIC ------
Static adalah kata kunci dalam pemrograman berorientasi objek (OOP) yang digunakan untuk mendefinisikan properti atau metode yang terkait dengan class itu sendiri, bukan dengan objek yang dibuat dari class tersebut. Properti atau metode yang didefinisikan sebagai static dapat diakses tanpa membuat objek dari class tersebut.

Dengan static, Anda dapat membuat properti atau metode yang bersifat global dan dapat digunakan oleh semua objek dari class tersebut. Static juga memungkinkan Anda untuk mengakses properti atau metode tanpa harus membuat objek terlebih dahulu.

Untuk apa static keyword?
Member yang terikat dengan class, bukan dengan object
Nilai static akan selalu tetap meskipun object di-instansiasi
Membuat kode menjadi prosedural
Biasanya digunakan untuk membuat fungsi bantuan/helper
Digunakan di class-class utility pada framework


Berikut adalah contoh penggunaan static dalam PHP:
class Person {
    public static $counter = 0;

    public function __construct() {
        self::$counter++;
    }

    public static function getCounter() {
        return self::$counter;
    }
}

Person::$counter = 1;

*/

/*
------ CONSTANT ------
Constant adalah nilai yang tetap dan tidak berubah sepanjang program berjalan. Constant biasanya digunakan untuk menyimpan nilai-nilai yang bersifat konstan dan tidak berubah, seperti nilai-nilai yang digunakan berkali-kali dalam program.

Di dalam PHP, constant didefinisikan menggunakan fungsi define() atau keyword const, dan biasanya diletakkan di luar class atau di dalam class sebagai properti static. Constant diakses menggunakan nama constant tersebut tanpa menggunakan tanda $.

Perbedaan antara define dan const:
define() adalah fungsi yang digunakan untuk mendefinisikan constant di luar class.
const adalah keyword yang digunakan untuk mendefinisikan constant di dalam class.

Terdapat juga Magic Constant yang merupakan konstanta bawaan PHP yang dapat digunakan untuk mendapatkan informasi spesifik tentang script PHP yang sedang berjalan. Beberapa contoh Magic Constant yang sering digunakan adalah __LINE__, __FILE__, __DIR__, __FUNCTION__, __CLASS__, __METHOD

Contoh penggunaan constant dalam PHP:
define("PI", 3.14);
echo PI; // Output: 3.14
const SITE_NAME = "Petani Kode";
echo SITE_NAME; // Output: Petani Kode

class Math {
    const PI = 3.14;

    public function getCircleArea($radius) {
        return self::PI * $radius * $radius;
    }
}

$math = new Math();
echo $math->getCircleArea(7); // Output: 153.86

*/

class Coba
{
}

$a = new Coba();
$b = new Coba();
$c = new Coba();
$d = new Coba();
