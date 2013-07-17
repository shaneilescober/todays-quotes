<?php
class adminPageSettings extends Controller_Admin
{
    protected function run($aArgs)
    {
    	require_once("builder/builderInterface.php");
    	usbuilder()->init($this, $aArgs);
    	
    	$this->assign("sUrl", common()->getFullUrl());
    	$this->assign("bExtensionView", ($aArgs["etype"] ? 1 : 0));
    	$this->assign("seq", $aArgs["seq"]);
    	
    	$this->importCss("adminTodaysQuotes");
    	$this->importJS("adminTodaysQuotes");
    	
    	//method for including a validator for the form
    	usbuilder()->validator(array("form" => "todaysquotes_form"));
    	//sends values taken from the form to adminExecSnsLinker to process into the database
    	$sFormScript = usbuilder()->getFormAction("todaysquotes_form", "adminExecSettings");
    	$this->writeJs($sFormScript);
    	
    	$this->view(__CLASS__);
    }
}
