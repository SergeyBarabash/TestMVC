<?php
declare(strict_types=1);

namespace App\models;

class ServiceTableStub implements ServiceTable {

	/**
	 * @return array
	 */
	public function getAll(): array {
		return [
			new Service([
				self::COLUMN_ID            => 1,
				self::COLUMN_SERVICE_NAME  => 'Хранение велосипеда 1 месяц',
				self::COLUMN_VISIT_BY_SPEC => false,
				self::COLUMN_SERVICE_PRICE => 600,
			]),
			new Service([
				self::COLUMN_ID            => 2,
				self::COLUMN_SERVICE_NAME  => 'Хранение велосипеда 3 месяца',
				self::COLUMN_VISIT_BY_SPEC => false,
				self::COLUMN_SERVICE_PRICE => 1350,
			]),
			new Service([
				self::COLUMN_ID            => 3,
				self::COLUMN_SERVICE_NAME  => 'Хранение велосипеда 5 месяцев',
				self::COLUMN_VISIT_BY_SPEC => false,
				self::COLUMN_SERVICE_PRICE => 2100,
			]),
			new Service([
				self::COLUMN_ID            => 4,
				self::COLUMN_SERVICE_NAME  => 'Регулировка, устранение люфта в рулевой колонке',
				self::COLUMN_VISIT_BY_SPEC => false,
				self::COLUMN_SERVICE_PRICE => 100,
			]),
			new Service([
				self::COLUMN_ID            => 5,
				self::COLUMN_SERVICE_NAME  => 'Обрезка штока вилки',
				self::COLUMN_VISIT_BY_SPEC => false,
				self::COLUMN_SERVICE_PRICE => 100,
			]),
			new Service([
				self::COLUMN_ID            => 6,
				self::COLUMN_SERVICE_NAME  => 'Замена рулевой колонки на велосипеде',
				self::COLUMN_VISIT_BY_SPEC => true,
				self::COLUMN_SERVICE_PRICE => 500,
			]),
			new Service([
				self::COLUMN_ID            => 7,
				self::COLUMN_SERVICE_NAME  => 'Замена шатунов',
				self::COLUMN_VISIT_BY_SPEC => true,
				self::COLUMN_SERVICE_PRICE => 200,
			]),
		];
	}
}
