<?php

if(in_array(request('lang'),['ar','en']))
{

  set_local(request('lang'));
}

 redirect('');

// var_dump( session('local'));

// header('Location: /practice/index.php');
// exit;