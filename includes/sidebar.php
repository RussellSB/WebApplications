<?php
  $currPath = "http://$_SERVER[HTTP_HOST]/WebApplications/";
?>

<link rel="stylesheet" href="<?= $currPath . "stylesheets/sidebar.css"?>" />

<?php 
$QSTART = "ParentCategory=";
$QSUBC  = "Category=";

//sizeof = length of array

$categories  = array("String", "Woodwind", "Brass", "Keyboard");
$subcategories = array
        (
          array("Bass", "Harp", "Ukelele", "Guitar"),
          array("Clarinets", "Bagpipes", "Panflutes"),
          array("Trumpets", "Saxophone", "French Horn", "Mellophone"),
          array("Piano", "Accordian", "Electric-Keyboard", "Synthesizer")
        );
?>


<div id=sidebar>

  <form action="<?= $currPath . "page-structures/products.php"?>" method="post">

    
      <!-- Loops through the main categories, displaying a button for each -->
      <?php for($i = 0; $i < sizeof($categories); $i++): ?>
        <button type="submit" name="query"
          value="<?= $QSTART . ($i+1) ?>"
          class="sidelinks">
          <p class="cat"> <?= $categories[$i] ?> </p>
        </button>

        <!-- Loops through the subcategories, displaying another button for each -->
        <?php for($j = 0; $j < sizeof($subcategories[$i]); $j++): ?>
          <button type="submit" name="query"
          value="<?= $QSTART . ($i+1) . " and " . $QSUBC . ($j+1)?>"
          class="sidelinks subcat">
          <p class="subcat"> <?= $subcategories[$i][$j] ?> </p>
          </button>
          <?php
        endfor;
      endfor;
    ?>

      
  </form>
</div>
