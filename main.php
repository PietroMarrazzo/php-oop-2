<?php
include_once __DIR__ . '/classes/Byke.php'
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
           $byke = new Byke(150, 5, 'Lightning', 'Bolzi');
           var_dump($byke);
        ?>
        <section>
            <h2>
                Prodotto:
                <?php echo $byke->printName(); ?>
            </h2>
            
        </section>
    </main>
</body>
</html>