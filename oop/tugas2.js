class Kendaraan {
    constructor(nama){
        this.nama = nama;
    }
    tampilkannama(){
        console.log(`Nama Kendaraan ${this.nama}`);
    }
}

class Mobil extends Kendaraan{
    constructor(nama){
        super(nama);
    }
    berjalan(){console.log(`Kendaraan ini berjalan menggunakan 4 roda.`)}
}
class Motor extends Kendaraan{
    constructor(nama){
        super(nama);
    }
    berjalan(){console.log(`kendaraan ini berjalan menggunakan 2 roda.`)}
}

const mobil = new Mobil("toyota");
const motor = new Motor("yamaha");
mobil.tampilkannama();
mobil.berjalan();
console.log();
motor.tampilkannama();
motor.berjalan();
