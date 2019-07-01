<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Session;
use Validator;

class BerandaController extends Controller
{
    // tentang
    public function profil()
    {
        return view('beranda/profil');
    }

    public function batas()
    {
        $daftar_batas = \App\Batas::all();
        $update_terakhir = \App\Batas::orderBy('updated_at', 'desc')->first();
        return view('beranda/batas', compact('daftar_batas', 'update_terakhir'));
    }

    public function tanamanKomoditas()
    {
        $daftar_tahun = \App\TanamanKomoditas::distinct('tahun')->pluck('tahun');
        return view('beranda/tanaman-komoditas', compact('daftar_tahun'));
    }

    public function tanamanKomoditasDetail($tahun)
    {
        $daftar_komoditas = \App\TanamanKomoditas::where('tahun', $tahun)->get();
        $update_terakhir = \App\TanamanKomoditas::where('tahun', $tahun)->orderBy('updated_at', 'desc')->first();
        return view('beranda/tanaman-komoditas-detail', compact('daftar_komoditas', 'update_terakhir'));
    }

    public function orbitasi()
    {
        $daftar_orbitasi = \App\Orbitasi::all();
        $update_terakhir = \App\Orbitasi::orderBy('updated_at', 'desc')->first();
        return view('beranda/orbitasi', compact('daftar_orbitasi', 'update_terakhir'));
    }
    
    public function tipologi()
    {
        $daftar_tipologi = \App\Tipologi::all();
        $update_terakhir = \App\Tipologi::orderBy('updated_at', 'desc')->first();
        return view('beranda/tipologi', compact('daftar_tipologi', 'update_terakhir'));
    }
    
    public function iklim(){
        $daftar_iklim = \App\Iklim::all();
        $update_terakhir = \App\Iklim::orderBy('updated_at', 'desc')->first();
        return view('beranda/iklim', compact('daftar_iklim', 'update_terakhir'));
    }
    
    public function kesuburanTanah(){
        $daftar_kesuburan_tanah = \App\KesuburanTanah::all();
        $update_terakhir = \App\KesuburanTanah::orderBy('updated_at', 'desc')->first();
        return view('beranda/kesuburan-tanah', compact('daftar_kesuburan_tanah', 'update_terakhir'));
    }
    
    public function penggunaanTanah(){
        $daftar_penggunaan_tanah = \App\PenggunaanTanah::all();
        $update_terakhir = \App\PenggunaanTanah::orderBy('updated_at', 'desc')->first();
        return view('beranda/penggunaan-tanah', compact('daftar_penggunaan_tanah', 'update_terakhir'));
    }

    public function infraMelintasi(){
        $daftar_infra_melintasi = \App\InfraMelintasi::all();
        $update_terakhir = \App\InfraMelintasi::orderBy('updated_at', 'desc')->first();
        return view('beranda/infrastruktur-melintasi', compact('daftar_infra_melintasi', 'update_terakhir'));
    }
    
    // lembaga
    public function lembaga()
    {
        $daftar_lembaga = \App\Lembaga::all();
        $update_terakhir = \App\Lembaga::orderBy('updated_at', 'desc')->first();
        return view('beranda.lembaga', compact('daftar_lembaga', 'update_terakhir'));
    }

    // detail lembaga
    public function detailLembaga($id)
    {
        $lembaga = \App\Lembaga::findOrFail($id);
        $update_terakhir = $lembaga->updated_at->diffForHumans();
        return view('beranda.detail-lembaga', compact('lembaga', 'update_terakhir'));
    }
    
