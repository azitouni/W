<?php

namespace Controller;

use \W\Controller\Controller;
use W\Model\UsersModel;
use \Model\PageModel;

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
		$user = new UsersModel();
		$equipier = $user->getUserByUsernameOrEmail($username);
		$myPage= new PageModel();
		$myPage->getPageByUserId($equipier['id']);
		var_dump($myPage);
		$url = 'team/' . $myPage->getSlug();
		$this->show($url, ['id' => $equipier['id'],
										 'page' => $myPage,
									   'presentation' => $myPage->getData('presentation'),
									   'competences' => $myPage->getData('competences') ]);
	}

}
