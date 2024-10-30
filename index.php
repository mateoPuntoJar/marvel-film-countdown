<?php declare(strict_types = 1);?>

<?php
    const API_URL = "https://whenisthenextmcufilm.com/api";
    
    function get_data(string $url){
        $result = file_get_contents($url);
        $data = json_decode($result, true);
        return $data;
    }

    $data = get_data(API_URL);
?>
                                                                                                                                                                     
<head>
    <title>La próxima película de Marvel</title>
    <meta charset="UTF-8">
    <meta name="description" content="La próxima película de Marvel">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>
    <section>
        <img src="<?= $data["poster_url"]; ?>" alt="Poster de <?= $data["title"]; ?>" width= "500" height="400"
        style="border-radius: 16px"/>
    </section>

    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente película es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>

<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }

    section{
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img{
        margin: 0 auto;
    }
</style>