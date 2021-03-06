<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class WSTCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return 'WST';
  }

  public function getCode()
  {
    return 'WST';
  }

  public function getNumericCode()
  {
    return 882;
  }

  public function getName()
  {
    return 'Samoa, Tala';
  }

  public function getMajorUnit()
  {
    return 'tala';
  }

  public function getMinorUnit()
  {
    return 'sene';
  }

  public function getUSDAverage()
  {
    return 2.4962;
  }
}
