<?php 
class adminExecSettings extends Controller_AdminExec
{
	public function run($aArgs)
	{
		require_once("builder/builderInterface.php");
		usbuilder()->init($this, $aArgs);
		
		$aData["seq"] = $aArgs["seq"];
		$aData["title"] = htmlentities($aArgs["title"], ENT_QUOTES);
		$aData["display_opt"] = $aArgs["display_opt"];
		
		$check = common()->modelContents()->checkDB($aData["seq"]);
		if($check[0]["cid"] == "0")
		{
			$bSave = common()->modelContents()->insertSettings($aData);
		}else{
			$bSave = common()->modelContents()->updateSettings($aData);
		}
		
		if($bSave === true){
			usbuilder()->message($sMessage, $sType = "success");
			usbuilder()->message("Saved succesfully");
		}else{
			usbuilder()->message("Oops. Something went wrong.", "warning");
		}
		
		usbuilder()->jsMove($aArgs["return_url"]);
		//usbuilder()->vd($bSave);
	}
}