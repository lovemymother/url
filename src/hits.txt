<?php 

$getHits = json_decode(file_get_contents(__DIR__ . "/../log.json"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="twitter:image" content="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
    <meta property="og:type" content="website">
    <meta name="twitter:title" content="Simple URL Shortener">
    <meta name="description" content="The perfect free URL shortener for transforming long, ugly links into nice, memorable and trackable short URLs. Use it to shorten links.">
    <meta name="twitter:description" content="The perfect free URL shortener for transforming long, ugly links into nice, memorable and trackable short URLs. Use it to shorten links.">
    <meta property="og:image" content="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
    <meta name="twitter:card" content="summary">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
    <link rel="icon" type="image/png" sizes="180x180" href="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
    <link rel="icon" type="image/png" sizes="512x512" href="https://i.ibb.co/wQGPQ7j/Group-5ko.png">
        <link href="astyle/dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="RAZhort is url shortener simple and no database easy use dor user">
        <meta name="keywords" content="admin template,RAZhort admin url, google short, shortlink, shorturl, simple url, pemendek url, url singkat">
        <meta name="author" content="RAZCode">
        <title>RAZhort - ShortLink Without Database</title>
    <title>Total Hits</title>
</head>
<body>
    <p  style="font-family: 'Courier New', Courier, monospace;">Total hits pada <a href="<?= $getHits->url; ?>" target="_blank" rel="noopener noreferrer">URL Anda</a> adalah: <?=$getHits->hit; ?></p>
</body>
</html>