    // fasilitas
    public function fasilitasPemukiman(){
        $daftar_fasilitas_pemukiman = \App\FasilitasPemukiman::all();
        $update_terakhir = \App\FasilitasPemukiman::orderBy('updated_at', 'desc')->first();
        return view('beranda/fasilitas-pemukiman', compact('daftar_fasilitas_pemukiman', 'update_terakhir'));
    }
    public function fasilitasPemerintahan(){
        $daftar_fasilitas_pemerintahan = \App\FasilitasPemerintahan::all();
        $update_terakhir = \App\FasilitasPemerintahan::orderBy('updated_at', 'desc')->first();
        return view('beranda/fasilitas-pemerintahan', compact('daftar_fasilitas_pemerintahan', 'update_terakhir'));
    }
    public function fasilitasPeribadatan(){
        $daftar_fasilitas_peribadatan = \App\FasilitasPeribadatan::all();
        $update_terakhir = \App\FasilitasPeribadatan::orderBy('updated_at', 'desc')->first();
        return view('beranda/fasilitas-peribadatan', compact('daftar_fasilitas_peribadatan', 'update_terakhir'));
    }
    public function fasilitasKesehatan(){
        $daftar_fasilitas_kesehatan = \App\FasilitasKesehatan::all();
        $update_terakhir = \App\FasilitasKesehatan::orderBy('updated_at', 'desc')->first();
        return view('beranda/fasilitas-kesehatan', compact('daftar_fasilitas_kesehatan', 'update_terakhir'));
    }
    public function fasilitasEkonomi(){
        $daftar_fasilitas_ekonomi = \App\FasilitasEkonomi::all();
        $update_terakhir = \App\FasilitasEkonomi::orderBy('updated_at', 'desc')->first();
        return view('beranda/fasilitas-ekonomi', compact('daftar_fasilitas_ekonomi', 'update_terakhir'));
    }
    public function fasilitasPrasarana(){
        $daftar_fasilitas_prasarana = \App\FasilitasPrasarana::all();
        $update_terakhir = \App\FasilitasPrasarana::orderBy('updated_at', 'desc')->first();
        return view('beranda/fasilitas-prasarana', compact('daftar_fasilitas_prasarana', 'update_terakhir'));
    }
    public function fasilitasPendidikan(){
        $daftar_fasilitas_pendidikan = \App\FasilitasPendidikan::all();
        $update_terakhir = \App\FasilitasPendidikan::orderBy('updated_at', 'desc')->first();
        return view('beranda/fasilitas-pendidikan', compact('daftar_fasilitas_pendidikan', 'update_terakhir'));
    }
    
    // belanja
    public function belanja(){
        $daftar_tahun = \App\Belanja::distinct('tahun')->pluck('tahun');
        return view('beranda/belanja', compact('daftar_tahun'));
    }
    public function belanjaDetail($tahun){
        $daftar_belanja = \App\Belanja::where('tahun', $tahun)->get();
        $update_terakhir = \App\Belanja::where('tahun', $tahun)->orderBy('updated_at', 'desc')->first();
        $total = $daftar_belanja->sum('nominal_belanja');
        return view('beranda/belanja-detail', compact('daftar_belanja', 'total', 'update_terakhir'));
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
        $update_terakhir = \App\Pendapatan::where('tahun', $tahun)->orderBy('updated_at', 'desc')->first();
        return view('beranda/pendapatan-detail', compact('daftar_pendapatan', 'total', 'update_terakhir'));
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

        $update_terakhir = \App\Penduduk::orderBy('updated_at', 'desc')->first();

        return view('beranda/penduduk-usia', compact(
            'manula', 'enampuluhenam_tahun', 
            'lansia_akhir', 'limapuluhenam_tahun',  
            'lansia_awal', 'empatpuluhenam_tahun',
            'dewasa_akhir', 'tigapuluhenam_tahun', 
            'dewasa_awal', 'duapuluhenam_tahun', 
            'remaja_akhir', 'tujuhbelas_tahun', 
            'remaja_awal', 'duabelas_tahun', 
            'kanak_kanak', 'enam_tahun', 
            'balita', 'nol_tahun', 'update_terakhir'
        ));
    }
    public function pendudukPekerjaan()
    {
        $daftar_pekerjaan = DB::table('penduduk')->select('pekerjaan', DB::raw('count(*) as total'))->groupBy('pekerjaan')->get();
        $update_terakhir = \App\Penduduk::orderBy('updated_at', 'desc')->first();
        return view('beranda/penduduk-pekerjaan', compact('daftar_pekerjaan', 'update_terakhir'));
    }
    public function pendudukPendidikan()
    {
        $daftar_pendidikan = DB::table('penduduk')->select('pendidikan_terakhir', DB::raw('count(*) as total'))->groupBy('pendidikan_terakhir')->get();
        $update_terakhir = \App\Penduduk::orderBy('updated_at', 'desc')->first();
        return view('beranda/penduduk-pendidikan', compact('daftar_pendidikan', 'update_terakhir'));
    }
    public function pendudukGolonganDarah()
    {
        $daftar_darah = DB::table('penduduk')->select('golongan_darah', DB::raw('count(*) as total'))->groupBy('golongan_darah')->get();
        $update_terakhir = \App\Penduduk::orderBy('updated_at', 'desc')->first();
        return view('beranda/penduduk-golongan-darah', compact('daftar_darah', 'update_terakhir'));
    }
    public function pendudukMenikah()
    {
        $daftar_menikah = DB::table('penduduk')->select('status_menikah', DB::raw('count(*) as total'))->groupBy('status_menikah')->get();
        $update_terakhir = \App\Penduduk::orderBy('updated_at', 'desc')->first();
        return view('beranda/penduduk-menikah', compact('daftar_menikah', 'update_terakhir'));
    }
    public function pendudukAgama()
    {
        $daftar_agama = DB::table('penduduk')->select('agama', DB::raw('count(*) as total'))->groupBy('agama')->get();
        $update_terakhir = \App\Penduduk::orderBy('updated_at', 'desc')->first();
        return view('beranda/penduduk-agama', compact('daftar_agama', 'update_terakhir'));
    }
    public function pendudukJenisKelamin()
    {
        $daftar_jk = DB::table('penduduk')->select('jenis_kelamin', DB::raw('count(*) as total'))->groupBy('jenis_kelamin')->get();
        $update_terakhir = \App\Penduduk::orderBy('updated_at', 'desc')->first();
        return view('beranda/penduduk-jenis-kelamin', compact('daftar_jk', 'update_terakhir'));
    }

