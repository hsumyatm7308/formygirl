<?php
require_once('./database.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $getname = textfilter($_POST['name']);
    $getmessage = textfilter($_POST['message']);

    // Check if a file was uploaded
    if (isset($_FILES['image'])) {
        $imageData = file_get_contents($_FILES['image']['tmp_name']);

        if (isset($_POST['submit'])) {
            $stmt = $conn->prepare('INSERT INTO birthdaywish (photo, name, wish) VALUES (:photo, :name, :message)');
            $stmt->bindParam(":photo", $imageData, PDO::PARAM_LOB); // Use PARAM_LOB for large objects
            $stmt->bindParam(":name", $getname);
            $stmt->bindParam(":message", $getmessage);
            $stmt->execute();
        }
    }
}

function textfilter($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data;
}
?>
