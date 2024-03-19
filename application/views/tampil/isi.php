<?php 
if($page =="home"){
?>
    <h2>Sistem Informasi UKM Poliban</h2>
    Ini adalah contoh CI
<?php }

else if($page =="mahasiswa"){
?>

<h1><?php echo $judul ?></h1>
<a href= <?php echo site_url("tampil/tambah_mhs"); ?>>Tambah Mhs</a>
<a href= <?php echo site_url("tampil/cetak_mhs"); ?>>Cetak Mhs</a>
    <table border= 1px>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($mahasiswa as $mhs) { ?>
        <tr>
            <td><?php echo $mhs["nim"] ?></td>
            <td><?php echo $mhs["nama"] ?></td>
            <td><?php echo $mhs["alamat"] ?></td>
            <td><?php echo $mhs["tgl_lahir"] ?></td>
            <td><a href= <?php echo site_url("tampil/edit_mhs/").$mhs["nim"]; ?> >Edit</a>
                <a href= <?php echo site_url("tampil/hapus_mhs/").$mhs["nim"]; ?> >Delete</a>
            </td>
        </tr>
        <?php }?>
    </table>

<?php } 
else if($page =="tambah_mhs"){
?>
    <?php echo validation_errors(); ?>
    <FORM method="POST" action= <?php echo site_url("tampil/tambah_mhs"); ?>>
        <table>
           <tr><td>NIM</td>         <td><input type="text" name="nim"></td></tr>
           <tr><td>Nama</td>        <td><input type="text" name="nama"></td></tr>
           <tr><td>Tgl Lahir</td>   <td><input type="date" name="tgl_lahir"></td></tr>
           <tr><td>Alamat</td>      <td><input type="text" name="alamat"></td></tr>
           <tr><td></td><td><input type="submit" value="Simpan"></td></tr> 
        </table>
    </FORM>
<?php }

else if($page =="edit_mhs"){
?>
    <?php echo validation_errors(); ?>
    <FORM method="POST" action= <?php echo site_url("tampil/edit_mhs/").$mhs["nim"]; ?>>
        <table>
           <tr><td>NIM</td>         <td><input type="text" name="nim" value="<?php echo $mhs["nim"] ?>" readonly></td></tr>
           <tr><td>Nama</td>        <td><input type="text" name="nama" value="<?php echo $mhs["nama"] ?>"></td></tr>
           <tr><td>Tgl Lahir</td>   <td><input type="date" name="tgl_lahir" value="<?php echo $mhs["tgl_lahir"] ?>"></td></tr>
           <tr><td>Alamat</td>      <td><input type="text" name="alamat" value="<?php echo $mhs["alamat"] ?>"></td></tr>
           <tr><td></td><td><input type="submit" value="Simpan"></td></tr> 
        </table>
    </FORM>
<?php } ?>