@extends('template')
@section('main-dashboard')    
<div id="right-panel" class="right-panel">
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="alert alert-primary" role="alert">
                          <h5 class="alert-heading">SIDESKEL</h5>
                          <p class="text-dark">1 Batas Berhasil ditambahkan</p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">PROFIL</strong>
                                <a href="{{ url('profil/1/edit') }}" class="btn btn-primary btn-sm float-right"> EDIT </a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table">
                                    <tr>
                                        <th class="text-center">LOGO</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center"> <img src="{{ asset('assets-dashboard/images/LOGOKABGOR.png') }}" alt="LOGO" width="200"> </td>
                                    </tr>
                                </table>
                                <table class="table">
                                    <tr>
                                        <td>Nama</td>
                                        <th>Desa Kayu Bulan</th>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <th>Jalan Lorem Ipsum DOlor Sit Amet Lorem Ipsum DOlor Sit Amet Lorem Ipsum DOlor Sit Amet</th>
                                    </tr>
                                    <tr>
                                        <td>Telepon</td>
                                        <th>082293427693</th>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <th>adnankasim8@gmail.com</th>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi</td>
                                        <th>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem temporibus est distinctio laborum magni! Dicta vero aperiam odit necessitatibus rem exercitationem, quod placeat ad nobis assumenda ex. Eius, mollitia quas?
                                            Tenetur, porro dolorum quam quia quaerat beatae sunt aperiam! Repudiandae labore illum, rerum doloremque fuga ut quibusdam harum atque maxime praesentium iure, earum necessitatibus veritatis perferendis laudantium fugit iusto vero?
                                            Architecto fugiat numquam rem molestiae quasi harum veritatis quam autem sunt. Beatae ipsam est quae nam, minima delectus fugit velit sequi quibusdam quam iure provident, iusto recusandae quos enim asperiores!
                                            Molestias, numquam? Hic possimus perferendis perspiciatis et, totam quae, iste debitis blanditiis, delectus neque expedita ipsam modi eligendi voluptates sapiente nemo molestiae? Odio doloremque laborum alias repellat odit quidem quos!
                                            Vitae reiciendis minus saepe voluptates cumque commodi explicabo optio non consequuntur. Aperiam, voluptate! Perferendis totam, sunt molestiae aut harum quis, consequatur modi ducimus sed qui quidem nulla excepturi a explicabo?
                                        </th>
                                    </tr>
                                </table>
                                <table class="table">
                                    <tr>
                                        <th class="text-center">VISI & MISI</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos velit architecto recusandae minus a. Delectus
                                            consequuntur iusto totam a voluptatibus reiciendis omnis placeat expedita, facilis, excepturi tempore quisquam
                                            dicta! Quisquam!
                                            Repellendus cum eligendi similique vel beatae libero, atque totam ex deleniti quasi minus sed magni dolor voluptate
                                            incidunt esse quibusdam eaque, non commodi, accusantium mollitia voluptatibus ratione. Iusto, quidem repudiandae?
                                            Assumenda adipisci fugit in voluptates suscipit, necessitatibus facilis ad asperiores omnis quibusdam mollitia
                                            dolorem perferendis natus neque nihil beatae dolor iure totam reiciendis temporibus tenetur et. Repellendus
                                            reprehenderit fuga nulla.
                                            Voluptatem, vel excepturi earum labore quod dolor magnam blanditiis veritatis repellat adipisci itaque? Modi impedit
                                            laudantium illum eum voluptas, quibusdam deserunt autem libero molestias, nesciunt nostrum excepturi, dolorem
                                            suscipit blanditiis.
                                            Aspernatur voluptatum accusantium facere obcaecati? Explicabo ut ipsam cum, quas nam impedit animi aliquid illo
                                            labore distinctio repudiandae excepturi dolores reprehenderit saepe sed suscipit recusandae! Error eum sunt a
                                            explicabo.
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