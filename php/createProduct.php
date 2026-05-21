<?php
    require_once('./php/Server.php');
    
    function upload_image($file, $folder)
    {
        $name = uniqid() . '_' . basename($file['name']);
        move_uploaded_file($file['tmp_name'], "../$folder/$name");
        return $name;
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        if(!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
            die("Ошибка загрузки файла");
        }
        
        $fileName = upload_image($_FILES['file'], "assets/product_Images");
        
        $query = $pdo->prepare("INSERT INTO `dishes`(`Name`, `ID_Category`, `Description`, `Price`, `Dishes_img`, `additional`, `cooking_in_minutes`, `weight_product`)
        VALUES (?, ?, ?, ?, ?, ?, 60, ?)");
        
        $query->execute(array(
            $_POST['title'],       
            1,                    
            $_POST['description'], 
            $_POST['price'],       
            $fileName,             
            $_POST['additional'],  
            $_POST['weight']       
        ));
        

        header("Location: ../Index.php?success=product_created");
        exit();
    }
?>