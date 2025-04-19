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
                    <h1 class="text-center">Edit Data</h1>

                    <?php
                    include('koneksi.php');

                    // ambil parameter
                    $id = $_GET['id'];

                    $sql = "select * from list where id='$id'";
                    $query = mysqli_query($koneksi, $sql) or die("Gagal sql");
                    $data = mysqli_fetch_array($query);
                    ?>
                    <!-- form edit -->
                    <form action="simpan_edit_data.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" value="<?php echo $data['judul']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


</body>

</html>