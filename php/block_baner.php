

<div class="block_baner">
            
    <div class="fonar"></div>
    <?php echo " <h2>  $baner_h2_txt  </h2> " ?>
    <div class="baner_line"></div>
    
    <?php 
        if ( isset( $banerTxt ) ) {
            echo " <p> $banerTxt </p> ";
        }
        else { echo '';}; 
    ?>

</div>

