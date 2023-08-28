<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="./asset/melaku-logo-kecil1.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/asset/style.css">
 
    <title>Tambah Produk</title>
</head>
<body>
    <div class="alert alert-warning" role="alert">
    </div>
<div class="card-form-container">
    <div class="form-card">
        <div class="logo">
            <img src="./asset/melaku-logo.png" alt="">
        </div>
        <h2>Tambah Produk Katalog</h2>
        <form method="POST" action="/produk/store" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <div class="picture-container">
                    <div class="picture">
                        <input type="file" id="fileInput" accept="image/*" name="image">
                        <label for="image" class="file-label">
                            <div class="plus-icon">+</div>
                            <img id="pictureImage" src="#" alt="" />
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Nama Produk</label>
                <input placeholder="nama produk" name="nama_barang" required>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number"  placeholder="Harga produk" name="harga" required>
            </div>
            <div class="form-group">
                <label>Deskripsi Produk</label>
                <textarea name="deskripsi" id="" placeholder="Tambahkan deskripsi seputar produk"></textarea>
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number"  placeholder="Stok produk" name="stok" required>
            </div>
            
            <button type="submit" name="submit">Tambah Produk</button>
        </form>
    </div>
</div>


<script>
    const fileInput = document.getElementById("fileInput");
    const profileImage = document.getElementById("pictureImage");
    const profilePicture = document.querySelector(".picture");
    const plusIcon = document.querySelector(".plus-icon");

    fileInput.addEventListener("change", (event) => {
    const selectedFile = event.target.files[0];
    if (selectedFile) {
        const reader = new FileReader();
        reader.onload = (e) => {
        profileImage.src = e.target.result;
        profilePicture.classList.add("has-image");
        profilePicture.classList.add("has-dashed");
        plusIcon.style.display = "none";

        };
        reader.readAsDataURL(selectedFile);
    } else {
        profileImage.src = "";
        profilePicture.classList.remove("has-image");
        profilePicture.classList.remove("has-dashed");
        plusIcon.style.display = "block";
    }
    });
  </script>

</body>
</html>