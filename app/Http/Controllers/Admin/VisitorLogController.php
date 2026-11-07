<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageVisit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorLogController extends Controller
{
    // Menampilkan data kunjungan per hari
    public function index()
    {
        $dailyVisits = PageVisit::select(
                DB::raw('DATE(created_at) as visit_date'), 
                DB::raw('count(*) as total_visits')
            )
            ->groupBy('visit_date')
            ->orderBy('visit_date', 'desc')
            ->paginate(30); // Dibuat paginasi jika data banyak

        return view('visitors.index', ['visits' => $dailyVisits]);
    }

    // Menghapus semua data kunjungan pada tanggal tertentu
    public function destroy($date)
    {
        PageVisit::whereDate('created_at', $date)->delete();

        return redirect()->route('visitor.logs.index')->with('delete_sukses', 'Data kunjungan berhasil dihapus.');
    }
}
