<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('agama', 'AgamaController');
Route::resource('anggota-keluarga', 'AnggotaKeluargaController');
Route::resource('batas-desa', 'BatasDesaController');
Route::resource('berita', 'BeritaController');
Route::resource('desa', 'DesaController');
Route::resource('detail-galeri-foto', 'DetailGaleriController');
Route::resource('dokumen-desa', 'DokumenDesaController');
Route::resource('dusun', 'DusunController');
Route::resource('fasilitas-ekonomi', 'FasilitasEkonomiController');
Route::resource('fasilitas-kesehatan', 'FasilitasKesehatanController');
Route::resource('fasilitas-pemerintahan', 'FasilitasPemerintahanController');
Route::resource('fasilitas-pendidikan', 'FasilitasPendidikanController');
Route::resource('fasilitas-penunjang-pemukiman', 'FasilitasPenunjangPemukimanController');
Route::resource('fasilitas-peribadatan', 'FasilitasPeribadatanController');
Route::resource('fasilitas-prasarana', 'FasilitasPrasaranaController');
Route::resource('galeri-foto', 'GaleriFotoController');
Route::resource('iklim', 'IklimController');
Route::resource('infrastruktur-melintasi-desa', 'InfraMelintasiDesaController');
Route::resource('kepala-keluarga', 'KepalaKeluargaController');
Route::resource('kesuburan-tanah', 'KesuburanTanahController');
Route::resource('orbitasi', 'OrbitasiController');
Route::resource('pekerjaan', 'PekerjaanController');
Route::resource('pemerintah-desa', 'PemDesaController');
Route::resource('penduduk', 'PendudukController');
Route::resource('penggunaan-tanah', 'PenggunaanTanahController');
Route::resource('rukun-tetangga', 'RukunTetanggaController');
Route::resource('rukun-warga', 'RukunWagaController');
Route::resource('tahun-anggaran', 'TahunAnggaranController');
Route::resource('tanaman-komoditas', 'TanamanKomoditasController');
Route::resource('tipologi', 'TipologiController');
Route::resource('user', 'UserController');
