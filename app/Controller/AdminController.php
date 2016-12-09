<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;
use \Model\PageModel;

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
		$page = new PageModel();
		$page->createPage($_POST);
		$this->redirectToRoute('admin_ajoutPage');

	}
}
