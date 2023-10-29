<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas06pro</title>
</head>
<body>
    <h1>Data Registrasi</h1>
    <div class="row">
    <div class="col-6">
    <table border="1" style="width: 25%;" >
    <tr>
        <td>Nama</td>
        <td>
            <?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>
        </td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>
            <?php echo isset($_POST['alamat']) ? $_POST['alamat'] : ''; ?>
        </td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>
            <?php echo isset($_POST['tmptlahir']) ? $_POST['tmptlahir'] : ''; ?>
        </td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>
            <?php echo isset($_POST['tnggllahir']) ? $_POST['tnggllahir'] : ''; ?>
        </td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>
            <?php echo isset($_POST['jk']) ? $_POST['jk'] : ''; ?>
        </td>
    </tr>
    <tr>
        <td>Pendidikan</td>
        <td>
            <?php echo isset($_POST['pendidikan']) ?$_POST['pendidikan'] : ''; ?>
        </td>
    </tr>

    </table>
    <a href="Tugas06.php">Back To Home</a>
</body>
</html>