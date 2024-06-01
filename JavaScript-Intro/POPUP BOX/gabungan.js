alert('Assalamualaiku kak !');
var again = true;

while(again) {
  var name = prompt('Masukkan nama anda kak :');
  var age = prompt('Masukkan umur kakak juga :');
  var birth = prompt('Tanggal lahir kakak berapa :');
  alert('Nama kakak yaitu ' + name + ' umur kakak ' + age + ' dan tanggal lahir kakak adalah ' + birth);
  
  again = confirm('Mau lagi ?');
}

alert('Terima kasih kak :)')