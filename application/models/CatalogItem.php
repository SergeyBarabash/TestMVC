<?php
declare(strict_types=1);

namespace App\models;

interface CatalogItem {

	public function getName();

	public function getPrice();
}
