<?php
declare(strict_types=1);

namespace App\models;

interface ProductTable {

	public const COLUMN_ID            = 'id';
	public const COLUMN_PRODUCT_NAME  = 'product_name';
	public const COLUMN_GROUP         = 'group';
	public const COLUMN_PRODUCT_PRICE = 'product_price';

	public function getAll();
}
