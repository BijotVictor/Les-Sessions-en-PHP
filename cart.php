<?php

session_start();
if (empty($_SESSION['loginname'])) {
    header('Location: login.php');
}

require 'inc/head.php';
require 'inc/data/products.php'?>

    <section class="cookies container-fluid">
        <div class="row">
            <p>Votre panier :</p>
            <p><?= implode(", ", $catalog[$_SESSION['cookie']]); ?></p>
            <?php if (!empty($_SESSION['cart'])){ 
                foreach ($_SESSION['cart'] as $key => $value) {
                    $cookie = $catalog[$key];
                ?>
                <?php echo $cookie['name'] ?>
                <?php echo $cookie['description'] ?><br>
            <?php } 
            } ?>
        </div>
    </section>
<?php require 'inc/foot.php'; ?>