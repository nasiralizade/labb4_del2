<?php
session_start();

include("classes/DBguestbook.php");
$register = new DBguestbook();//skapar en objekt av NewPost klasse, för senare kunna använda dess funktioner.

if (isset( $_POST['addPost'] )) { //när användaren trycker på "Skapa inlägg" knappen.
    $register->addPost( $_POST['name'], $_POST['message'], date( "Y-m-d h:i:s" ) );//lägger in namn, meddelande och datum
    header( "Location:index.php" );
}
if (isset( $_REQUEST['delPost'] )) {
    //Tar bort inlägg beroende på valt index

    $register->delPost(intval(['delPost']));
    unset( $_REQUEST['delPost'] );
    header("Location: index.php#postSection");
}
include ("includes/header.php");
include ("includes/addPostSection.php");
include ("includes/posts.php");
include ("includes/footer.php");

