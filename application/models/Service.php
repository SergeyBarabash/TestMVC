<?php
declare(strict_types=1);

namespace App\models;
// Модель предоставляет данные и правила бизнес-логики
// Данные должны быть обработаны в соответствии с правилами валидации
// Модель даёт контроллеру представление данных, которые запросил пользователь

class Service implements CatalogItem {

	/**
	 * @var int
	 */
	private $id;

	/**
	 * @var string
	 */
	private $service_name;

	/**
	 * @var bool
	 */
	private $visit;

	/**
	 * @var float
	 */
	private $service_price;

	/**
	 * @param array $row
	 */
	public function __construct(array $row) {
		$this->id            = $row[ServiceTable::COLUMN_ID];
		$this->service_name  = $row[ServiceTable::COLUMN_SERVICE_NAME];
		$this->visit         = $row[ServiceTable::COLUMN_VISIT_BY_SPEC];
		$this->service_price = $row[ServiceTable::COLUMN_SERVICE_PRICE];
	}

	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->service_name;
	}

	/**
	 * @return float
	 */
	public function getPrice(): float {
		return $this->service_price;
	}
}
