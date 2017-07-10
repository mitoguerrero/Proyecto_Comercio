<?php
use App\Model\UserModel;

$app->group('/user/', function () {
    
    
    
    $this->get('getAll', function ($req, $res, $args) {
        $um = new UserModel();
        
        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
               //<
            
            json_encode(
                $um->GetAll()
            )
        );
    });
    
});