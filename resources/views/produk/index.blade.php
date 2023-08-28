
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/asset/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="./asset/melaku-logo-kecil1.png" type="image/x-icon">
    <title>Admin Melaku Outdoor</title>
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
                    <a href="/produk/create">Tambah Produk</a>
                    <a href="#">Rekap Data</a>
                    <a href="index.html">Logout</a>                  
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
            <div class="goto-catalog">
                <a href="">Tas</a>
            </div>
            <div class="goto-catalog">
                <a href="">Sleepingbag</a>
            </div>
            <div class="goto-catalog">
                <a href="">Sepatu</a>
            </div>
            <div class="goto-catalog">
                <a href="">Tenda</a>
            </div>
        </div>
    </div>

    
    <div class="product-grid">
    @foreach($produk as $p)
      <div class="product-card">
        <a href="">
            <div class="gambar-container"><img src="{{ asset('storage/' . $p->image)}}" alt="Product 1"></div>
            <div class="card-text">
                <span class="price">Rp.{{$p->harga}}<span class="per">/hari</span></span>
                <h3>{{$p->nama_barang}}</h3>
                <ul>
                    <li>{{$p->stok}} {{$p->nama_barang}}</li>
                </ul>
                <div class="action-catalog">
                    <div class="edit"><a href="/produk/edit/{{$p->id}}"><i class='bx bxs-edit'></i></a></div>
                    <div class="hapus"><a href="/produk/destroy/{{$p->id}}" onClick="return confirm('Yakin Hapus?')"><i class='bx bx-x-circle'></i></a></div>
                </div>
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