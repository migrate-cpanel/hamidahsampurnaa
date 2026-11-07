<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use App\Http\Controllers\VisitorController;
use App\Models\PageVisit;

class VisitorController extends Controller
{
    public function index(Request $request)
    {
        // Langsung catat setiap kunjungan/reload tanpa pengecekan session
        PageVisit::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
        ]);

        // Hitung total kunjungan dari database untuk ditampilkan
        $visitorCount = PageVisit::count();

        return view('beranda', ['visitorCount' => $visitorCount]);
    }
}