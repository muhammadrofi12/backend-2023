// Use callback
// Gunakan function setTimeout di main

const persiapan = () => {
    console.log("Mempersiapkan bahan...");
};

const rebusAir = () => {
    console.log("Merebus Air...");
};

const masak = () => {
    console.log("Memasak Mie..");
    console.log("Selesai");
};


// Consumsing
const main = () =>  {
    setTimeout( () => {
        persiapan();

        setTimeout( () => {
            rebusAir();

            setTimeout( () => {
                masak();
            }, 5000)
        }, 7000)
    }, 3000)
};

main();

/* Output
persiapan
rebus air
masak
*/
