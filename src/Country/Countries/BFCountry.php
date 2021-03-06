<?php
namespace Packaged\Rwd\Country\Countries;

use Packaged\Rwd\Country\CountryInterface;

class BFCountry implements CountryInterface
{
  public function getName()
  {
    return 'Burkina Faso';
  }

  public function getIso2()
  {
    return 'BF';
  }

  public function getIso3()
  {
    return 'BFA';
  }

  public function getWmo()
  {
    return 'HV';
  }

  public function getNumericCode()
  {
    return 854;
  }

  public function getDialPrefix()
  {
    return 226;
  }

  public function getCurrencyCode()
  {
    return 'XOF';
  }
}
