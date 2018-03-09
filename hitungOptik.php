<?php 
    @$fokusObjek = $_REQUEST['fokusObjek'];
    @$fokusOkuler = $_REQUEST['fokusOkuler'];
    @$fokusPembalik = $_REQUEST['fokusPembalik'];
    @$panjangTeropongBumiTanpaAkomodasi= $fokusObjek + (4 * $fokusPembalik) + $fokusOkuler;
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Hitung Optik</title>
 </head>
 <style type="text/css">
   .font-simpulan{
    font-size: 15px;
    font-family:verdana;
   }
 </style>
 <body>
 <center>
  <div style="width: 40% ;border: solid black 1px; margin-top: 5%; padding-right: 3%; padding-left: 3%">
  <center>
  <h1 style="margin-top: 3%; font-family:verdana;">Jarak Teropong Bumi untuk Mata Tanpa Akomodasi</h1>
  </center>
  <center>
   <form method="POST" style="margin-bottom: 3%">
            <table>
                <tr>
                    <td>fOb</td>
                    <td>=</td>
                    <td><input type="text" name="fokusObjek" value="<?php echo $fokusObjek; ?>"/>cm<br/></td>
                </tr>
                <tr>
                    <td>fP</td>
                    <td>=</td>
                    <td><input type="text" name="fokusPembalik" value="<?php echo $fokusPembalik; ?>"/>cm<br/></td>
                </tr>
                <tr>
                    <td>fOk</td>
                    <td>=</td>
                    <td><input type="text" name="fokusOkuler" value="<?php echo $fokusOkuler; ?>"/>cm<br/></td>
                </tr>
            </table>
            <input type="button" id="btnHitung" value="Hitung" onclick="hitungLuas();" style="margin-bottom: 3%; background-color: #4CAF50; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer;"><br/><br/>
            <div class="font-simpulan">
            <?php
                echo "Panjang Teropong Bumi untuk Mata Tanpa Akomodasi = ".$panjangTeropongBumiTanpaAkomodasi." cm<br/>";
            ?>
            </div>
    </form>
  </center>
  </div>
  </center>
  </body>
 </html>