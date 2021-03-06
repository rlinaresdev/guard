<?php
namespace Malla\Guard\Providers;

/*
 *---------------------------------------------------------
 * ©IIPEC
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Translation\Translator;
use Illuminate\Support\ServiceProvider;

class GuardServiceProvider extends ServiceProvider {

	public function boot( Kernel $HTTP, Translator $LAN ) {
	}

	public function register() {

		$this->app->bind("Guard", function($app) {
			return new \Malla\Guard\Support\Guard($app);
		});

	}

	public function getGrammars($locale="es") {

		if( $this->app["files"]->exists(__VENDORPATH__."App/Http/Langs/$locale.php") ) {
			return $this->app["files"]->getRequire(__VENDORPATH__."App/Http/Langs/$locale.php");
		}

		return NULL;
	}
}
