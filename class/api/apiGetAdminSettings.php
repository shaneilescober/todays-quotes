<?php 
class apiGetAdminSettings extends Controller_Api
{
	protected function get($aArgs)
	{
		require_once('builder/builderInterface.php');
		usbuilder()->init($this, $aArgs);
		
		$defSettings = common()->modelContents()->defaultSettings($aArgs['seq']);
		$default = array(
			'title' =>	html_entity_decode($defSettings[0]['title'], ENT_QUOTES),
			'display' => $defSettings[0]['display']
		);
		
		return $default;
	}
}