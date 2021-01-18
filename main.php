<?php
include_once __DIR__ . '/classes/Byke.php';
include_once __DIR__ . '/classes/Ball.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<body>
    
    <header>
        <h1>
            Shop online
        </h1>
    </header>

    <main>
        <?php
           $byke = new Byke(150, 5, 'Lightning', 'Bolzi', 1.8);
        //    var_dump($byke);
        ?>
        <section>
            <h2>
                Prodotto:
                <?php echo $byke->printName(); ?>
            </h2>
            <h2>
                Costo: 
                <?php echo $byke->printPrice(); ?>
            </h2>
            <h2>
                Disponibilità: 
                <?php echo $byke->printQt(); ?>
            </h2>
            <h2>
                Produttore: 
                <?php echo $byke->printProductor(); ?>
            </h2>
            <h2>
                Lunghezza (metri): 
                <?php echo $byke->printLng(); ?>
            </h2>
        </section>

        <?php
           $ball = new Ball(30, 200, 'MagicFoot', 'Nike', 5);
        //    var_dump($byke);
        ?>

        <div>
            <h2>
                Prodotto:
                <?php echo $ball->printName(); ?>
            </h2>
            <h2>
                Costo: 
                <?php echo $ball->printPrice(); ?>
            </h2>
            <h2>
                Disponibilità: 
                <?php echo $ball->printQt(); ?>
            </h2>
            <h2>
                Produttore: 
                <?php echo $ball->printProductor(); ?>
            </h2>
            <h2>
                Misura: 
                <?php echo $ball->printMisura(); ?>
            </h2>
        </div>
    </main>
</body>
</html>