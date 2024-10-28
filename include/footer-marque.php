
<?php
  $SlideTexts=$crud->Read("slider_marque" ,"1 order by `id` desc");
  if($SlideTexts){
    $curr=$SlideTexts[0];
  }
?>

<div id="me-rate">
    <?php
       if($SlideTexts){
    ?>
    <p>
        <span><?= $curr['text1']; ?></span>
        <span style="margin-left: 250px;"><?= $curr['text2']; ?></span>       
    </p>
    <?php
       }else{
    ?>
    <p>
        <span>Special Offer: 15% Off on Money Transfers!</span>
        <span style="margin-left: 250px;">Transfer your money securely between India and Bangladesh and enjoy a 15% discount. This offer is valid until July 20th. Don't miss out on this great opportunity!</span>       
    </p>
    <?php
       }
    ?>

</div>