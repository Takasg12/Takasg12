<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App To Do List</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <!-- Main Template-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1 class="text-center">To Do List</h1>

                    <!-- Di sini Buttom Tambah -->
                    <a href="form_tambah.php" class="btn btn-primary btn-md">
                        <ion-icon name="add-outline"></ion-icon>
                    </a>

                    <!-- Di sini card-->

                    <?php

                    include('koneksi.php');
                    $sql = "select * from  list";
                    $query = mysqli_query($koneksi, $sql) or die("Gagal sql");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>

                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <ion-icon name="checkbox-outline"
                                        style="font-size: 20px;color: green; position:relative; top: 5px;"></ion-icon>
                                    <?php echo $data['judul'] ?>
                                </div>
                                <div class="col-md-3">
                                    <a href="#" class="btn btn-success btn-sm">
                                        <ion-icon name="checkmark-outline"></ion-icon>
                                    </a>
                                    <a href="#" class="btn btn-warning btn-sm">
                                        <ion-icon name="pencil-outline"></ion-icon>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm">
                                        <ion-icon name="close-circle-outline"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Ini icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>