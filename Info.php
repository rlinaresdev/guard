<?php
namespace Vendor;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

class Info {
  	public function app() {
  		return [
  			"type"			=> "library",
  			"slug"			=> "guard",
  			"kernel"		=> \Malla\Guard\Kernel::class,
  			"info"			=> \Malla\Guard\Info::class,
  			"token"			=> NULL,
  			"activated" 	=> 1,
  		];
  	}

  	public function info() {
  		return [
  			"name"			    => "Guard",
  			"author"		    => "Ing. Ramón A Linares Febles",
  			"email"			    => "rlinares4381@gmail.com",
  			"license"		    => "MIT",
  			"support"		    => "http://www.iipec.net",
  			"version"		    => "V-1.0",
  			"description" 	=> "Librería de Seguridad V-1.0",
  		];
  	}

  	public function meta() {
  		return [
  		];
  	}

  	public function handler($core) {
  		$core->create($this->app())->addInfo($this->info())->addMeta("type", $this->meta());
  	}
}
