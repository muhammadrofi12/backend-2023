console.log("Hello all");

// Membuat variabel
let name = "Muhammad Rofi";
let age = 19;
 
console.log("nama: " + name + "\numur: " + age);

// Membuat array
let angka = [1, 2, 3, 4, 5];

console.log(angka[0]);
// Mengecek berapa banyak datanya
console.log(angka.length);

// Membuat objek
let mahasiswa = {
    //key:value
    nama:"Rofi",
    nim:"0110654321",
    jurusan:"Teknik Informatika",
};

console.log("nama saya "+ mahasiswa.nama + "\nJurusan saya " + mahasiswa.jurusan);

// Membuat objek array
let listMahasiswa = [
    {
        nama:"Rofi",
        nim:"0110654321",
        jurusan:"Teknik Informatika",
    },
    {
        nama:"Udin",
        nim:"0000111",
        jurusan:"Sistme Informasi",
    },
];

console.log(listMahasiswa[1].nama);

//if else
let nilai = 85;
// Mengecek kondisi dengan if else
if( nilai > 80) {
    console.log("Lulus");
} else {
    console.log("Tidak Lulus");
}

// Looping 1-10
// Menerima 3 parameter (start, end, step)
for (let i = 1; i <= 10; i++){
    console.log("angka " + i)
}

//function
function tambah(a, b) {
    return a + b;
};
function luasPersegi(s) {
    return s * s;
};

console.log("hasil penjumlahan: " + tambah(5,2));
console.log("hasil perkalian: " + luasPersegi(5));