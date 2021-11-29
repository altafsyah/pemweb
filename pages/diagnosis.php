<!-- Main Content -->
<div id="content">
   <div class="row">
      <!-- Form Gejala -->
      <div class="col-md-6 col-sm-12">
         <form action="" method="POST">
            <div class="row">
               <div class="col-md-12 col-sm-6">
                  <label for="">Nama</label><br>
                  <input type="text" required name="nama" class="form-control" id="nama">
               </div>
            </div>
            <!-- Gejala -->
            <div class="row mt-4">
               <div class="col-md-6 col-sm-12">
                  <label for="">Gejala 1</label><br>
                  <select name="G01" id="" class="form-control">
                     <option value="G01">Ya</option>
                     <option value="" selected>Tidak</option>
                  </select>
               </div>
               <div class="col-md-6 col-sm-12">
                  <label for="">Gejala 6</label><br>
                  <select name="G06" id="" class="form-control">
                     <option value="G06">Ya</option>
                     <option value="" selected>Tidak</option>
                  </select>
               </div>
            </div>
            <div class="row mt-4">
               <div class="col-md-6 col-sm-12">
                  <label for="">Gejala 2</label><br>
                  <select name="G02" id="" class="form-control">
                     <option value="G02">Ya</option>
                     <option value="" selected>Tidak</option>
                  </select>
               </div>
               <div class="col-md-6 col-sm-12">
                  <label for="">Gejala 7</label><br>
                  <select name="G07" id="" class="form-control">
                     <option value="G07">Ya</option>
                     <option value="" selected>Tidak</option>
                  </select>
               </div>
            </div>
            <div class="row mt-4">
               <div class="col-md-6 col-sm-12">
                  <label for="">Gejala 3</label><br>
                  <select name="G03" id="" class="form-control">
                     <option value="G03">Ya</option>
                     <option value="" selected>Tidak</option>
                  </select>
               </div>
               <div class="col-md-6 col-sm-12">
                  <label for="">Gejala 8</label><br>
                  <select name="G08" id="" class="form-control">
                     <option value="G08">Ya</option>
                     <option value="" selected>Tidak</option>
                  </select>
               </div>
            </div>
            <div class="row mt-4">
               <div class="col-md-6 col-sm-12">
                  <label for="">Gejala 4</label><br>
                  <select name="G04" id="" class="form-control">
                     <option value="G04">Ya</option>
                     <option value="" selected>Tidak</option>
                  </select>
               </div>
               <div class="col-md-6 col-sm-12">
                  <label for="">Gejala 9</label><br>
                  <select name="G09" id="" class="form-control">
                     <option value="G09">Ya</option>
                     <option value="" selected>Tidak</option>
                  </select>
               </div>
            </div>
            <div class="row mt-4">
               <div class="col-md-6 col-sm-12">
                  <label for="">Gejala 5</label><br>
                  <select name="G05" id="" class="form-control">
                     <option value="G05">Ya</option>
                     <option value="" selected>Tidak</option>
                  </select>
               </div>
               <div class="col-md-6 col-sm-12">
                  <label for="">Gejala 10</label><br>
                  <select name="G10" id="" class="form-control">
                     <option value="G10">Ya</option>
                     <option value="" selected>Tidak</option>
                  </select>
               </div>
            </div>
            <div class="row mt-3">
               <div class="col-12">
                  <input type="submit" name="diagnosis" class="form-control btn-primary" value="Submit">
               </div>
            </div>
         </form>
      </div>
      <!-- Tabel Gejala -->
      <div class="col-md-6 col-sm-0">
         <table class="table table-responsive table-bordered">
            <tr class="table-info">
               <th style="width: 10%;">No</th>
               <th style="width: 90%;">Gejala</th>
            </tr>
            <?php
               $sql = "SELECT * FROM gejala";
               if($hasil = mysqli_query($conn, $sql)){
                  $no = 1;
                  while($data = mysqli_fetch_row($hasil)){
                     echo "
                        <tr>
                           <td>$no</td>
                           <td>$data[1]</td>
                     ";
                     $no++;
                  }
               }
            ?>
         </table>
      </div>
   </div>
</div>
<!-- End of Content -->
</div>

<!-- Fungsi Diagnosis -->
<?php
   $nama = '';
   $gejala = array();
   if(isset($_POST['diagnosis'])){
      // Get Values from Option
      $case = array();
      array_push($case, $_POST['G01'],$_POST['G02'],$_POST['G03'],$_POST['G04'],$_POST['G05'],$_POST['G06'],$_POST['G07'],$_POST['G08'],$_POST['G09'],$_POST['G10']);
      $i = 1;
      $nama = $_POST['nama'];

      // Insert Data to DB
      $sql = "INSERT INTO tb_pasien (id,nama,hsl_diagnosis) VALUES ('','$nama','Atopik')";
      echo"
      <script>alert('Hasil Diagnosis : Atopik')</script>
      ";
      mysqli_query($conn, $sql);
   }
?>