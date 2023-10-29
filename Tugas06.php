<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
            <h1>Form Registrasi</h1>
            <form action="Tugas06Pro.php" method="POST" >
                <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Anda" require>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea type="text" class="form-control" name="alamat" id="alamat" row="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="tmptlahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tmptlahir" id="tmptlahir" placeholder="Tempat Lahir Anda" require>
                </div>
                <div class="mb-3">
                    <label for="tnggllahir" class="form-label">Tanggal Lahir</label>
                    <input type="text" class="form-control" name="tnggllahir" id="tnggllahir" placeholder="Tanggal Lahir Anda" require>
                </div>
                <div class="mb-3">
                    <label class="radio-inline">Laki-Laki</label>
                    <input type="radio" name="jk" id="jk" value="Laki-Laki" require data-fv-notempty-message="Tidak Boleh Kosong">
                    <label class="radio-inline">Perempuan</label>
                    <input type="radio" name="jk" id="jk" value="Perempuan" require data-fv-notempty-message="Tidak Boleh Kosong">
                </div>
                <select class="form-select" aria-label="Default select example" name="pendidikan">
                    <option selected>Pilih</option>
                    <option value="S1">S1</option>
                    <option value="SMK">SMK</option>
                    <option value="SMP">SMP</option>
                    <option value="SD">SD</option>
                </select><br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-default">Cancel</button>

    </div>
        </div>
            </div>
            </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>