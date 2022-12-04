// Langkah ke 3:
// import fruits dari data/fruits.js
// refactor variabel ke ES6 variable
 
 const fruits = require("../data/fruits.js")


// Langkah ke 4:
//  Buat method index.
//  Refactor function ke ES6 Arrow Function
//  Tampilkan data fruits.
  
//  Gunakan looping for of

 const index = () => {
    for (const fruit of fruits){
        console.log(fruit);
    }
 }
 

// Langkah ke 5:
//     Buat method store.
//     Refactor function ke ES6 Arrow Function
//     Menambahkan data baru ke array fruits.
  
// {string} name - Nama buah.
  
//   Gunakan method push

 const store = (name) => {
    fruits.push(name);
    index();
 }
 store("Pisang");
 
// Langkah ke 6:
//    Buat method update.
//    Refactor function ke ES6 Arrow Function
//    Memperbarui data fruits.
  
//    {number} position - Posisi atau index yang ingin diupdate.
//    {string} name - Nama buah yang baru.
const update = (position, name) => {
    fruits[position] = name;
    index();
}
update(0,"Kelapa");
 

// Langkah ke 7:
//    Buat method destroy.
//    Refactor function ke ES6 Arrow Function
//    Menghapus data fruits.
  
//    {number} position - Posisi atau index yang ingin dihapus
  
//    Gunakan method splice
 const destroy = (position) => {
    fruits.splice(position,1);
    index();
 }
 destroy(0);
 

// Langkah ke 8: 
// export method index, store, update, dan destroy

 module.exports = {index, store, update, destroy};