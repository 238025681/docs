<?php
if (isset($_SESSION['messages'])) {
    foreach ($_SESSION['messages'] as $msg) {
        if($msg['type'] == "info"){
            echo '<div class="alert alert-secondary col-lg-7 col-md-6 col-sm-7 offset-lg-3 offset-md-2 offset-sm-1" role="alert">';
            echo htmlspecialchars($msg['text']);
            echo '</div>';
        }

        if($msg['type'] == "error"){
            echo '<div class="alert alert-danger col-lg-7 col-md-6 col-sm-7 offset-lg-3 offset-md-2 offset-sm-1" role="alert">';
            echo htmlspecialchars($msg['text']);
            echo '</div>';
        }
    }

//    echo <<<EOF <div class="alert alert-secondary" role="alert">
//</div>
//<div class="alert alert-danger" role="alert">
//</div>
//EOF;
    unset($_SESSION['messages']);
}




