<?php
class Load{
    function view($view_file,$data){
        if(is_array($data)){
            extract($data);
        }
        include $view_file;
    }
}