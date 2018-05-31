<?php
declare(strict_types=1);

namespace TestFramework;

class Router {

	public static function start(): void {
		$controllerName = '';
		$actionName     = 'index';

		$routes = explode('/', $_SERVER['REQUEST_URI']);

		function leftPart($str, $substring) {
			$pos = strpos($str,$substring);
			if ($pos !== false) {
				$str = substr($str,0,$pos);
			}
			return $str;
		}

		if (!empty($routes[1])) {
			$controllerName = ucfirst(strtolower($routes[1]));
			$controllerName = leftPart($controllerName, '?');
		}

		if (!empty($routes[2])) {
			$actionName = strtolower($routes[2]);
			$actionName = leftPart($actionName, '?');
		}

		$controllerName = ($controllerName === 'Index' ) ? '' : $controllerName;
		$controllerName .= 'Controller';
		$actionName     .= 'Page';

		$controllerPath = APP_PATH . '/controllers/' . $controllerName . '.php';

		if (file_exists($controllerPath)) {
			/** @noinspection PhpIncludeInspection */
			include $controllerPath;
		} else {
			self::ErrorPage404();
		}

		$controllerName = "\\App\\controllers\\" . $controllerName;

		$controller = new $controllerName;
		$action     = $actionName;

		if (method_exists($controller, $action)) {
			$controller->$action();
		} else {
			self::ErrorPage404();
		}
	}

	private static function ErrorPage404(): void {
		$host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
		header('HTTP/1.1 404 Not Found');
		header('Status: 404 Not Found');
		header('Location:' . $host . 'error');
	}
}
