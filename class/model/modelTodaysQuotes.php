<?php
class modelTodaysQuotes extends Model
{
	function defaultSettings($seq){
		$sql = "SELECT * FROM todaysquotes_settings WHERE seq = {$seq}";
		$data = $this->query($sql);
		return $data;
	}
	
	function checkDB($seq){
		$sql = "SELECT COUNT(idx) as cid FROM todaysquotes_settings WHERE seq = {$seq}";
		$data = $this->query($sql);
		return $data;
	}
	
	function insertSettings($aData)
    {	
    	$sql = "INSERT INTO todaysquotes_settings (
    	seq, 
    	title, 
    	display
    	) VALUES(
    	{$aData['seq']}, 
    	'{$aData['title']}', 
    	'{$aData['display_opt']}'
    	)";
    	
    	$bSave = $this->query($sql);
    	if($bSave === false){
    		return false;
    	}else{
    		return true;
    	}
    }
    
    function updateSettings($aData)
    {
    	$sql = "UPDATE todaysquotes_settings 
    	SET 
    	title = '{$aData['title']}', 
    	display = '{$aData['display_opt']}' 
    	WHERE seq = {$aData['seq']}";
    	
   		 $bSave = $this->query($sql);
    	if($bSave === false){
    		return false;
    	}else{
    		return true;
    	}
    }
    
    function frontSettings($seq)
    {
    	$sql = "SELECT * FROM todaysquotes_settings WHERE seq = {$seq}";
    	$data = $this->query($sql);
    	return $data;
    }
    
    function getResultCount($seq)
    {
    	$sql = "SELECT COUNT(idx) as cid FROM todaysquotes_settings WHERE seq = {$seq}";
    	$data = $this->query($sql);
    	return $data[0]['cid'];
    }
    
	function deleteContentsBySeq($aSeq)
	{
	    $sSeqs = implode(',', $aSeq);
        $sQuery = "Delete from " . $this->getTableName() . " where seq in($sSeqs)";
        $mResult = $this->query($sQuery);
        return $mResult;
	}

    function getSeqCount()
    {
        $sQuery = "SELECT seq, count(seq) AS value FROM " . $this->getTableName() . " GROUP BY seq ORDER BY seq asc;";
        return $this->query($sQuery);
    }
    
    function getTableName()
    {
    	return strtolower(APP_ID) . '_' . 'contents';
    }
}