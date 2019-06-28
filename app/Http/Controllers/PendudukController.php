<?php

namespace App\Http\Controllers;

use App\Penduduk;
use Illuminate\Http\Request;
use App\Http\Requests\PendudukRequest;
use Session;
use DB;

class PendudukController extends Controller
{
    public function index()
    {
        $daftar_penduduk = Penduduk::orderBy('id', 'desc')->paginate(25);
        $update_terakhir = Penduduk::orderBy('updated_at', 'desc')->first();
       
        return view('penduduk.index', compact('daftar_penduduk', 'update_terakhir'));
    }

    public function create()
    {
        return view('penduduk.create');
    }

    public function store(PendudukRequest $request)
    {
        $input = $request->all();

        if(empty($input['golongan_darah'])) $input['golongan_darah'] = 'tidak diketahui';

        if($request->hasFile('foto_penduduk')){
          $input['foto_penduduk'] = $this->uploadFoto($request);
        }
        Penduduk::create($input);
        Session::flash('pesan', 'Penduduk Berhasil Ditambah');
        return redirect('penduduk');
    }

    public function show(Penduduk $penduduk)
    {
        return view('penduduk.detail', compact('penduduk'));
    }

    public function edit(Penduduk $penduduk)
    {
        return view('penduduk.edit', compact('penduduk'));
    }

    public function update(PendudukRequest $request, Penduduk $penduduk)
    {
        $input = $request->all();

        if(empty($input['golongan_darah'])) $input['golongan_darah'] = 'tidak diketahui';
        
        if($request->hasFile('foto_penduduk')){
          $this->hapusFoto($penduduk);
          $input['foto_penduduk'] = $this->uploadFoto($request);
        }
        $penduduk->update($input);
        Session::flash('pesan', 'Penduduk Berhasil Diupdate');
        return redirect('penduduk');
    }

    public function destroy(Penduduk $penduduk)
    {
        $this->hapusFoto($penduduk);
        $penduduk->delete();
        Session::flash('pesan', '1 Penduduk Berhasil Dihapus');
        return redirect('penduduk');
    }

    public function cari(Request $request)
    {
      $nama_penduduk = trim($request->input('nama_penduduk'));
      $pekerjaan = trim($request->input('pekerjaan'));
      $jenis_kelamin = trim($request->input('jenis_kelamin'));
      $agama = trim($request->input('agama'));
      $golongan_darah = trim($request->input('golongan_darah'));

      if(!empty($nama_penduduk) || !empty($pekerjaan) || !empty($jenis_kelamin) || !empty($agama) || !empty($golongan_darah)){

          if(!empty($nama_penduduk)){
            $query = Penduduk::where('nama_penduduk', 'like', '%' . $nama_penduduk . '%')->orWhere('nik', 'like', '%' . $nama_penduduk . '%');
            (!empty($pekerjaan)) ? $query->Pekerjaan($pekerjaan) : '';
            (!empty($golongan_darah)) ? $query->GolonganDarah($golongan_darah) : '';
            (!empty($agama)) ? $query->Agama($agama) : '';
            (!empty($jenis_kelamin)) ? $query->JenisKelamin($jenis_kelamin) : '';
          }elseif(!empty($pekerjaan)){
            $query = Penduduk::Pekerjaan($pekerjaan);
            (!empty($nama_penduduk)) ? $query->where('nama_penduduk', 'like', '%' . $nama_penduduk . '%')->orWhere('nik', 'like', '%' . $nama_penduduk . '%') : '';
            (!empty($golongan_darah)) ? $query->GolonganDarah($golongan_darah) : '';
            (!empty($agama)) ? $query->Agama($agama) : '';
            (!empty($jenis_kelamin)) ? $query->JenisKelamin($jenis_kelamin) : '';
          }elseif(!empty($golongan_darah)){
            $query = Penduduk::GolonganDarah($golongan_darah);
            (!empty($nama_penduduk)) ? $query->where('nama_penduduk', 'like', '%' . $nama_penduduk . '%')->orWhere('nik', 'like', '%' . $nama_penduduk . '%') : '';
            (!empty($pekerjaan)) ? $query->Pekerjaan($pekerjaan) : '';
            (!empty($agama)) ? $query->Agama($agama) : '';
            (!empty($jenis_kelamin)) ? $query->JenisKelamin($jenis_kelamin) : '';
          }elseif(!empty($agama)){
            $query = Penduduk::Agama($agama);
            (!empty($nama_penduduk)) ? $query->where('nama_penduduk', 'like', '%' . $nama_penduduk . '%')->orWhere('nik', 'like', '%' . $nama_penduduk . '%') : '';
            (!empty($pekerjaan)) ? $query->Pekerjaan($pekerjaan) : '';
            (!empty($golongan_darah)) ? $query->GolonganDarah($golongan_darah) : '';
            (!empty($jenis_kelamin)) ? $query->JenisKelamin($jenis_kelamin) : '';
          }elseif(!empty($jenis_kelamin)){
            $query = Penduduk::JenisKelamin($jenis_kelamin);
            (!empty($nama_penduduk)) ? $query->where('nama_penduduk', 'like', '%' . $nama_penduduk . '%')->orWhere('nik', 'like', '%' . $nama_penduduk . '%') : '';
            (!empty($pekerjaan)) ? $query->Pekerjaan($pekerjaan) : '';
            (!empty($golongan_darah)) ? $query->GolonganDarah($golongan_darah) : '';
            (!empty($agama)) ? $query->Agama($agama) : '';
          }

          $daftar_penduduk = $query->paginate(25);

          $pagination = (!empty($penduduk)) ? $daftar_penduduk->appends(['nama_penduduk' => $penduduk]) : '';
          $pagination = (!empty($pekerjaan)) ? $daftar_penduduk->appends(['pekerjaan' => $pekerjaan]) : '';
          $pagination = (!empty($golongan_darah)) ? $daftar_penduduk->appends(['golongan_darah' => $golongan_darah]) : '';
          $pagination = (!empty($agama)) ? $daftar_penduduk->appends(['agama' => $agama]) : '';
          $pagination = (!empty($jenis_kelamin)) ? $daftar_penduduk->appends(['jenis_kelamin' => $jenis_kelamin]) : '';
          $pagination = $daftar_penduduk->appends($request->except('page'));

          $update_terakhir = Penduduk::orderBy('updated_at', 'desc')->first();

          return view('penduduk.index', compact('daftar_penduduk', 'nama_penduduk', 'pagination', 'pekerjaan', 'jenis_kelamin', 'agama', 'golongan_darah', 'update_terakhir'));
        }
        return redirect('penduduk');

    }

