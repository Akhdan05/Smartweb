<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, 'https://ibox.co.id/catalog/mac-192');
curl_setopt($ch, CURLOPT_URL, 'https://ibox.co.id/catalog/mac-192/');

$data = curl_exec($ch);
curl_close($ch);

$output = array();

require('simple_html_dom.php');

$html = str_get_html($data);

$semua = $html->find('section[class=content]', 1);

foreach ((array)$semua as $key => $val) {

    $kotak = $val->find('div[class=mt-3 container]', 0);

    // $kotak = $val->find('div', 0);

    if(!empty($kotak->find('div[class=block-grey]'))) {
        $container = $kotak->find('div[class=container]', 0);
        $row = $container->find('div[class=row]', 0);
        $data = $row->find('div[class=col-md-4 text-center block-center]');
        $title = $data->find('h2',0) -> innertext;
        $desc = $data->find('p', 1) -> innertext;
        $photo = '';
        if(!empty($row->find('div[class=col-md-8 block-image]'))){
            $photo = $row->find('div[class=col-md-8 block-image]', 0)->find('img', 0)-> src;
        }
        
    } else {
        $container = $kotak->find('div[class=container]', 0);
        $row = $container->find('div[class=row]', 0);
        $data = $row->find('div[class=col-md-4 text-center block-center]');
        $title = $data->find('h2',0) -> innertext;
        $desc = $data->find('p', 1) -> innertext;
        $photo = '';
        if(!empty($row->find('div[class=col-md-8]'))){
            $photo = $row->find('div[class=col-md-8]', 0)->find('img', 0)-> src;
        }
    }

    $output[] = array(
        'photo' => $photo,
        'title' => $title,
        'desc' => $desc
    );
}

echo json_encode($output);