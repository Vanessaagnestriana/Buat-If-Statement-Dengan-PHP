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

                <h2>Positif / Negatif!</h2><br>

                <form>


                    <label for="positifnegatif" class="label">Masukkan Nilai:</label>


                    <input type="number" id="positifnegatif" name="positifnegatif" placeholder="Masukan Nilai " class="input">


                    <br><br>


                    <button type="submit" name="Positif-Negatif" class="button">Hitung</button>

                </form>

                <div id="Hasil">

                    <?php

                        if (isset($_GET["Positif-Negatif"])){

                            $bilangan = $_GET["positifnegatif"];

                            if ($bilangan > 0) {
        
                                echo "Bilangan $bilangan adalah bilangan positif.";

                            } else if ($bilangan < 0) {

                                echo "Bilangan $bilangan adalah bilangan negatif.";

                            } else {

                                echo "Bilangan $bilangan adalah nol.";

                            }

                        }
    
                    ?>

                </div>

            </div>

        </nav>

    </body>

</html>