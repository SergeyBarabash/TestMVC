<?php
declare(strict_types=1);

namespace App\controllers;

use App\models\ProductTableStub;
use App\models\ServiceTableStub;
use TestFramework\BaseController;

//Контролер обеспечивает взаимодействие между моделью и видом.
//обновляет модель в соответствии с действиями пользователя

class Controller extends BaseController {

	public function indexPage(): void {
		$productsRowset = (new ProductTableStub())->getAll();
		$servicesRowset = (new ServiceTableStub())->getAll();
		$itemsRowset    = array_merge($productsRowset, $servicesRowset);

		$type = $this->getParam('type', 'html');

		if ($type !== 'xml' && $type !== 'html') {
			$type = 'html';
		}
		$fileType = ($type !== 'html') ? $type : 'phtml';

		$this->view->render(
			'index.' . $fileType,
			$type . '.phtml',
			[ 'items' => $itemsRowset ]);
	}

	/**
	 * @param string      $paramName
	 * @param string|null $default
	 * @return string|null
	 */
	private function getParam(string $paramName, string $default = null): ?string {
		if (isset($_GET[$paramName])) {
			$type = trim($_GET[$paramName]);
			$type = stripslashes($type);
			$type = htmlspecialchars($type);
		} else {
			$type = $default;
		}

		return $type;
	}
}
