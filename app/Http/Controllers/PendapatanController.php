<?php

namespace App\Http\Controllers;

use App\Pendapatan;
use Illuminate\Http\Request;
use App\Http\Requests\PendapatanRequest;
use Session;

class PendapatanController extends Controller
{
    public function index()
    {
        $daftar_tahun = Pendapatan::distinct('tahun')->pluck('tahun', 'tahun');
        $daftar_pendapatan = Pendapatan::orderBy('tahun', 'desc')->paginate(25);
        $update_terakhir = Pendapatan::orderBy('updated_at', 'desc')->first();
        return view('pendapatan.index', compact('daftar_pendapatan', 'daftar_tahun', 'update_terakhir'));
    }

    public function create()
    {
        return view('pendapatan.create');
    }

    public function store(PendapatanRequest $request)
    {
        Pendapatan::create($request->all());
        Session::flash('pesan', '1 Pendapatan Berhasil Disimpan');
        return redirect('pendapatan');
    }

    public function edit(Pendapatan $pendapatan)
    {
        return view('pendapatan.edit', compact('pendapatan'));
    }

    public function update(PendapatanRequest $request, Pendapatan $pendapatan)
    {
        $pendapatan->update($request->all());
        Session::flash('pesan', '1 Pendapatan Berhasil Diupdate');
        return redirect('pendapatan');
    }

    public function destroy(Pendapatan $pendapatan)
    {
        $pendapatan->delete();
        Session::flash('pesan', '1 Pendapatan Berhasil Dihapus');
        return redirect('pendapatan');
    }

    public function urutkan(Request $request)
    {
        if(empty($request->input('tahun'))) return redirect('pendapatan');
        
        $daftar_pendapatan = Pendapatan::where('tahun', $request->input('tahun'))->orderBy('nominal_pendapatan', 'asc')->get();
        $total = $daftar_pendapatan->sum('nominal_pendapatan');
        $daftar_tahun = Pendapatan::distinct('tahun')->pluck('tahun', 'tahun');
        $update_terakhir = Pendapatan::where('tahun', $request->input('tahun'))->orderBy('updated_at', 'desc')->first();
        return view('pendapatan.urutkan', compact('daftar_pendapatan', 'total', 'daftar_tahun', 'update_terakhir'));
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
        $pdf->Cell(0, 7, "LAPORAN PENDAPATAN TAHUN " . $tahun, 0, 2, 'C');
        
        // main
        $daftar_pendapatan = Pendapatan::where('tahun', $tahun)->get();
        $pdf->SetFont('Arial', '', 11);

        foreach($daftar_pendapatan as $pendapatan)
        {
            $pdf->Cell(100, 10, $pendapatan->uraian_pendapatan, 1, 0, 'L');
            $pdf->Cell(90, 10,"Rp. " . number_format($pendapatan->nominal_pendapatan, 0, ',', '.'), 1, 0, 'L');
            $pdf->Ln();
        }
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(100, 10, 'TOTAL PENDAPATAN', 0, 0, 'L');
        $pdf->Cell(90, 10,"Rp. " . number_format($daftar_pendapatan->sum('nominal_pendapatan'), 0, ',', '.'), 0, 0, 'L');
        $pdf->Ln();

        // footer
        $pdf->SetY(265);
        $pdf->SetX(0);
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(105,10,"Dicetak Oleh Admin : John Doe Pada ".date("d-m-Y H:i:s")
        ." WITA",0,0,'C');
        $pdf->Ln();

        $pdf->SetY(265);
        $pdf->SetX(140);
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(0,10,"Signature : ". md5(date("d-m-Y H:i:s")),0,0,'C');

        // save
        Session::flash('pesan', 'Laporan Berhasil Diunduh');
        $pdf->Output('D', "Laporan Pendapatan Tahun $tahun .pdf");
        return redirect('pendapatan/urutkan?tahun=' . $tahun);
    }

}
