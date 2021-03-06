<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class ISCountry implements CountryInterface
{
  public function getName()
  {
    return 'Iceland';
  }

  public function getIso2()
  {
    return 'IS';
  }

  public function getIso3()
  {
    return 'ISL';
  }

  public function getWmo()
  {
    return 'IL';
  }

  public function getNumericCode()
  {
    return 352;
  }

  public function getDialPrefix()
  {
    return 354;
  }

  public function getCurrencyCode()
  {
    return 'ISK';
  }
}
