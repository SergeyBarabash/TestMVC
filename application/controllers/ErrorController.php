<?php
declare(strict_types=1);

namespace App\controllers;

use TestFramework\BaseController;

class ErrorController extends BaseController {

	/**
	 * @inheritdoc
	 */
	public function indexPage(): void {
		$this->view->render('error.html','layout.phtml');
	}
}
