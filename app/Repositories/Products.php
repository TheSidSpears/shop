<?php


namespace App\Repositories;


use App\Product;
use Illuminate\Database\Eloquent\Builder;

class Products
{
    public static function newArrivals(int $limit = null)
    {
        $qb = Product::query()
            ->latest();

        return self::withLimit($qb, $limit);
    }

    public static function onSale(int $limit = null)
    {
        $qb = Product::query()
            ->whereNotNull('discount');

        return self::withLimit($qb, $limit);
    }

    public static function bestsellers(int $limit = null)
    {
        $qb = Product::query()
            ->orderBy('sold', 'desc');

        return self::withLimit($qb, $limit);
    }

    private static function withLimit(Builder $qb, int $limit = null)
    {
        if ($limit) {
            $qb->take($limit);
        }

        return $qb->get();
    }
}