<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuantityStatistics extends Model
{
    private  $quantityProduct;
    private  $totalOrder;
    private  $OrderWatting;

    public function getQuantityProduct()
    {
        return $this->quantityProduct;
    }

    public function getTotalOrder()
    {
        return $this->totalOrder;
    }

    public function getOrderWatting()
    {
        return $this->OrderWatting;
    }

    public function setQuantityProduct($p)
    {
        $this->quantityProduct = $p;
    }

    public function setTotalOrder($t)
    {
        $this->totalOrder = $t;
    }

    public function setOrderWatting($r)
    {
        $this->OrderWatting = $r;
    }

    function __construct($qproduct, $torder, $owatting)
    {
        $this->quantityProduct = $qproduct;
        $this->totalOrder = $torder;
        $this->OrderWatting = $owatting;
    }
}
