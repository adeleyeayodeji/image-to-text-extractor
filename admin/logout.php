<?php
session_start();
session_destroy();
header("location: http://localhost/image-to-text-extractor");
?>