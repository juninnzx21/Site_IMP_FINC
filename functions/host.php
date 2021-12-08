<?php

if ($_SERVER['SERVER_NAME'] === $_SERVER['HTTP_HOST'] && $_SERVER['HTTP_HOST'] === 'localhost')
{
    # localhost
    function base_url()
    {
        return 'http://localhost/multicredbh/Site_Multicred/';
    }
}else{
    # servidor
    function base_url(){
        return 'https://multicredbh.com.br';
    }
}
  