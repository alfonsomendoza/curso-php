<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

/* una alternativa seria ultizar file_get_contents*/
$result=file_get_contents(API_URL);/* si solo quieres hacer un GET de una API*/
/*$result = curl_exec($ch);*/
$data = json_decode($result, true);


?>

<head>
    <meta charset="UTF-8" />
    <title>La proxima pelicula de Marvel</title>
    <meta name="description" content="La Proxima Pelicula de Marvel" />
    <meta name="viemport" content="width=device-width,initial-scale-1.0" />
    <!-- Centered viewport -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>

<main>
   <!-- <pre style="font-size:10px; overflow: scroll; height:250px;">
      //  <?php
        // var_dump($data);
        ?>//
        </pre>   -->
        <section>
          <img src="<?= $data["poster_url"]; ?>" width="350" alt="Poster de <?= $title ?>" style="border-radius: 16px"  />

            <!--  <h2>La Proxima Pelicula de Marvel</h2>-->
        </section>
        <hgroup>
            <h3><?= $data["title"]; ?>se estrena en <?= $data["days_until"]; ?></h3>
            <p>Fecha de estreno:<?= $data["release_date"]; ?></p>
            <p>La siguiente es:<?= $data["following_production"]["title"]; ?></p>
        </hgroup>

</main>




<style>
    :root {
        color-scheme: Light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
    section{
        display:flex;
        justify-content: center;
        text-align: center;
    }

    hgroup{
        display:flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>