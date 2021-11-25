<div id="content">
   <?php
      if(isset($_GET['edit'])){
         $id = $_GET['id'];
   ?>
   <div class="container py-3">
      <div class="row">
         <div class="col-md-12 col-sm-6">
            <form action="" method="POST" class="form-group">
               <div class="row">
                  <div class="col-auto">
                     <label for="">Nama</label><br>
                     <input type="text" required name="nama" id="" class="form-control" placeholder="Masukkan nama ">
                  </div>
               </div>
               <div class="row mt-4">
                  <div class="col-auto">
                     <label for="">Hasil Diagnosis</label><br>
                     <select name="hasil" id="" class="form-control">
                        <option value="" selected disabled hidden class="form-control">Pilih</option>
                        <option value="Dermatitis Imun" form-control"">Dermatitis Imun</option>
                        <option value="Atopik" class="form-control">Atopik</option>
                     </select>
                     <input type="submit" name="ubah" class="form-control btn-primary mt-5" value="Submit">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <?php
      if(isset($_POST['ubah'])){
         $nama = $_POST['nama'];
         $hsl = $_POST['hasil'];
         mysqli_query($conn, "UPDATE tb_pasien SET nama='$nama', hsl_diagnosis='$hsl' WHERE id='$id'");
         header('location:index.php?dashboard');
      }
      }else{
   ?>
   <div class="container py-5">
      <div class="row">
         <div class="col-xl-3 col-md-6 col-sm4">
            <div class="card mb-5 py-2 shadow-sm">
               <div class="card-body">
                  <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                           Jumlah Pasien</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                           <!-- Menampilkan Jumlah Data Pasien -->
                           <?php
                              $sql = "SELECT COUNT(1) FROM tb_pasien";
                              $query = mysqli_query($conn, $sql);
                              $row = mysqli_fetch_array($query);
                              $total = $row[0];
                              echo $total;
                           ?>
                        </div>
                     </div>
                     <div class="col-auto">
                        <i class="far fa-user fa-2x text-gray-300"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col">
            <table class="table table-bordered">
               <tr class="table-primary">
                  <th style="width: 40%;">Nama</th>
                  <th style="width: 40%;">Hasil</th>
                  <th style="width: 20%;">Aksi</th>
               </tr>
               <?php
                  $sql = "SELECT * FROM tb_pasien";
                  if($hasil = mysqli_query($conn, $sql)){
                     while($data = mysqli_fetch_row($hasil)){
                        echo "<tr>
                        <td>$data[1]</td>
                        <td>$data[2]</td>
                        <td>
                           <a href='index.php?dashboard&edit&id=$data[0]' class='btn btn-primary px-3 py-2'><i class='far fa-edit'></i></a>
                           <a href='index.php?dashboard&delete&id=$data[0]' class='btn btn-danger px-3 py-2'><i class='far fa-trash-alt'></i></a>
                        </td>";
                  }
               }?>
            </table>
         </div>
      </div>
   </div>
   <?php } ?>
</div>

<?php
if(isset($_GET['delete'])){
   $id = $_GET['id'];
   mysqli_query($conn, "DELETE FROM tb_pasien WHERE id=$id");
   header('location:index.php?dashboard');
}
?>