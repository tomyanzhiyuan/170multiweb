<footer>
    <div class="container">
        <p>Tom Yan &copy; <?php echo date("Y"); ?> | CSC 170 Webpage Design and Development</p>
        <?php
        // Display original source link for non-homepage
        $current_page = basename($_SERVER['PHP_SELF']);
        if ($current_page != "index.php") {
            echo '<p>Original content from: <a href="#">Original Project 1 Source</a></p>';
        }
        ?>
    </div>
</footer>

<!-- Hidden Verification Fields -->
<input type="hidden" name="myEmail" value="zyan17@u.rochester.edu">
<input type="hidden" name="myAnimal" value="Dog">