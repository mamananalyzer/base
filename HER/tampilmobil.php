<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <?php
        require 'functions.php';
    ?>

    <title>FORM MOBIL</title>
  </head>
  <body>
      <div class="container">
        <div class="text-center">
            <h1>PT. DIAN MOBILINDO</h1>
            <h2>DEALER MOBIL TOYOTA</h2>
            <h2>-------------------</h2>
        </div>

        <form>
            <div class="form-group row">
                <label for="namaPelanggan" class="col-sm-2 col-form-label">Nama Pelanggan :</label>
                <div class="col-sm-6">
                    <?php echo $_POST["nampel"]; ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2">Alamat :</label>
                <div class="col-sm-6">
                    <?php echo $_POST["alamat"]; ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="jenismobil" class="col-sm-2">Jenis Mobil :</label>
                <div class="col-sm-6">
                    <?php echo $_POST["jenismobil"]; ?> 
                </div>
            </div>
            <div class="form-group row">
                <label for="jenismobil" class="col-sm-2">Harga :</label>
                <div class="col-sm-6">
                    <?php 
                        $harga = $_POST["jenismobil"];;

                        switch ($harga) {
                            case "Innova":
                                echo "Rp. 200.000.000";
                                break;
                            case "Yaris":
                                echo "Rp. 185.000.000";
                                break;
                            case "Fortuner":
                                echo "Rp. 400.000.000";
                                break;
                            case "Avanza":
                                echo "Rp. 130.000.000";
                                break;
                            default:
                                echo "Rp. 0";
                        }
                    // echo $harga; 
                    ?> 
                </div>
            </div>
            <div class="form-group row">
                <label for="carabayar" class="col-sm-2">Cara Bayar :</label>
                    <div class="col-sm-6">
                        <?php echo $_POST["carabayar"]; ?>
                    </div>
            </div>
            <div class="btn btn-light mb-2">
                <a href="formmobil.php">KEMBALI</a>
            </div>
            
        </form>
      </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>