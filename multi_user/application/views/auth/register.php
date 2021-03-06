<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   <meta name="description" content="Tutorial Codeigniter Membuat Hak Akses Menggunakan Jquery dan Mysql">
    <meta name="author" content="Ilmucoding">
    <title>Register</title> 
    <!-- Bootstrap core CSS -->   <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="<?= base_url('index.php/auth/registerForm') ?>" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Registration</h1>
        <?php
        $errors = $this->session->flashdata('errors');
        if(!empty($errors)){
        ?>
          <div class="row">
              <div class="col-md-12">
              <div class="alert alert-danger text-center">
                  <?php foreach($errors as $key=>$error){ ?>
                  <?php echo "$error<br>"; ?>
                  <?php } ?>
              </div>
              </div>
          </div>
        <?php
        }
        if($msg = $this->session->flashdata('error_login')){ ?>
          <div class="row">
              <div class="col-md-12">
                <div class="alert alert-danger text-center">
                    <?= $msg ?>
                </div>
              </div>
          </div>
        <?php } ?>
      <input name="username" type="text" class="form-control" placeholder="Username" required autofocus>
      <div style="margin-top:10px"></div>
      <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" required>
      <div style="margin-top:10px"></div>
      <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Alamat Email" required autofocus>
      <div style="margin-top:10px"></div>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div style="margin-top:10px"></div>     
      <input name="confrim_password" type="password" id="inputPassword" class="form-control" placeholder="Password Konfirmasi" required>
      <select name="kd_agama" id="" class="form-control" autofocus style="height: 45px;">
          <option value="">*Pilih Agama*</option>
          <option value="1">Islam</option>
          <option value="2">Kristen</option>
          <option value="3">Katholik</option>
          <option value="4">Hindhu</option>
          <option value="5">Budha</option>
          <option value="6">Konghucu</option>
      </select>
        <?echo $agama;?>       
      <div style="margin-top:10px"></div>  
      <select name="kd_jurusan" id="" class="form-control" autofocus style="height: 45px;">
          <option value="">*Pilih Jurusan*</option>
          <option value="1">Teknologi Komputer</option>
          <option value="2">Teknologi Informasi</option>
          <option value="3">Teknologi Industri</option>
          <option value="4">Fisika</option>
      </select>
      <div style="margin-top:10px"></div>  
      <textarea name="alamat" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Alamat Lengkap" ></textarea>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <a href="<?= base_url('index.php/auth') ?>" class="float-left mt-1">Login</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
  </body>
</html>