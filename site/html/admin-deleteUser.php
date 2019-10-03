<?php
session_start();

if(empty($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: login.php");
    exit;
}
if (isset($_SESSION["isNotAdmin"]) && $_SESSION["isNotAdmin"] === 1){
    header("location: index.php");
    exit;
}

require_once("connection.php");

if (isset($_GET['delete_id_login'])) {
    try{
        $strSQLRequest = "DELETE FROM Utilisateur WHERE id_login = ".$_GET['delete_id_login'];
        $pdo->exec($strSQLRequest);
        echo "Records were deleted successfully.";
        //echo " <meta http-equiv='Location' content='login.php'>";
        //header("Refresh:0; url=login.php");
    } catch(PDOException $e){
        die("ERROR: Could not able to execute $strSQLRequest. " . $e->getMessage());
    }

}
header('Location: admin.php');
?>