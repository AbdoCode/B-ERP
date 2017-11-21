<?php

    function getTitle() {
        global $pageTitle;
        if (isset($pageTitle)) {
            echo $pageTitle . ' | Back-Packers';
        } else {
            echo 'Back-Packers';
        }
    }