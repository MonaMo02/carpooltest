<? php_check_syntax
function getDB(){
    $db = new PDO('mysql:host=localhost;dbname=ourcarpool', 'root','');
    return $db;
}