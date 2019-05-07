<?php

$search = $_POST['search'];

$url = "https://en.wikipedia.org/w/api.php?action=opensearch&search=" . $search . "&format=json&callback=?";

$results = file_get_contents($url);

echo "<pre>";

print_r($results);
