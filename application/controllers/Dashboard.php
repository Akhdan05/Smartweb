<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{

    public function index()
    {
        $this->read();
    }
 
    public function read() {

        $html_iphone = file_get_contents("https://www.apple.com/id/iphone/");
        $html_mac = file_get_contents("https://www.apple.com/id/mac/");
        $xpath_doc = new DOMDocument();

        libxml_use_internal_errors(TRUE);

        if(!empty($html_iphone)) {
            
            $xpath_doc -> loadHTML($html_iphone);
            libxml_clear_errors();
            $xpath = new DOMXPath($xpath_doc);

            // content 1
            $cariJudulIphone = $xpath->query('//*[@id="chapternav"]/div/ul/li/a/span[1]');
            $cariHrefDescIphone = $xpath->query('//*[@id="chapternav"]/div/ul/li/a/@href');

            if($cariJudulIphone -> length > 0) {
                foreach($cariJudulIphone as $rowjuduliphone) {
                    $cariJudulIphone_list[] = array('judul' => $rowjuduliphone -> nodeValue); 
                }
                foreach($cariHrefDescIphone as $rowhrefdesciphone) {
                    $cariHrefDescIphone_list[] = array('url_desc' => $rowhrefdesciphone -> nodeValue); 
                }

                $i = 0;
                foreach($cariJudulIphone as $rowJudul) {
                    $carijuduliphone_list[] = array(
                        'judul' => $cariJudulIphone_list[$i]["judul"],
                        'url_desc' => 'https://www.apple.com/' . $cariHrefDescIphone_list[$i]["url_desc"]
                    );
                $i++;
                }
            }
        }

        if(!empty($html_mac)) {
            $xpath_doc -> loadHTML($html_mac);
            libxml_clear_errors();
            $xpath = new DOMXPath($xpath_doc);

            // content 2
            $cariJudulMac = $xpath->query('//*[@id="chapternav"]/div/ul/li/a/span[1]');
            $cariHrefDescMac = $xpath->query('//*[@id="chapternav"]/div/ul/li/a/@href');

            if($cariJudulMac -> length > 0) {
                foreach($cariJudulMac as $rowjudulmac) {
                    $cariJudulMac_list[] = array('judul' => $rowjudulmac -> nodeValue); 
                }
                foreach($cariHrefDescMac as $rowhrefdescmac) {
                    $cariHrefDescMac_list[] = array('url_desc' => $rowhrefdescmac -> nodeValue); 
                }

                $i = 0;
                foreach($cariJudulMac as $rowJudul) {
                    $carijudulmac_list[] = array(
                        'judul' => $cariJudulMac_list[$i]["judul"],
                        'url_desc' => 'https://www.apple.com/' . $cariHrefDescMac_list[$i]["url_desc"]
                    );
                $i++;
                }
            }
        }
        $list1 = $carijuduliphone_list;
        $list2 = $carijudulmac_list;
        $output = array(

            'list1' => $list1,

            'list2' => $list2,

			'theme_page' => 'dashboard/index',
		);
		$this->load->view('templates/index', $output);
    }
}