<?php

$msg="";
$className="text-danger";

function printArr($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

function redirect($url){
    ?>
        <script>
            location.href="<?php echo $url?>";
        </script>
    <?php
}

function alert($msg){
    ?>
        <script>
            alert("<?php echo $msg?>");
        </script>
    <?php
}

function redirect_some_time($url){
    ?>
        <script>
            setTimeout(function(){
                location.href="<?php echo $url?>";
            },5000)
        </script>
    <?php
}


define("MAIL_PASS","Test@321");
?>