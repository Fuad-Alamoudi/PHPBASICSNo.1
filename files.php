<?php
echo "<pre>";

print_r($_FILES);

echo "</pre>";
?>
<?php
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/from-data">
        <input type="file" name="file">
        <input type="submit" value="send">
    </form>
?>
