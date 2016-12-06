<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/a-propos', 'Default#aPropos', 'default_apropos'],
		['GET', '/contact', 'Contact#index', 'contact_index'],
		['POST', '/envoi-Formulaire', 'Contact#traitementForm', 'contact_traitementForm'],
		['GET', '/admin', 'Admin#index', 'admin_index'],
	);
