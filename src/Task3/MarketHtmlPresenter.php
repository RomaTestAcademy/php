<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
		$str = '';
		foreach($market->getCurrencies() as $currency){
			$str .= '<li><img src="'. $currency->getLogoUrl() .'">';
			$str .= $currency->getName().': ';
			$str .= $currency->getDailyPrice();
			$str .= '</li>';
		}
		return $str;
    }
}