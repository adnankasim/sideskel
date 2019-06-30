<?php

namespace App\Http\Controllers;

use App\TanamanKomoditas;
use Illuminate\Http\Request;
use App\Http\Requests\TanamanKomoditasRequest;
use Session;

class TanamanKomoditasController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    
    public function index()
    {
        $daftar_tahun = TanamanKomoditas::distinct('tahun')->pluck('tahun', 'tahun');
        $daftar_tanaman_komoditas = TanamanKomoditas::orderBy('tahun', 'desc')->paginate(25);
        
        $update_terakhir = TanamanKomoditas::orderBy('updated_at', 'desc')->first();
        return view('tanaman-komoditas.index', compact('daftar_tanaman_komoditas', 'daftar_tahun', 'update_terakhir'));
    }

    public function create()
    {
        return view('tanaman-komoditas.create');
    }

    public function store(TanamanKomoditasRequest $request)
    {
        TanamanKomoditas::create($request->all());
        Session::flash('pesan', '1 Tanaman Komoditas Berhasil Disimpan');
        return redirect('tanaman-komoditas');
    }

    public function edit(TanamanKomoditas $tanamanKomodita)
    {
        return view('tanaman-komoditas.edit', compact('tanamanKomodita'));
    }

    public function update(TanamanKomoditasRequest $request, TanamanKomoditas $tanamanKomodita)
    {
        $tanamanKomodita->update($request->all());
        Session::flash('pesan', '1 Tanaman Komoditas Berhasil Diupdate');
        return redirect('tanaman-komoditas');
    }

    public function destroy(TanamanKomoditas $tanamanKomodita)
    {
        $tanamanKomodita->delete();
        Session::flash('pesan', '1 Tanaman Komoditas Berhasil Dihapus');
        return redirect('tanaman-komoditas');
    }

    public function urutkan(Request $request)
    {
        if(empty($request->input('tahun'))) return redirect('tanaman-komoditas');

        $daftar_tanaman_komoditas = TanamanKomoditas::where('tahun', $request->input('tahun'))->orderBy('produksi_per_ha', 'asc')->get();
        $daftar_tahun = TanamanKomoditas::distinct('tahun')->pluck('tahun', 'tahun');
        $update_terakhir = TanamanKomoditas::where('tahun', $request->input('tahun'))->orderBy('updated_at', 'desc')->first();
        return view('tanaman-komoditas.urutkan', compact('daftar_tanaman_komoditas', 'daftar_tahun', 'update_terakhir'));
    }

    public function cetak(Request $request)
    {
        $profil = \App\Profil::findOrFail(1);

        $tahun = $request->input('tahun');

        $pdf = app('FPDF');
        $pdf->AddPage('P', 'A4');
        
        // header
        $pdf->SetFont('Arial', 'B', 13);
        $pdf->Image(asset('assets-dashboard/images/' . $profil->logo), 100, null, 15);
        $pdf->Cell(0, 10, "SISTEM INFORMASI DESA & KELURAHAN", 0, 2, 'C');
        $pdf->Cell(0, 7, $profil->nama, 0, 2, 'C');
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(0, 7, "Alamat : ".$profil->alamat." | Telepon : ".$profil->telepon." | Email : ".$profil->email, 'B', 2, 'C');
        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 7, "LAPORAN TANAMAN KOMODITAS TAHUN " . $tahun, 0, 2, 'C');
        
        // main
        $daftar_tanaman_komoditas = TanamanKomoditas::where('tahun', $tahun)->get();
        
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(100, 10, "Uraian", 1, 0, 'L');
        $pdf->Cell(45, 10, "Luas", 1, 0, 'L');
        $pdf->Cell(45, 10, "Produksi Per HA", 1, 0, 'L');
        $pdf->Ln();
        
        $pdf->SetFont('Arial', '', 11);
        foreach($daftar_tanaman_komoditas as $tanaman_komoditas)
        {
            $pdf->Cell(100, 10, $tanaman_komoditas->uraian_tanaman_komoditas, 1, 0, 'L');
            $pdf->Cell(45, 10, $tanaman_komoditas->luas_tanaman_komoditas, 1, 0, 'L');
            $pdf->Cell(45, 10, $tanaman_komoditas->produksi_per_ha, 1, 0, 'L');
            $pdf->Ln();
        }

        // footer
        $pdf->SetY(265);
        $pdf->SetX(0);
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(105,10,"Dicetak Oleh Admin : ". Session::get('nama') ." Pada ".date("d-m-Y H:i:s")
        ." WITA",0,0,'C');
        $pdf->Ln();

        $pdf->SetY(265);
        $pdf->SetX(140);
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(0,10,"Signature : ". md5(date("d-m-Y H:i:s")),0,0,'C');

        // save
        Session::flash('pesan', 'Laporan Berhasil Diunduh');
        $pdf->Output('D', "Laporan Tanaman Komoditas Tahun $tahun .pdf");
        return redirect('tanaman-komoditas/urutkan?tahun=' . $tahun);
    }

}
