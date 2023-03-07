<?php
include("classes/DBguestbook.php");
$register = new DBguestbook();//skapar en objekt av DBguestbook klass.

if (isset( $_POST['addPost'] )) { //när användaren trycker på "Skapa inlägg" knappen.
    $register->addPost( $_POST['name'], $_POST['message'], date( "Y-m-d h:i:s" ) );//lägger in namn, meddelande och datum
    header( "Location:index.php" );
    exit();
}
if (isset( $_REQUEST['delPost'] )) {
    //Tar bort inlägg beroende på valt index
    $register->delPost( intval( $_REQUEST['delPost'] ) );
    unset( $_REQUEST['delPost'] );
    header( "Location: index.php" );
    exit();
}
include("includes/header.php");
include("includes/addPostSection.php");
include("includes/posts.php");
include("includes/footer.php");

