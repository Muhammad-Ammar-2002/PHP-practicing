<?php

if(!function_exists('trans')){
    function trans(string $key=null,string $default = null):string {
        $config=explode('.',$key);
        $default=config('lang.default');
        if(count($config) > 0)
        {
           
            $result=include config('lang.path').'/'.$default.'/'.$config[0].'.php';
            return $result[$config[1]];
        }
        return '';
     }
}