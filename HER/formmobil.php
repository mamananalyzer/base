<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

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
                <input type="text" class="form-control" id="namaPelanggan" placeholder="Nama Pelanggan">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2">Alamat :</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="alamat" rows="4" placeholder="RT/RW No. Rumah, Kelurahan/Desa, Kecamatan, Provinsi, Kode POS"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="jenisMobil" class="col-sm-2">Jenis Mobil :</label>
                <div class="col-sm-6">
                    <select class="form-control" id="jenisMobil">
                    <option>Innova</option>
                    <option>Yaris</option>
                    <option>Fortuner</option>
                    <option>Avanza</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="caraBayar" class="col-sm-2">Cara Bayar :</label>
                    <div class="col-sm-6">
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Cash</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Kredit</label>
                        </div>
                    </div>
            </div>
            <button type="submit" class="btn btn-primary mb-2">PROSES</button>
            <button type="submit" class="btn btn-danger mb-2">BATAL</button>
        </form>
      </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>