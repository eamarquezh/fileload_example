<?php

$fil=$_POST['newname'];
// Count total files
$countfiles = count($_FILES['file']['name']);

// Upload directory
$upload_location = "upload/";

$count = 0;
for($i=0;$i < $countfiles;$i++){

   // File name
   $filename = $_FILES['file']['name'][$i];

   // File path
   $parts = explode(".",$filename);
   $name_n = $_POST['newname'] .".". end($parts);
   $path = $upload_location . $_POST['newname'] .".". end($parts);

   // file extension
   $file_extension = pathinfo($path, PATHINFO_EXTENSION);
   $file_extension = strtolower($file_extension);

   // Valid file extensions
   $valid_ext = array("png");

   // Check extension
   if(in_array($file_extension,$valid_ext)){

      // Upload file
      if(move_uploaded_file($_FILES['file']['tmp_name'][$i],$path)){
        $count += 1;
      } 
   }

}

$data = array();
$data['status'] = 'ok';
$data['result'] = $fil;

echo json_encode($data);;
exit;
?>