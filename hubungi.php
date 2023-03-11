
<html>
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="aset/hubungi.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Universitas</title>
</head>
<body style="background-color:#CCD5AE">
<nav class="navbar navbar-expand-lg sticky-top" style="background-color: gray">
<div class="container-fluid" >
        <a style="color: white" class="navbar-brand" href="index.php"><img src="univ.jpg" alt="logo" width="30" height="30">Universitas</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " style="color: white" href="index.php">Home</a>
            </li>
          </ul>
    </div>
  </div>
</nav>
<div class="container">

        <div class="card-container">
            <div class="left">
                <div class="left-container">
                    <h2>Tentang Kami</h2>
                    <p>Alamat: Bandung, Indonesia</p>
                    <br>
                    <p>No Telp:+6285163508053</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p>Trie Meitha Choerunnisa</p>
                </div>
            </div>
            <div class="right">
                <div class="right-container">
                    <form action="kirim.php" method='POST'>
                        <h2 class="lg-view mt-5">Hubungi Kami</h2>
                        <h2 class="sm-view">Hubungi Kami</h2>
                        <input type="text" name="nama" id="nama" placeholder="Nama" >
                        <input type="email" name="email" id="email"placeholder="Alamat Email">
                        <textarea rows="10" name="pesan" id="pesan"placeholder="Pesan"></textarea>
                        <button style="margin-top: 5px;">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>