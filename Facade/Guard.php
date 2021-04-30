<?php
namespace Malla\Guard\Facade;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/
use Illuminate\Support\Facades\Facade;

class Guard extends Facade {
  public static function getFacadeAccessor(){ return "Guard"; }
}
