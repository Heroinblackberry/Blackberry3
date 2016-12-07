<?php
    $app = Model_DB::query("SELECT * FROM `article`");
    foreach($app as $shit => $do)
    {
        echo '<div class="article">';
        echo("<h2>$do[title]</h2>");
        echo("<h5>Создано: $do[created] | Изменено: $do[update]</h5>");
        echo("<p>$do[description]</p>");
        echo '</div><br>';
	echo '<div class="qwer"><hr align="middle" width="400" size="2" color="white " /></div><br>';
    }
?>