    private function uploadFoto(PendudukRequest $request){
        $foto = $request->file('foto_penduduk');
        $ext = $foto->getClientOriginalExtension();

        if($request->file('foto_penduduk')->isValid()){
          $foto_name = date('YmdHis').".$ext";
          $upload_path = 'assets-dashboard/images';
          $request->file('foto_penduduk')->move($upload_path, $foto_name);

          return $foto_name;
        }

        return false;
      }

      private function hapusFoto(Penduduk $penduduk){
        $foto = 'assets-dashboard/images/'.$penduduk->foto_penduduk;
        if(file_exists($foto) && isset($penduduk->foto_penduduk)){
        $delete = unlink($foto);
          if($delete){
            return true;
          }
          return false;
        }
      }

      public function presentasi()
      {
        // manusia usia lanjut
        $enampuluhenam_tahun = \Carbon\Carbon::today()->subYears(66)->format('Y-m-d');
        $manula = \App\Penduduk::where('tanggal_lahir', '<=', $enampuluhenam_tahun)->count();

        // lanjut usia akhir
        $limapuluhenam_tahun = \Carbon\Carbon::today()->subYears(56)->format('Y-m-d');
        $lansia_akhir = \App\Penduduk::where('tanggal_lahir', '>', $enampuluhenam_tahun)->where('tanggal_lahir', '<=', $limapuluhenam_tahun)->count();

        // lanjut usia awal
        $empatpuluhenam_tahun = \Carbon\Carbon::today()->subYears(46)->format('Y-m-d');
        $lansia_awal = \App\Penduduk::where('tanggal_lahir', '>', $limapuluhenam_tahun)->where('tanggal_lahir', '<=', $empatpuluhenam_tahun)->count();

        // dewasa akhir
        $tigapuluhenam_tahun = \Carbon\Carbon::today()->subYears(36)->format('Y-m-d');
        $dewasa_akhir = \App\Penduduk::where('tanggal_lahir', '>', $empatpuluhenam_tahun)->where('tanggal_lahir', '<=', $tigapuluhenam_tahun)->count();
        
        // dewasa awal
        $duapuluhenam_tahun = \Carbon\Carbon::today()->subYears(26)->format('Y-m-d');
        $dewasa_awal = \App\Penduduk::where('tanggal_lahir', '>', $tigapuluhenam_tahun)->where('tanggal_lahir', '<=', $duapuluhenam_tahun)->count();

        // remaja akhir
        $tujuhbelas_tahun = \Carbon\Carbon::today()->subYears(17)->format('Y-m-d');
        $remaja_akhir = \App\Penduduk::where('tanggal_lahir', '>', $duapuluhenam_tahun)->where('tanggal_lahir', '<=', $tujuhbelas_tahun)->count();

        // remaja awal
        $duabelas_tahun = \Carbon\Carbon::today()->subYears(12)->format('Y-m-d');
        $remaja_awal = \App\Penduduk::where('tanggal_lahir', '>', $tujuhbelas_tahun)->where('tanggal_lahir', '<=', $duabelas_tahun)->count();

        // kanak kanak
        $enam_tahun = \Carbon\Carbon::today()->subYears(6)->format('Y-m-d');
        $kanak_kanak = \App\Penduduk::where('tanggal_lahir', '>', $duabelas_tahun)->where('tanggal_lahir', '<=', $enam_tahun)->count();

        // bawah lima tahun
        $nol_tahun = \Carbon\Carbon::today()->subYears(0)->format('Y-m-d');
        $balita = \App\Penduduk::where('tanggal_lahir', '>', $enam_tahun)->where('tanggal_lahir', '<=', $nol_tahun)->count();

        // penduduk pekerjaan
        $daftar_pekerjaan = DB::table('penduduk')->select('pekerjaan', DB::raw('count(*) as total'))->groupBy('pekerjaan')->get();

        // penduduk pendidikan
        $daftar_pendidikan = DB::table('penduduk')->select('pendidikan_terakhir', DB::raw('count(*) as total'))->groupBy('pendidikan_terakhir')->get();

        // penduduk golongan darah
        $daftar_darah = DB::table('penduduk')->select('golongan_darah', DB::raw('count(*) as total'))->groupBy('golongan_darah')->get();
       
        // menikah
        $daftar_menikah = DB::table('penduduk')->select('status_menikah', DB::raw('count(*) as total'))->groupBy('status_menikah')->get();

        // agama
        $daftar_agama = DB::table('penduduk')->select('agama', DB::raw('count(*) as total'))->groupBy('agama')->get();

        // jenis kelamin
        $daftar_jk = DB::table('penduduk')->select('jenis_kelamin', DB::raw('count(*) as total'))->groupBy('jenis_kelamin')->get();

        return view('penduduk.presentasi', compact(
          'manula', 'balita', 'kanak_kanak', 'remaja_awal', 'remaja_akhir', 'dewasa_awal', 'dewasa_akhir', 'lansia_akhir', 'lansia_awal', 'daftar_pekerjaan', 'daftar_pendidikan', 'daftar_darah', 'daftar_menikah', 'daftar_agama', 'daftar_jk'
        ));
      }

