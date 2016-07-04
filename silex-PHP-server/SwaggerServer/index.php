<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

$app = new Silex\Application();


$app->GET('/Calls', function(Application $app, Request $request) {
            $rpt_type = $request->get('rpt_type');    $rpt_id = $request->get('rpt_id');    $start = $request->get('start');    $limit = $request->get('limit');    $sort_by = $request->get('sort_by');    $sort_type = $request->get('sort_type');    $from_date = $request->get('from_date');    $to_date = $request->get('to_date');    $duration = $request->get('duration');    $phone = $request->get('phone');    $phone1 = $request->get('phone1');    $co = $request->get('co');    $ext = $request->get('ext');    $pbx_id = $request->get('pbx_id');    $call_source = $request->get('call_source');    $call_type = $request->get('call_type');    $direction = $request->get('direction');    $caller_name = $request->get('caller_name');    $did = $request->get('did');    $dnis = $request->get('dnis');    $acc = $request->get('acc');    $ring = $request->get('ring');    $cost = $request->get('cost');    $group = $request->get('group');    
            
            return new Response('How about implementing callsGet as a GET method ?');
            });


$app->GET('/Features/charts', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing featuresChartsGet as a GET method ?');
            });


$app->GET('/Features/reports', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing featuresReportsGet as a GET method ?');
            });


$app->GET('/Features/widget', function(Application $app, Request $request) {
            
            
            return new Response('How about implementing featuresWidgetGet as a GET method ?');
            });


$app->run();
