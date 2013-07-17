<?php
class common
{
	function modelContents()
	{
		return getInstance('modelTodaysQuotes');
	}
	
	function getFullUrl() {
		return $_SERVER['REQUEST_URI'];
	}
}