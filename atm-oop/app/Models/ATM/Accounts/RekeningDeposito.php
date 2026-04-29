<?php

namespace App\Models\ATM\Accounts;

class RekeningDeposito extends RekeningDasar
{
    protected string $tanggalJatuhTempo; 
    protected float $bungaPerTahun; 

    public function __construct(int $nomorRekening, string $namaNasabah, float $saldoAwal, int $jangkaWaktuBulan, float $bunga)
    {
        parent::__construct($nomorRekening, $namaNasabah, $saldoAwal);
        // Simulasi setting tanggal jatuh tempo (misal: April 2027) [cite: 354]
        $this->tanggalJatuhTempo = "2027-04-05"; 
        $this->bungaPerTahun = $bunga;
    }

    public function tarik(float $jumlah): bool 
    {
        // Cek apakah sudah jatuh tempo [cite: 313]
        if (now()->format('Y-m-d') < $this->tanggalJatuhTempo) {
            $this->tambahLog("GAGAL tarik: deposito belum jatuh tempo (" . $this->tanggalJatuhTempo . ")"); 
            return false;
        }

        $this->saldo -= $jumlah;
        $this->tambahLog("Tarik Rp " . number_format($jumlah));
        return true;
    }

    public function getJenisRekening(): string 
    {
        return "Deposito";
    }

    public function hitungBunga(): float 
    {
        // Perhitungan bunga: (Saldo * Bunga) / 100 [cite: 322]
        return ($this->saldo * $this->bungaPerTahun) / 100;
    }
}