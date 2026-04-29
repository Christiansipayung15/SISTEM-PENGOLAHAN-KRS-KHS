<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\ATM\MesinATM; 
use App\Models\ATM\Accounts\RekeningTabungan; 
use App\Models\ATM\Accounts\RekeningGiro; 
use App\Models\ATM\Accounts\RekeningDeposito; 

class ATMController extends Controller 
{
    public function demo() 
    {
        $atm = new MesinATM('Mall Batam Center Lt. 1');

        // Inisialisasi Objek Rekening [cite: 298, 300]
        $tabungan = new RekeningTabungan(1001, 'Budi', 500000);
        $giro = new RekeningGiro(2002002, 'PT Maju Jaya', 2000000, 5000000);
        $deposito = new RekeningDeposito(3003003, 'Dewi Rahayu', 10000000, 12, 5.5);

        // === Transaksi Tabungan === [cite: 301]
        $atm->prosesSetor($tabungan, 300000); 
        $atm->prosesTarik($tabungan, 200000); 
        $atm->prosesTarik($tabungan, 600000); // Gagal - saldo minimum [cite: 304]

        // === Transaksi Giro === [cite: 305]
        $atm->prosesSetor($giro, 1000000); 
        $atm->prosesTarik($giro, 4000000); // Berhasil - pakai overdraft [cite: 307]
        $atm->prosesTarik($giro, 5000000); // Gagal - melebihi limit [cite: 308]

        // === Transaksi Deposito === [cite: 309]
        $atm->prosesSetor($deposito, 5000000); 
        $atm->prosesTarik($deposito, 1000000); // Gagal belum jatuh tempo [cite: 313]

        // === Menampilkan Riwayat === [cite: 314]
        $atm->tampilkanRiwayat($tabungan);
        $atm->tampilkanRiwayat($giro); 
        $atm->tampilkanRiwayat($deposito); 

        // === Struk (Interface Printable) === [cite: 318]
        echo "\n" . $tabungan->cetakStruk() . "\n";
        echo "\n" . $giro->cetakStruk() . "\n"; 

        // === Info Deposito === [cite: 321]
        echo "<br> Estimasi bunga deposito Dewi/tahun: Rp " . number_format($deposito->hitungBunga(), 0, ',', '.') . "<br>"; 
    }
}