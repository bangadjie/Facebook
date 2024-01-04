<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
</head>
<body>
    <h1>Daftar</h1>
    <h1>Ini cepat dan mudah</h1>
    <hr>
    <form action="hasil.php" method="post">
        <table>
            <tr>
                <td><input type="text" placeholder="Nama depan" name="nd"></td>
                <td><input type="text" placeholder="Nama belakang" name="nb"></td>
            </tr>
            <tr>
                <td><input type="text" placeholder="Nomor seluler atau email" name="ns"></td>
            </tr>
            <tr>
                <td><input type="password" placeholder="Kata Sandi" name="password"></td>
            </tr>
            <tr>
                <td>Tanggal
                    <select name="tanggal">
                        <option value='0'>0</option>
                        <option value="1">1</option>
                        <option value='2'>2</option>
                        <option value="3">3</option>
                        <option value='4'>4</option>
                        <option value="5">5</option>
                        <option value='6'>6</option>
                        <option value="7">7</option>
                        <option value='8'>8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </td>
                <td>Bulan
                    <select name="bulan">
                        <option value='Januari'>januari</option>
                        <option value='Februari'>Februari</option>
                        <option value='Maret'>Maret</option>
                        <option value='April'>April</option>
                        <option value='Mei'>Mei</option>
                        <option value='Juni'>Juni</option>
                        <option value='Juli'>juli</option>
                        <option value='Agustus'>Agustus</option>
                        <option value='September'>September</option>
                        <option value='Oktober'>Oktober</option>
                        <option value='November'>November</option>
                        <option value='Desember'>Desember</option>
                    </select>
                </td>
                <td>Tahun
                    <select name="tahun">
                        <option value='2000'>2000</option>
                        <option value='2001'>2001</option>
                        <option value='2002'>2002</option>
                        <option value='2003'>2003</option>
                        <option value='2004'>2004</option>
                        <option value='2005'>2005</option>
                        <option value='2006'>2006</option>
                        <option value='2007'>2007</option>
                        <option value='2008'>2008</option>
                        <option value='2009'>2009</option>
                        <option value='2010'>2010</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="radio" value="P" name="jenis_kelamin">Perempuan</td>
                <td><input type="radio" value="L" name="jenis_kelamin">Laki-laki</td>
                <td><input type="radio" value="N" name="jenis_kelamin">Netral</td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
