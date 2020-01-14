<?php
// src/Service/MessageGenerator.php
namespace App\Service;

class GetFullServices
{
    public function className($className) {
        $obj = [
            'url'=>null,
            'text'=>null,
            'navbar'=>null
        ];
        if (preg_match('/Back/',$className) || preg_match('/Admin/', $className)) {
            $obj['url'] = 'app_logout';
            $obj['text'] = 'btn-danger';
            $obj['navbar'] = 'dark';
        }else{
            $obj['url'] = 'app_login';
            $obj['text'] = 'btn-success';
            $obj['navbar'] = 'light';
        }
        return $obj;
    }
}