<?php

include_once  "config.php";

class API {

    function Select(){
        $db = new Database;
        $users = array();
        $data = $db->prepare('SELECT * FROM users ORDER BY id');
        $data->execute();

        while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
            $users[$OutputData['id']] == array(
                'id' => $OutputData['id'],
                'name' => $OutputData['name'],
                'age' => $OutputData['age']
            );
        }
        return json_encode($users);
    }
}

$API = new API;

Header('Content-Type: application/json');
echo $API-Select();

?>