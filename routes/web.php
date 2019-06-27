<?php
Route::get('/', function () {
    $daftar_artikel = App\Artikel::take(3)->get();
    $daftar_kegiatan = App\Kegiatan::take(3)->get();

    $daftar_pendidikan = DB::table('penduduk')->select('pendidikan_terakhir', DB::raw('count(*) as total'))->groupBy('pendidikan_terakhir')->get();

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

        // keuangan
        $daftar_belanja = \App\Belanja::where('tahun', date('Y'))->orderBy('nominal_belanja', 'asc')->get();
        $total_belanja = $daftar_belanja->sum('nominal_belanja');

        $daftar_pendapatan = \App\Pendapatan::where('tahun', date('Y'))->orderBy('nominal_pendapatan', 'asc')->get();
        $total_pendapatan = $daftar_pendapatan->sum('nominal_pendapatan');

    return view('beranda/index', compact('daftar_artikel', 'daftar_kegiatan', 'daftar_pendidikan', 'manula', 'balita', 'kanak_kanak', 'remaja_awal', 'remaja_akhir', 'dewasa_awal', 'dewasa_akhir', 'lansia_akhir', 'lansia_awal', 'daftar_belanja', 'daftar_pendapatan', 'total_belanja', 'total_pendapatan'));
});
Route::prefix('beranda')->group(function()
{
    Route::get('/', function ()
    {
        return redirect('/');
    });

    // tentang
    Route::get('profil', 'BerandaController@profil'); 
    Route::get('batas', 'BerandaController@batas'); 
    Route::get('tanaman-komoditas', 'BerandaController@tanamanKomoditas'); 
    Route::get('tanaman-komoditas/{tahun}', 'BerandaController@tanamanKomoditasDetail'); 
    Route::get('orbitasi', 'BerandaController@orbitasi'); 
    Route::get('tipologi', 'BerandaController@tipologi'); 
    Route::get('iklim', 'BerandaController@iklim'); 
    Route::get('kesuburan-tanah', 'BerandaController@kesuburanTanah'); 
    Route::get('penggunaan-tanah', 'BerandaController@penggunaanTanah');
    Route::get('infrastruktur-melintasi', 'BerandaController@infraMelintasi');

    // pemerintahan
    Route::get('pemerintahan', 'BerandaController@pemerintahan'); 

    // fasilitas
    Route::get('fasilitas-pemukiman', 'BerandaController@fasilitasPemukiman'); 
    Route::get('fasilitas-pemerintahan', 'BerandaController@fasilitasPemerintahan'); 
    Route::get('fasilitas-peribadatan', 'BerandaController@fasilitasPeribadatan'); 
    Route::get('fasilitas-kesehatan', 'BerandaController@fasilitasKesehatan'); 
    Route::get('fasilitas-ekonomi', 'BerandaController@fasilitasEkonomi'); 
    Route::get('fasilitas-prasarana', 'BerandaController@fasilitasPrasarana'); 
    Route::get('fasilitas-pendidikan', 'BerandaController@fasilitasPendidikan'); 
    
    // keuangan
    Route::get('belanja', 'BerandaController@belanja'); 
    Route::get('belanja/{tahun}', 'BerandaController@belanjaDetail');
    Route::get('pendapatan', 'BerandaController@pendapatan'); 
    Route::get('pendapatan/{tahun}', 'BerandaController@pendapatanDetail');
    
    // penduduk
    Route::get('penduduk-usia', 'BerandaController@pendudukUsia');
    Route::get('penduduk-pekerjaan', 'BerandaController@pendudukPekerjaan');
    Route::get('penduduk-pendidikan', 'BerandaController@pendudukPendidikan');
    Route::get('penduduk-golongan-darah', 'BerandaController@pendudukGolonganDarah');
    Route::get('penduduk-menikah', 'BerandaController@pendudukMenikah');
    Route::get('penduduk-agama', 'BerandaController@pendudukAgama');
    Route::get('penduduk-jenis-kelamin', 'BerandaController@pendudukJenisKelamin');
    
    // dokumen
    Route::get('dokumen', 'BerandaController@dokumen');

    // pelayanan
    Route::get('pelayanan', 'BerandaController@pelayanan');
    
    // artikel
    Route::get('artikel', 'BerandaController@artikel');
    Route::get('artikel/cari', 'BerandaController@artikelCari');
    Route::get('artikel/{slug}', 'BerandaController@artikelDetail');

    // kegiatan
    Route::get('kegiatan', 'BerandaController@kegiatan');
    Route::get('kegiatan/cari', 'BerandaController@kegiatanCari');
    Route::get('kegiatan/{slug}', 'BerandaController@kegiatanDetail');
    
});

