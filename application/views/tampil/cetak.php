<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload=window.print()>
    <h1><?php echo $judul ?></h1>
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
</body>
</html>
