<?php
namespace Malla\Guard\Support;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

class Guard {

	protected $app;

	public function __construct( $app ) {
		$this->app = $app;
	}

	public function info() {
		return __CLASS__;
	}

}
