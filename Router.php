<?php

class Router
{

	private $presenters;

	function __construct(Presenter $presenter)
	{
		$this->presenters = $presenter;
	}

	function doUserAction()
	{
		$this->presenters->putMenu();
		if (!isset($_GET['action']))
			return;
		$action = $_GET['action'];
		$this->presenters->$action();
	}
}
