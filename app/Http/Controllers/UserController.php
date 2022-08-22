<?php

namespace App\Http\Controllers;


use App\Contracts\OwnerContract;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $repo;

    public function __construct(OwnerContract $repo)
    {
        $this->repo = $repo;
    }

    public function login() {
        return $this->repo->login();
    }

    public function store() {
        //"SELECT count(*) FROM `outbound_accounts` WHERE `email_sale` LIKE "hanght%@fpt.com.vn";

        $name = "Hai";
        $ho = "Ho Van";
        $array = explode(" ", $ho);
        var_dump($array);
        $dem = "1';
        //echo substr($array[0], 0, 1);
        foreach($array as $value) {
            $dem = $dem . substr($value, 0, 1);
        }

        echo $dem;
    }
}
