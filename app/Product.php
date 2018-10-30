<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function newArrivals(int $limit)
    {

    }

    public function isNew()
    {
        $monthAgo = new \DateTime('1 month ago');
        $productArrivingDate = new \DateTime($this->getAttribute('arrived_at'));

        return $productArrivingDate < $monthAgo;
    }

    public function isOnSale()
    {
        return !empty($this->getAttribute('discount'));
    }

    public function imagePath()
    {
        return 'img/product/'.
            $this->getAttribute('type') .'/'.
            $this->getAttribute('subtype') .'/'.
            $this->getAttribute('image') . '.jpg';
    }
}
