// Variabel let
function contohLet() {
  let y = 10;
  if (true) {
    let y = 20;
    console.log("Nilai dalam blok:", y);
  }
  console.log("Nilai luar blok:", y);
}
contohLet();

// Variabel const
const z = 100;
z = 200;

// Tipe Data
let nama = "Budi"; //String
let umur = 30; //Number
let isStudent = false; //Boolean
let buah = ["Apel", "Mangga", "Jeruk"]; //Array
let mahasiswa = { nama: "Rina", usia: 20, jurusan: "Informatika" }; //Object

console.log(nama);
console.log(buah[1]);
console.log(mahasiswa.jurusan);
