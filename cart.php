<?php

require 'inc/session.php';
require 'inc/head.php';
$products=[46 => 'Pecan nuts', 36 => 'Chocolate chips', 58 => 'Chocolate cookie', 32 => "M&M's© cookies'"];

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php

        if (empty($_SESSION['cart'])) {
            echo "Votre panier est vide.";
        } else {
            foreach ($_SESSION['cart'] as $key => $value) {
                echo "<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3\">
                        <figure class=\"thumbnail text-center\">
                            <figcaption class=\"caption\">
                                <h3>".$products[$key]."<br> Quantité : ".$value."</h3>
                            </figcaption>
                        </figure>
                    </div>";
            }
        }

        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
