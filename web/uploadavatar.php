<?php
/**
 * Created by PhpStorm.
 * User: denisch
 * Date: 10.09.2015
 * Time: 14:20
 */

setlocale(LC_ALL, 'ru_RU.UTF8');

$data = array();

if (isset($_GET['uploadfile'])) {

    $error = false;
    $files = array();

    $uploaddir = 'uploads';

    if (! is_dir($uploaddir)) mkdir($uploaddir, 0777);

    foreach ($_FILES as $file) {

        if (move_uploaded_file($file['tmp_name'], $uploaddir. "/".basename($file['name']))) {
            $files[] = $file['name'];
        }
        else {
            $error = true;
        }
    }

    $data = $error ? array ('error' => 'error upload avatar') : array('files' => $files);

    echo json_encode($data);
}