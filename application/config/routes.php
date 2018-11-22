<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['about-us']='home/about-us';
$route['contact-us']='home/contact-us';
$route['clients']='home/clients';

$route['events/corporate-events']='home/corporate-events';
$route['events/customized-events']='home/customized-events';
$route['events/indoor-events']='home/indoor-events';
$route['events/outdoor-events']='home/outdoor-events';
$route['events/promotional-events']='home/promotional-events';
$route['events/water-float-events']='home/water-float-events';
$route['projects/upcoming-events']='home/upcoming-events';
$route['projects/previous-events']='home/previous-events';

$route['contact-us']='home/contact-us';
$route['gallery']='home/gallery';

$route['translate_uri_dashes'] = FALSE;
