<h1><?php echo $judul ?></h1>
    <table border= 1px>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
        </tr>
        <?php foreach($mahasiswa as $mhs) { ?>
        <tr>
            <td><?php echo $mhs["nim"] ?></td>
            <td><?php echo $mhs["nama"] ?></td>
            <td><?php echo $mhs["alamat"] ?></td>
            <td><?php echo $mhs["tgl_lahir"] ?></td>
        </tr>
        <?php }?>
    </table>