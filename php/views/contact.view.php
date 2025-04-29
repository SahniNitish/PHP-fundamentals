<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$heading = "Contact Us"; // Define the heading variable
require('views/particals/head.php');
require('views/particals/nav.php');
require('views/particals/banner.php');
?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= $heading ?></h1>
    <p>Hello. This is our Contact us page.</p>
  </div>
</main>
</div>
</body>
</html>