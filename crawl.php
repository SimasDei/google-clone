<?php
include './classes/DomDocumentParser.php';
function followLinks($url) {
  $parser = new DomDocumentParser ($url);
}

$startUrl = "http://www.simas-dei.com";
followLinks($startUrl);