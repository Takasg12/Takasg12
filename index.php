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

                    <!-- Di sini php di atas card dan di bawah buttom tamabah -->
                    <?php

                    include('koneksi.php');
                    $sql = "select * from  list";
                    $query = mysqli_query($koneksi, $sql) or die("Gagal sql");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <!-- Di sini card-->

                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <?php if ($data['setatus_selesai'] == 1) {
                                        ?>
                                    <ion-icon name="checkbox-outline"
                                        style="font-size: 20px;color: green; position:relative; top: 5px;"></ion-icon>
                                    <?php } ?>
                                    <?php echo $data['judul'] ?>
                                </div>
                                <!-- buttom selesai -->
                                <div class="col-md-3">
                                    <a href="set_selesai.php?id=<?php echo $data['id']; ?>"
                                        class="btn btn-success btn-sm">
                                        <ion-icon name="checkmark-outline"></ion-icon>
                                    </a>
                                    <!-- buttom edit  -->
                                    <a href="form_edit.php?id=<?php echo $data['id']; ?>"
                                        class="btn btn-warning btn-sm">
                                        <ion-icon name="pencil-outline"></ion-icon>
                                    </a>
                                    <!-- buttom hapus -->
                                    <a href="hapus_data.php?id=<?php echo $data['id']; ?>"
                                        class="btn btn-danger btn-sm">
                                        <ion-icon name="close-circle-outline"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tutup tanda kurung kurawal harus di bawah sini  -->
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