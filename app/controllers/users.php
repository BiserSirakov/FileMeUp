<?php

require('framework/base_controller.php');
require('app/models/users.php');

class UsersController extends BaseController {

	function register() {
		$errors = array();
		if ($_POST) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password_confirm = $_POST['confirm'];

			if (!$username) {
				$errors[] = 'Username is required';
			}
			
			if (!$password) {
				$errors[] = 'Password is required';
			}
			
			if ($password != $password_confirm) {
				$errors[] = 'Password mismatch';
			}
			
			$model = new Users();
			$result = $model->register($username, $password);

			if ($result) {
				$_SESSION['user'] = $result;
				header('Location: index.php');
			} else {
				$errors[] = 'Error while trying to register. Please try again.';
			}
		}

		$params = array('errors' => $errors);
		$this->render('users/register', $params);
	}
	
	function login() {
		$errors = array();
		if ($_POST) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			if (!isset($username) || trim($username) === '') {
				$errors[] = 'Username is required';
			}
			
			if (!isset($password) || trim($password) === '') {
				$errors[] = 'Password is required';
			}

			$model = new Users();
			$result = $model->login($username, $password);
			
			if ($result) {
				$_SESSION['user'] = $result;
				header('Location: index.php');
			} else {
				$errors[] = 'Wrong username or password.';
			}
		}

		$params = array('errors' => $errors);
		$this->render('users/login', $params);
	}
	
	function logout() {
		session_destroy();
		header('Location: index.php?q=site/home');
	}

}
