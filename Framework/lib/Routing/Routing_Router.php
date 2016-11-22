<?php
Class Routing_Router{
	private static $_intance; #ввод приватной переменной
	
	private function __construct() {} #конструктор
	private function __clone() {} #клонирование экземпл€ра
	
public static function instance () { #ввод функции дл€ создани€ статичного экземпл€ра
	if (empty (self::$_instance)) #если функци€ instance пуста
		self::$_instance = new self(); #то производитс€ создание экземпл€ра класса Routing_Router
	return self::$_instance; #если она не пуста, то происходит возвращение ее
}

private $_routes = array(); #создание массива

public function connect ($urlPattern, $route){ #ввод функции, котора€ принимает 2 значени€
	$this->_routes[$urlPattern] = $route; #запись в приватный массив $_routes по ключу $urlPattern значение $route
}

private $_controller = ''; # ввод приватной переменной
private $_action = ''; #ввод приватной переменной
private $_params = array(); #ввод приватного массива

public function getRoute($uri) { #ввод функции, котора€ принимает 1 значение
	$routes = $this->_routes; #$routes равно значению приватного массива $_routes
	$baseUri = trim(Config::instance()->get('base_uri'),'/'); #при помощи статичного экземпл€ра класса Config получаетс€ base_uri и удал€етс€ с его концов символ "/"
	$uri = ltrim(substr(trim($uri, '/'), strlen($baseUri)), '/'); #удал€етс€ символ "/" в левой части строки. таким образом, строка будет состо€ть из того, что идет после $baseUri
	
	foreach($routes as $rUri => $rRoute){ #перебор массив, в это врем€ $rUri равен ключу этого массива, а $rRoute равен его значению
		$pattern = '`^'.$rUri.'$`i'; #переменна€ равна заданной строке 
		
		if(preg_match($pattern, $uri)){ #в случае, если в $uri нет $pattern
			$route = preg_replace($pattern, $rRoute, $uri);# то в $uri замен€ютс€ совпадени€ с $pattern на $rRoute
			break;
		}
	}
	if(!isset($route))#если переменна€ не инициализированна
	return $false; #возвращаетс€ данное значение
	
	$route = explode('/', $route); #разбитие строки через сепаратор "/" в массив
	$this->_controller = ucfirst(array_shift($route));#получение в приватную $_controller строку с заглавной буквы из $route[0], извлечение первого значени€ массива и возвращение его, сокраща€ размер на 1 символ
	$this->_action = array_shift($route);#получение в приватную $_action строку из $route[0],  извлечение первого значени€ массива и возвращение его, сокраща€ размер на 1 символ
	$this->_params = $route;# получение в приватную $_params строку из $route
	return array(             #возвращение массива с полученными раннее приватными переменными
	'controller' => $this->_controller,
	'action' => $this->_action,
	'params' => $this->_params
	); 
}
	public function controller(){#функци€ возврата приватной переменной
		return $this->_controller;
	}
	public function action(){ #функци€ возврата приватной переменной
		return $this->_action;
	}
	public function params(){ #функци€ возврата приватной переменной
		return $this->_params;
	}
}
?>