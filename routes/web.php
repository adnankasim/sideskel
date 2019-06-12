<?php
Route::get('/', function () {
    $daftar_artikel = App\Artikel::take(3)->get();
    $daftar_kegiatan = App\Kegiatan::take(3)->get();

    return view('beranda/index', compact('daftar_artikel', 'daftar_kegiatan'));
});
Route::prefix('beranda')->group(function()
{
    Route::get('/', function () {
        $daftar_artikel = App\Artikel::take(3)->get();
        $daftar_kegiatan = App\Kegiatan::take(3)->get();

        return view('beranda/index', compact('daftar_artikel', 'daftar_kegiatan'));
    });

    Route::get('profil', 'BerandaController@profil'); 
    Route::get('batas', 'BerandaController@batas'); 
    Route::get('tanaman-komoditas', 'BerandaController@tanamanKomoditas'); 
    Route::get('tanaman-komoditas/{tahun}', 'BerandaController@tanamanKomoditasDetail'); 
    Route::get('orbitasi', 'BerandaController@orbitasi'); 
    Route::get('tipologi', 'BerandaController@tipologi'); 
    Route::get('iklim', 'BerandaController@iklim'); 
    Route::get('kesuburan-tanah', 'BerandaController@kesuburanTanah'); 
    Route::get('penggunaan-tanah', 'BerandaController@penggunaanTanah');

    Route::get('pemerintahan', 'BerandaController@pemerintahan'); 
    
    Route::get('fasilitas-pemukiman', 'BerandaController@fasilitasPemukiman'); 
    Route::get('fasilitas-pemerintahan', 'BerandaController@fasilitasPemerintahan'); 
    Route::get('fasilitas-peribadatan', 'BerandaController@fasilitasPeribadatan'); 
    Route::get('fasilitas-kesehatan', 'BerandaController@fasilitasKesehatan'); 
    Route::get('fasilitas-ekonomi', 'BerandaController@fasilitasEkonomi'); 
    Route::get('fasilitas-prasarana', 'BerandaController@fasilitasPrasarana'); 
    Route::get('fasilitas-pendidikan', 'BerandaController@fasilitasPendidikan'); 
    
    Route::get('belanja', 'BerandaController@belanja'); 
    Route::get('belanja/{tahun}', 'BerandaController@belanjaDetail');
    Route::get('pendapatan', 'BerandaController@pendapatan'); 
    Route::get('pendapatan/{tahun}', 'BerandaController@pendapatanDetail');
    
    Route::get('penduduk-usia', 'BerandaController@pendudukUsia');
    Route::get('penduduk-pekerjaan', 'BerandaController@pendudukPekerjaan');
    Route::get('penduduk-pendidikan', 'BerandaController@pendudukPendidikan');
    Route::get('penduduk-golongan-darah', 'BerandaController@pendudukGolonganDarah');
    Route::get('penduduk-menikah', 'BerandaController@pendudukMenikah');
    Route::get('penduduk-agama', 'BerandaController@pendudukAgama');
    Route::get('penduduk-jenis-kelamin', 'BerandaController@pendudukJenisKelamin');
    
    Route::get('dokumen', 'BerandaController@dokumen');
    
    Route::get('artikel', 'BerandaController@artikel');
    Route::get('artikel/cari', 'BerandaController@artikelCari');
    Route::get('artikel/{slug}', 'BerandaController@artikelDetail');

    Route::get('kegiatan', 'BerandaController@kegiatan');
    Route::get('kegiatan/cari', 'BerandaController@kegiatanCari');
    Route::get('kegiatan/{slug}', 'BerandaController@kegiatanDetail');
    
});

Route::get('masuk', 'BerandaController@masuk');
Route::post('masuk', 'BerandaController@cekPengguna');
Route::get('daftar', 'BerandaController@daftar');
Route::post('daftar', 'BerandaController@daftarPengguna');

Route::resource('profil', 'ProfilController');

Route::resource('artikel', 'ArtikelController');
Route::resource('batas', 'BatasController');
Route::resource('belanja', 'BelanjaController');
Route::resource('dokumen', 'DokumenController');
Route::resource('fasilitas-ekonomi', 'FasilitasEkonomiController');
Route::resource('fasilitas-kesehatan', 'FasilitasKesehatanController');
Route::resource('fasilitas-pemerintahan', 'FasilitasPemerintahanController');
Route::resource('fasilitas-pemukiman', 'FasilitasPemukimanController');
Route::resource('fasilitas-pendidikan', 'FasilitasPendidikanController');
Route::resource('fasilitas-peribadatan', 'FasilitasPeribadatanController');
Route::resource('fasilitas-prasarana', 'FasilitasPrasaranaController');
Route::resource('iklim', 'IklimController');
Route::resource('infrastruktur-melintasi', 'InfraMelintasiController');
Route::resource('kegiatan', 'KegiatanController');
Route::resource('kesuburan-tanah', 'KesuburanTanahController');
Route::resource('orbitasi', 'OrbitasiController');
Route::resource('pemerintahan', 'PemerintahanController');
Route::resource('pendapatan', 'PendapatanController');
Route::resource('penduduk', 'PendudukController');
Route::resource('penggunaan-tanah', 'PenggunaanTanahController');
Route::resource('pengguna', 'PenggunaController');
Route::resource('tanaman-komoditas', 'TanamanKomoditasController');
Route::resource('tipologi', 'TipologiController');
