class Pembayaran{
    constructor(nama){
        this.nama = nama;
    }
    tampilkaninfo(){
        console.log(`Bayar Metode Apa ${this.nama}`);
    } 
}

class cash extends Pembayaran{
    constructor(nama){
        super(nama);
    }
    bayar(){console.log(`Pembayaran Di Lakukan Secara Tunai`)};
}

class EWallet extends Pembayaran{
    constructor(nama){
        super(nama);
    }
    bayar(){console.log(`Pembayaran Dilakukan Menggunakan EWallet`)}
}

class TFbank extends Pembayaran{
    constructor(nama){
        super(nama);
    }
    bayar(){console.log(`Pembayaran Dilakukan Melalui Transfer Bank`)}
}

const CASH = new cash("cash");
CASH.tampilkaninfo();
CASH.bayar();
const EWALLET = new EWallet("wallet");
EWALLET.tampilkaninfo();
EWALLET.bayar();
const TFBANK = new TFbank("bank");
TFBANK.tampilkaninfo();
TFBANK.bayar();
