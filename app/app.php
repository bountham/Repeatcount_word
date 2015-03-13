<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCountGenerator.php";

    $app = new Silex\Application;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"));


    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    // $app->post("/wordcounted", function() use ($app) {
    //     $input_words = $_POST['word'];
    //     $input_sentence=$_POST['sentence'];
    //     $results = new RepeatCountGenerator;
    //     $result=$results->makeRepeatCount($input_words, $input_sentence);
    //     return $app['twig']->render('count.twig', array('word_results' => $result));
    // });
    return $app;
?>
