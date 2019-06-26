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
