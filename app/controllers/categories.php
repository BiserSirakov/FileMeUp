<?php

require('framework/base_controller.php');
require('app/models/Category.php');

class CategoriesController extends BaseController {
	
	function all() {
		$model = new Category();
		$categories = $model->get_all();
		$params = array('categories' => $categories);
		$this->render('categories/all', $params);
	}

}
