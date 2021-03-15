<?php
require 'config/auth.php';
ob_start();
$fileName = basename('trf.zip');
$filePath = 'files/'.$fileName;
if(!empty($fileName) && file_exists($filePath)){
    $strFile = file_get_contents($filePath);	
    // Define headers
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$fileName");
    header("Content-Type: application/force-download");
    header("Content-Transfer-Encoding: binary");
    header('Content-Length: ' . filesize($filePath));

    echo $strFile;
	  while (ob_get_level()) {
		ob_end_clean();
	  }
	  readfile($filePath);	 
		exit;
}else{
    echo 'The file does not exist.';
}



?>