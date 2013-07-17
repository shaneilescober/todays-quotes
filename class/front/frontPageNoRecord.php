<?php
class frontPageNoRecord extends Controller_Front
{
    protected function run($aArgs)
    {
    	require_once('builder/builderInterface.php');
    	usbuilder()->init($this, $aArgs);
    	
    	$seq = $this->getSequence();
    	$count = common()->modelContents()->getResultCount($seq);
    	
        if ($count > 0) $this->fetchClear();
    }
}
