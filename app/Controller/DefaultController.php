<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

	/**
	 * Page à propos
	 */
	public function aPropos()
	{
		$this->show('default/aPropos');
	}

}
