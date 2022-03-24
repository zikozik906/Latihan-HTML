<?php
    //Koneksi Database
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "dblatihan";

    $koneksi = mysqli_connect($server, $user, $pass, $database)or die(msqli_error($koneksi));


?>

<!DOCTYPE html>
<html>
<head>
    <title> CRUD 2022 PHP & MySQL + Bootstrap </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <h1 class="text-center"> Latihan CRUD PHP & MySQL + Bootstrap </h1>
    <h2 class="text-center"> By Azziko Bagas Melano </h2>

    <!--Awal Card Form-->
    <div class="card mt-3">
    <div class="card-header bg-primary text-white ">
        Form Input Data Mahasiswa
    </div>
    <div class="card-body">
        <form method="post" action="">
            <div class="form-group">
                <label> NIM </label>
                <input type="text" name="tnim" class="form-control" placeholder="Input NIM anda di sini!" required>
            </div>
            <div class="form-group">
                <label> Nama </label>
                <input type="text" name="tnama" class="form-control" placeholder="Input Nama anda di sini!" required>
            </div>
            <div class="form-group">
                <label> Alamat </label>
                <textarea class="form-control" name="talamat" placeholder="Input Alamat anda di sini!"></textarea>
            </div>
            <div class="form-group">
                <label> Program Studi </label>
                <select class="form-control" name="tprodi">
                    <option></option>
                    <option value="S1-TI"> S1-TI </option>
                    <option value="S1-SI"> S1-SI </option>
                </select>
            </div>

            <button type="submit" class="btn btn-success" name="bsimpan"> Simpan </button>
            <button type="reset" class="btn btn-danger" name="breset"> Kosongkan </button>

        </form>
    </div>
    </div>
    <!--Akhir Card Form-->

    <!--Awal Card Tabel-->
    <div class="card mt-3">
    <div class="card-header bg-success text-white ">
        Daftar Mahasiswa
    </div>
    <div class="card-body">
        
        <table class="table table-bordered table-striped">
            <tr>
                <th> No. </th>
                <th> NIM </th>
                <th> Nama </th>
                <th> Alamat </th>
                <th> Program Studi </th>
            </tr>
            <?php
                $no = 1;
                $tampil = mysqli_query($koneksi, "SELECT * from tmhs order by id_mhs desc");
                while($data = mysqli_fetch_array($tampil)) :
            
            ?>
            <tr>
                <td> <?=$no++;?> </td>
                <td> <?=$data['nim']?> </td>
                <td> <?=$data['nama']?> </td>
                <td> <?=$data['alamat']?> </td>
                <td> <?=$data['prodi']?> </td>
            </tr>
            <?php endwhile; //penutup perulangan while ?>
        </table>

    </div>
    </div>
    <!--Akhir Card Tabel-->

</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>