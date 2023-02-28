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

                <h2>Tahun Kabisat</h2><br> 

                <form>
    
                    <label for="tahun" class="label">Masukkan Tahun</label>

                    <input type="text" id="tahun" name="tahun" placeholder="Masukan Tahun " class="input">

                    <br><br>

                    <button type="submit" name="Tahun" class="button">Periksa</button>
  
                </form>
  
                <div id="Hasil">

                    <?php

                        if (isset($_GET["Tahun"])){

                            $tahun =  $_GET["tahun"];

                            if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
    
                                echo $tahun . " adalah tahun kabisat";
    
                            } else {
    
                                echo $tahun . " bukan tahun kabisat";
    
                            }

                        }

                    ?>

                </div>

            </div>

        </nav>

    </body>

</html>