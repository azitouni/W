<?php

namespace Controller;

use \W\Controller\Controller;
use W\Model\UsersModel;

class AdminController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function index()
	{
		$this->show('Admin/index');
	}



}
