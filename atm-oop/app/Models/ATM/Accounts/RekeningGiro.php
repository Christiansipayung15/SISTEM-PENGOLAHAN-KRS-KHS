<?php
namespace App\Models\ATM\Accounts;

use App\Models\ATM\Contracts\Printable;

class RekeningGiro extends RekeningDasar implements Printable {
    protected float $limitOverdraft;

    public function __construct(int $no, string $nama, float $saldo, float $limit) {
        parent::__construct($no, $nama, $saldo);
        $this->limitOverdraft = $limit;
    }

    public function tarik(float $jumlah): bool {
        if (($this->saldo - $jumlah) < -$this->limitOverdraft) {
            $this->tambahLog("GAGAL tarik Rp " . number_format($jumlah) . " | Melebihi limit overdraft Rp " . number_format($this->limitOverdraft));
            return false;
        }
        $this->saldo -= $jumlah;
        $this->tambahLog("TARIK Rp " . number_format($jumlah) . " | Saldo: Rp " . number_format($this->saldo) . " OVERDRAFT");
        return true;
    }

    public function getJenisRekening(): string { return "Giro"; }

    public function cetakStruk(): string {
        return "<br>--- STRUK GIRO ---<br>"
             . "No. Rek : " . $this->nomorRekening . "<br>"
             . "Nama    : " . $this->namaNasabah . "<br>"
             . "Saldo   : Rp " . number_format($this->saldo, 0, ',', '.') . "<br>"
             . "Overdraft: Rp " . number_format($this->limitOverdraft, 0, ',', '.') . "<br>"
             . "------------------<br>";
    }
}