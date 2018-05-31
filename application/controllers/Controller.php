<?php
declare(strict_types=1);

namespace App\controllers;

use App\models\ProductTableStub;
use App\models\ServiceTableStub;
use TestFramework\BaseController;

//Контролер обеспечивает взаимодействие между моделью и видом.
//обновляет модель в соответствии с действиями пользователя

class Controller extends BaseController {

	/**
	 * @var array
	 */
	private $itemsRowset;

	public function indexPage(): void {
		$productsRowset = (new ProductTableStub())->getAll();
		$servicesRowset = (new ServiceTableStub())->getAll();
		$this->itemsRowset = array_merge($productsRowset, $servicesRowset);

		$type     = $this->getParam('type');
		$type     = $type ?? 'html';
		$fileType = ($type !== 'html') ? $type : 'phtml';

		$this->view->render(
			'index.' . $fileType,
			'layout' . strtoupper($type) . '.phtml',
			[ 'items' => $this->itemsRowset ]);
	}

	/**
	 * @param string $paramName
	 * @return string|null
	 */
	private function getParam(string $paramName): ?string {
		if (isset($_GET[$paramName])) {
			$type = trim($_GET[$paramName]);
			$type = stripslashes($type);
			$type = htmlspecialchars($type);
			if ($type !== 'xml' && $type !== 'html') {
				$type = 'html';
			}
		}
		return $type ?? null;
	}
}
