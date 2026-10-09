class Pembayaran{
    bayar(total){ //totaladalah parameter.Misalnya nanti:bayar(32000);
        throw new Error("Method bayar() harus di implementasikan");
    }
    tampilkanMetode(){
        throw new Error("Method TampilkanMetode() harus di implementasikan");
    }
}

class Cash extends Pembayaran{
    bayar(total){
        console.log(`pembayaran sebesar Rp ${total} dilakukan secara tunai`);
    }
    tampilkanMetode(){
        console.log("Metode Pembayaran Cash");
    }
}

class Ewallet extends Pembayaran{
    bayar(total){
        console.log(`pembayaran sebesar Rp ${total} Menggunakan ewallet`);
    }
    tampilkanMetode(){
        console.log("Metode Pembayaran Ewallet")
    }
}

class TFbank extends Pembayaran{
    bayar(total){
        console.log(`Pembyaran sebesar Rp ${total} Di lakukan secara Transfer`);
    }
    tampilkanMetode(){
        console.log("Metode Pembayaran TFBANk")
    }
}

class Kantin{
    constructor(namapembeli){  //Constructor adalah method khusus yang otomatis dijalankan ketika object dibuat menggunakan new.Misalnya:let kantin = new Kantin("Sohif");
        this.namapembeli = namapembeli;
        this.pesanan = [];
    }
    tambahpesanan(namamakanan,jumlah,harga){
        this.pesanan.push({namamakanan: namamakanan, harga:harga, jumlah:jumlah});
    }
    tampilkanpesanan(){
        console.log(this.pesanan);
    }
    hitungTotal(){
        let total = 0;
        for(let item of this.pesanan){
            total += item.harga * item.jumlah;
        }
        return total;
    }
    prosespembayaran(Metodepembayaran){
        let total = this.hitungTotal(); 
        console.log("=====PEMBAYARAN=====");
        console.log(`nama pembeli : ${this.namapembeli}`);
        console.log(`total : ${total}`);

        Metodepembayaran.tampilkanMetode(cash);
        Metodepembayaran.bayar(total);  
        }
}

let cash = new Cash;

let wallet = new Ewallet;

let bank = new TFbank;


let kantin = new Kantin("sohif");
kantin.tambahpesanan("nasi goreng",1,20000);
kantin.tambahpesanan("esteh",2,10000);
kantin.tampilkanpesanan();
console.log("total",kantin.hitungTotal());

kantin.prosespembayaran(cash);