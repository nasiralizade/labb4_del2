<section class="container">
        <h2>Nasir's Gästbok</h2>
        <form action="<?= basename($_SERVER["PHP_SELF"]);?>" method="post">
            <p>Namn: <br><label>
                    <input type="text" name="name" class="message-text">
                </label></p>
            <p>Meddelande:<br> <label>
                    <textarea cols="30" rows="10" class="message-text" name="message"></textarea>
                </label></p>
            <p><input type="submit" name="addPost" value="Skapa Inlägg"></p>
        </form>
</section>


