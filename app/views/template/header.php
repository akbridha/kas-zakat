<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">



</head>


<body>

<h1>Ini Header[<?= $data['judul'];?> ]</h1>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="<?=BASEURL?>/home"> Ridha akbari </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltDropdown" aria-controls="navbarNavAltDropdown" aria-expanded="true" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltDropdown">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="<?=BASEURL?>/about">About</a>
                <a class="nav-link" href="https://wa.me/+6282284085934">Kontak</a>
                <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa" >Mahasiswa</a>
            </div>
        </div>
    </div>
</nav>


<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#">Disabled</a>
    </div>
  </div>
</nav> -->
