<?php
declare(strict_types=1);

namespace App\models;
// Модель предоставляет данные и правила бизнес-логики
// Данные должны быть обработаны в соответствии с правилами валидации
// Модель даёт контроллеру представление данных, которые запросил пользователь

class Product implements CatalogItem {

	/**
	 * @var int
	 */
	private $id;

	/**
	 * @var string
	 */
	private $productName;

	/**
	 * @var string
	 */
	private $group;

	/**
	 * @var float
	 */
	private $productPrice;

	/**
	 * @param array $row
	 */
	public function __construct(array $row) {
		$this->id           = $row[ProductTable::COLUMN_ID];
		$this->productName  = $row[ProductTable::COLUMN_PRODUCT_NAME];
		$this->group        = $row[ProductTable::COLUMN_GROUP];
		$this->productPrice = $row[ProductTable::COLUMN_PRODUCT_PRICE];
	}

	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->productName;
	}

	/**
	 * @return float
	 */
	public function getPrice(): float {
		return $this->productPrice;
	}
}
