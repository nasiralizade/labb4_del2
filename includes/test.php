<section id="postSection">
    <h3>Gästboksinlägg</h3>

    <?php
    foreach ($register->getPost()  as $id=> $obj) {
        "<h3>".$obj->getUsername()."</h3><p>".$obj->getMessage()."</p><p>".$obj->getDate()."</p>"
        //echo sprintf( "<h3>%s</h3><p>%s<br> %s<br/>", $obj->getUsername(), $obj->getMessage(), $obj->getDate() );
        ?>

        <button class="danger" name="delPost" onclick="window.location.href='<?= basename($_SERVER["PHP_SELF"]); ?>?delPost=<?= $id ?>';">Radera inlägg</button><br><hr>
        <?php
    }
    if(isset($_POST['delPost'])){
        //Tar bort inlägg beroende på valt index från hemsidan från textfilen
        print intval($_REQUEST['delPost']);
        $register->delPost(intval($_REQUEST['delPost']));
        unset($_REQUEST['delPost']);
        header("Location: index.php");
        exit();
    }
    ?>
</section> <!--/#postSection -->


