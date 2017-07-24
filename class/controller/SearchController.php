<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/23/17
 * Time: 11:49 PM
 */

namespace controller;


use model\SearchModel;

class SearchController extends AbstractController implements \DataValidator
{
    public function actionFind()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['query'] !== "") {
            $searchQuery = $this->validate($_POST['query']);
            $searchmodel = new SearchModel();
            $searchResult = $searchmodel::search($searchQuery);
            if (!$searchResult) {
                $cont = "<div class='search-results' style='float: left; margin: 100px;'><p>No Matches</p></div>";
                require("./view/user/search.php");
            } else {
                $cont = "";
                foreach ($searchResult as $item) {
                    $cont = $cont . "<div class='search-results' style='float: left; margin: 100px;'>
                                     <p>First Name: " . $item->getFirstName() . "</p><br/>
                                     <p>Last Name: " . $item->getLastName() . "</p><br/>
                                     <p>Pseudonym: " . $item->getPseudonym() . "</p><br/>" . "<button>Connect</button>" . "</div>";
                }
                require("./view/user/search.php");
            }
        }
    }

    public function validate(
        $data
    ) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}