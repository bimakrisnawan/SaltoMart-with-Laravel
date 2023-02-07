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

    <title>Tambah Barang</title>
</head>

<body>
    <section id="siapa_kamu">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Tambah Barang SaltoMart</h2>
                    <span class="sub-title">Ayo Tambah Barangmu! Jangan Sepi Kaya Kuburan!</span>
                </div>
            </div>
            <div class="row card-pilihan ">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="/input" method="post">
                        {{csrf_field() }}
                        <div class="mb-3">
                            <h5>Nama Barang</h5>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <h5>Stok</h5>
                            <input type="number" name="stok" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <h5>Harga</h5>
                            <input type="number" name="harga" class="form-control" required>
                        </div>
                        <br />
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>