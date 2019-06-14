@extends('template')
@section('main-dashboard')
<!-- Right Panel -->
    <div id="right-panel" class="right-panel">


        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <!-- <div class="col-md-12">
                                            <div class="alert alert-danger" role="alert">
                                              <h4 class="alert-heading">SIDESKEL</h4>
                                              <p class="text-dark">1 Batas Berhasil ditambahkan</p>
                                            </div>
                                        </div> -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">PENDUDUK</strong>
                                <a href="#" class="btn btn-primary btn-sm float-right"> EDIT </a>
                                <a href="" class="btn btn-primary btn-sm float-right"> TAMBAH </a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table">
                                    <tr>
                                        <th class="text-center">FOTO</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center"> <img src="images/LOGOKABGOR.png" alt="LOGO"
                                                width="200"> </td>
                                    </tr>
                                </table>
                                <table class="table">
                                    <tr>
                                        <td>NIK</td>
                                        <th>123457890123456</th>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <th>Adnan Kasim</th>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <th>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat dolor commodi laudantium quod hic cupiditate perferendis ullam eum tempore perspiciatis, excepturi quaerat expedita quae voluptas quisquam quibusdam, nemo itaque consequuntur.</th>
                                    </tr>
                                    <tr>
                                        <td>Menikah</td>
                                        <th>Sudah</th>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <th>
                                            Tobelo
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <th>
                                            21 Maret 1998
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan</td>
                                        <th>
                                            PNS
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Agama</td>
                                        <th>
                                            Islam
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Pendidikan Terakhir</td>
                                        <th>
                                            S3
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Golongan Darah</td>
                                        <th>
                                            O
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-4">
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> Desa Kayu Bulan, Gorontalo
                    </div>
                    <div class="col-sm-4 text-center">
                        SIDESKEL Development by. <strong> <a href="#">Adnan Kasim</a></strong>
                    </div>
                    <div class="col-sm-4 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->
@stop