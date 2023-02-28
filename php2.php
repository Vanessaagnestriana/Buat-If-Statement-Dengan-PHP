<!DOCTYPE html>
<html lang="en">

    <head>
    
        <title>PHP IF </title>
        
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

        <nav class="navMenu">
    
            <a href="index.php">PHP1</a>
    
            <a href="php2.php">PHP2</a>
    
            <a href="php3.php">PHP3</a>

            <a href="php4.php">PHP4</a>

            <a href="php5.php">PHP5</a>
      
            <div class="dot"></div>
    
            <div class="Conten">

                <h2>Genap / Ganjil!</h2><br>

                <form>
    
                    <label for="genapganjil" class="label">Masukkan Nilai:</label>
    
                    <input type="number" id="genapganjil" name="genapganjil" placeholder="Masukan Nilai " class="input">

                    <br><br>
    
                    <button type="submit" name="Genap-Ganjil" class="button">Hitung</button>
  
                </form>
  
                <div id="Hasil">

                    <?php

                        if (isset($_GET["Genap-Ganjil"])){

                            $angka = $_GET["genapganjil"]; 
          
                            if ($angka % 2 == 0) {
            
                                echo $angka . " adalah bilangan genap";
            
                            } else {
            
                                echo $angka . " adalah bilangan ganjil";
            
                            }                      

                        }
        
                    ?>

                </div>

            </div>

        </nav>

    </body>

</html>