<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;
use Cryptocurrency\Task1\AbstractCurrency;

class Dogecoin extends AbstractCurrency
{
    protected $name='Dogecoin';
    protected $logo='https://s2.coinmarketcap.com/static/img/coins/32x32/74.png';
}