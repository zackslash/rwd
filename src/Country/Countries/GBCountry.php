<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class GBCountry implements CountryInterface
{
  public function getName()
  {
    return 'United Kingdom';
  }

  public function getIso2()
  {
    return 'GB';
  }

  public function getIso3()
  {
    return 'GBR';
  }

  public function getWmo()
  {
    return 'UK';
  }

  public function getNumericCode()
  {
    return 826;
  }

  public function getDialPrefix()
  {
    return 44;
  }

  public function getCurrencyCode()
  {
    return 'GBP';
  }
}
