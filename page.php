<?php 
  get_header();
?>

<div class="page">
<?php 
    the_post();
    the_content();
?>
</div>

<?php
  get_footer();
?>
