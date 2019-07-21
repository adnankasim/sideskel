<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests\ArtikelRequest;
use Illuminate\Support\Str;
use App\Artikel;

class DashboardController extends Controller
{
    public function __construct(){

        $this->middleware('admin', ['only' => [
            'index', 'pengaturan', 'gantiGambarLatar', 'gantiWarnaNavbar', 'uploadGambar' 
        ]]);

        $this->middleware('pengguna', ['only' => [
            'dashboardPengguna', 'tambahArtikel', 'editArtikel', 'storeArtikel', 'updateArtikel', 'destroyArtikel' 
        ]]);

    }

    public function dashboardPengguna()
    {
        $daftar_artikel = Artikel::where('id_pengguna', Session::get('id'))->get();
        return view('beranda.dashboard', compact('daftar_artikel'));
    }

    public function tambahArtikel()
    {
        return view('beranda.artikel-tambah');
    }

    public function editArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('beranda.artikel-edit', compact('artikel'));
    }

    public function storeArtikel(ArtikelRequest $request)
    {
        $input = $request->all();
        $input['slug_artikel'] = Str::slug($input['judul_artikel'], '-');

        if($request->hasFile('gambar_artikel')){
            $input['gambar_artikel'] = $this->uploadGambarArtikel($request);
        }
        Artikel::create($input);
        Session::flash('pesan', 'Artikel Berhasil Ditambah');
        return redirect('beranda/dashboard');
    }

    public function updateArtikel(ArtikelRequest $request, $id)
    {
        $artikel = Artikel::findOrFail($id);
        $input = $request->all();
        $input['slug_artikel'] = Str::slug($input['judul_artikel'], '-');

        if($request->hasFile('gambar_artikel')){
          $this->hapusGambar($artikel);
          $input['gambar_artikel'] = $this->uploadGambar($request);
        }
        $artikel->update($input);
        Session::flash('pesan', 'Artikel Berhasil Diupdate');
        return redirect('beranda/dashboard');
    }

    public function destroyArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        $this->hapusGambar($artikel);
        $artikel->delete();
        Session::flash('pesan', '1 Artikel Berhasil Dihapus');
        return redirect('beranda/dashboard');
    }

    public function index()
    {
        // batas
        $total_batas = \App\Batas::all()->count();

        // tanaman komoditas
        $total_komoditas = \App\TanamanKomoditas::distinct('uraian_tanaman_komoditas')->count();

        // orbitasi
        $total_orbitasi = \App\Orbitasi::all()->count();

        // tipologi
        $total_tipologi = \App\Tipologi::all()->count();

        // iklim
        $total_iklim = \App\Iklim::all()->count();

        // kesuburan tanah
        $total_kesuburan_tanah = \App\KesuburanTanah::all()->count();

        // penggunaan tanah
        $total_penggunaan_tanah = \App\PenggunaanTanah::all()->count();

        // infrastruktur melintasi
        $total_infra_melintasi = \App\InfraMelintasi::all()->count();

        // lembaga & anggota
        $total_lembaga = \App\Lembaga::all()->count();
        $total_anggota_lembaga = \App\AnggotaLembaga::all()->count();

        // fasilitas
        $total_fasilitas_pemukiman = \App\FasilitasPemukiman::all()->count();
        $total_fasilitas_pemerintahan = \App\FasilitasPemerintahan::all()->count();
        $total_fasilitas_peribadatan = \App\FasilitasPeribadatan::all()->count();
        $total_fasilitas_kesehatan = \App\FasilitasKesehatan::all()->count();
        $total_fasilitas_ekonomi = \App\FasilitasEkonomi::all()->count();
        $total_fasilitas_prasarana = \App\FasilitasPrasarana::all()->count();
        $total_fasilitas_pendidikan = \App\FasilitasPendidikan::all()->count();

        // kegiatan
        $total_kegiatan = \App\Kegiatan::all()->count();

        // artikel
        $total_artikel = \App\Artikel::all()->count();

        // keuangan
        $daftar_belanja = \App\Belanja::where('tahun', date('Y'))->orderBy('nominal_belanja', 'asc')->get();
        $total_belanja = $daftar_belanja->sum('nominal_belanja');

        $daftar_pendapatan = \App\Pendapatan::where('tahun', date('Y'))->orderBy('nominal_pendapatan', 'asc')->get();
        $total_pendapatan = $daftar_pendapatan->sum('nominal_pendapatan');

        // dokumen
        $total_dokumen = \App\Dokumen::all()->count();

        // pelayanan
        $total_pelayanan = \App\Pelayanan::all()->count();

        // pengguna
        $total_pengguna = \App\Pengguna::all()->count();

        // admin
        $total_admin = \App\Admin::all()->count();

        // penduduk usia
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

        // penduduk golongan darah
        $daftar_darah = DB::table('penduduk')->select('golongan_darah', DB::raw('count(*) as total'))->groupBy('golongan_darah')->get();

        return view('index', compact(
            'total_batas', 'total_komoditas', 'total_orbitasi', 'total_tipologi', 'total_iklim', 'total_kesuburan_tanah', 'total_penggunaan_tanah', 'total_infra_melintasi', 'total_lembaga', 'total_anggota_lembaga', 'total_fasilitas_pemukiman', 'total_fasilitas_pemerintahan', 'total_fasilitas_peribadatan', 'total_fasilitas_kesehatan', 'total_fasilitas_ekonomi', 'total_fasilitas_prasarana', 'total_fasilitas_pendidikan', 'total_belanja', 'total_pendapatan', 'total_artikel', 'total_kegiatan', 'total_dokumen', 'total_pelayanan', 'total_admin', 'total_pengguna', 
            'manula', 'balita', 'kanak_kanak', 'remaja_awal', 'remaja_akhir', 'dewasa_awal', 'dewasa_akhir', 'lansia_akhir', 'lansia_awal', 'daftar_darah'        
        ));
    }

    public function pengaturan()
    {
        return view('pengaturan');
    }

    public function gantiGambarLatar(Request $request, $id = 1)
    {
        $input = $request->all();

        $pengaturan = \App\Pengaturan::findOrFail($id);
        
        if($request->hasFile('gambar')){ 
            $input['gambar'] = $this->uploadGambar($request);
            $pengaturan->gambar = $input['gambar'];
        } else $pengaturan->gambar = 'bg2.jpg';

        $pengaturan->save();

        Session::flash('pesan', 'Gambar Latar Beranda Berhasil Diupdate');
        return redirect('pengaturan');
    }

    public function gantiWarnaNavbar(Request $request, $id = 1)
    {
        $pengaturan = \App\Pengaturan::findOrFail($id);
        
        if(empty($request->input('warna'))) $pengaturan->warna = '#3498db';
        else $pengaturan->warna = $request->input('warna');
        
        $pengaturan->save();

        Session::flash('pesan', 'Warna Latar Navbar Beranda Berhasil Diupdate');
        return redirect('pengaturan');
    }

    private function uploadGambar(Request $request)
    {
        $gambar = $request->file('gambar');
        $ext = $gambar->getClientOriginalExtension();

        if($request->file('gambar')->isValid()){
          $gambar_name = date('YmdHis').".$ext";
          $upload_path = 'assets-beranda/images';
          $request->file('gambar')->move($upload_path, $gambar_name);

          return $gambar_name;
        }
        return false;
    }

    private function uploadGambarArtikel(ArtikelRequest $request)
    {
        $gambar = $request->file('gambar_artikel');
        $ext = $gambar->getClientOriginalExtension();
        if($request->file('gambar_artikel')->isValid()){
          $gambar_name = date('YmdHis').".$ext";
          $upload_path = 'assets-beranda/images';
          $request->file('gambar_artikel')->move($upload_path, $gambar_name);
          return $gambar_name;
        }
        return false;
      }

      private function hapusGambar(Artikel $artikel)
      {
          $gambar = 'assets-beranda/images/'.$artikel->gambar_artikel;
          if(file_exists($gambar) && isset($artikel->gambar_artikel)){
          $delete = unlink($gambar);
            if($delete){
              return true;
            }
            return false;
          }
      } 

}
