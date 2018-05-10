<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CoinMarket
{
    protected $currencies=[];
	public function addCurrency(Currency $currency): void
    {
		if(!in_array($currency, $this->currencies))
		{
			array_push($this->currencies, $currency);
		}
    }

    public function maxPrice(): float
    {
        $maxPrice = 0;
		if(!empty($this->currencies))
		{
			foreach ($this->currencies as $currency)
			{
				if($currency->getDailyPrice() > $maxPrice)
				{
					$maxPrice = $currency->getDailyPrice();
				}
			}
		}
		return $maxPrice;
    }

    public function getCurrencies(): array
    {
        return $this->currencies;
    }
}