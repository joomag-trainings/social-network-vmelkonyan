<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/17/17
 * Time: 4:05 AM
 */

namespace php\inc;


class Database
{
    private $dbPath = "/var/www/html/PhpstormProjects/social-network/pages/users.txt";

    public function addUserToDb(User $newUser)
    {
        $entry = $newUser->getPseudonym() . " " . $newUser->getPassword() . " \n";
        $handle = fopen($this->dbPath, 'a');
        fwrite($handle, $entry);
        fclose($handle);
    }

    public function checkIfUserExists($pseudonym, $password)
    {
        $handle = fopen($this->dbPath, 'r');

        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $temp = explode(' ', $line);
                if ($temp[0] === $pseudonym && password_verify($password, $temp[1])) {
                    return true;
                }
            }
            fclose($handle);
        }
        return false;
    }
}