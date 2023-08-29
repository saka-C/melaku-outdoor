
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/asset/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="./asset/melaku-logo-kecil1.png" type="image/x-icon">
    <title>Tipe product store</title>
</head>
<body>
    <div class="container">



<!-- ============================ table tipe =================================
===========================================================================  -->
<div class="css-table">
<h1>Kategori</h1>

<div class="table-container">
    <h2><a href="/tipe/create">tambah Kategori</a></h2>
    <table>
    <thead>
        <tr>
        <th>No</th>
        <th>Jenis Barang</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tipe as $t)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$t->tipe}}</td>
        <td>
            <div class=" action-table">
                <div class="edit-table"><a href="/tipe/edit/{{$t->id}}"><i class='bx bxs-edit'></i></a></div>
                <div class="hapus hapus-table"><a href="/tipe/destroy/{{$t->id}}" onClick="return confirm('Yakin Hapus?')"><i class='bx bx-x-circle'></i></a></div>
            </div>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>


</div>


<!-- ============================ table tipe end =================================
===========================================================================  -->



    </div>
    
    <script src="script.js"></script>
</body>
</html>