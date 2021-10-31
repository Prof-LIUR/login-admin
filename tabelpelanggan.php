<?php include 'home.php'; ?>
<div class="container">
    <div class="row justify-content-center mt-5">
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nama Pembeli</th>
        <th scope="col">Telepon Pembeli</th>
        <th scope="col">Alamat</th>
        <th scope="col">Jumlah Pesanan</th>
        <th scope="col">Jenis Pesanan</th>
        <th scope="col">Nama Pesanan</th>
      </tr>
    </thead>
    <tbody>
  <?php 
  include 'koneksi.php';
  $result=mysqli_query($con,"select * from pesan");
  foreach($result as $data){
    echo "<tr>";
    echo "<td>".$data['id_pesanan']."</td>";
    echo "<td>".$data['nm_pembeli']."</td>";
    echo "<td>".$data['tlp_pembeli']."</td>";
    echo "<td>".$data['almt_pembeli']."</td>";
    echo "<td>".$data['jlh_beli']."</td>";
    echo "<td>".$data['jns_barang']."</td>";
    echo "<td>".$data['nm_barang']."</td></tr>";
  }
  ?>
    </tbody>
  </table>