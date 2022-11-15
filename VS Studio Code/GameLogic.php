<?php
        

        if(!empty($_POST['reset']))
        {
            reset_game();
        }
        elseif(!empty($_POST['P1Hit']))
        {
            echo '<h3>Player 1 Hit</h3>';
            echo '<h4>Bet:'.$_POST['P1Bet'].'</h4>';
        }
?>