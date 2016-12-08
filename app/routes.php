<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/a-propos', 'Default#aPropos', 'default_apropos'],
		/*Contact*/
		['GET', '/contact', 'Contact#index', 'contact_index'],
		['POST', '/envoi-Formulaire/[:id]', 'Contact#traitementForm', 'contact_traitementForm'],
		['POST', '/envoi-Formulaire', 'Contact#traitementForm', 'contact_traitementForm_team'],
		/*Admin*/
		['GET', '/admin', 'Admin#index', 'admin_index'],
		['GET', '/admin/ajoutPage', 'Admin#ajoutPage', 'admin_ajoutPage'],
		['POST', '/admin/ajoutPage', 'Admin#ajoutPageBDD', 'admin_ajoutPageBDD'],
		/*Team*/
		['GET', '/team', 'Team#index', 'team_index'],
		['GET', '/team/[:username]', 'Team#displayProfile', 'Team_displayProfile'],
		/*Inscription*/
		['GET', '/inscription', 'Default#inscription', 'default_inscription'],
		['POST', '/inscription', 'Default#traitementInscription', 'default_traitementInscription'],

	);
