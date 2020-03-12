<?php 

date_default_timezone_set('UTC');

function dataUri($file) {
  return file_exists($file) ? 'data:image/jpg;base64,' . base64_encode(file_get_contents($file)) : null;
}

function template($data) {
  // $custom   = __DIR__ . '/../config/template.php';
  $custom   = __DIR__ . '/../config/'. $data['surat'];
// var_dump($custom); die;
  $default  = __DIR__ . '/template.php';
  $file     = file_exists($custom) ? $custom : $default;

  ob_start();
  extract($data);
  require($file);
  $template = ob_get_contents();
  ob_end_clean();

  return $template;

}

// define all the stuff we need to load
$config    = __DIR__ . '/../config/config.php';
$theme     = __DIR__ . '/../config/styles.css';
$signature = __DIR__ . '/../config/logo.jpg';
$logo = __DIR__ . '/../config/logo.jpg';

// load all options
$data = array_replace_recursive(require(__DIR__ . '/defaults.php'), file_exists($config) ? require($config) : []);

// set current locale
setlocale (LC_ALL, $data['locale']);

// set the current date as default date
$data['date'] = strftime($data['dateFormat']);

// make it nice
$styles  = file_get_contents(__DIR__ . '/defaults.css');
$styles .= file_exists($theme) ? PHP_EOL . file_get_contents($theme) : null;

// load the signature if it exists
$data['signature'] = dataUri($signature);
$data['logo'] = dataUri($logo);

// load the favicon as data uri
$favicon = dataUri(__DIR__ . '/favicon.png');
$logo = dataUri(__DIR__ . '/logo.jpg');

// set the browser title
$title = $data['title'];

function createSurat($surat){
  global $data;
  $data['surat'] = $surat;
  echo template($data);
}
// load the template
// $template = template($data);
// $templateSurat1 = template($data);