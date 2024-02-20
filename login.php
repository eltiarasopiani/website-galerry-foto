
<?php
    //mengambil data dari database
    $hasil=mysql-query($koneksi,"select*from foto");
?>
<DOCTYPE html>
    <html lang="en">
<head>...
</head>
<body>
    <h1> WEBSITE GALERI FOTO </h1>
    <a href="">tambahkan data</a>
    <table bolder=1>
        <thead>
        <tr>
            <th> no </th>
            <th> gambar </th>
            <th> nama kegiatan </th>
            <th> colation </th>
</tr>
</thead>
</tbody>
<?php
     
       $i=1;
       while($row= mysql_fecth_assoc($hasil)): ?>
       <tr>
        <td>=row["nama"] </td>
        <td>=row["password"]</td>