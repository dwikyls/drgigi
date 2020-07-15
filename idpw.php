<?php
if (isset($_POST['username']) & isset($_POST['password'])) {
	echo '<li>username: ' . $_POST['username'] . '</li>';
	echo '<li>password: ' . $_POST['password'] . '</li>';
}?>