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

                <h2>Kata palindrom</h2><br> 

                <form>
    
                    <label for="katakalimat" class="label">Masukkan Kata</label>

                    <input type="text" id="katakalimat" name="katakalimat" placeholder="Masukan Kata " class="input">

                    <br><br>

                    <button type="submit" name="Kata-Kalimat" class="button">Periksa</button>
  
                </form>
  
                <div id="Hasil">

                    <?php

                        if (isset($_GET["Kata-Kalimat"])){

                            $kata = $_GET["katakalimat"];

                            $kata_balik = strrev($kata); 
      
                            if ($kata == $kata_balik) {
         
                                echo $kata . " adalah palindrom";
        
                            } else {
         
                                echo $kata . " bukan palindrom";
        
                            }

                        }

                    ?>

                </div>

            </div>

        </nav>

    </body>

</html>