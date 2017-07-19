<?php

namespace model;

require_once('../User.php');

class UserModel
{
    const DB_PATH = './users.txt';

    public function addUser(User $newUser)
    {
        $entry = $newUser->getPseudonym() . " " . $newUser->getPassword() . " \n";
        $handle = fopen(self::DB_PATH, 'a');
        fwrite($handle, $entry);
        fclose($handle);
    }
}