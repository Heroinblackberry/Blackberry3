<?php
Class Routing_Router{
	private static $_intance; #���� ��������� ����������
	
	private function __construct() {} #�����������
	private function __clone() {} #������������ ����������
	
public static function instance () { #���� ������� ��� �������� ���������� ����������
	if (empty (self::$_instance)) #���� ������� instance �����
		self::$_instance = new self(); #�� ������������ �������� ���������� ������ Routing_Router
	return self::$_instance; #���� ��� �� �����, �� ���������� ����������� ��
}

private $_routes = array(); #�������� �������

public function connect ($urlPattern, $route){ #���� �������, ������� ��������� 2 ��������
	$this->_routes[$urlPattern] = $route; #������ � ��������� ������ $_routes �� ����� $urlPattern �������� $route
}

private $_controller = ''; # ���� ��������� ����������
private $_action = ''; #���� ��������� ����������
private $_params = array(); #���� ���������� �������

public function getRoute($uri) { #���� �������, ������� ��������� 1 ��������
	$routes = $this->_routes; #$routes ����� �������� ���������� ������� $_routes
	$baseUri = trim(Config::instance()->get('base_uri'),'/'); #��� ������ ���������� ���������� ������ Config ���������� base_uri � ��������� � ��� ������ ������ "/"
	$uri = ltrim(substr(trim($uri, '/'), strlen($baseUri)), '/'); #��������� ������ "/" � ����� ����� ������. ����� �������, ������ ����� �������� �� ����, ��� ���� ����� $baseUri
	
	foreach($routes as $rUri => $rRoute){ #������� ������, � ��� ����� $rUri ����� ����� ����� �������, � $rRoute ����� ��� ��������
		$pattern = '`^'.$rUri.'$`i'; #���������� ����� �������� ������ 
		
		if(preg_match($pattern, $uri)){ #� ������, ���� � $uri ��� $pattern
			$route = preg_replace($pattern, $rRoute, $uri);# �� � $uri ���������� ���������� � $pattern �� $rRoute
			break;
		}
	}
	if(!isset($route))#���� ���������� �� �����������������
	return $false; #������������ ������ ��������
	
	$route = explode('/', $route); #�������� ������ ����� ��������� "/" � ������
	$this->_controller = ucfirst(array_shift($route));#��������� � ��������� $_controller ������ � ��������� ����� �� $route[0], ���������� ������� �������� ������� � ����������� ���, �������� ������ �� 1 ������
	$this->_action = array_shift($route);#��������� � ��������� $_action ������ �� $route[0],  ���������� ������� �������� ������� � ����������� ���, �������� ������ �� 1 ������
	$this->_params = $route;# ��������� � ��������� $_params ������ �� $route
	return array(             #����������� ������� � ����������� ������ ���������� �����������
	'controller' => $this->_controller,
	'action' => $this->_action,
	'params' => $this->_params
	); 
}
	public function controller(){#������� �������� ��������� ����������
		return $this->_controller;
	}
	public function action(){ #������� �������� ��������� ����������
		return $this->_action;
	}
	public function params(){ #������� �������� ��������� ����������
		return $this->_params;
	}
}
?>