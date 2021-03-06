<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class PECountry implements CountryInterface
{
  public function getName()
  {
    return 'Peru';
  }

  public function getIso2()
  {
    return 'PE';
  }

  public function getIso3()
  {
    return 'PER';
  }

  public function getWmo()
  {
    return 'PR';
  }

  public function getNumericCode()
  {
    return 604;
  }

  public function getDialPrefix()
  {
    return 51;
  }

  public function getCurrencyCode()
  {
    return 'PEN';
  }
}
