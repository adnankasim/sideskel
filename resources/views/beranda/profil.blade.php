@extends('beranda/template')
@section('main-beranda')
        <div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-lg-12">

                        <h2 class="site-heading text-center text-black mb-5 mt-5 mt-xl-0"><strong>PROFIL</strong></h2>

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
                            <table class="table table-hover">
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
                                <tr>
                                    <td>Deskripsi</td>
                                    <td class="font-weight-bold text-justify"> {!! $profil->deskripsi !!} </td>
                                </tr>
                            </table>
                            <table class="table">
                                <tr>
                                    <td class="font-weight-bold text-center">VISI & MISI</td>
                                </tr>
                                <tr>
                                    <td class="text-justify">
                                        {!! $profil->visi_misi !!}
                                    </td>
                                </tr>
                                <tr>
                                        <th class="text-center">UPDATE TERAKHIR</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                        {{ $profil->updated_at->diffForHumans() }}
                                        </td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop