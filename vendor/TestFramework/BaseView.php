<?php
declare(strict_types=1);

namespace TestFramework;

//представление данных пользователю в любом поддерживаемом формате.
//Может быть несколько различных видов, и контроллер выбирает, какой подходит наилучшим образом для текущей ситуации.

class BaseView {

	/**
	 * @param       $content
	 * @param string $template
	 * @param array $vars
	 */
	public function render($content, string $template, array $vars = []): void {

		$content = $this->fetch($content, $vars);
		echo $this->fetch('layouts/' . $template, ['contentSection' => $content]);
	}

	/**
	 * @param       $content
	 * @param array $vars
	 * @return string
	 */
	protected function fetch($content, array $vars = []): string {
		extract($vars, EXTR_OVERWRITE);
		ob_start();
		/** @noinspection PhpIncludeInspection */
		include APP_PATH . '/views/' . $content;

		return ob_get_clean();
	}
}
