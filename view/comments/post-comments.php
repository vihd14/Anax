<h2>Ny kommentar postad:</h2>

<div class="published-comment">
    <p><b>Namn: </b><?php echo $_POST["name"]; ?><br>
    <b>E-mail: </b><?php echo $_POST["email"]; ?></p>
    <?php echo $_POST["content"]; ?>
</div><br><br>

<form action="comments">
    <input type="submit" value="Tillbaka" />
</form>
