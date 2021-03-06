<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.twig');
});

$app->get('/w2c', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('w2c.twig');
});

$app->get('/chat', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('chat.twig');
});

$app->get('/sathishweb', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('sathishweb.twig');
});

$app->get('/invite', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('invite.twig');
});

$app->get('/sd', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('sd.twig');
});

$app->get('/sd2', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('sd2.twig');
});

$app->get('/dsdev', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('dsdev.twig');
});

$app->get('/dsdev-nopre', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('dsdev-nopre.twig');
});

$app->get('/dsqa', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('dsqa.twig');
});

$app->run();
