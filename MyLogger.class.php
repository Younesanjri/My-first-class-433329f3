<?php
class MyLogger {
    public function log($message) {
        print($message);
    }
}

$logger = new MyLogger();

$logger->log("test")
?>