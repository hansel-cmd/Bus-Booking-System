<?php 

    $error = "";

    if (empty($_SESSION['sales'])) {
        $_SESSION['sales'] = 0;
    }

    if (empty($_SESSION['ticketNum'])) {
        $_SESSION['ticketNum'] = 0;
    }

    if (empty($_SESSION['bus1'])) {
        $_SESSION['bus1'] = array();
    }

    if (empty($_SESSION['bus2'])) {
        $_SESSION['bus2'] = array();
    }

    if (empty($_SESSION['bus3'])) {
        $_SESSION['bus3'] = array();
    }

    if (empty($_SESSION['bus4'])) {
        $_SESSION['bus4'] = array();
    }

    if (empty($_SESSION['bus5'])) {
        $_SESSION['bus5'] = array();
    }

?>