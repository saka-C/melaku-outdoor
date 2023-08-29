<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="./asset/melaku-logo-kecil1.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/asset/style.css">
 
    <title>Kategori</title>
</head>
<body>
    <div class="alert alert-warning" role="alert">
    </div>
<div class="card-form-container">
    <div class="form-card">
        <div class="logo">
            <img src="./asset/melaku-logo.png" alt="">
        </div>
        <h2>Update Kategori Produk</h2>
        <form method="POST" action="/tipe/update/{{$tipe->id}}" >
        @csrf
            <div class="form-group">
                <label>Kategori baru</label>
                <input placeholder="exemple: tas/tenda/sepatu" name="tipe" value="{{$tipe->tipe}}" required>
            </div>
            
            <button type="submit" name="submit">Update Kategori</button>
        </form>
    </div>
</div>



</body>
</html>