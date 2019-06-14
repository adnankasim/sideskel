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
                                <strong class="card-title">ARTIKEL</strong>
                                <a href="#" class="btn btn-primary btn-sm float-right"> EDIT </a>
                                <a href="" class="btn btn-primary btn-sm float-right"> TAMBAH </a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table">
                                    <tr>
                                        <th class="text-center">Gambar</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center"> <img src="images/LOGOKABGOR.png" alt="LOGO"
                                                width="200"> </td>
                                    </tr>
                                </table>
                                <table class="table">
                                    <tr>
                                        <td>Judul</td>
                                        <th>Lorem Ipsum Dolor Sit Amet</th>
                                    </tr>
                                    <tr>
                                        <td>Slug</td>
                                        <th>lorem-ipsum-dolor-sit-amet</th>
                                    </tr>
                                    <tr>
                                        <td>Waktu</td>
                                        <th>21-1998-03</th>
                                    </tr>
                                    <tr>
                                        <td>Pengguna</td>
                                        <th>John Doe</th>
                                    </tr>
                                    <tr>
                                        <td>Isi</td>
                                        <th>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum veritatis praesentium voluptatem saepe, quod quo ipsa earum perferendis placeat est, deserunt, impedit laborum fugit perspiciatis repudiandae voluptate nesciunt illum animi!</th>
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