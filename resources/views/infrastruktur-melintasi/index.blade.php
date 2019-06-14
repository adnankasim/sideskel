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
                                <strong class="card-title">INFRASTRUKTUR MELINTASI</strong>
                                <a href="" class="btn btn-primary btn-sm float-right"> TAMBAH </a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped">
                                    <tr>
                                        <th>NO</th>
                                        <th>URAIAN</th>
                                        <th>PANJANG</th>
                                        <th>LEBAR</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>SUNGAI</td>
                                        <td>1.300 M</td>
                                        <td>6 M</td>
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