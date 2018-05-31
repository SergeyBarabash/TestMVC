<?php
declare(strict_types=1);

namespace TestFramework;

// Обработка запросов пользователя и вызов соответствующих ресурсов.
// Его основная функция — вызывать и координировать действие необходимых ресурсов и объектов,
// нужных для выполнения действий, задаваемых пользователем. Обычно контроллер вызывает
// соответствующую модель для задачи и выбирает подходящий вид.

abstract class BaseController {

	/**
	 * View object
	 * @var BaseView
	 */
	public $view;

	public function __construct() {
		$this->view = new BaseView();
	}

	abstract public function indexPage(): void;
}
