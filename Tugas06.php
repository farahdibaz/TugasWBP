<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 06</title>
</head>
<body>
    <h1>Form Registrasi</h1>
    <form action="Tugas06Pro.php" method="POST">
        <h3>Isi data dibawah ini    :</h3>
        <table cellpading="3">
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="data_nama">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea type="text" name="data_alamat" id="data_alamat" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>
                    <input type="text" name="data_tempat_lahir">
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>
                    <input type="text" name="data_tanggal_lahir">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="data_jk" id="data_jk" value="Laki-laki">Laki-laki
                    <input type="radio" name="data_jk" id="data_jk" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>
                    <select name="data_pendidikan" id="data_pendidikan">
                        <option value="S1">S1</option>
                        <option value="SMA">SMA</option>
                        <option value="SMP">SMP</option>
                        <option value="SD">SD</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit">Submit</button>
        <button type="reset">Cancel</button>
</form>
</body>
</html>