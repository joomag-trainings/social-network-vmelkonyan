<?php

namespace model;

class UserModel
{
    private $firstName;
    private $lastName;
    private $pseudonym;
    private $email;
    private $password;

    /**
     * UserModel constructor.
     * @param $firstName
     * @param $lastName
     * @param $pseudonym
     * @param $email
     * @param $password
     */
    public function __construct($firstName, $lastName, $pseudonym, $email, $password)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->pseudonym = $pseudonym;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getPseudonym()
    {
        return $this->pseudonym;
    }

    /**
     * @param mixed $pseudonym
     */
    public function setPseudonym($pseudonym)
    {
        $this->pseudonym = $pseudonym;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param $firstName
     * @param $lastName
     * @param $pseudonym
     * @param $email
     * @param $password
     * @return mixed
     */
    public static function addUser(UserModel $user)
    {
        require('class/Database.php');
        $firstName = $user->getFirstName();
        $lastName = $user->getLastName();
        $pseudonym = $user->getPseudonym();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $connection = \Database::getInstance();
        $statement = $connection->prepare("INSERT INTO `Users` VALUES(NULL , :firstName, :lastName, :pseudonym, :email, :password);");
        $statement->bindParam(':firstName', $firstName);
        $statement->bindParam(':lastName', $lastName);
        $statement->bindParam(':pseudonym', $pseudonym);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $password);
        return $statement->execute();
    }


    public static function updateUser(UserModel $user, $newPassword)
    {
        require('class/Database.php');
        $connection = \Database::getInstance();
        $firstName = $user->getFirstName();
        $lastName = $user->getLastName();
        $pseudonym = $user->getPseudonym();
        $email = $user->getEmail();
        $currentUsername = $_SESSION['user']['firstName'];
        $statement = $connection->prepare("SELECT * FROM `Users` WHERE `first_name` = :firstName");
        $statement->bindParam(':firstName', $currentUsername);
        $statement->execute();
        $rslt = $statement->fetchAll(\PDO::FETCH_ASSOC);
        $currentPassword = $rslt[0]['password'];
        if (password_verify($user->getPassword(), $currentPassword)) {
            $statement = $connection->prepare("UPDATE `Users` SET 
        `first_name` = :firstName,
        `last_name` = :lastName, 
        `pseudonym` = :pseudonym, 
        `email` = :email, 
        `password` = :password WHERE `first_name` = :currentUsername;");
            $statement->bindParam(':firstName', $firstName);
            $statement->bindParam(':lastName', $lastName);
            $statement->bindParam(':pseudonym', $pseudonym);
            $statement->bindParam(':email', $email);
            $statement->bindParam(':password', $newPassword);
            $statement->bindParam(':currentUsername', $currentUsername);
            return $statement->execute();
        } else {
            echo "invalid Password";
            die;

        }

    }

    public static function checkUser(UserModel $user)
    {
        require('class/Database.php');
        $connection = \Database::getInstance();
        $pseudonym = $user->getPseudonym();
        $statement = $connection->prepare("SELECT * FROM `Users` WHERE `pseudonym` = :pseudonym");
        $statement->bindParam(':pseudonym', $pseudonym);
        $statement->execute();
        $rslt = $statement->fetchAll(\PDO::FETCH_ASSOC);
        if (password_verify($user->getPassword(), $rslt[0]['password'])) {
            $user->setFirstName($rslt[0]['first_name']);
            $user->setLastName($rslt[0]['last_name']);
            $user->setPseudonym($rslt[0]['pseudonym']);
            $user->setEmail($rslt[0]['email']);
            return $user;
        } else {
            return false;
        }
    }
}