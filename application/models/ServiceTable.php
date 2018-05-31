<?php
declare(strict_types=1);

namespace App\models;

interface ServiceTable {

	public const COLUMN_ID            = 'id';
	public const COLUMN_SERVICE_NAME  = 'service_name';
	public const COLUMN_VISIT_BY_SPEC = 'visit';
	public const COLUMN_SERVICE_PRICE = 'service_price';

	public function getAll();
}
