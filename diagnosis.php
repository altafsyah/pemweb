<?php
   session_start();
   // Connect to Database
   include('plugin/db.php');
   // Import library (CSS, Bootstrap, Google Fonts)
   include('plugin/head.php');
?>

<body>
   <div class="wrapper">
      <?php
         include('templates/sidebar.php');
      ?>
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
                        <select name="gejala1" id="" class="form-control">
                           <option value="ya">Ya</option>
                           <option value="no" selected>Tidak</option>
                        </select>
                     </div>
                     <div class="col-md-6 col-sm-12">
                        <label for="">Gejala 6</label><br>
                        <select name="gejala6" id="" class="form-control">
                           <option value="ya">Ya</option>
                           <option value="no" selected>Tidak</option>
                        </select>
                     </div>
                  </div>
                  <div class="row mt-4">
                     <div class="col-md-6 col-sm-12">
                        <label for="">Gejala 2</label><br>
                        <select name="gejala2" id="" class="form-control">
                           <option value="ya">Ya</option>
                           <option value="no" selected>Tidak</option>
                        </select>
                     </div>
                     <div class="col-md-6 col-sm-12">
                        <label for="">Gejala 7</label><br>
                        <select name="gejala7" id="" class="form-control">
                           <option value="ya">Ya</option>
                           <option value="no" selected>Tidak</option>
                        </select>
                     </div>
                  </div>
                  <div class="row mt-4">
                     <div class="col-md-6 col-sm-12">
                        <label for="">Gejala 3</label><br>
                        <select name="gejala3" id="" class="form-control">
                           <option value="ya">Ya</option>
                           <option value="no" selected>Tidak</option>
                        </select>
                     </div>
                     <div class="col-md-6 col-sm-12">
                        <label for="">Gejala 8</label><br>
                        <select name="gejala8" id="" class="form-control">
                           <option value="ya">Ya</option>
                           <option value="no" selected>Tidak</option>
                        </select>
                     </div>
                  </div>
                  <div class="row mt-4">
                     <div class="col-md-6 col-sm-12">
                        <label for="">Gejala 4</label><br>
                        <select name="gejala4" id="" class="form-control">
                           <option value="ya">Ya</option>
                           <option value="no" selected>Tidak</option>
                        </select>
                     </div>
                     <div class="col-md-6 col-sm-12">
                        <label for="">Gejala 9</label><br>
                        <select name="gejala9" id="" class="form-control">
                           <option value="ya">Ya</option>
                           <option value="no" selected>Tidak</option>
                        </select>
                     </div>
                  </div>
                  <div class="row mt-4">
                     <div class="col-md-6 col-sm-12">
                        <label for="">Gejala 5</label><br>
                        <select name="gejala5" id="" class="form-control">
                           <option value="ya">Ya</option>
                           <option value="no" selected>Tidak</option>
                        </select>
                     </div>
                     <div class="col-md-6 col-sm-12">
                        <label for="">Gejala 10</label><br>
                        <select name="gejala10" id="" class="form-control">
                           <option value="ya">Ya</option>
                           <option value="no" selected>Tidak</option>
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
   <?php include('plugin/script.php')?>


   <!-- Fungsi Diagnosis -->
   <?php
   $nama = '';
   $gejala = array();
   if(isset($_POST['diagnosis'])){
      
      $i = 1;
      $nama = $_POST['nama'];
      // while($i <= 10){
      //    if($_POST['{"gejala".$i}'] == 'ya'){
      //       array_push($gejala, '{"gejala".$i}');
      //    }else{
      //       continue;
      //    }
      //    $i++;
      // }
      $sql = "INSERT INTO tb_pasien (id,nama,hsl_diagnosis) VALUES ('','$nama','Atopik')";
      echo"
      <script>alert('Hasil Diagnosis : Atopik')</script>
      ";
      mysqli_query($conn, $sql);
   }
   ?>
</body>