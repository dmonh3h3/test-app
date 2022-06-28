<!-- Logical Test -->
<!-- Test 1 Array Loop-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Test</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="px-5 py-5">
        <?php 
    $aplikasi[1] = 'gtAkademik';
    $aplikasi[2] = 'gtFinansi';
    $aplikasi[3] = 'gtPerizinan';
    $aplikasi[4] = 'eCampuz';
    $aplikasi[5] = 'eOviz';
    $i=1;
    while ($i <= count($aplikasi)) {
        echo "aplikasi " . $i ."  = "."'". $aplikasi[$i]."'"."<br>";
        $i++;
    }
    ?>
    </div>
</body>
</html>