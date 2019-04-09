<?php
session_start();
if (isset($_SESSION['usersname'])) {
    unset($_SESSION["usersname"]);
    unset($_SESSION["usersid"]);
    ?>
    <script>
        window.location.href = "index.php";
    </script>
    <?php
}
?>