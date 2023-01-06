<html>
    <head>
     <link rel="stylesheet" href="css/style.css">

     <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

        </head>

    <body>
        
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Öğrenci</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Listeleme</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kayıt.php">Yeni Kayıt</a>
      </li>
    </ul>
  </div>
</nav>

<div class="color1">

<h1 class="color2">Öğrenci Kayıt Listeleme Ekranı</h1>

</div>

<div class="container mt-3">
  <form action="partial/record.php" method="get">
    <div class="mb-3 mt-3">
      <label for="firstname">Ad:</label>
      <input type="firstname" class="form-control" id="firstname" placeholder="Adınızı Giriniz" name="firstname">
    </div>
    <div class="mb-3">
      <label for="surname">Soyad:</label>
      <input type="name" class="form-control" id="surname" placeholder="Soyadınızı Giriniz" name="surname">
    </div>

    <label for="Gender" class="form-label">Cinsiyetinizi Seçiniz:</label>
    <select class="form-select" id="sel1" name="gender">
      <option value="0">Erkek</option>
      <option value="1">Kadın</option>
    </select>
    <br>
    
    
</div>

    <div class="container mt-3">
    <label for="Class" class="form-label">Sınıfınızı Seçiniz:</label>
    <select class="form-select" id="sel1" name="class">
      <option value="0">10/V</option>
      <option value="1">11/V</option>
      <option value="2">12/V</option>
    </select>
    <br>  
</div>

<div class="container mt-3">
<label>Resminizi Seçin</label>
<input type="file" class="form-control" id="file" name="file">
</div>

<td><button style="margin-left: 5%;" type="submit" class="btn btn-outline-primary">Kaydet</button>
<hr>
</form>

    &copy; Company 2022-2023 
    </body>

</html>