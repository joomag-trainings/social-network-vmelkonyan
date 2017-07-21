<?php

class PhotoUploadHandler
{
    public function addPhoto($_FILES)
    {
        $message = "";
        $targetDir = "/var/www/html/PhpstormProjects/social-network/uploads/";
        $uploadFile = $targetDir . basename($_FILES['img']['name']);

        if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadFile)) {
            $message = "OK";
        } else {
            $message = "Problem";
        }
        return $message;
    }
}