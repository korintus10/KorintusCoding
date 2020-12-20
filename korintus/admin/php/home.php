<h2>Edit Home Section</h2>
         <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Berhasil diperbarui !
</div>
      <?php
  }  
  if($_GET['msg']=='error'){
      ?>
      <div class="alert alert-danger text-center" role="alert">
  ada yang salah dengan gambar Anda, harap periksa jenis atau ukurannya!
</div>
      <?php
  } } 
?>  
         <form method="post" action="php/uhome.php" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-6">
  <img src="../assets/img/<?=$data['profilepic']?>" class="oo img-thumbnail"><br>
  <label>Foto Profil (Minimum 600px X 600px, Maksimal 2mb)</label>
  <div class="custom-file">
    <input type="file" name="profile" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="profilepic">Choose Profile Pic...</label>
  </div></div>
  <div class="form-group col-md-6">
  <img src="../assets/img/<?=$data['homewallpaper']?>" class="oo img-thumbnail">
  <label>Foto Sampul(Minimum 1920 X 1280, Maksimal 2mb)</label>
  <div class="custom-file">
    <input type="file" name="cover" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="profilepic">Pilih Sampul...</label>
  </div></div>
  
   <div class="form-group col-md-6">
      <label for="name">Nama</label>
      <input type="name" name="name" value="<?=$data['name']?>" class="form-control" id="name" placeholder="Coding Junior">
    </div>
    
   
    
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" name="email" value="<?=$data['emailid']?>" class="form-control" id="email" placeholder="korintus@admin.com">
    </div>
    <div class="form-group col-md-6">
      <label for="twitter">Twitter</label>
      <input type="text" class="form-control" value="<?=$data['twitter']?>" name="twitter" id="twitter" placeholder="https://twitter.com">
    </div>
    
    <div class="form-group col-md-6">
      <label for="facebook">Facebook</label>
      <input type="text" class="form-control" value="<?=$data['facebook']?>" name="facebook" id="facebook" placeholder="https://facebook.com">
    </div>
    
    <div class="form-group col-md-6">
      <label for="instagram">Instagram</label>
      <input type="text" class="form-control" value="<?=$data['instagram']?>" name="instagram" id="instagram" placeholder="https://instagram.com">
    </div>
    
    <div class="form-group col-md-6">
      <label for="skype">Skype</label>
      <input type="text" value="<?=$data['skype']?>" class="form-control" name="skype" id="skype" placeholder="@puja250">
    </div>
    
    <div class="form-group col-md-6">
      <label for="linkedin">Linkedin</label>
      <input type="text" class="form-control" value="<?=$data['linkedin']?>" name="linkedin" id="linkedin" placeholder="https://linkedin.com">
    </div>
    <div class="form-group col-md-6">
      <label for="github">Github</label>
      <input type="text" class="form-control"  value="<?=$data['github']?>" name="github" id="github" placeholder="https://github.com">
    </div>
  </div>
  <div class="form-group">
    <label for="address">Alamat</label>
    <input type="text" name="address" value="<?=$data['location']?>" class="form-control" id="address" placeholder="G-16 BTN joko Indah Sentani,Jayapura">
  </div>
  <div class="form-row">
  <div class="form-group col-md-9">
    <label for="profession">Judul profesi (Pisahkan dengan ',' koma)</label>
    <input type="text" class="form-control" name="profession" value="<?=$data['professions']?>" id="profession" placeholder="Web Developer,PHP Developer,Graphic Designer">
  </div>
  <div class="form-group col-md-3">
    <label for="mobile">No HP</label>
    <input type="text" class="form-control" value="<?=$data['mobile']?>" name="mobile" id="mobile" placeholder="085340444261">
  </div>
             </div>
  <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
</form>