<footer>
    <div class="container">
        <p>Tom Yan &copy; <?php echo date("Y"); ?> | CSC 170 Webpage Design and Development</p>
        <?php
        // Display original source link for non-homepage
        $current_page = basename($_SERVER['PHP_SELF']);
        $originals_map = [
            "livebench.php"   => "Originals/livebenchoriginal.html",
            "darksouls.php"   => "Originals/darksoulsoriginal.html",
            "helldivers.php"  => "Originals/helldiversoriginal.html",
            "knicks.php"      => "Originals/knicksoriginal.html"
        ];
        if ($current_page != "index.php" && isset($originals_map[$current_page])) {
            $original_path = $originals_map[$current_page];
            echo '<p><a href="' . $original_path . '" target="_blank">Original Content</a></p>';
        }
        ?>
    </div>
</footer>

<!-- Hidden Verification Fields -->
<input type="hidden" name="myEmail" value="zyan17@u.rochester.edu">
<input type="hidden" name="myAnimal" value="Dog">