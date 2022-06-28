<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Condition</title>
</head>
<body>
    <div style="padding:20px;">
        <?php 
            for ($x=1; $x <= 50; $x++){
                if( $x % 3 == 0 && $x % 5 == 0 ) { // Jika Kelipatan 3 dan 5
                    echo $x." FooBar <br>";
                }else if( $x % 3 == 0 ) { // Jika Kelipatan 3 
                    echo $x." Foo <br>";
                }else if( $x % 5 == 0 ) { // Jika Kelipatan 5
                    echo $x." Bar <br>";
                }else{
                    echo $x." <br>"; 
                }
            };
        ?>
    </div>
</body>
</html>