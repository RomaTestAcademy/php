<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CoinMarket
{
    protected $maxPrice=0;
    protected $currencies=[];
	public function addCurrency(Currency $currency): void
    {
       if ($this->maxPrice < $currency->getDailyPrice())
	   {
		   $this->maxPrice = $currency->getDailyPrice();
	   }
		array_push($this->currencies, $currency);

    }

    public function maxPrice(): float
    {
        return $this->maxPrice;
    }

    public function getCurrencies(): array
    {
        return $this->currencies;
    }
}