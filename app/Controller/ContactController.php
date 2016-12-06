<?php

namespace Controller;

use \W\Controller\Controller;
use PHPMailer;

class ContactController extends Controller
{
	/**
	 * Page index
	 */
	public function index()
	{
		$this->show('contact/index');
	}
  /**
	 * Page traitement formulaire
	 */
	public function traitementForm()
	{
    //
    $expediteur = $_POST['nom'];
		$email_expediteur = $_POST['mail'];
    $message = $_POST['message'];
    //var_dump($_POST);
    //require "includes/phpmailer/PHPMailerAutoload.php";
    $mail = new PHPMailer; // nouvel objet de type mail
    $mail->isSMTP(); // on va se connecter directement au serveur SMTP
    $mail->isHTML(true); // on va utiliser le format HTML pour le message
    $mail->Host = "smtp.gmail.com"; // le serveur SMTP utilisé
    $mail->Port = 465; //le port utilisé pour le SMTP
    $mail->SMTPAuth = true; // on va donner des infos au serveur (login/mdp)
    $mail->SMTPSecure = 'ssl'; //certificat SSL
    $mail->Username = "bioforce3@gmail.com"; // utilisateur pour le SMTP
    $mail->Password= "Azerty1234"; // mot de passe pour le SMTP
    $mail->setFrom('bioforce3@gmail.com', 'BioForce 3'); // l'expediteur
    $mail->addAddress('adel@amsg.asso.fr'); // le destinataire
    $mail->Subject = 'message de '.$expediteur; // le sujet du mail
    $mail->Body = "<html>
            <head>
            <style>
            h1{color: blue;}
            </style>
            </head>
            <body>
            <h1>Message de ".$expediteur."</h1>
            <h3>Email de ".$email_expediteur."</h3>
            ".$message."
            </body>
            </html>"; // le contenu du mail en HTML
    if(!$mail->send()) // si l'envoi délire...
    {
      $this->show('contact/index',['erreur'=>true,'data'=>$mail->ErrorInfo]);
    }
    else {
      //$this->redirectToRoute('contact_index');
      $this->show('contact/index',['erreur'=>false,'data'=>$mail->ErrorInfo]);
    }

	}
}
