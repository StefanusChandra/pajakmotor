<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pembayaran Pajak</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Montserrat:wght@400;500&family=Water+Brush&display=swap');

        body {
            background-color: rgb(30, 144, 255);
        }

        .head {
            display: flex;
            width: 100%;
        }

        .center {
            display: block;
            margin-right: auto;
            margin-left: auto;
        }

        .paper {
            background-color: white;
            width: 500px;
            position: relative;
            padding: 30px;
            border-radius: 20px;
        }

        h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 25px;
            font-weight: 500;
            line-height: 0px;
            margin-bottom: 1px;
        }

        h2 {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 0px;
        }

        .simpan {
            width: 177px;
            height: 25px;
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 0px;
            font-weight: 500;
            color: white;
            background-color: rgb(30, 144, 255);
            border-radius: 5px;
            border-color: rgb(30, 144, 255);
        }

        .lihat {
            width: 65px;
            height: 25px;
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 400;
            font-weight: 500;
            background-color: rgba(444, 555, 0, 0.8);
            border-radius: 5px;
            border-color: rgb(30, 144, 255);
        }
    </style>
</head>

<body>
    <br><br><br>
    <br><br>
    <br><br>
    <div class="paper  center">
        <h1><button class="lihat"><?php echo anchor('user_controller', 'Lihat'); ?></button></h1>
        <br>
        <center>
            <h1><b>Inputkan Data Pembayaran Pajak</b></h1>
        </center>
        <br>
        <form action="tambah_aksi" method="post" name="formD" id="formD">
            <table style="margin:20px auto;">
                <tr>
                    <td>
                        <h2>No.Urut</h2>
                    </td>
                    <td>
                        <h2>:</h2>
                    </td>
                    <td><input type="text" name="no_urut"></td>
                </tr>
                <tr>
                    <td>
                        <h2>Jenis Motor</h2>
                    </td>
                    <td>
                        <h2>:</h2>
                    </td>
                    <td><input type="text" name="jenis_motor"></td>
                </tr>
                <tr>
                    <td>
                        <h2>Biaya Pajak</h2>
                    </td>
                    <td>
                        <h2>:<h2>
                    </td>
                    <td><input type="text" name="biaya_pajak" onkeyup="OnChange(this.value)" onkeypress="return isNumberKey(event)"></td>
                </tr>
                <tr>
                    <td>
                        <h2>Jumlah Pajak/Bulan</h2>
                    </td>
                    <td>
                        <h2>:</h2>
                    </td>
                    <td><input type="text" name="jumlah" onkeyup="OnChange(this.value)" onkeypress="return isNumberKey(event)"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input class="simpan" type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    </div>
    <script type="text/javascript">
        pajak = document.formD.biaya_pajak.value;
        document.formD.total.value = pajak;
        jumlah = document.formD.jumlah.value;
        document.formD.total.value = jumlah;

        function OnChange(value) {
            pajak = document.formD.biaya_pajak.value;
            jumlah = document.formD.jumlah.value;
            totalbayar = biaya * jumlah;
            document.formD.total.value = totalbayar;
        }
    </script>

</body>

</html>