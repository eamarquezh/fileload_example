<?php

$upload_location = "upload/";

$data = array();
$data['status'] = 'error';
$data['result'] = 'ok';

if (isset($_FILES['file'])) {
    $files = $_FILES['file'];
    
    // Valid file extension
    $valid_ext = array("png");

    foreach ($files['tmp_name'] as $key => $tmp_name) {
        $filename = $files['name'][$key];
        $file_extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        
        if (in_array($file_extension, $valid_ext) && isset($tmp_name)) {
            $destination = $upload_location . $filename;

            $file_content = file_get_contents($tmp_name);
            if ($file_content !== false) {
                if (file_put_contents($destination, $file_content) !== false) {
                    $data['status'] = 'ok';
                } else {
                    // Error al guardar el archivo
                }
            } else {
                // Error al leer el contenido del archivo
            }
        }
    }
}

echo json_encode($data);
exit;

?>