    // dokumen
    public function dokumen(){
        $daftar_dokumen = \App\Dokumen::paginate(25);
        $update_terakhir = \App\Dokumen::orderBy('updated_at', 'desc')->first();
        return view('beranda/dokumen', compact('daftar_dokumen', 'update_terakhir'));
    }

    // pelayanan
    public function pelayanan(){
        $daftar_pelayanan = \App\Pelayanan::all();
        $update_terakhir = \App\Pelayanan::orderBy('updated_at', 'desc')->first();
        return view('beranda/pelayanan', compact('daftar_pelayanan', 'update_terakhir'));
    }
    
    // artikel
    public function artikel(){
        $daftar_artikel = \App\Artikel::where('is_valid', 'ya')->paginate(25);
        return view('beranda/artikel', compact('daftar_artikel'));
    }
    public function artikelDetail($slug){
        $artikel = \App\Artikel::where('slug_artikel', $slug)->where('is_valid', 'ya')->first();
        if(empty($artikel)) return redirect('beranda/artikel');
        return view('beranda/artikel-detail', compact('artikel'));
    }

    public function artikelCari(Request $request){
        $judul = $request->get('judul');
        $daftar_artikel = \App\Artikel::where('judul_artikel', 'like', '%' . $judul . '%')->where('is_valid', 'ya')->paginate(25);
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
        if(Session::has('pengguna')) return redirect('artikel');
        elseif(Session::has('admin')) return redirect('dashboard'); 
        else return view('masuk');
    }

    public function daftar()
    {
        if(Session::has('pengguna')) return redirect('artikel');
        elseif(Session::has('admin')) return redirect('dashboard');
        else return view('daftar');
    }
    
    public function cekPengguna(Request $request)
    {
        $req = $request->all();
        
        $validasi = Validator::make($req, [
          'email' => 'required|string|max:100',
          'password' => 'required|string|max:100',
        ]);

        if($validasi->fails()){
          return redirect('masuk')->withInput()->withErrors($validasi);
        }

        $email = $request->post('email');
        $password = sha1(md5($request->post('password')));

        if(\App\Pengguna::where('email_pengguna', $email)->where('password_pengguna', $password)->first()){
            $user = \App\Pengguna::where('email_pengguna', $email)->where('password_pengguna', $password)->first();
            Session::put('login', true);
            Session::put('pengguna', true);
            Session::put('id', $user->id);
            Session::put('nama', $user->nama_pengguna);
            return redirect('dashboard');
        }elseif(\App\Admin::where('email_admin', $email)->where('password_admin', $password)->first()){
            $user = \App\Admin::where('email_admin', $email)->where('password_admin', $password)->first();
            Session::put('login', true);
            Session::put('admin', true);
            Session::put('id', $user->id);
            Session::put('nama', $user->nama_admin);
            return redirect('artikel');
        }else{
            return redirect('masuk')->with('pesan', 'Username dan/atau Password Tidak Valid')->withInput();
        }
    }

    public function daftarPengguna(Request $request)
    {
        $req = $request->all();
        
        $validasi = Validator::make($req, [
          'nama_pengguna' => 'required|string|max:100',
          'email_pengguna' => 'required|string|max:100',
          'password_pengguna' => 'required|string|max:100',
          'jenis_kelamin' => 'required|in:perempuan,laki-laki',
          'no_hp' => 'required|string|max:15',
        ]);

        if($validasi->fails()){
          return redirect('daftar')->withInput()->withErrors($validasi);
        }

        $pengguna = new \App\Pengguna();
        $pengguna->nama_pengguna = $request->input('nama_pengguna');
        $pengguna->email_pengguna = $request->input('email_pengguna');
        $pengguna->password_pengguna = sha1(md5($request->input('password_pengguna')));
        $pengguna->jenis_kelamin = $request->input('jenis_kelamin');
        $pengguna->no_hp = $request->input('no_hp');
        $pengguna->save();

        Session::flash('info', 'Pengguna Berhasil Didaftarkan, silahkan masuk');
        return redirect('masuk');
    }

    public function keluar(){
        Session::flush();
        return redirect('masuk');
    }

}
