<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function getprice(){
        $price=$this->price / 100;

        return number_format($price, 3 , ',' , ' ') . ' TND';
    }

}
