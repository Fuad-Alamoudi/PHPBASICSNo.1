<?php
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="username">
        <input type="submit" value="send">
    </form>
?>

<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        echo $_SERVER['REQUEST_METHOD'];
        echo $_REQUEST['username'];
    }
    ?>