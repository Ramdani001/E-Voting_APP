<?php
@$page = $_GET['page'];
switch ($page) {
	//admin
	case 'user':
		include '../admin/pages/user/user.php';
		break;
	case 'member':
		include '../admin/pages/member/member.php';
		break;
	case 'voting':
		include '../admin/pages/voting/voting.php';
		break;
	default:
		include '../admin/pages/home/home.php';
		break;
}
?>