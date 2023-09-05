<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
    <div class="product-grid">
    @foreach($produk as $p)
      <div class="product-card">
        <a href="{{ route('produk.detail', ['id' => $p->id]) }}">
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
</body>
</html>
