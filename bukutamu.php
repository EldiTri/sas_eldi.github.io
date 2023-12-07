<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="sejarah.php">sejarah</a>
            <a class="nav-link" href="kesimpulan.php">kesimpulan</a>
            <a class="nav-link" href="bukutamu.php">BukuTamu</a>
          </div>
        </div>
      </nav>
     <div class="container">
    <h1>Buku Tamu</h1>

    <form action ="" method="POST" name ="penjualan">
        
  <div class="form-group">
    <label for="nm">Nama </label>
    <input type="text" class="form-control" id="nm" name="nm" Required>
  </div>
  <div class="form-group">
    <label for="kelas">kelas</label>
    <input type="text" class="form-control" id="kelas" name="kelas" Required>
  </div>
  <div class="form-group">
    <label for="jurusan">jurusan</label>
    <input type="text" class="form-control" id="jurusan" name="jurusan" Required>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Sumbit</button>
  
</form>

<hr>
    <?php
    if(isset($_POST['submit'])){
      $nama =$_POST['nm'];
      $kelas =$_POST['kelas'];
      $jurusan =$_POST['jurusan'];

    
    
    ?>
     <div class="container">

            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th scope='col'>No</th>
                        <th scope='col'>Nama</th>
                        <th scope='col'>Kelas</th>
                        <th scope='col'>Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope='row'>1</th>
                        <td><?php echo $nama ?></td>
                        <td><?php echo $kelas ?></td>
                        <td><?php echo $jurusan ?></td>
                        
                    </tr>

                </tbody>
            </table>

    </div>
    <?php } ?>
    </div>