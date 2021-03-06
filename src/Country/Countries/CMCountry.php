<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class CMCountry implements CountryInterface
{
  public function getName()
  {
    return 'Cameroon';
  }

  public function getIso2()
  {
    return 'CM';
  }

  public function getIso3()
  {
    return 'CMR';
  }

  public function getWmo()
  {
    return 'CM';
  }

  public function getNumericCode()
  {
    return 120;
  }

  public function getDialPrefix()
  {
    return 237;
  }

  public function getCurrencyCode()
  {
    return 'XAF';
  }
}
