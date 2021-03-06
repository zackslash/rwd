<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class WSCountry implements CountryInterface
{
  public function getName()
  {
    return 'Samoa';
  }

  public function getIso2()
  {
    return 'WS';
  }

  public function getIso3()
  {
    return 'WSM';
  }

  public function getWmo()
  {
    return 'ZM';
  }

  public function getNumericCode()
  {
    return 882;
  }

  public function getDialPrefix()
  {
    return 685;
  }

  public function getCurrencyCode()
  {
    return 'WST';
  }
}
