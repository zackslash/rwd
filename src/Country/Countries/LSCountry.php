<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class LSCountry implements CountryInterface
{
  public function getName()
  {
    return 'Lesotho';
  }

  public function getIso2()
  {
    return 'LS';
  }

  public function getIso3()
  {
    return 'LSO';
  }

  public function getWmo()
  {
    return 'LS';
  }

  public function getNumericCode()
  {
    return 426;
  }

  public function getDialPrefix()
  {
    return 266;
  }

  public function getCurrencyCode()
  {
    return 'ZAR';
  }
}
