<section id="postSection">
    <h3>Gästboksinlägg</h3>
    <?php foreach ($register->getPost() as $key => $obj): ?>
        <div>
            <h3><?= $obj->getUsername(); ?></h3>
            <p><?= $obj->getMessage(); ?></p>
            <p><?= $obj->getDate(); ?></p>
            <p><?= $key;?></p>
            <button type="submit" name="delPost" value="Radera"
                    onclick="window.location.href='<?= basename( $_SERVER["PHP_SELF"] ); ?>?delPost=<?= $key ?>'">Radera
            </button>
        </div>
    <?php  endforeach; ?>

</section> <!--/#postSection -->

