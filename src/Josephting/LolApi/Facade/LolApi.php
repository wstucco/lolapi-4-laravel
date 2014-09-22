<?php namespace Josephting\LolApi\Facade;

use Illuminate\Support\Facades\Facade;

class LolApi extends Facade {

  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'lolapi'; }

}