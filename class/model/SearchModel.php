<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/24/17
 * Time: 3:12 AM
 */

namespace model;


class SearchModel
{
    public static function search($query)
    {
        require('class/Database.php');
        $query = "%" . $query . "%";
        $connection = \Database::getInstance();
        $statement = $connection->prepare("SELECT * FROM `Users` WHERE `first_name` LIKE :query OR `last_name` LIKE :query OR `pseudonym` LIKE :query");
        $statement->bindParam(":query", $query);

        if ($statement->execute()) {
            if ($statement->rowCount() > 0) {
                $rslt = $statement->fetchAll(\PDO::FETCH_ASSOC);
                $rsltArr = [];
                foreach ($rslt as $item) {
                    $user = new UserModel($item['id'], $item['first_name'], $item['last_name'], $item['pseudonym'],
                        $item['password'],
                        null);
                    array_push($rsltArr, $user);
                }
                return $rsltArr;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


}