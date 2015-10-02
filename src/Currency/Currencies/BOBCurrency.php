<?php
namespace Packaged\Rwd\Currency\Currencies;

use Packaged\Rwd\Currency\AbstractCurrency;

class BOBCurrency extends AbstractCurrency
{
  public function getSymbol()
  {
    return '$b';
  }

  public function getCode()
  {
    return 'BOB';
  }

  public function getNumericCode()
  {
    return 68;
  }

  public function getName()
  {
    return 'Bolivia, Boliviano';
  }

  public function getMajorUnit()
  {
    return 'boliviano';
  }

  public function getMinorUnit()
  {
    return 'centavo';
  }
}