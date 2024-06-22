<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index() {
        $current_year = Carbon::now()->format("Y");
        $data_penjualan = Penjualan::whereYear('created_at', $current_year)->get();
        $penjualans = Penjualan::with('product')->where('is_done', 'n')->get();
        $penjualan_selesai = Penjualan::where('is_done', 'y')
            ->whereDate("created_at", ">=", Carbon::now()->subDays(30))
            ->whereDate("created_at", "<=", Carbon::now())
            ->count();

        $data_tahunan = [
            $this->getDataFromMonth($data_penjualan, $current_year, 1)->sum("jumlah_harga"),
            $this->getDataFromMonth($data_penjualan, $current_year, 2)->sum("jumlah_harga"),
            $this->getDataFromMonth($data_penjualan, $current_year, 3)->sum("jumlah_harga"),
            $this->getDataFromMonth($data_penjualan, $current_year, 4)->sum("jumlah_harga"),
            $this->getDataFromMonth($data_penjualan, $current_year, 5)->sum("jumlah_harga"),
            $this->getDataFromMonth($data_penjualan, $current_year, 6)->sum("jumlah_harga"),
            $this->getDataFromMonth($data_penjualan, $current_year, 7)->sum("jumlah_harga"),
            $this->getDataFromMonth($data_penjualan, $current_year, 8)->sum("jumlah_harga"),
            $this->getDataFromMonth($data_penjualan, $current_year, 9)->sum("jumlah_harga"),
            $this->getDataFromMonth($data_penjualan, $current_year, 10)->sum("jumlah_harga"),
            $this->getDataFromMonth($data_penjualan, $current_year, 11)->sum("jumlah_harga"),
            $this->getDataFromMonth($data_penjualan, $current_year, 12)->sum("jumlah_harga"),
        ];

        return view('index', compact("penjualans", "penjualan_selesai", "data_tahunan"));
    }

    public function getDataFromMonth($data_penjualan, $year, $month) {
        return $data_penjualan->where("created_at", ">=", $this->getStartOfMonth($year, $month))->where("created_at", "<=", $this->getEndOfMonth($year, $month));
    }

    public function getStartOfMonth($year, $month) {
        return Carbon::create($year, $month);
    }

    public function getEndOfMonth($year, $month) {
        return Carbon::create($year, $month)->endOfMonth();
    }
}
