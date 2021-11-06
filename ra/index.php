<?php
$listDir = scandir(__DIR__ . "/../short");
$newDir = array_diff($listDir, array(".", "..", "index.php"));
$newDir = array_values($newDir);
$no = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata&amp;display=swap">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/table.css">
</head>

<body><div class="bootstrap_datatables">
<div class="container py-5">
  <header class="text-center text-black">
    <h1 class="display-4">List Shorted</h1>
  </header>
  <div class="row py-5">
    <div class="col-lg-10 mx-auto">
      <div class="card rounded shadow border-0">
        <div class="card-body p-5 bg-white rounded">
          <div class="table-responsive">
            <table id="example" style="width:100%" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Short URL</th>
                  <th>Long URL</th>
                  <th>Total Pengunjung</th>
                </tr>
              </thead>
              <tbody>
              <?php 
              foreach ($newDir as $dir) {
              $dataJson = json_decode(file_get_contents(__DIR__ . "/../short/{$dir}/log.json"));
              ?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><a href="/short/<?= $dir; ?>/" target="_blank" rel="noopener noreferrer">Klik disini</a></td>
                  <td><?= $dataJson->url; ?></td>
                  <td><?= $dataJson->hit; ?> pengunjung</td>
                </tr>
              <?php 
              $no++;
              }
              ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/Bootstrap-DataTables.js"></script>
</body>

</html>
