<?php

namespace Controller;

use \W\Controller\Controller;
use W\Model\UsersModel;
use Pages\PageModel;

class AdminController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function index()
	{
		$this->show('Admin/index');
	}

	/**
	 * Page ajout page
	 */
	public function ajoutPage()
	{
		$this->show('Admin/ajoutPage');
	}

	/**
	 * Page ajout page BDD
	 */
	public function ajoutPageBDD()
	{
		$page = new PageModel;
		$page->createPage($_POST);
		$this->redirectToRoute('admin_ajoutPage');

		// $this->titre = $_POST['titre'];
    // $this->slug= $this->slugify($_POST['titre']);
    // $this->data = serialize($_POST['data']);
    // //$data = unserialize($_POST['data']);
    // $this->categorie = $_POST['categorie'];

		//$this->show('Admin/ajoutPageBDD');
	}
}
