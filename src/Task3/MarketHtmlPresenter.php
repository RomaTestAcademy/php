<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
		$str = '';
		foreach($market->getCurrencies() as $currency){
			$str .= '<ol><img src="'. $currency->getLogoUrl() .'">';
			$str .= $currency->getName().': ';
			$str .= $currency->getDailyPrice();
			$str .= '</ol>';
		}
		return $str;
    }
}