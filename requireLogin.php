<?php
        require_once("../database/connect.php");
        $userid = isset($_SESSION['userid']) ? $_SESSION['userid']: null;
        if($userid == null){
            ?>
            <script>
                alert('You need to sign in first! Thank you.');
                window.location.href='../login.php';
            </script>
            <?php
        }
        if($_SESSION['qtd'] == 1){
            ?>
            <script>
                alert('You need to sign in Your Admin Account! Thank you.');
                window.location.href='../login.php';
            </script>
            <?php
        }
        if($_SESSION['qtd'] == 2){
            ?>
            <script>
                alert('You need to sign in Your Personal Account! Thank you.');
                window.location.href='../login.php';
            </script>
            <?php
        }
?>