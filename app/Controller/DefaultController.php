<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;
use \W\Security\AuthentificationModel;

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

	/**
	 * Page inscription
	 */
	public function inscription()
	{
		$this->show('default/inscription');
	}

	/**
	 * Page inscription
	 */
	public function traitementInscription()
	{
		$user = new UsersModel;
		$auth = new AuthentificationModel;
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password=$auth->hashPassword($_POST['password']) ;
		$role='admin';
		$userData = $user->Insert(['username' => $username, 'email' => $email, 'password' => $password, 'role' => $role]);
		$auth->logUserIn($userData);
		$this->redirectToRoute('default_inscription');
	}

}
