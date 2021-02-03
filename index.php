<?php
require_once('header.php');
?>

<img alt="profil" src="<?php echo $user["url"] ?>" class="mx-auto object-cover rounded-full h-96 w-96 "/>
<h1 class="font-sans text-center mt-3 text-6xl"><?php echo $user["name"] ?></h1>
<h1 class="font-sans text-center mt-2 text-6xl"> - </h1>
<h1 class="font-sans text-center mt-2 text-4xl"><?php echo $user["job"] ?></h1>

<h1 class="font-sans text-left mt-60 ml-6 mb-5 text-4xl text-center">Formations</h1>
<div class="sm:flex flex-wrap justify-center items-center text-center gap-8">
    <?php foreach ($formation as $card) {
        include "formation.php";
    } ?>

</div>

<h1 class="font-sans text-left mt-60 mb-5 ml-6 text-4xl text-center">Passions</h1>
<div class="sm:flex flex-wrap justify-center items-center text-center gap-8">
    <?php foreach ($passion as $card) {
        include "passion.php";
    } ?>
</div>

<?php
require_once('footer.php');
?>

