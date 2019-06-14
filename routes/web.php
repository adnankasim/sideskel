<?php
Route::get('/', function () {
    $daftar_artikel = App\Artikel::take(3)->get();
    $daftar_kegiatan = App\Kegiatan::take(3)->get();

    return view('beranda/index', compact('daftar_artikel', 'daftar_kegiatan'));
});
Route::prefix('beranda')->group(function()
{
    Route::get('/', function ()
    {
        $daftar_artikel = App\Artikel::take(3)->get();
        $daftar_kegiatan = App\Kegiatan::take(3)->get();
        return view('beranda/index', compact('daftar_artikel', 'daftar_kegiatan'));
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
Route::resource('batas', 'BatasController');
Route::resource('tanaman-komoditas', 'TanamanKomoditasController');
Route::resource('orbitasi', 'OrbitasiController');
Route::resource('tipologi', 'TipologiController');
Route::resource('iklim', 'IklimController');
Route::resource('kesuburan-tanah', 'KesuburanTanahController');
Route::resource('penggunaan-tanah', 'PenggunaanTanahController');
Route::resource('infrastruktur-melintasi', 'InfraMelintasiController');

// pemerintahan
Route::resource('pemerintahan', 'PemerintahanController');

// fasilitas
Route::resource('fasilitas-ekonomi', 'FasilitasEkonomiController');
Route::resource('fasilitas-kesehatan', 'FasilitasKesehatanController');
Route::resource('fasilitas-pemerintahan', 'FasilitasPemerintahanController');
Route::resource('fasilitas-pemukiman', 'FasilitasPemukimanController');
Route::resource('fasilitas-pendidikan', 'FasilitasPendidikanController');
Route::resource('fasilitas-peribadatan', 'FasilitasPeribadatanController');
Route::resource('fasilitas-prasarana', 'FasilitasPrasaranaController');

// keuangan
Route::resource('belanja', 'BelanjaController');
Route::resource('pendapatan', 'PendapatanController');

// penduduk
Route::resource('penduduk', 'PendudukController');

// dokumen
Route::resource('dokumen', 'DokumenController');

// artikel
Route::resource('artikel', 'ArtikelController');

// kegiatan
Route::resource('kegiatan', 'KegiatanController');

// pengguna
Route::resource('pengguna', 'PenggunaController');

// admin
Route::resource('admin', 'AdminController');
