<?php
$max_file_size = 200 * 1024 * 1024; // 200MB in bytes

if(isset($_FILES['myfile']) && $_FILES['myfile']['error'] === UPLOAD_ERR_OK) {
    $file_size = $_FILES['myfile']['size'];
    if ($file_size <= $max_file_size) {
        $src = $_FILES['myfile']['tmp_name'];
        $desDirectory = "/Applications/XAMPP/xamppfiles/htdocs/Project1/upload/";

        if (!file_exists($desDirectory) && !mkdir($desDirectory, 0777, true)) {
            die('Failed to create destination directory...');
        }

        if (!is_writable($desDirectory)) {
            die('Destination directory is not writable...');
        }

        $des = $desDirectory . $_FILES['myfile']['name'];

        if(move_uploaded_file($src, $des)){
            header("Location: ../view/changepicture.php");
            exit();
        } else {
            echo "Error moving uploaded file to destination.";
        }
    } else {
        echo "File size exceeds the limit (200MB).";
    }
} else {
    switch ($_FILES['myfile']['error']) {
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            echo "The uploaded file exceeds the upload_max_filesize directive in php.ini.";
            break;
        case UPLOAD_ERR_PARTIAL:
            echo "The uploaded file was only partially uploaded.";
            break;
        case UPLOAD_ERR_NO_FILE:
            echo "No file was uploaded.";
            break;
        case UPLOAD_ERR_NO_TMP_DIR:
            echo "Missing a temporary folder.";
            break;
        case UPLOAD_ERR_CANT_WRITE:
            echo "Failed to write file to disk.";
            break;
        case UPLOAD_ERR_EXTENSION:
            echo "A PHP extension stopped the file upload.";
            break;
        default:
            echo "Unknown upload error.";
            break;
    }
}
?>
