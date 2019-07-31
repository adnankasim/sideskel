@extends('beranda/template')
@section('main-beranda')
        <div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-lg-12">

                        <h2 class="site-heading text-center text-black mb-2 mt-5 mt-md-2 mt-xl-0"><strong>PROFIL</strong></h2>

                        <div class="non-home p-5 bg-white">
                            <table class="table">
                                <tr>
                                    <td class="font-weight-bold text-center">LOGO</td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ asset('assets-dashboard/images/'.$profil->logo) }}" width="200">
                                    </td>
                                </tr>
                            </table>
                            <table class="table table-hover table-responsive-sm">
                                <tr>
                                    <td>Nama</td>
                                    <td class="font-weight-bold"> {{ $profil->nama }} </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td class="font-weight-bold text-justify">{{ $profil->alamat }}</td>
                                </tr>
                                <tr>
                                    <td>Telepon</td>
                                    <td class="font-weight-bold">{{ $profil->telepon }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td class="font-weight-bold"> {{ $profil->email }} </td>
                                </tr>
                            </table>
                            <table class="table table-responsive-sm">
                                <tr>
                                    <td>Deskripsi</td>
                                </tr>
                                <tr>
                                    <td> {!! $profil->deskripsi !!} </td>
                                </tr>
                            </table>
                            <table class="table table-responsive-sm">
                                <tr>
                                    <td class="font-weight-bold text-center">VISI & MISI</td>
                                </tr>
                                <tr>
                                    <td class="text-justify">
                                        {!! $profil->visi_misi !!}
                                    </td>
                                </tr>
                            </table>

                            <table class="table table-hover table-striped table-responsive-sm">
                                <strong class="float-left"> 
                                    BATAS WILAYAH
                                </strong>
                                <thead>
                                    <tr>
                                        <td class="font-weight-bold">NO</td>
                                        <td class="font-weight-bold">MATA ANGIN</td>
                                        <td class="font-weight-bold">URAIAN</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    @foreach($daftar_batas as $batas)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $batas->mata_angin }}</td>
                                        <td>{{ $batas->uraian }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <table class="table table-hover table-striped table-responsive-sm">
                                <strong class="float-left"> 
                                    ORBITASI
                                </strong>
                                <thead>
                                    <tr>
                                        <td class="font-weight-bold">NO</td>
                                        <td class="font-weight-bold">URAIAN</td>
                                        <td class="font-weight-bold">KETERANGAN</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach($daftar_orbitasi as $orbitasi)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $orbitasi->uraian }}</td>
                                        <td>{{ $orbitasi->keterangan }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <table class="table table-hover table-striped table-responsive-sm">
                                <strong class="float-left"> 
                                    TIPOLOGI
                                </strong>
                                <thead>
                                    <tr>
                                        <td class="font-weight-bold">NO</td>
                                        <td class="font-weight-bold">URAIAN</td>
                                        <td class="font-weight-bold">KETERANGAN</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach($daftar_tipologi as $tipologi)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $tipologi->uraian_tipologi }}</td>
                                        <td>{{ $tipologi->keterangan_tipologi }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <table class="table table-hover table-striped table-responsive-sm">
                                <strong class="float-left"> 
                                    IKLIM
                                </strong>
                                <thead>
                                    <tr>
                                        <td class="font-weight-bold">NO</td>
                                        <td class="font-weight-bold">URAIAN</td>
                                        <td class="font-weight-bold">KETERANGAN</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach($daftar_iklim as $iklim)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $iklim->uraian_iklim }}</td>
                                        <td>{{ $iklim->keterangan_iklim }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <table class="table table-hover table-striped table-responsive-sm">
                                <strong class="float-left"> 
                                    KESUBURAN TANAH
                                </strong>
                                <thead>
                                    <tr>
                                        <td class="font-weight-bold">NO</td>
                                        <td class="font-weight-bold">URAIAN</td>
                                        <td class="font-weight-bold">LUAS (HA)</td>
                                        <td class="font-weight-bold">KETERANGAN</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach($daftar_kesuburan_tanah as $kesuburan)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $kesuburan->uraian_kesuburan_tanah }}</td>
                                        <td>{{ $kesuburan->luas_ha }}</td>
                                        <td>{{ $kesuburan->keterangan_kesuburan_tanah }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <table class="table table-hover table-striped table-responsive-sm">
                                <strong class="float-left"> 
                                    PENGGUNAAN TANAH
                                </strong>
                                <thead>
                                    <tr>
                                        <td class="font-weight-bold">NO</td>
                                        <td class="font-weight-bold">URAIAN</td>
                                        <td class="font-weight-bold">KETERANGAN (HA)</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach($daftar_penggunaan_tanah as $tanah)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $tanah->uraian_penggunaan_tanah }}</td>
                                        <td>{{ $tanah->keterangan_penggunaan_tanah }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <table class="table table-hover table-striped table-responsive-sm">
                                <strong class="float-left"> 
                                    INFRASTRUKTUR MELINTASI
                                </strong>
                                <thead>
                                    <tr>
                                        <td class="font-weight-bold">NO</td>
                                        <td class="font-weight-bold">URAIAN</td>
                                        <td class="font-weight-bold">PANJANG</td>
                                        <td class="font-weight-bold">LEBAR</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach($daftar_infra_melintasi as $infra)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $infra->uraian_infra_melintasi }}</td>
                                        <td>{{ $infra->panjang_infra_melintasi }}</td>
                                        <td>{{ $infra->lebar_infra_melintasi }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop