<?php

namespace Controller;

use \W\Controller\Controller;
use W\Model\UsersModel;

class TeamController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function index()
	{
		$this->show('team/az');
	}

	public function displayProfile($username)
	{
		$user = new UsersModel;
		$equipier = $user->getUserByUsernameOrEmail($username);
		$page = 'team/' . $equipier['username'];
		$this->show($page, ['id' => $equipier['id']]);
	}

}