      public function cetak(Request $request)
      {
        $profil = \App\Profil::findOrFail(1);

        $pdf = app('FPDF');
        $pdf->AddPage('L', 'A4');
        
        // header
        $pdf->SetFont('Arial', 'B', 15);
        $pdf->Image(asset('assets-dashboard/images/' . $profil->logo), 140, null, 20);
        $pdf->Cell(0, 10, "SISTEM INFORMASI DESA & KELURAHAN", 0, 2, 'C');
        $pdf->Cell(0, 10, $profil->nama, 0, 2, 'C');
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(0, 10, "Alamat : ".$profil->alamat." | Telepon : ".$profil->telepon." | Email : ".$profil->email, 'B', 2, 'C');
        $pdf->Ln();

        $nama_penduduk = trim($request->input('nama_penduduk'));
        $pekerjaan = trim($request->input('pekerjaan'));
        $jenis_kelamin = trim($request->input('jenis_kelamin'));
        $agama = trim($request->input('agama'));
        $golongan_darah = trim($request->input('golongan_darah'));

        // main
        $pdf->SetFont('Arial', 'B', 13);
        $pdf->Cell(0, 7, "LAPORAN PENDUDUK", 0, 2, 'C');
        
        $pdf->SetFont('Arial', 'B', 11);
        if(!empty($nama_penduduk) || !empty($pekerjaan) || !empty($jenis_kelamin) || !empty($agama) || !empty($golongan_darah)){
          $pdf->Cell(0, 7, "Berdasarkan Nama/NIK : ". $nama_penduduk .", Pekerjaan : " . $pekerjaan . " , Jenis Kelamin : ". $jenis_kelamin . " , Agama : ". $agama . " , Golongan Darah : " . $golongan_darah, 0, 2, 'C');
        }

        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(17, 10, "NO", 1, 0, 'C');
        $pdf->Cell(59, 10, "NAMA", 1, 0, 'C');
        $pdf->Cell(20, 10, "MENIKAH", 1, 0, 'C');
        $pdf->Cell(25, 10, "GENDER", 1, 0, 'C');
        $pdf->Cell(55, 10, "TEMPAT & TANGGAL LAHIR", 1, 0, 'C');
        $pdf->Cell(45, 10, "PEKERJAAN", 1, 0, 'C');
        $pdf->Cell(20, 10, "AGAMA", 1, 0, 'C');
        $pdf->Cell(20, 10, "PENDIDIKAN", 1, 0, 'C');
        $pdf->Cell(15, 10, "DARAH", 1, 0, 'C');
        $pdf->Ln();
        
        $pdf->SetFont('Arial', '', 8);

        if(!empty($nama_penduduk) || !empty($pekerjaan) || !empty($jenis_kelamin) || !empty($agama) || !empty($golongan_darah)){
          if(!empty($nama_penduduk)){
            $query = Penduduk::where('nama_penduduk', 'like', '%' . $nama_penduduk . '%')->orWhere('nik', 'like', '%' . $nama_penduduk . '%');
            (!empty($pekerjaan)) ? $query->Pekerjaan($pekerjaan) : '';
            (!empty($golongan_darah)) ? $query->GolonganDarah($golongan_darah) : '';
            (!empty($agama)) ? $query->Agama($agama) : '';
            (!empty($jenis_kelamin)) ? $query->JenisKelamin($jenis_kelamin) : '';
          }elseif(!empty($pekerjaan)){
            $query = Penduduk::Pekerjaan($pekerjaan);
            (!empty($golongan_darah)) ? $query->GolonganDarah($golongan_darah) : '';
            (!empty($agama)) ? $query->Agama($agama) : '';
            (!empty($nama_penduduk)) ? $query->where('nama_penduduk', 'like', '%' . $nama_penduduk . '%')->orWhere('nik', 'like', '%' . $nama_penduduk . '%') : '';
            (!empty($jenis_kelamin)) ? $query->JenisKelamin($jenis_kelamin) : '';
          }elseif(!empty($golongan_darah)){
            $query = Penduduk::GolonganDarah($golongan_darah);
            (!empty($pekerjaan)) ? $query->Pekerjaan($pekerjaan) : '';
            (!empty($agama)) ? $query->Agama($agama) : '';
            (!empty($nama_penduduk)) ? $query->where('nama_penduduk', 'like', '%' . $nama_penduduk . '%')->orWhere('nik', 'like', '%' . $nama_penduduk . '%') : '';
            (!empty($jenis_kelamin)) ? $query->JenisKelamin($jenis_kelamin) : '';
          }elseif(!empty($agama)){
            $query = Penduduk::Agama($agama);
            (!empty($pekerjaan)) ? $query->Pekerjaan($pekerjaan) : '';
            (!empty($nama_penduduk)) ? $query->where('nama_penduduk', 'like', '%' . $nama_penduduk . '%')->orWhere('nik', 'like', '%' . $nama_penduduk . '%') : '';
            (!empty($golongan_darah)) ? $query->GolonganDarah($golongan_darah) : '';
            (!empty($jenis_kelamin)) ? $query->JenisKelamin($jenis_kelamin) : '';
          }elseif(!empty($jenis_kelamin)){
            $query = Penduduk::JenisKelamin($jenis_kelamin);
            (!empty($nama_penduduk)) ? $query->where('nama_penduduk', 'like', '%' . $nama_penduduk . '%')->orWhere('nik', 'like', '%' . $nama_penduduk . '%') : '';
            (!empty($pekerjaan)) ? $query->Pekerjaan($pekerjaan) : '';
            (!empty($golongan_darah)) ? $query->GolonganDarah($golongan_darah) : '';
            (!empty($agama)) ? $query->Agama($agama) : '';
          }
          $daftar_penduduk = $query->get();
        }else{
          $daftar_penduduk = Penduduk::orderBy('nama_penduduk', 'asc')->get();
        }
        $i = 1;

        foreach($daftar_penduduk as $penduduk)
        {
          $pdf->Cell(17, 10, $i++, 1, 0, 'C');
          $pdf->Cell(59, 10, strtoupper($penduduk->nama_penduduk), 1, 0, 'C');
          $pdf->Cell(20, 10, strtoupper($penduduk->status_menikah), 1, 0, 'C');
          $pdf->Cell(25, 10, strtoupper($penduduk->jenis_kelamin), 1, 0, 'C');
          $pdf->Cell(55, 10, strtoupper($penduduk->tempat_lahir) . ', '. $penduduk->tanggal_lahir, 1, 0, 'C');
          $pdf->Cell(45, 10, strtoupper($penduduk->pekerjaan), 1, 0, 'C');
          $pdf->Cell(20, 10, strtoupper($penduduk->agama), 1, 0, 'C');
          if($penduduk->pendidikan_terakhir == 'tidak sekolah'){
            $pdf->Cell(20, 10, '-', 1, 0, 'C');
          }else{
            $pdf->Cell(20, 10, strtoupper($penduduk->pendidikan_terakhir), 1, 0, 'C');
          }
          if($penduduk->golongan_darah == 'tidak diketahui'){
            $pdf->Cell(15, 10, '-', 1, 0, 'C');
          }else{
            $pdf->Cell(15, 10, strtoupper($penduduk->golongan_darah), 1, 0, 'C');
          }
          $pdf->Ln();
        }

        // footer
        $pdf->SetY(179);
        $pdf->SetX(0);
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(105,10,"Dicetak Oleh Admin : John Doe Pada ".date("d-m-Y H:i:s")
        ." WITA",0,0,'C');
        $pdf->Ln();

        $pdf->SetY(179);
        $pdf->SetX(200);
        $pdf->SetFont('Arial','I',8);
        $pdf->Cell(0,10,"Signature : ". md5(date("d-m-Y H:i:s")),0,0,'C');

        // save
        Session::flash('pesan', 'Laporan Berhasil Diunduh');
        $pdf->Output('D', "Laporan Penduduk ".date('d-m-Y').".pdf");
        return redirect('penduduk');
      }

