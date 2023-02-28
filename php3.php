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

                <h2>Lulus / Tidak</h2><br> 

                <form>
    
                    <label for="lulustidaklulus" class="label">Masukkan Nilai:</label>
    
                    <input type="number" id="lulustidaklulus" name="lulustidaklulus" placeholder="Masukan Nilai " class="input">

                    <br><br>
    
                    <button type="submit" name="Lulus-TidakLulus" class="button">Hitung</button>
  
                </form>
  
                <div id="Hasil">

                    <?php

                        if (isset($_GET["Lulus-TidakLulus"])){

                            $nilai = $_GET["lulustidaklulus"]; 
          
                            if ($nilai >= 60) {
            
                                echo "Selamat, kamu lulus!";
            
                            } else {
             
                                echo "Maaf, kamu tidak lulus.";
            
                            }                     

                        }
        
                    ?>

                </div>

            </div>

        </nav>

    </body>

</html>