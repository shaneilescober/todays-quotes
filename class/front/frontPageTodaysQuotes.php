<?php 
class frontPageTodaysQuotes extends Controller_Front
{
	protected function run($aArgs)
	{
		require_once('builder/builderInterface.php');
		usbuilder()->init($this, $aArgs);
		 
    	$seq = $this->getSequence();
    	$data = common()->modelContents()->frontSettings($seq);
    	$count = common()->modelContents()->getResultCount($seq);
    	$today = date("F j, Y"); 
    	$this->assign('tqc_quotes', 'tq_quotes');
    	$this->assign('tqc_title', 'tqc_title');
    	$this->assign('tq_title', $data[0]['title'] . ' ('.$today.')');
    	
    	if($data[0]['display'] == "single"){
    		$sHtml = '<script language="javascript" src="http://www.quotationspage.com/data/1mqotd.js"></script>';
    		$this->assign('tq_script', $sHtml);
    	}else{
    		$sHtml = '<script language="javascript" src="http://www.quotationspage.com/data/mqotd.js"></script>';
    		$this->assign('tq_script', $sHtml);
    	}
    	
    	$this->importCss('frontTodaysQuotes');
    	
    	if ($count == 0) $this->fetchClear();
	}
}