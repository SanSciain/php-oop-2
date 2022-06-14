<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Toy.php";
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Gadget.php";
require_once __DIR__ . "/User.php";

$io = new User("Artuto", "Della Valle", "12-9-2024", "14-6-2022");

$products = [];
$products[] = new Toy("tennis ball", 3, "plastic", "2-12");
$products[] = new Toy("bone", 5, "plastic");
$products[] = new Food("canned meat", 7, "12/9/2023", "meat", "7-8");
$products[] = new Food("canned meat", 6, "27/3/2024", "chicken");
$products[] = new Gadget("leash", 10, "dog");
$products[] = new Gadget("collar", 11, "cat");

$io->addTo($products[0]);
$io->addTo($products[2]);
$io->addTo($products[3]);
?>

<h2>Prodotti</h2>
<ul>
    <?php foreach ($products as $item) {
    ?>
        <li> <?php echo $item->infos() ?> </li>
        <br>
    <?php
    }
    ?>
    <p>Prezzo totale: euro <?php echo $io->total(); ?> </p>
</ul>