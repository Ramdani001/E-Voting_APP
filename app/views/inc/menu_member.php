<?php
@$page = $_GET['page_member'];
switch ($page) {
	//admin
	case 'aa':
		include '../member/main/pages/member/member.php';
		break;
	default:
		include '../member/main/pages/home/home.php';
		break;
}
?>