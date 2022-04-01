<html>
<head>
 <title><?= $header_buku ?></title>
</head>
<body>
 <h1><?= $penerbit ?></h1>
 <hr />
 <ul>
 <?php foreach ($judul_buku as $item) : ?>
 <li><?= $item ?></li>
 <?php endforeach; ?>
 </ul>
</body>
</html>