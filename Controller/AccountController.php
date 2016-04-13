<?php

require_once("../Model/Account.php");

function GetAccountsData() {
	$str = file_get_contents('../Data/Account.json');
	$json = json_decode($str, true);

	$accounts = array();

	foreach ($json['Account'] as $account) {
		$ac = new Account();
		$ac->SetId($account["id"]);
		$ac->SetLastName($account["lastName"]);
		array_push($accounts, $ac);
	}

	return $accounts;
}

function GetAllAccounts() {

	$accounts = array();

	foreach (GetAccountsData() as $account) {
		array_push($accounts, $account);
	}

	echo json_encode($accounts);
}

function GetAccount($id) {
	foreach (GetAccountsData() as $account) {
		if ($account->GetId() == $id) {
			echo json_encode(get_object_vars($account));
		}
	}

	return ;
}

function UpdateAccount($id, $ac) {

	$accounts = array();
	print_r(json_encode($ac, true));

	foreach (GetAccountsData() as $account) {
		if ($account->GetId() == $id) {

		}
	}


}

switch ($_SERVER['REQUEST_METHOD']) {
	case 'GET':
		if (isset($_GET["id"])) {
			GetAccount($_GET["id"]);
		}
		else {
			GetAllAccounts();
		}
		break;
	
	case 'POST':
		if (isset($_POST["account"])) {
			UpdateAccount($_GET["id"], $_POST["account"]);
		}
		break;

	case 'PUT':
		echo $_SERVER["QUERY_STRING"];

		var $ac = new Account();
		$ac->SetId()

		UpdateAccount($_SERVER["QUERY_STRING"], file_get_contents('php://input'));

		break;
	default:
		# code...
		break;

}

?>