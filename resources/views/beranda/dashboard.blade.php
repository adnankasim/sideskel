@extends('beranda/template')
@section('main-beranda')
        <div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-lg-12">

                        <h2 class="site-heading text-center text-black mb-2 mt-5 mt-md-2 mt-xl-0"><strong>DASHBOARD PENGGUNA</strong></h2>

                        <div class="non-home">
                            @include('pesan.pesan_info')
                        </div>

                        <div class="non-home p-5 bg-white">

                            <h5 class="float-left">PROFIL</h5>
                            <a href="{{ url('beranda/dashboard/edit-pengguna') }}" class="btn btn-success btn-sm d-inline-block my-1 float-right"><i class="fa fa-edit fa-lg"></i></a>
                            
                            <table class="table table-borderless">
                                <tr>
                                    <td class="text-center">
                                        @if(empty($pengguna->foto_pengguna))
                                        <img src="{{ asset('assets-dashboard/images/default.jpg') }}" width="200">
                                        @else
                                        <img src="{{ asset('assets-dashboard/images/'. $pengguna->foto_pengguna ) }}" width="200">
                                        @endif
                                    </td>
                                </tr>
                            </table>
                            <table class="table table-responsive-sm table-borderless">
                                <tr>
                                    <th class="text-center">
                                        NAMA
                                    </th>
                                    <td class="text-center">
                                        {{ $pengguna->nama_pengguna }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">
                                        EMAIL
                                    </th>
                                    <td class="text-center">
                                        {{ $pengguna->email_pengguna }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">
                                        JENIS KELAMIN
                                    </th>
                                    <td class="text-center text-uppercase">
                                        {{ $pengguna->jenis_kelamin }}
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-center">
                                        NO. HP
                                    </th>
                                    <td class="text-center">
                                        {{ $pengguna->no_hp }}
                                    </td>
                                </tr>
                            </table>

                            <h5 class="text-center mt-3 float-left">DAFTAR ARTIKEL</h5>
                            <a href="{{ url('beranda/dashboard/tambah') }}" class="btn btn-primary btn-sm d-inline-block my-1 float-right"><i class="fa fa-plus fa-lg"></i> </a>
                            
                            
                            <table class="table table-hover table-responsive-sm">
                                <tr>
                                    <th class="font-weight-bold text-center">NO</th>
                                    <th class="font-weight-bold text-center">JUDUL</th>
                                    <th class="font-weight-bold text-center">VALID</th>
                                    <th class="font-weight-bold text-center">AKSI</th>
                                </tr>
                                <?php $i=1 ?>
                                @foreach($daftar_artikel as $artikel)
                                <tr>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td class="text-center">{{ $artikel->judul_artikel }}</td>
                                    <td class="text-center">
                                        @if($artikel->is_valid === 'ya')
                                            <i class="fa fa-check fa-lg text-primary"></i>
                                        @else
                                             <i class="fa fa-times fa-lg text-danger"></i>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                            <a href="{{ url('beranda/dashboard/'.$artikel->id.'/edit') }}" class="btn btn-success btn-sm d-inline-block my-1"><i class="fa fa-edit fa-lg"></i> </a>
                                            {!! Form::open(['url' => 'beranda/dashboard/'.$artikel->id , 'method' => 'delete', 'class' =>                                          'd-inline']) !!}
                                                                <button type="submit" class="btn btn-danger btn-sm">
                                                                     <i class="fa fa-trash fa-lg"></i> 
                                                                </button>
                                                            {!! Form::close() !!}

                                        </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop