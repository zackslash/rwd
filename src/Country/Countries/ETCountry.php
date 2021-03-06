<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class ETCountry implements CountryInterface
{
  public function getName()
  {
    return 'Ethiopia';
  }

  public function getIso2()
  {
    return 'ET';
  }

  public function getIso3()
  {
    return 'ETH';
  }

  public function getWmo()
  {
    return 'ET';
  }

  public function getNumericCode()
  {
    return 231;
  }

  public function getDialPrefix()
  {
    return 251;
  }

  public function getCurrencyCode()
  {
    return 'ETB';
  }
}
