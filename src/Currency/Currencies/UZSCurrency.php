<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class UZSCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'лв';
  }

  public function getCode()
  {
    return 'UZS';
  }

  public function getNumericCode()
  {
    return 860;
  }

  public function getName()
  {
    return 'Uzbekistan Sum';
  }

  public function getMajorUnit()
  {
    return 'som';
  }

  public function getMinorUnit()
  {
    return 'tiyin';
  }

  public function getUSDAverage()
  {
    return 1621.2802;
  }
}