      public function cetakDetailPenduduk($id)
      {
        $profil = \App\Profil::findOrFail(1);

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

        $penduduk = Penduduk::findOrFail($id);

        // main
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 7, "BIODATA PENDUDUK", 0, 2, 'C');

        $pdf->Image(asset('assets-dashboard/images/' . $penduduk->foto_penduduk), 55, null, 100);
        $pdf->Ln();
        
        $pdf->SetFont('Arial', '', 11);
        $pdf->Cell(65, 10, "NOMOR INDUK KEPENDUDUKAN", 0, 0, 'L');
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(150, 10, strtoupper($penduduk->nik), 0, 0, 'L');
        $pdf->Ln();
        
        $pdf->SetFont('Arial', '', 11);
        $pdf->Cell(65, 10, "NAMA LENGKAP", 0, 0, 'L');
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(150, 10, strtoupper($penduduk->nama_penduduk), 0, 0, 'L');
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 11);
        $pdf->Cell(65, 10, "ALAMAT RUMAH", 0, 0, 'L');
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(150, 10, strtoupper($penduduk->alamat_penduduk), 0, 0, 'L');
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 11);
        $pdf->Cell(65, 10, "STATUS MENIKAH", 0, 0, 'L');
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(150, 10, strtoupper($penduduk->status_menikah), 0, 0, 'L');
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 11);
        $pdf->Cell(65, 10, "JENIS KELAMIN", 0, 0, 'L');
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(150, 10, strtoupper($penduduk->jenis_kelamin), 0, 0, 'L');
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 11);
        $pdf->Cell(65, 10, "TEMPAT LAHIR", 0, 0, 'L');
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(150, 10, strtoupper($penduduk->tempat_lahir), 0, 0, 'L');
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 11);
        $pdf->Cell(65, 10, "TANGGAL LAHIR", 0, 0, 'L');
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(150, 10, strtoupper($penduduk->tanggal_lahir), 0, 0, 'L');
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 11);
        $pdf->Cell(65, 10, "PEKERJAAN", 0, 0, 'L');
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(150, 10, strtoupper($penduduk->pekerjaan), 0, 0, 'L');
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 11);
        $pdf->Cell(65, 10, "AGAMA", 0, 0, 'L');
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(150, 10, strtoupper($penduduk->agama), 0, 0, 'L');
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 11);
        $pdf->Cell(65, 10, "PENDIDIKAN TERAKHIR", 0, 0, 'L');
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(150, 10, strtoupper($penduduk->pendidikan_terakhir), 0, 0, 'L');
        $pdf->Ln();

        $pdf->SetFont('Arial', '', 11);
        $pdf->Cell(65, 10, "GOLONGAN DARAH", 0, 0, 'L');
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(150, 10, strtoupper($penduduk->golongan_darah), 0, 0, 'L');
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
        $pdf->Output('D', "Biodata $penduduk->nama_penduduk .pdf");
        return redirect('penduduk');
      }

}
