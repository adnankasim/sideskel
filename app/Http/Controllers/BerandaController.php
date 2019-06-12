<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class BerandaController extends Controller
{
    // tentang
    public function profil(){return view('beranda/profil');}

    public function batas(){
        $daftar_batas = \App\Batas::all();
        return view('beranda/batas', compact('daftar_batas'));
    }

    public function tanamanKomoditas(){
        $daftar_tahun = \App\TanamanKomoditas::distinct('tahun')->pluck('tahun');
        return view('beranda/tanaman-komoditas', compact('daftar_tahun'));
    }

    public function tanamanKomoditasDetail($tahun){
        $daftar_komoditas = \App\TanamanKomoditas::where('tahun', $tahun)->get();
        return view('beranda/tanaman-komoditas-detail', compact('daftar_komoditas'));
    }

    public function orbitasi(){
        $daftar_orbitasi = \App\Orbitasi::all();
        return view('beranda/orbitasi', compact('daftar_orbitasi'));
    }
    
    public function tipologi(){
        $daftar_tipologi = \App\Tipologi::all();
        return view('beranda/tipologi', compact('daftar_tipologi'));
    }
    
    public function iklim(){
        $daftar_iklim = \App\Iklim::all();
        return view('beranda/iklim', compact('daftar_iklim'));
    }
    
    public function kesuburanTanah(){
        $daftar_kesuburan_tanah = \App\KesuburanTanah::all();
        return view('beranda/kesuburan-tanah', compact('daftar_kesuburan_tanah'));
    }
    
    public function penggunaanTanah(){
        $daftar_penggunaan_tanah = \App\PenggunaanTanah::all();
        return view('beranda/penggunaan-tanah', compact('daftar_penggunaan_tanah'));
    }
    
    // pemerintahan
    public function pemerintahan(){
        $daftar_pemerintahan = \App\Pemerintahan::all();
        return view('beranda/pemerintahan', compact('daftar_pemerintahan'));
    }
    
    // fasilitas
    public function fasilitasPemukiman(){
        $daftar_fasilitas_pemukiman = \App\FasilitasPemukiman::all();
        return view('beranda/fasilitas-pemukiman', compact('daftar_fasilitas_pemukiman'));
    }
    public function fasilitasPemerintahan(){
        $daftar_fasilitas_pemerintahan = \App\FasilitasPemerintahan::all();
        return view('beranda/fasilitas-pemerintahan', compact('daftar_fasilitas_pemerintahan'));
    }
    public function fasilitasPeribadatan(){
        $daftar_fasilitas_peribadatan = \App\FasilitasPeribadatan::all();
        return view('beranda/fasilitas-peribadatan', compact('daftar_fasilitas_peribadatan'));
    }
    public function fasilitasKesehatan(){
        $daftar_fasilitas_kesehatan = \App\FasilitasKesehatan::all();
        return view('beranda/fasilitas-kesehatan', compact('daftar_fasilitas_kesehatan'));
    }
    public function fasilitasEkonomi(){
        $daftar_fasilitas_ekonomi = \App\FasilitasEkonomi::all();
        return view('beranda/fasilitas-ekonomi', compact('daftar_fasilitas_ekonomi'));
    }
    public function fasilitasPrasarana(){
        $daftar_fasilitas_prasarana = \App\FasilitasPrasarana::all();
        return view('beranda/fasilitas-prasarana', compact('daftar_fasilitas_prasarana'));
    }
    public function fasilitasPendidikan(){
        $daftar_fasilitas_pendidikan = \App\FasilitasPendidikan::all();
        return view('beranda/fasilitas-pendidikan', compact('daftar_fasilitas_pendidikan'));
    }
    
    // belanja
    public function belanja(){
        $daftar_tahun = \App\Belanja::distinct('tahun')->pluck('tahun');
        return view('beranda/belanja', compact('daftar_tahun'));
    }
    public function belanjaDetail($tahun){
        $daftar_belanja = \App\Belanja::where('tahun', $tahun)->get();
        $total = $daftar_belanja->sum('nominal_belanja');
        return view('beranda/belanja-detail', compact('daftar_belanja', 'total'));
    }

    // pendapatan
    public function pendapatan(){
        $daftar_tahun = \App\Pendapatan::distinct('tahun')->pluck('tahun');
        return view('beranda/pendapatan', compact('daftar_tahun'));
    }
    public function pendapatanDetail($tahun)
    {
        $daftar_pendapatan = \App\Pendapatan::where('tahun', $tahun)->get();
        $total = $daftar_pendapatan->sum('nominal_pendapatan');
        return view('beranda/pendapatan-detail', compact('daftar_pendapatan', 'total'));
    }
    
    public function pendudukUsia()
    {
        // manusia usia lanjut
        $enampuluhenam_tahun = Carbon::today()->subYears(66)->format('Y-m-d');
        $manula = \App\Penduduk::where('tanggal_lahir', '<=', $enampuluhenam_tahun)->count();

        // lanjut usia akhir
        $limapuluhenam_tahun = Carbon::today()->subYears(56)->format('Y-m-d');
        $lansia_akhir = \App\Penduduk::where('tanggal_lahir', '>', $enampuluhenam_tahun)->where('tanggal_lahir', '<=', $limapuluhenam_tahun)->count();

        // lanjut usia awal
        $empatpuluhenam_tahun = Carbon::today()->subYears(46)->format('Y-m-d');
        $lansia_awal = \App\Penduduk::where('tanggal_lahir', '>', $limapuluhenam_tahun)->where('tanggal_lahir', '<=', $empatpuluhenam_tahun)->count();

        // dewasa akhir
        $tigapuluhenam_tahun = Carbon::today()->subYears(36)->format('Y-m-d');
        $dewasa_akhir = \App\Penduduk::where('tanggal_lahir', '>', $empatpuluhenam_tahun)->where('tanggal_lahir', '<=', $tigapuluhenam_tahun)->count();
        
        // dewasa awal
        $duapuluhenam_tahun = Carbon::today()->subYears(26)->format('Y-m-d');
        $dewasa_awal = \App\Penduduk::where('tanggal_lahir', '>', $tigapuluhenam_tahun)->where('tanggal_lahir', '<=', $duapuluhenam_tahun)->count();

        // remaja akhir
        $tujuhbelas_tahun = Carbon::today()->subYears(17)->format('Y-m-d');
        $remaja_akhir = \App\Penduduk::where('tanggal_lahir', '>', $duapuluhenam_tahun)->where('tanggal_lahir', '<=', $tujuhbelas_tahun)->count();

        // remaja awal
        $duabelas_tahun = Carbon::today()->subYears(12)->format('Y-m-d');
        $remaja_awal = \App\Penduduk::where('tanggal_lahir', '>', $tujuhbelas_tahun)->where('tanggal_lahir', '<=', $duabelas_tahun)->count();

        // kanak kanak
        $enam_tahun = Carbon::today()->subYears(6)->format('Y-m-d');
        $kanak_kanak = \App\Penduduk::where('tanggal_lahir', '>', $duabelas_tahun)->where('tanggal_lahir', '<=', $enam_tahun)->count();

        // bawah lima tahun
        $nol_tahun = Carbon::today()->subYears(0)->format('Y-m-d');
        $balita = \App\Penduduk::where('tanggal_lahir', '>', $enam_tahun)->where('tanggal_lahir', '<=', $nol_tahun)->count();

        return view('beranda/penduduk-usia', compact(
            'manula', 'enampuluhenam_tahun', 
            'lansia_akhir', 'limapuluhenam_tahun',  
            'lansia_awal', 'empatpuluhenam_tahun',
            'dewasa_akhir', 'tigapuluhenam_tahun', 
            'dewasa_awal', 'duapuluhenam_tahun', 
            'remaja_akhir', 'tujuhbelas_tahun', 
            'remaja_awal', 'duabelas_tahun', 
            'kanak_kanak', 'enam_tahun', 
            'balita', 'nol_tahun'
        ));
    }
    public function pendudukPekerjaan()
    {
        $daftar_pekerjaan = DB::table('penduduk')->select('pekerjaan', DB::raw('count(*) as total'))->groupBy('pekerjaan')->get();
        return view('beranda/penduduk-pekerjaan', compact('daftar_pekerjaan'));
    }
    public function pendudukPendidikan()
    {
        $daftar_pendidikan = DB::table('penduduk')->select('pendidikan_terakhir', DB::raw('count(*) as total'))->groupBy('pendidikan_terakhir')->get();
        return view('beranda/penduduk-pendidikan', compact('daftar_pendidikan'));
    }
    public function pendudukGolonganDarah()
    {
        $daftar_darah = DB::table('penduduk')->select('golongan_darah', DB::raw('count(*) as total'))->groupBy('golongan_darah')->get();
        return view('beranda/penduduk-golongan-darah', compact('daftar_darah'));
    }
    public function pendudukMenikah()
    {
        $daftar_menikah = DB::table('penduduk')->select('status_menikah', DB::raw('count(*) as total'))->groupBy('status_menikah')->get();
        return view('beranda/penduduk-menikah', compact('daftar_menikah'));
    }
    public function pendudukAgama()
    {
        $daftar_agama = DB::table('penduduk')->select('agama', DB::raw('count(*) as total'))->groupBy('agama')->get();
        return view('beranda/penduduk-agama', compact('daftar_agama'));
    }
    public function pendudukJenisKelamin()
    {
        $daftar_jk = DB::table('penduduk')->select('jenis_kelamin', DB::raw('count(*) as total'))->groupBy('jenis_kelamin')->get();
        return view('beranda/penduduk-jenis-kelamin', compact('daftar_jk'));
    }

    public function dokumen(){
        $daftar_dokumen = \App\Dokumen::all();
        return view('beranda/dokumen', compact('daftar_dokumen'));
    }
    
    // artikel
    public function artikel(){
        $daftar_artikel = \App\Artikel::paginate(25);
        return view('beranda/artikel', compact('daftar_artikel'));
    }
    public function artikelDetail($slug){
        $artikel = \App\Artikel::where('slug_artikel', $slug)->first();
        return view('beranda/artikel-detail', compact('artikel'));
    }

    public function artikelCari(Request $request){
        $judul = $request->get('judul');
        $daftar_artikel = \App\Artikel::where('judul_artikel', 'like', '%' . $judul . '%')->paginate(25);
        return view('beranda/artikel-cari', compact('daftar_artikel', 'judul'));
    }

    // kegiatan
    public function kegiatan(){
        $daftar_kegiatan = \App\Kegiatan::paginate(25);
        return view('beranda/kegiatan', compact('daftar_kegiatan'));
    }
    public function kegiatanDetail($slug){
        $kegiatan = \App\Kegiatan::where('slug_kegiatan', $slug)->first();
        return view('beranda/kegiatan-detail', compact('kegiatan'));
    }
    public function kegiatanCari(Request $request){
        $nama = $request->get('nama');
        $daftar_kegiatan = \App\Kegiatan::where('nama_kegiatan', 'like', '%' . $nama . '%')->paginate(25);
        return view('beranda/kegiatan-cari', compact('daftar_kegiatan', 'nama'));
    }

    public function masuk()
    {
        $profil = \App\Profil::find(1);
        return view('masuk', compact('profil'));
    }
    public function CekPengguna()
    {
        return 'tes';
    }

    public function daftar()
    {
        $profil = \App\Profil::find(1);
        return view('daftar', compact('profil'));
    }
    public function daftarPengguna()
    {
        return 'tes';
    }
}
