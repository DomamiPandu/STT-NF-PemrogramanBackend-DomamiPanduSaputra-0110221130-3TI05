const fruits = ["Banana", "Apel","Orange"];

console.log(fruits(0));
console.log(fruits(2));

// looping array menggunakan for of
for(const fruit of fruits){
    console.log('Buah ${fruit}');
}