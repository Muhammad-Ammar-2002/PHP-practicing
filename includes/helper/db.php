<?php

if(!function_exists("db_insert"))
{
   function db_insert(string $table,array $data)
   {
    global $connect;

    $sql="insert into ".$table;
    $column='';
    $value='';
    foreach($data as $key=>$val)
    {
        $column.=$key.',';
        $value.="'".$val."',";
    }
    rtrim($column,',');
    rtrim($value,',');
    $sql.=" (".$column.")values(".$value.")";
    $query=mysqli_query($connect,$sql);
    return mysqli_insert_id($connect);

   }
}