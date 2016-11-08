<?php 

require_once "global.php";

require_once constant("SITE_PATH") . "/src/controller/MembreController.php";

$action = isset ($_GET["action"]) ? $_GET["action"] : "index";

if ($action == "creermembre")
// exemple URL : http://SITE/createclient
{
	$membreController = new MembreController();
	$membreController->createAction();
	
}

else if ($action == "creercompte")
// exemple URL : http://SITE/article_top10
{
	$view_path = constant("SITE_PATH") . "/src/view/client/creercompte.php";
	require_once constant("SITE_PATH") . "/src/view/page.php";
}

else if ($action == "articletop10")
// exemple URL : http://SITE/article_top10
{
	$view_path = constant("SITE_PATH") . "/src/view/articletop10.php";
	require_once constant("SITE_PATH") . "/src/view/page.php";
}

else if ($action == "voter")
// exemple URL : http://SITE/article_top10
{
	$view_path = constant("SITE_PATH") . "/src/view/voter.php";
	require_once constant("SITE_PATH") . "/src/view/page.php";
}

else if ($action == "index")
// exemple URL : http://SITE
{
	$view_path = constant("SITE_PATH") . "/src/view/accueil.php";
	require_once constant("SITE_PATH") . "/src/view/page.php";
}

else if ($action == "quisommesnous")
{
	$view_path = constant("SITE_PATH") . "/src/view/quisommesnous.php";
	require_once constant("SITE_PATH") . "/src/view/page.php";
}

else if ($action == "contact")
{
	$view_path = constant("SITE_PATH") . "/src/view/contact.php";
	require_once constant("SITE_PATH") . "/src/view/page.php";
}

else if ($action == "mentionslegales")
{
	$view_path = constant("SITE_PATH") . "/src/view/mentionslegales.php";
	require_once constant("SITE_PATH") . "/src/view/page.php";
}

else 
{
	$view_path = constant("SITE_PATH") . "/src/view/error.php";
	require_once constant("SITE_PATH") . "/src/view/page.php";
}

?>