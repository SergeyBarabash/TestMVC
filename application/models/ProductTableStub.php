<?php
declare(strict_types=1);

namespace App\models;

class ProductTableStub implements ProductTable {

	/**
	 * @return array
	 */
	public function getAll(): array {
		return [
			new Product([
				self::COLUMN_ID            => 1,
				self::COLUMN_PRODUCT_NAME  => 'Переключатель передний Shimano Tourney, TX50-6, универсальная тяга, универсальный хомут',
				self::COLUMN_GROUP         => 'Переключатели',
				self::COLUMN_PRODUCT_PRICE => 820,
			]),
			new Product([
				self::COLUMN_ID            => 2,
				self::COLUMN_PRODUCT_NAME  => 'Переключатель задний Shimano Altus, M310, 7/8ск.',
				self::COLUMN_GROUP         => 'Переключатели',
				self::COLUMN_PRODUCT_PRICE => 1990,
			]),
			new Product([
				self::COLUMN_ID            => 3,
				self::COLUMN_PRODUCT_NAME  => 'Переключатель передний Shimano Alivio, M4000, универсальная тяга, нижний хомут, для 9ск',
				self::COLUMN_GROUP         => 'Переключатели',
				self::COLUMN_PRODUCT_PRICE => 2360,
			]),
			new Product([
				self::COLUMN_ID            => 4,
				self::COLUMN_PRODUCT_NAME  => 'Переключатель передний Shimano XT, M786-L черн, ун. тяга, ун. хомут, для 44-38T',
				self::COLUMN_GROUP         => 'Переключатели',
				self::COLUMN_PRODUCT_PRICE => 3460,
			]),
			new Product([
				self::COLUMN_ID            => 5,
				self::COLUMN_PRODUCT_NAME  => 'Трещотка Shimano TZ20, 6ск, 14-28',
				self::COLUMN_GROUP         => 'Кассеты',
				self::COLUMN_PRODUCT_PRICE => 990,
			]),
			new Product([
				self::COLUMN_ID            => 6,
				self::COLUMN_PRODUCT_NAME  => 'Кассета Shimano HG31, 8ск, 11-32',
				self::COLUMN_GROUP         => 'Кассеты',
				self::COLUMN_PRODUCT_PRICE => 1260,
			]),
			new Product([
				self::COLUMN_ID            => 7,
				self::COLUMN_PRODUCT_NAME  => 'Кассета Shimano HG500, 10ск, 11-34',
				self::COLUMN_GROUP         => 'Кассеты',
				self::COLUMN_PRODUCT_PRICE => 3860,
			]),
			new Product([
				self::COLUMN_ID            => 8,
				self::COLUMN_PRODUCT_NAME  => 'Оплетка переключателя Shimano SP41',
				self::COLUMN_GROUP         => 'Тросы, рубашки',
				self::COLUMN_PRODUCT_PRICE => 190,
			]),
			new Product([
				self::COLUMN_ID            => 9,
				self::COLUMN_PRODUCT_NAME  => 'Набор тросиков переключения передач CUBE RFR Universal Sport Shift Kit',
				self::COLUMN_GROUP         => 'Тросы, рубашки',
				self::COLUMN_PRODUCT_PRICE => 2299,
			]),
		];
	}
}
