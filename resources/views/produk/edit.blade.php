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
            <a href="tambah.html">Tambah Produk</a>
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

<!-- ============================ Form UPDATE =================================
===========================================================================  -->
<div class="detail-container">
    <div class="detail edit-detail">
        <div class="detail-gambar">
            <img id="imagePreview" src="{{ asset('storage/' . $produk->image)}}" alt="Gambar Produk">
        </div>
        <form action="/produk/update/{{$produk->id}}" method="POST"  enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            
            <div class="form-group form-edit">
                <label>Foto Produk</label>
                <input type="file" id="fileInput" accept="image/*" name="image">
            </div>
            <div class="form-group form-edit">
                <label>Nama Produk</label>
                <input name="nama_barang" value="{{$produk->nama_barang}}">
            </div>
            <div class="form-group">
                <label>Kategori Produk</label>
                <select name="tipe_id" id="">
                <option disabled selected value >Pilih Kategori</option>
                @foreach ($tipe as $t)
                <option value="{{$t->id}}">{{$t->tipe}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group form-edit">
                <label>Harga Produk</label>
                <input name="harga" value="{{$produk->harga}}">
            </div>
            <div class="form-group form-edit">
                <label>Deskripsi Produk</label>
                <textarea name="deskripsi" id="" >{{$produk->deskripsi}}</textarea>
            </div>
            <div class="form-group form-edit">
                <label>Stok Produk</label>
                <input name="stok" value="{{$produk->stok}}">
            </div>
            <button type="submit" name="submit">Update</button>
        </form>
    </div>
</div>

<!-- ============================ Form UPDATE end =================================
===========================================================================  -->


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
    <script>
    document.getElementById('fileInput').addEventListener('change', function(event) {
        var fileInput = event.target;
        var imagePreview = document.getElementById('imagePreview');
        var file = fileInput.files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                imagePreview.src = e.target.result;
            };

            reader.readAsDataURL(file);
        } else {
            imagePreview.src = "{{ asset('storage/' . $produk->image)}}";
        }
    });
</script>

</body>
</html>