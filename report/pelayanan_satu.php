<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pelayanan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM pelayanan WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pelayanan Desa </h2>
                        <h4>Jalan Jendral Ahmad Yani No. 33, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA PELAYANAN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nama</td> <td><?= $data['nama'] ?></td>
                                </tr>
                                
                                <tr>
                                    <td>NIK</td> <td><?= $data['nik'] ?></td>
                                </tr>
								<tr>
                                    <td>JENIS PELAYANAN</td> <td><?= $data['jenis_pelayanan'] ?></td>
                                </tr>
								<tr>
                                    <td>Tanggal</td> <td><?= $data['tanggal'] ?></td>
                                </tr>
								<tr>
                                    <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kepala Desa, S.E<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>