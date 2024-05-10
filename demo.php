<h1><?php
    echo "hola mundo";
    $a = 6;
    $b = 6;
    $suma = $a + $b;
    echo "$suma";
    $age = 39;
    $new_age = $age + "1";

    echo "$new_age"

    ?>
</h1>
<style>
    :root {
        color-scheme: Light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>

<P><?php
    echo $new_age;
    ?></P>

<h2><?=
    $new_age;
    ?></h2>
<script>
    alert("Hola mundo")
</script>


<?php

$person = [
    "name" => 'miguel',
    "edad" => 78,
    "isDev" => true,
    "Languagues" => ["PHP", "Javascript", "Python"],


];


?>