<!DOCTYPE html>
<?php 
  
   if(session_has('local')=='ar')
   {
     $dir=session('local')=='ar'?'rtl':'ltr';
     $lang=session('local');

   }else{
     $dir='ltr';
     $lang='en';
   }
  //  var_dump(session('local'));
?>
<html lang="<?php echo $lang ?>" dir="<?php echo $dir ?>"></html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo isset($title)?$title:'Project Name'; ?></title>

    <?php if(session('local')=='ar'): ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <?php else: ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <?php endif; ?>
        

    <title>Document</title>
</head>
<body>
    
</body>

<?php echo view('layout.navbar') ?>
</html>

