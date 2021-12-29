@extends('layouts.main')

@section('container')

    <div class="col-lg-3 ">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>8</h3>
                <p>Program Kerja Audit(PKA)</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="../pka/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>

    </div>
    <!-- ./col -->

    <div class="col-lg-3 ">
        <!-- small box -->
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3>3</h3>
                <p>Jumlah Data Desk</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="../desk/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 ">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>10</h3>

                <p>Jumlah Data Visit</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="../visit/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 ">
        <!-- small box -->
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3>5</h3>

                <p>Temuan Hasil Audit(THA)</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="../tha/index.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-md-12">
        <!-- Widget: user widget style 1 -->
        <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header text-white" style="background: url('../../img/photo1.png') center center;">

            </div>
            <div class="widget-user-image">
                <img class="img-circle" src="../../img/user/ttd_sasa aisha j.jpg" alt="User Avatar">
            </div>
            <div class="card-footer">
                <div class="row">
                    <!-- /.col -->
                    <div class="col-md-12 border-right">
                        <div class="description-block">
                            <h5 class="description-text">sasa aisha j</h5>
                            <span class="description-header">Ketua SPI</span>
                        </div>
                        <!-- /.description-block -->
                    </div>

                    <div class="card-body box-profile">

                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="id_user" class="form-control" value="8">
                                <input type="hidden" name="fotoLama" class="form-control" value="ttd_sasa aisha j.jpg">
                                <input type="hidden" name="ttdLama" class="form-control" value="ttd_sasa aisha j.png">
                                <input type="hidden" name="status" class="form-control" value="1">
                                <input type="hidden" name="level" class="form-control" value="4">
                            </div>
                            <div class="form-group">
                                <label for="nip">NIP / NPAK</label>
                                <input type="text" id="nip_npak" class="form-control" value="19902901111" name="nip_npak">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" class="form-control" value="sasa aisha j" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No Telepon</label>
                                <input type="text" id="no_hp" class="form-control" value="0814567756565" name="no_hp">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control" value="yuujiii@mail.co.id"
                                    name="email">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" id="username" class="form-control" value="sasa" name="username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" class="form-control" value="sasa" name="password">
                                <input type="hidden" id="password2" class="form-control " value="<br />
    <b>Notice</b>:  Undefined index: password2 in <b>C:\xampp\htdocs\audit-keu\sistem\kepala_spi\dashboard\index.php</b> on line <b>214</b><br />
    " name="password2">
                            </div>

                            <div class="form-group">
                                <p><b>Foto anda sekarang:</b></p>
                                <div class="box">
                                    <img src="../../img/user/ttd_sasa aisha j.jpg" alt="foto anda sekarang" width="100">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="foto">Ubah Foto</label>
                                <input type="file" id="foto" name="foto" value="ttd_sasa aisha j.jpg">
                            </div>
                            <div class="form-group">
                                <p><b>Ttd anda sekarang:</b></p>
                                <div class="box">
                                    <img src="../../img/user/ttd_sasa aisha j.png" alt="foto anda sekarang" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="ttd">Ubah tanda tangan</label>
                                    <input type="file" id="ttd" name="ttd" value="ttd_sasa aisha j.png">
                                    <p style="color: red;"><i>* Upload ttd dengan background transparan*</i></p>
                                </div>
                                <div class="form-group row  float-left">
                                    <div class="col-sm-4">
                                        <button type="submit" name="ubahData" class="btn btn-success">Perbarui</button>
                                    </div>
                                </div>
                        </form>
                        <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                    </div>

                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.widget-user -->

    @endsection
