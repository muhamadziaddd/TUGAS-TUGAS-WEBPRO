<h1>Form Download</h1>
<form action="download.php" method="get">
    <label> Key:
        <input type="text" name="key">
    </label>
    <input type="submit" value="Download">
</form>

<?php
if (isset($_GET['key']) && $_GET['key'] == 'rahasia') {
    header('Content-Disposition: attachment; filename="info.php"');
    header('Content-Type: text/php');
    readfile(__DIR__ . '/file/info.php');
    exit();
} else {
    echo "Invalid Key ! <br /> <a href='upload.php'>Back</a>";
}
?>
