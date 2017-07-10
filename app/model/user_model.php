<?php
namespace App\Model;

use App\Lib\Response;

class UserModel
{
    private $response;
    
    public function __CONSTRUCT()
    {
        $this->response = new Response();
    }
    
    public function GetAll()
    {
		try
		{
			$url = 'http://localhost/employees.json';
            $json = file_get_contents($url);
            $array = json_decode($json);
            $this->result = $array;
            
            return $this->result;
            }catch(Exception $e)
		{
			$this->response->setResponse(false, $e->getMessage());
            return $this->response;
		}
    }

}