<?php //errors page

if(count($errors) > 0) : ?>

<div class = "error">
<?php foreach($errors as $error): ?>
<p> <?php echo $error;    ?></p>
<?php endforeach     ?>
</div> <!-- error div end -->

<?php endif ?>