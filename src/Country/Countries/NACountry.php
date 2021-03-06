<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class NACountry implements CountryInterface
{
  public function getName()
  {
    return 'Namibia';
  }

  public function getIso2()
  {
    return 'NA';
  }

  public function getIso3()
  {
    return 'NAM';
  }

  public function getWmo()
  {
    return 'NM';
  }

  public function getNumericCode()
  {
    return 516;
  }

  public function getDialPrefix()
  {
    return 264;
  }

  public function getCurrencyCode()
  {
    return 'ZAR';
  }
}
