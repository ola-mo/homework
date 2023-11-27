<?php


//$id=2;
$data = file_get_contents("http://jsonplaceholder.typicode.com/users");
$users = json_decode($data, true);

 foreach ($users as $user) {
     echo "<pre>";
     echo $user['name'];
     echo "</pre>";
}

echo "<br>";
echo "==============";
 echo "<br>";
function findUsernameById($users, $targetId) {
    $data = file_get_contents("http://jsonplaceholder.typicode.com/users");
    $users = json_decode($data, true);

    foreach ($users as $item) {
        if ($item["id"] == $targetId) {
            return $item["username"];
        }
    }
    return null;
}
echo findUsernameById($users, 3);

?>


