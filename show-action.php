<h1>you have submitted a form with the following values</h1>
<h2>GET vaiables:</h2>

<?php

foreach ($_GET as $key => $value) {
    echo "<p>";
    echo "{$key} = {$value}";
    echo "</p>";
}
?>

<h2>POST vaiables:</h2>

<?php

foreach ($_POST as $key => $value) {
    echo "<p>";
    echo "{$key} = {$value}";
    echo "</p>";
}
?>