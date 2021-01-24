<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- SCSS -->
    <link rel="stylesheet" href="style/main.css">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Data aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Date</title>
</head>

<body>

    <?php

    date_default_timezone_set('Asia/Jakarta');

    if (isset($_POST["submit"])) {
        $jam = date("H");
        $menit = date("i");
        $date = date("d / M / Y");
        $lokasi = true;
    } else {
        $jam = "00";
        $menit = "00";
        $date = "???";
    }

    ?>

    <div class="text-center content">
        <h1 class="text-uppercase text-light mb-4">Set Waktu!</h1>
        <form action="" method="POST">
            <button class="btn btn-outline-light mb-4" name="submit">Lihat Waktu</button>
            <div class="d-flex justify-content-center">
                <div class="card bg-dark mr-1">
                    <div class="card-body ">
                        <h1 class="text-light" data-aos="zoom-in"><?= $jam; ?></h1>
                    </div>
                </div>
                <h1 class="titik">:</h1>
                <div class="card bg-dark ml-1">
                    <div class="card-body ">
                        <h1 class="text-light" data-aos="zoom-in"><?= $menit; ?></h1>
                    </div>
                </div>
            </div>
            <h3 class="mt-3 mb-3 text-light" data-aos="fade-up"><?= $date; ?></h3>
            <?php if (isset($lokasi)) : ?>
                <h1 data-aos="fade-up" data-aos-duration="900" class="location"><i class="fas fa-map-marker-alt"></i> Indonesia</h1>
            <?php endif; ?>
        </form>
    </div>

    <div class="d-flex justify-content-center text-center fixed-bottom footer">
        <div class="col-md-4 col-sm-8">
            <div class="bg-secondary py-3 cube">
                <h3 class="mb-3">Follow Developer</h3>
                <h6 class="mt-2">
                    <a href=""><i class="fab fa-github"></i> rejakartans</a> |
                    <a href=""><i class="fab fa-instagram"></i> reejaditya</a>
                </h6>
            </div>
        </div>
    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>