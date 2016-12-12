<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;
use \Model\PageModel;
use \W\Security\AuthentificationModel as Auth;

class AdminController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function index()
	{
		$this->allowTo('admin');
		$this->show('Admin/index');
	}

	/**
	 * Page ajout page
	 */
	public function ajoutPage()
	{
		$this->allowTo('admin');
		$users = new UsersModel();
		$allUsers =$users->findAll();
		$categories = ['basic','team'];
		$this->show('Admin/ajoutPage', ['users' => $allUsers, 'categories' => $categories]);
	}

	/**
	 * Page ajout page BDD
	 */
	public function ajoutPageBDD()
	{
		$this->allowTo('admin');
		$page = new PageModel();
		$dataPage = $_POST;
		//echo var_dump($_POST);
		//echo var_dump($_FILES);

		if ($_POST['categorie']==='team') {
			$file_name = $_FILES['fichier']['name'];
			$destination_folder = '../app/Views/team/' .$file_name;
			$tmp = $_FILES['fichier']['tmp_name'];
			if (is_uploaded_file($file_name,$destination_folder)) {
				exit('Fichier introuvable');
			}
			if (!move_uploaded_file($tmp,$destination_folder)) {
				$erreur = 'Erreur, impossible de copier le fichier dans:' .$destination_folder;
				exit($erreur);
			}
			$dataPage['data']['template'] =$file_name;
		}

		$page->createPage($dataPage);
		$this->redirectToRoute('admin_ajoutPage');

	}
	/**
	 * Page connexion
	 */
	public function connexion()
	{
		$this->show('Admin/connexion');
	}
	/**
	 * Page traitement connexion
	 */
	public function traitementConnexion()
	{
		$auth = new Auth();
		$usernameOrEmail = $_POST['identifiant'];
		$plainPassword = $_POST['password'];

		$userId = $auth->IsValidLoginInfo($usernameOrEmail,$plainPassword);

		if ($userId !==0) {
			$userModel = new UsersModel();
			$user = $userModel->find($userId);
			$auth->logUserIn($user);
			if ($user['role']==='admin') {
				$this->redirectToRoute('admin_index');
			}
			else {
				$this->redirectToRoute('default_home');
			}

		}
		else {
			$this->redirectToRoute('admin_connexion');
		}
	}

	/**
	 * Page traitement connexion
	 */
	public function deconnexion()
	{
		$auth = new Auth();
		$auth->logUserOut();
		$this->redirectToRoute('default_home');

	}


}
