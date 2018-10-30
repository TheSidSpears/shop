<?php


namespace App\ViewModels;


use Illuminate\Support\Collection;
use Spatie\ViewModels\ViewModel;

class ProductViewModel extends ViewModel
{
    CONST NEW = 'new-arrivals';
    CONST ON_SELL = 'on-sellers';
    CONST BEST_SELL = 'best-sellers';

    CONST HTML_ID_LIST = [
        self::NEW,
        self::ON_SELL,
        self::BEST_SELL
    ];

    protected $names = [
        self::NEW => 'New arrivals',
        self::ON_SELL => 'Sale products',
        self::BEST_SELL => 'Bestselling'
    ];

    protected $products = [];

    public function __construct(Collection $newArrivals, Collection $onSale, Collection $bestsellers)
    {
        $this->products[self::NEW] = $newArrivals;
        $this->products[self::ON_SELL] = $onSale;
        $this->products[self::BEST_SELL] = $bestsellers;
    }

    public function idList()
    {
        return self::HTML_ID_LIST;
    }

    public function nameFor(string $id): string
    {
        return $this->names[$id];
    }

    public function productsFor(string $id): Collection
    {
        return $this->products[$id];
    }
}