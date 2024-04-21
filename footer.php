<?php
/**
 * Template for displaying the footer section.
 * 
 * @package astr-blg
 */
?>
<!--footer starts from here-->
<footer class="footer ">

    
<div class="container bottom_border m-5">

    
<div class="row">
<div class=" col-sm-4 col-md col-sm-4  col-12 col ">

<?php  dynamic_sidebar( 'footer-lfet' ); ?>

</div>


<div class=" col-sm-4 col-md  col-6 col ">
<?php dynamic_sidebar( 'footer-center' ); ?>
</div>


<div class=" col-sm-4 col-md  col-6 col ">
<?php dynamic_sidebar( 'footer-right' ); ?>
</div>


</div>
</div>

<div class="container text-center">
<?php echo Nea_astr_disply_modifcation()['text_footer']; ?>


</div>


</footer>

   
<!--</div>-->
   
<?php wp_footer();  ?>

</body>
</html>