Route::get('masuk', 'BerandaController@masuk');
Route::post('masuk', 'BerandaController@cekPengguna');
Route::get('daftar', 'BerandaController@daftar');
Route::post('daftar', 'BerandaController@daftarPengguna');

// admin dashboard
Route::get('dashboard', 'DashboardController@index');

// tentang
Route::resource('profil', 'ProfilController');

Route::get('batas/cetak', 'BatasController@cetak');
Route::resource('batas', 'BatasController');

Route::get('tanaman-komoditas/cetak', 'TanamanKomoditasController@cetakk');
Route::get('tanaman-komoditas/urutkan', 'TanamanKomoditasController@urutkan');
Route::resource('tanaman-komoditas', 'TanamanKomoditasController');

Route::get('orbitasi/cetak', 'OrbitasiController@cetak');
Route::resource('orbitasi', 'OrbitasiController');

Route::get('tipologi/cetak', 'TipologiController@cetak');
Route::resource('tipologi', 'TipologiController');

Route::get('iklim/cetak', 'IklimController@cetak');
Route::resource('iklim', 'IklimController');

Route::get('kesuburan-tanah/cetak', 'KesuburanTanahController@cetak');
Route::resource('kesuburan-tanah', 'KesuburanTanahController');

Route::get('penggunaan-tanah/cetak', 'PenggunaanTanahController@cetak');
Route::resource('penggunaan-tanah', 'PenggunaanTanahController');

Route::get('infrastruktur-melintasi/cetak', 'InfraMelintasiController@cetak');
Route::resource('infrastruktur-melintasi', 'InfraMelintasiController');

// pemerintahan
Route::resource('pemerintahan', 'PemerintahanController');

// fasilitas
Route::get('fasilitas-ekonomi/cetak', 'FasilitasEkonomiController@cetak');
Route::resource('fasilitas-ekonomi', 'FasilitasEkonomiController');

Route::get('fasilitas-kesehatan/cetak', 'FasilitasKesehatanController@cetak');
Route::resource('fasilitas-kesehatan', 'FasilitasKesehatanController');

Route::get('fasilitas-pemerintahan/cetak', 'FasilitasPemerintahanController@cetak');
Route::resource('fasilitas-pemerintahan', 'FasilitasPemerintahanController');

Route::get('fasilitas-pemukiman/cetak', 'FasilitasPemukimanController@cetak');
Route::resource('fasilitas-pemukiman', 'FasilitasPemukimanController');

Route::get('fasilitas-pendidikan/cetak', 'FasilitasPendidikanController@cetak');
Route::resource('fasilitas-pendidikan', 'FasilitasPendidikanController');

Route::get('fasilitas-peribadatan/cetak', 'FasilitasPeribadatanController@cetak');
Route::resource('fasilitas-peribadatan', 'FasilitasPeribadatanController');

Route::get('fasilitas-prasarana/cetak', 'FasilitasPrasaranaController@cetak');
Route::resource('fasilitas-prasarana', 'FasilitasPrasaranaController');

// keuangan
Route::get('belanja/cetak', 'BelanjaController@cetak');
Route::get('belanja/cari', 'BelanjaController@cari');
Route::get('belanja/urutkan', 'BelanjaController@urutkan');
Route::resource('belanja', 'BelanjaController');

Route::get('pendapatan/cetak', 'PendapatanController@cetak');
Route::get('pendapatan/cari', 'PendapatanController@cari');
Route::get('pendapatan/urutkan', 'PendapatanController@urutkan');
Route::resource('pendapatan', 'PendapatanController');

// penduduk
Route::get('penduduk/presentasi', 'PendudukController@presentasi');
Route::get('penduduk/cetak', 'PendudukController@cetak');
Route::get('penduduk/cari', 'PendudukController@cari');
Route::resource('penduduk', 'PendudukController');

// artikel
Route::post('artikel/validasi/{artikel}', 'ArtikelController@validasi');
Route::get('artikel/cari', 'ArtikelController@cari');
Route::resource('artikel', 'ArtikelController');

// kegiatan
Route::get('kegiatan/cari', 'KegiatanController@cari');
Route::resource('kegiatan', 'KegiatanController');

// dokumen
Route::resource('dokumen', 'DokumenController');

// pelayanan
Route::resource('pelayanan', 'PelayananController');

// pengguna
Route::get('pengguna/cetak', 'PenggunaController@cetak');
Route::resource('pengguna', 'PenggunaController');

// admin
Route::get('admin/cetak', 'AdminController@cetak');
Route::resource('admin', 'AdminController');

// pengaturan
Route::get('pengaturan', 'DashboardController@pengaturan');
Route::patch('pengaturan/ganti-gambar-latar/1', 'DashboardController@gantiGambarLatar');
Route::patch('pengaturan/ganti-warna-navbar/1', 'DashboardController@gantiWarnaNavbar');