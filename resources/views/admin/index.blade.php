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
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari Nama Admin">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary" type="submit"> <i class="fa fa-search fa-lg"></i> </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">ADMIN</strong>
                                <a href="" class="btn btn-primary btn-sm float-right"> TAMBAH </a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped">
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>EMAIL</th>
                                        <th>JENIS KELAMIN</th>
                                        <th>No. HP</th>
                                        <th>TERAKHIR LOGIN</th>
                                        <th>AKSI</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Adnan Kasim</td>
                                        <td>adnankasim8@gmail.com</td>
                                        <td>Laki-Laki</td>
                                        <td>082293427693</td>
                                        <td>21-03-2019</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm">EDIT</a>
                                            <form action="#" class="d-inline">
                                                <input type="hidden">
                                                <input type="submit" class="btn btn-danger btn-sm" value="HAPUS">
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" tabindex="-1"> KEMBALI </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">LANJUT</a>
                                </li>
                            </ul>
                        </nav>
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