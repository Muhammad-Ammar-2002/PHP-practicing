
<?php
view('layout.header');


?>

<div class="container">
    <div class="row">
        <div class="col-12">
           <h1>
              Page Not Found
              <?php 
            //    var_dump( str_replace(public_path(),'',url().'/practice/public/assets/404.png')) ?>
            </h1>
            <img src="<?php echo str_replace('/index.php','',url().'/assets/404.png') ?>" />
        </div>
    </div>
</div>




<?php

view('layout.footer');
?>