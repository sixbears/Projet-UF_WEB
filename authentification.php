<?php
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

if(isset($_POST['authentification'])){
    $login=$_POST['email'];
    $password=$_POST['password'];
    $sql = 'SELECT Email_user, Password_user, Rang_user FROM users';
    // $conn = new Connexion();
    $rep_sql = $conn->execute($sql);
    echo($password);
    if($rep_sql['Password_user'] == $password) {
    // echo('Salut '. $login. '<br/>Connexion réussi !');
        
        header('Location: ./admin.php'); 
    }
    else {
        header('Location: ./index.php');
    }
}

?>