<?php
// print_r($_POST);
//if(isset($_SESSION["user_id"]) && !empty($_POST)){
foreach ($_POST as $p => $k) {
	ConfigurationData::updateValFromPreffix($p,$k);
}

foreach ($_FILES as $p => $k) {
  if(isset($_FILES[$p])){
    $image = new Upload($_FILES[$p]);
    if($image->uploaded){
      $image->Process("storage/configuration/");
      if($image->processed){
		ConfigurationData::updateValFromPreffix($p,$image->file_dst_name);		
      }
    }
  }
}

Core::redir("./?view=settings");
//}


?>