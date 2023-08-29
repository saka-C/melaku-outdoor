<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/asset/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
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

<!-- ============================ Detail =================================
===========================================================================  -->
<div class="detail-container">
    <div class="detail">
        <div class="detail-gambar">
            <img src="./asset/tas.jpg" alt="">
        </div>
        <div class="detail-text">
            <div class="detail-title">
                <h1>TAS AREI 9 LITER</h1>
                <span class="harga">Rp.50.000,00</span>
                <span class="quantity">1x/hari</span>
            </div>
            <div class="detail-deskripsi">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio quo necessitatibus laudantium laborum modi consectetur consequatur vel nulla, voluptas deleniti!</p>
            </div>
            <div class="stok">Stok : 30</div>
            <div class="action-detail">
                <button class="cart" id="openPopupBtn"><i class='bx bxs-cart-alt' ></i>Add to Cart</button>
                <button ><i class='bx bxs-shopping-bag-alt' ></i>Sewa Sekarang</button>
            </div>
        </div>
    </div>
</div>
<h4><span>Rekomendasi Paket</span></h4>
<div class="container-slider">
    <button class="slider-btn prev-btn" onclick="prevSlide()"><i class='bx bxs-caret-left-circle'></i> Previous</button>
    <div class="slider">
        <div class="slides">
          <!-- Foto Slide -->
          <div class="slide">
                <a href="">
                    <img src="./asset/card-paket-2.png" alt="Gambar 1">
                    <span>Paket Family</span>
                </a>
            </div>
          <!-- Foto Slide end -->
          <div class="slide">
            <a href="">
                <img src="./asset/card-paket-2.png" alt="Gambar 1">
                <span>Paket Family</span>
            </a>
        </div>
        <div class="slide">
            <a href="">
                <img src="./asset/card-paket-2.png" alt="Gambar 1">
                <span>Paket Family</span>
            </a>
        </div>
        <div class="slide">
            <a href="">
                <img src="./asset/card-paket-2.png" alt="Gambar 1">
                <span>Paket Family</span>
            </a>
        </div>
        <div class="slide">
            <a href="">
                <img src="./asset/card-paket-2.png" alt="Gambar 1">
                <span>Paket Family</span>
            </a>
        </div>
        <div class="slide">
            <a href="">
                <img src="./asset/card-paket-2.png" alt="Gambar 1">
                <span>Paket Family</span>
            </a>
        </div>
        <div class="slide">
            <a href="">
                <img src="./asset/card-paket-2.png" alt="Gambar 1">
                <span>Paket Family</span>
            </a>
        </div>
        <div class="slide">
            <a href="">
                <img src="./asset/card-paket-2.png" alt="Gambar 1">
                <span>Paket Family</span>
            </a>
        </div>
        <div class="slide">
            <a href="">
                <img src="./asset/card-paket-2.png" alt="Gambar 1">
                <span>Paket Family</span>
            </a>
        </div>
        </div>
    </div>
    <button class="slider-btn next-btn" onclick="nextSlide()">Next<i class='bx bxs-caret-right-circle'></i></button>
</div>
  

<!-- ============================ Detail end =================================
===========================================================================  -->

<!-- Popup -->
<div id="popup" class="popup">
    <div class="popup-content">
      <span id="closePopupBtn" class="close"><p>X</p></span>
      <h2>Isi untuk melanjutkan</h2>
      <form id="rentalForm">
        <label for="quantity">Jumlah Barang:</label>
        <div class="tombol-quantity">
          <button id="kurangQuantity">-</button>
          <div id="hasilQuantity">0</div>
          <button id="tambahQuantity">+</button>
        </div>
        <label for="duration">Lama Penyewaan (hari):</label>
        <div class="tombol-quantity">
          <button id="kurangDuration">-</button>
          <div id="hasilDuration">0</div>
          <button id="tambahDuration">+</button>
        </div>
        <p>Total Harga: <span id="result">0</span></p>
        <button type="submit">Tambahkan Ke Keranjang!</button>
      </form>
    </div>
  </div>
  
<!-- ============================ footer =================================
===========================================================================  -->
<footer class="footer">
    <div class="footer-logo">
        <img src="./asset/melaku-logo.png" alt="Logo">
        <div class="logo-text">
        </div>
    </div>
    <div class="footer-credit">
        <a href="#" id="fb"><i class='bx bxl-facebook-circle'></i> Facebook</a>
        <a href="#" id="ig"><i class='bx bxl-instagram' ></i> Instagram</a>
        <a href="#" id="wa"><i class='bx bxl-whatsapp' ></i> Whatsapp</a>
    </div>
</footer>
<div class="footer-copyright">
    <p>© 2023 Melaku Outdoor. All rights reserved.</p>
</div>
<!-- ========================== End footer =================================
===========================================================================  -->


    </div>
    
    <script src="script.js"></script>

</body>
</html>