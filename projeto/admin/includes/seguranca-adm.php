<?php
    if(!isset($_SESSION['logadoadm'])){
        echo "
            <script>
                location.href='../index.php?of=ok';
            </script>
        ";
    }
?>