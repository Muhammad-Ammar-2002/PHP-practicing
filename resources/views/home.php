<?php

view('layout.header',['title'=> trans('main.home')]);

?>

<h1>
    Home Page
</h1>


<a href="<?php echo url('storage/test/test.mp4') ?>"> Downlod File </a>


<form method="post" action="<?php echo url('upload') ?>" enctype="multipart/form-data">

<input type="file" name="image" class="form-control">
<input type="hidden" name="_method" value="post">
<input type="submit"  class="btn btn-success" value="upload">


</form>



<?php

view('layout.footer');
?>