<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

abstract class AbstractCurrency implements Currency
{
    protected $name = '';
    protected $logo = '';
    protected $price = 0;
	
	public function __construct(float $price)
	{
		$this->price = $price;
	}
	public function getName(): string
	{
		return $this->name;
	}
    public function getDailyPrice(): float
	{
		return $this->price;
	}
    public function getLogoUrl(): string
	{
		return $this->logo;
	}
}