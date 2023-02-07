<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Halaman Pengunjung</title>
</head>

<body>
    <section id="siapa_kamu">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Barang Barang <a href="/">SaltoMart</a></h2>
                    <span class="sub-title">Barang Minimalis, Order Soon!</span>
                </div>
            </div>
            <div class="row text-center card-pilihan ">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <table class="center table table-striped">
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Harga</th>
                        </tr>
                        @foreach($barang as $b)
                        <tr>
                            <td>{{ $b->id }}</td>
                            <td>{{ $b->nama }}</td>
                            <td>{{ $b->stok }}</td>
                            <td>{{ $b->harga }}</td>
                        </tr>
                        @endforeach
                    </table>
                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>