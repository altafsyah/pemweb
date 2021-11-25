<div id="content">
   <div class="container py-5">
      <div class="row">
         <div class="col">
            <table class="table table-bordered">
               <tr class="table-primary">
                  <th style="width: 10%;">No</th>
                  <th style="width: 50%;">Nama</th>
                  <th style="width: 40%;">Hasil</th>
               </tr>
               <?php
                  $sql = 'SELECT * FROM tb_pasien';
                  if($hasil = mysqli_query($conn, $sql)){
                     $no = 1;
                     while($data = mysqli_fetch_row($hasil)){
                        echo"
                           <tr>
                              <td>$no</td>
                              <td>$data[1]</td>
                              <td>$data[2]</td>
                        ";
                        $no++;
                     }
                  }
               ?>
            </table>
         </div>
      </div>
   </div>
</div>