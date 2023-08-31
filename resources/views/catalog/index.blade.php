<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/asset/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="./asset/melaku-logo-kecil1.png" type="image/x-icon">
    <title>Catalog Melaku Outdoor</title>
</head>
<body>
    <div class="container">

<!-- ================================ Navbar ======================================
===========================================================================  -->
        <nav class="navbar">
            <div class="logo">
                <img src="./asset/melaku-logo.png" alt="">
                
            </div>
            <div class="con-nav-prof">
                <div class="nav-links">
                    <a href="#">Promo</a>
                    <a href="#">Catalog</a>
                    <a href="#">About</a>
                    <a href="#">Contact</a> 
                    <a href="login.html">Login</a>                  
                </div>
                <div class="burger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
            
        </nav>
<!-- ================================ Navbar end ================================
===========================================================================  -->

<!-- ============================ Catalog =================================
===========================================================================  -->
<div class="container-card admin-container-card">
    <div class="top-product top-product-catalog">
        <h1>Catalog</h1>
        <div class="goto goto-catalog-container">
            @foreach($tipe as $t)
            <div class="goto-catalog">
                <a href="">{{$t->tipe}}</a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="product-grid">
    @foreach($produk as $p)
      <div class="product-card">
        <a href="/catalog/detail">
            <div class="gambar-container"><img src="{{ asset('storage/' . $p->image)}}" alt="Product 1"></div>
            <div class="card-text">
                <span class="price">Rp.{{$p->harga}}<span class="per">/hari</span></span>
                <h3>{{$p->nama_barang}}</h3>
                <ul>
                    <li>{{$p->stok}} {{$p->nama_barang}}</li>
                </ul>
                <p>Selengkapnya..</p>
            </div>
            <!-- -------- tambah kartu lain --------- -->
        </a>
      </div>
      @endforeach
  </div>

<!-- ============================ Catalog end =================================
===========================================================================  -->



    </div>
    
    <script src="script.js"></script>
</body>
</html>