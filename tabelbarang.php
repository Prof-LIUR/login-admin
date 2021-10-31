<?php include 'home.php'; ?>
<div class="container">
    <div class="row justify-content-center mt-5">
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Jenis Barang</th>
        <th scope="col">Harga</th>
      </tr>
    </thead>
    <tbody>
  <?php 
  include 'koneksi.php';
  $result=mysqli_query($con,"select * from barang");
  foreach($result as $data){
    echo "<tr>";
    echo "<td>".$data['id_barang']."</td>";
    echo "<td>".$data['nama_barang']."</td>";
    echo "<td>".$data['jenis_barang']."</td>";
    echo "<td>Rp. ".$data['harga_barang']."</td></tr>";
  }
  ?>
    </tbody>
  </table>