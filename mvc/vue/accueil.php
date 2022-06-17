<?php
if(isset($_SESSION['user'])){
    echo "<nav class=''>
            <div class='messageNav'>
                <h1>Bienvenue ".$_SESSION['user']['pseudo']."!</h1>
            </div>
        </nav>";
} else  {
    echo "<nav class=''>
            <div class='messageNav'>
                <h1>Bienvenue!</h1>
            </div>
        </nav>";
}
?>