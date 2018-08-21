<?php

$router = $di->getRouter();

// Define your routes here
$router->add(
	"/home/",
	[
		"controller" => "index",
		"action" => "index"
	]
);

$router->add(
	"/home",
	[
		"controller" => "index",
		"action" => "index"
	]
);

$router->add(
	"/login/",
	[
		"controller" => "index",
		"action" => "login"
	]
);

$router->add(
	"/logout/",
	[
		"controller" => "index",
		"action" => "logout"
	]
);

$router->add(
	"/invulrooster/overview/page/([0-9]+)/",
	[
		"controller" => "invulrooster",
		"action" => "overview",
		"page" => 1
	]
);

$router->add(
	"/invulrooster/view/([0-9]+)/",
	[
		"controller" => "invulrooster",
		"action" => "view",
		"schedule_id" => 1
	]
);

$router->add(
	"/shifts/edit/([0-9]+)/",
	[
		"controller" => "shifts",
		"action" => "edit",
		"shift_id" => 1
	]
);

$router->add(
	"/shifts/edit/([0-9]+)/template/([0-9]+)/",
	[
		"controller" => "shifts",
		"action" => "edit",
		"shift_id" => 1,
		"schedule_template_id" => 2
	]
);

$router->add(
	"/shifts/new/schedule/([0-9]+)/day/([0-9]+)/",
	[
		"controller" => "shifts",
		"action" => "new",
		"schedule_id" => 1,
		"for_timestamp" => 2
	]
);

$router->add(
	"/shifts/new/template/([0-9]+)/day/([1-7]{1})/",
	[
		"controller" => "shifts",
		"action" => "new",
		"schedule_template_id" => 1,
		"day" => 2
	]
);

$router->add(
	"/shifts/delete/([0-9]+)/",
	[
		"controller" => "shifts",
		"action" => "delete",
		"shift_id" => 1
	]
);

$router->handle();
