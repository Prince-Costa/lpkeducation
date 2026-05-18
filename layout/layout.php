<?php
function layout($contentFile, $data = []) {
    extract($data);

    include 'head.php';
    include 'header.php';
    include 'nav.php';
    include $contentFile;
    include 'footer.php';
}