<?php 
  get_header();
?>

<div class="biography">
<?php 
    the_post();
    the_content();
?>
</div>

<?php
  get_footer();
?>
