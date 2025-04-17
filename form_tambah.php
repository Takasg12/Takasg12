<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 ">
                    <h1 class="text-center">Tambah Data</h1>

                    <!-- form tambah -->
                    <form action="simpan_data.php" method="POST">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


</body>

</html>