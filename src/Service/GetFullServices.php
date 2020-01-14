<?php
// src/Service/MessageGenerator.php
namespace App\Service;

class GetFullServices
{
    public function className($className) {
        $obj = [
            'url'=>null,
            'text'=>null,
        ];
        if(explode('Controller',$className)[0] == 'Admin'){
            $obj['url'] = 'app_logout';
            $obj['text'] = 'btn-danger';
        }else{
            $obj['url'] = 'app_login';
            $obj['text'] = 'btn-success';
        }
        return $obj;
    }
}