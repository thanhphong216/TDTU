<?php

    function hashData($data){
        return hash('SHA256', $data, false);
    }

?>