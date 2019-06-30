<?php

namespace App\Http\Controllers;

use App\Belanja;
use Illuminate\Http\Request;
use App\Http\Requests\BelanjaRequest;
use Session;

class BelanjaController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    
    public function index()
    {
        $daftar_tahun = Belanja::distinct('tahun')->pluck('tahun', 'tahun');
        $daftar_belanja = Belanja::orderBy('tahun', 'desc')->paginate(25);
        $update_terakhir = Belanja::orderBy('updated_at', 'desc')->first();
        return view('belanja.index', compact('daftar_belanja', 'daftar_tahun', 'update_terakhir'));
    }

    public function create()
    {
        return view('belanja.create');
    }

    public function store(BelanjaRequest $request)
    {
        Belanja::create($request->all());
        Session::flash('pesan', '1 Belanja Berhasil Disimpan');
        return redirect('belanja');
    }

    public function edit(Belanja $belanja)
    {
        return view('belanja.edit', compact('belanja'));
    }

    public function update(BelanjaRequest $request, Belanja $belanja)
    {
        $belanja->update($request->all());
        Session::flash('pesan', '1 Belanja Berhasil Diupdate');
        return redirect('belanja');
    }

    public function destroy(Belanja $belanja)
    {
        $belanja->delete();
        Session::flash('pesan', '1 Belanja Berhasil Dihapus');
        return redirect('belanja');
    }

    public function urutkan(Request $request)
    {
        if(empty($request->input('tahun'))) return redirect('belanja');

        $daftar_belanja = Belanja::where('tahun', $request->input('tahun'))->orderBy('nominal_belanja', 'asc')->get();
        $total = $daftar_belanja->sum('nominal_belanja');
        $daftar_tahun = Belanja::distinct('tahun')->pluck('tahun', 'tahun');
        $update_terakhir = Belanja::where('tahun', $request->input('tahun'))->orderBy('updated_at', 'desc')->first();
        return view('belanja.urutkan', compact('daftar_belanja', 'total', 'daftar_tahun', 'update_terakhir'));
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
        $pdf->Cell(0, 7, "LAPORAN BELANJA TAHUN " . $tahun, 0, 2, 'C');
        
        // main
        $daftar_belanja = Belanja::where('tahun', $tahun)->get();
        $pdf->SetFont('Arial', '', 11);
        
        foreach($daftar_belanja as $belanja)
        {
            $pdf->Cell(100, 10, $belanja->uraian_belanja, 1, 0, 'L');
            $pdf->Cell(90, 10,"Rp. " . number_format($belanja->nominal_belanja, 0, ',', '.'), 1, 0, 'L');
            $pdf->Ln();
        }
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(100, 10, 'TOTAL BELANJA', 0, 0, 'L');
        $pdf->Cell(90, 10,"Rp. " . number_format($daftar_belanja->sum('nominal_belanja'), 0, ',', '.'), 0, 0, 'L');
        $pdf->Ln();

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
        $pdf->Output('D', "Laporan Belanja Tahun $tahun .pdf");
        return redirect('belanja/urutkan?tahun=' . $tahun);
    }

}
