   <h2>Pesan & Pertanyaan Pengguna</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>NamA</th>
              <th>Subject</th>
              <th>Email</th>
              <th>Pesan</th>
            </tr>
          </thead>
          <tbody>
            
             <?php
    $query="SELECT * FROM contact";
      $queryrun=mysqli_query($db,$query);
      $count=0;
      while($data=mysqli_fetch_array($queryrun)){
          ?>
          <tr>
          <td>#<?=$count+1?></td>
              <td><?=$data['cname']?></td>
              <td><?=$data['csubject']?></td>
              <td><?=$data['cemail']?></td>
              <td><?=$data['cmessage']?></td>
            </tr>
          <?php
              $count++;
      }
      if($count==0){ ?>
          <td colspan="5" align="center"> Saat Ini Tidak Ada Pesan atau Pertanyaan!</td>
      <?php }
        ?>
              
          </tbody>
        </table>
      </div>