<?php
include $_SERVER['DOCUMENT_ROOT']."./fake-portfolio/components/header.php";
?>


<h1 class="font-sans text-center mt-2 text-8xl">Mes réalisations</h1>

<div class="sm:flex flex-wrap justify-center items-center text-center gap-8 mt-40">
    <?php foreach ($realisations as $card) {
        include "../components/card.php";
    } ?>
</div>

<?php
require_once('../components/footer.php');
?>

