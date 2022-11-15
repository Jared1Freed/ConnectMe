<?php
    session_start();
    if(empty($_SESSION)) ?>


<?php
    require('functions.php');
    require('GameLogic.php');
    //print_r($_GET);
    //print_r($_POST);
    //echo session_id();

    date_default_timezone_set('America/Chicago');
    echo '<p>' .date('l jS \of F Y h:i:s A'). '</p>';

?>
<html>
    </head>
        <title> Meeting Reader </title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    
<table>
        <tr>
            <th>This is the outlook of your meeting </th>
        </tr>

        <tr>
            <td><?= main_roll('p1'); ?></td>
        </tr>
    
</body>
</html>

    

            

