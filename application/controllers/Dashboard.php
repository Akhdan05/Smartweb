<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{

    public function index()
    {
        $this->read();
    }

    public function read() {

        $html = file_get_contents("https://www.apple.com/id/");
        $html1 = file_get_contents("https://www.apple.com/id/mac/");
        $xpath_doc = new DOMDocument();

        libxml_use_internal_errors(TRUE);

        if(!empty($html)) {
            
            $xpath_doc -> loadHTML($html);
            libxml_clear_errors();
            $xpath = new DOMXPath($xpath_doc);

            // content 1
            $cariJudul1 = $xpath->query('/html/body/main/section[1]/div[1]/div/div/div[1]/h2');
            $cariDesc1 = $xpath->query('/html/body/main/section[1]/div[1]/div/div/div[1]/h3');
            $cariHrefDesc1 = $xpath->query('/html/body/main/section[1]/div[1]/div/div/div[1]/div/a[1]/@href');
            $cariHrefBeli1 = $xpath->query('/html/body/main/section[1]/div[1]/div/div/div[1]/div/a[2]/@href');

            // content 2
            $cariJudul2 = $xpath->query('/html/body/main/section[1]/div[2]/div/div/div[1]/h2/span');
            $cariDesc2 = $xpath->query('/html/body/main/section[1]/div[2]/div/div/div[1]/h3');
            $cariSubDesc2 = $xpath->query('/html/body/main/section[1]/div[2]/div/div/div[1]/p');
            $cariHrefDesc2 = $xpath->query('/html/body/main/section[1]/div[2]/div/div/div[1]/div/a/@href');

            // content 3
            $cariJudul3 = $xpath->query('/html/body/main/section[2]/div[2]/div/div/div[1]/h4');
            $cariDesc3 = $xpath->query('/html/body/main/section[2]/div[2]/div/div/div[1]/h5');
            $cariHrefDesc3 = $xpath->query('/html/body/main/section[2]/div[2]/div/div/div[1]/div/a[1]/@href');
            $cariHrefBeli3 = $xpath->query('/html/body/main/section[2]/div[2]/div/div/div[1]/div/a[2]/@href');

            // content 4
            $cariJudul4 = $xpath->query('/html/body/main/section[2]/div[3]/div/div/div[1]/h4');
            $cariDesc4 = $xpath->query('/html/body/main/section[2]/div[3]/div/div/div[1]/h5');
            $cariHrefDesc4 = $xpath->query('/html/body/main/section[2]/div[3]/div/div/div[1]/div/a[1]/@href');
            $cariHrefBeli4 = $xpath->query('/html/body/main/section[2]/div[3]/div/div/div[1]/div/a[2]/@href');

            // content 5
            $cariJudul5 = $xpath->query('/html/body/main/section[2]/div[4]/div/div/div[1]/h4');
            $cariDesc5 = $xpath->query('/html/body/main/section[2]/div[4]/div/div/div[1]/h5');
            $cariSubDesc5 = $xpath->query('/html/body/main/section[2]/div[4]/div/div/div[1]/p');
            $cariHrefDesc5 = $xpath->query('/html/body/main/section[2]/div[4]/div/div/div[1]/div/a/@href');

             // content 6
            $cariJudul6 = $xpath->query('/html/body/main/section[1]/div[3]/div/div/div[1]/h2/span');
            $cariDesc6 = $xpath->query('/html/body/main/section[1]/div[3]/div/div/div[1]/h3');
            $cariSubDesc6 = $xpath->query('/html/body/main/section[1]/div[3]/div/div/div[1]/p');
            $cariHrefDesc6 = $xpath->query('/html/body/main/section[1]/div[3]/div/div/div[1]/div/a/@href');

            // content 7
            $cariJudul7 = $xpath->query('/html/body/main/section[2]/div[5]/div/div/div[1]/h4/span');
            $cariDesc7 = $xpath->query('/html/body/main/section[2]/div[5]/div/div/div[1]/h5');
            $cariHrefDesc7 = $xpath->query('/html/body/main/section[2]/div[5]/div/div/div[1]/div/a[1]/@href');
            $cariHrefBeli7 = $xpath->query('/html/body/main/section[2]/div[5]/div/div/div[1]/div/a[2]/@href');

            if($cariJudul1 -> length > 0) {
                foreach($cariJudul1 as $rowjudul1) {
                    $cariJudul_list1[] = array('judul' => $rowjudul1 -> nodeValue); 
                }
                foreach($cariDesc1 as $rowdesc1) {
                    $cariDesc_list1[] = array('desc' => $rowdesc1 -> nodeValue); 
                }
                foreach($cariHrefDesc1 as $rowhrefdesc1) {
                    $cariHrefDesc_list1[] = array('url_desc' => $rowhrefdesc1 -> nodeValue); 
                }
                foreach($cariHrefBeli1 as $rowhrefbeli1) {
                    $cariHrefBeli_list1[] = array('url_beli' => $rowhrefbeli1 -> nodeValue); 
                }

                $i = 0;
                foreach($cariJudul1 as $rowJudul) {
                    $carijudul_list1[] = array(
                        'judul' => $cariJudul_list1[$i]["judul"],
                        'desc' => $cariDesc_list1[$i]["desc"],
                        'url_desc' => 'https://www.apple.com/' . $cariHrefDesc_list1[$i]["url_desc"],
                        'url_beli' => 'https://www.apple.com/' . $cariHrefBeli_list1[$i]["url_beli"]
                    );
                $i++;
                }
            }
            
            if($cariJudul2 -> length > 0) {
                foreach($cariJudul2 as $rowjudul2) {
                    $cariJudul_list2[] = array('judul' => $rowjudul2 -> nodeValue); 
                }
                foreach($cariDesc2 as $rowdesc2) {
                    $cariDesc_list2[] = array('desc' => $rowdesc2 -> nodeValue); 
                }
                foreach($cariSubDesc2 as $rowhsubdesc2) {
                    $cariSubDesc_list2[] = array('sub_desc' => $rowhsubdesc2 -> nodeValue); 
                }
                foreach($cariHrefDesc2 as $rowhrefdesc2) {
                    $cariHrefDesc_list2[] = array('url_desc' => $rowhrefdesc2 -> nodeValue); 
                }

                $i = 0;
                foreach($cariJudul2 as $rowJudul) {
                    $carijudul_list2[] = array(
                        'judul' => $cariJudul_list2[$i]["judul"],
                        'desc' => $cariDesc_list2[$i]["desc"],
                        'sub_desc' => $cariSubDesc_list2[$i]["sub_desc"],
                        'url_desc' => 'https://www.apple.com/' . $cariHrefDesc_list2[$i]["url_desc"]
                    );
                $i++;
                }
            }

            if($cariJudul3 -> length > 0) {
                foreach($cariJudul3 as $rowjudul3) {
                    $cariJudul_list3[] = array('judul' => $rowjudul3 -> nodeValue); 
                }
                foreach($cariDesc3 as $rowdesc3) {
                    $cariDesc_list3[] = array('desc' => $rowdesc3 -> nodeValue); 
                }
                foreach($cariHrefDesc3 as $rowhrefdesc3) {
                    $cariHrefDesc_list3[] = array('url_desc' => $rowhrefdesc3 -> nodeValue); 
                }
                foreach($cariHrefBeli3 as $rowhrefbeli3) {
                    $cariHrefBeli_list3[] = array('url_beli' => $rowhrefbeli3 -> nodeValue); 
                }

                $i = 0;
                foreach($cariJudul3 as $rowJudul) {
                    $carijudul_list3[] = array(
                        'judul' => $cariJudul_list3[$i]["judul"],
                        'desc' => $cariDesc_list3[$i]["desc"],
                        'url_desc' => 'https://www.apple.com/' . $cariHrefDesc_list3[$i]["url_desc"],
                        'url_beli' => 'https://www.apple.com/' . $cariHrefBeli_list3[$i]["url_beli"]
                    );
                $i++;
                }
            }
            if($cariJudul4 -> length > 0) {
                foreach($cariJudul4 as $rowjudul4) {
                    $cariJudul_list4[] = array('judul' => $rowjudul4 -> nodeValue); 
                }
                foreach($cariDesc4 as $rowdesc4) {
                    $cariDesc_list4[] = array('desc' => $rowdesc4 -> nodeValue); 
                }
                foreach($cariHrefDesc4 as $rowhrefdesc4) {
                    $cariHrefDesc_list4[] = array('url_desc' => $rowhrefdesc4 -> nodeValue); 
                }
                foreach($cariHrefBeli4 as $rowhrefbeli4) {
                    $cariHrefBeli_list4[] = array('url_beli' => $rowhrefbeli4 -> nodeValue); 
                }

                $i = 0;
                foreach($cariJudul4 as $rowJudul) {
                    $carijudul_list4[] = array(
                        'judul' => $cariJudul_list4[$i]["judul"],
                        'desc' => $cariDesc_list4[$i]["desc"],
                        'url_desc' => 'https://www.apple.com/' . $cariHrefDesc_list4[$i]["url_desc"],
                        'url_beli' => 'https://www.apple.com/' . $cariHrefBeli_list4[$i]["url_beli"]
                    );
                $i++;
                }
            }
            if($cariJudul5 -> length > 0) {
                foreach($cariJudul5 as $rowjudul5) {
                    $cariJudul_list5[] = array('judul' => $rowjudul5 -> nodeValue); 
                }
                foreach($cariDesc5 as $rowdesc5) {
                    $cariDesc_list5[] = array('desc' => $rowdesc5 -> nodeValue); 
                }
                foreach($cariSubDesc5 as $rowsubdesc5) {
                    $cariSubDesc_list5[] = array('sub_desc' => $rowsubdesc5 -> nodeValue); 
                }
                foreach($cariHrefDesc5 as $rowhrefdesc5) {
                    $cariHrefDesc_list5[] = array('url_desc' => $rowhrefdesc5 -> nodeValue); 
                }

                $i = 0;
                foreach($cariJudul5 as $rowJudul) {
                    $carijudul_list5[] = array(
                        'judul' => $cariJudul_list5[$i]["judul"],
                        'desc' => $cariDesc_list5[$i]["desc"],
                        'sub_desc' => $cariSubDesc_list5[$i]["sub_desc"],
                        'url_desc' => 'https://www.apple.com/' . $cariHrefDesc_list5[$i]["url_desc"]
                    );
                $i++;
                }
            }
            if($cariJudul6 -> length > 0) {
                foreach($cariJudul6 as $rowjudul6) {
                    $cariJudul_list6[] = array('judul' => $rowjudul6 -> nodeValue); 
                }
                foreach($cariDesc6 as $rowdesc6) {
                    $cariDesc_list6[] = array('desc' => $rowdesc6 -> nodeValue); 
                }
                foreach($cariSubDesc6 as $rowsubdesc6) {
                    $cariSubDesc_list6[] = array('sub_desc' => $rowsubdesc6 -> nodeValue); 
                }
                foreach($cariHrefDesc6 as $rowhrefdesc6) {
                    $cariHrefDesc_list6[] = array('url_desc' => $rowhrefdesc6 -> nodeValue); 
                }

                $i = 0;
                foreach($cariJudul6 as $rowJudul) {
                    $carijudul_list6[] = array(
                        'judul' => $cariJudul_list6[$i]["judul"],
                        'desc' => $cariDesc_list6[$i]["desc"],
                        'sub_desc' => $cariSubDesc_list6[$i]["sub_desc"],
                        'url_desc' => 'https://www.apple.com/' . $cariHrefDesc_list6[$i]["url_desc"]
                    );
                $i++;
                }
            }
            if($cariJudul7 -> length > 0) {
                foreach($cariJudul7 as $rowjudul7) {
                    $cariJudul_list7[] = array('judul' => $rowjudul7 -> nodeValue); 
                }
                foreach($cariDesc7 as $rowdesc7) {
                    $cariDesc_list7[] = array('desc' => $rowdesc7 -> nodeValue); 
                }
                foreach($cariHrefDesc7 as $rowhrefdesc7) {
                    $cariHrefDesc_list7[] = array('url_desc' => $rowhrefdesc7 -> nodeValue); 
                }
                foreach($cariHrefBeli7 as $rowhrefbeli7) {
                    $cariHrefBeli_list7[] = array('url_beli' => $rowhrefbeli7 -> nodeValue); 
                }

                $i = 0;
                foreach($cariJudul7 as $rowJudul) {
                    $carijudul_list7[] = array(
                        'judul' => $cariJudul_list7[$i]["judul"],
                        'desc' => $cariDesc_list7[$i]["desc"],
                        'url_desc' => 'https://www.apple.com/' . $cariHrefDesc_list7[$i]["url_desc"],
                        'url_beli' => 'https://www.apple.com/' . $cariHrefBeli_list7[$i]["url_beli"]
                    );
                $i++;
                }
            }
        }

        if(!empty($html1)) {
            $xpath_doc -> loadHTML($html1);
            libxml_clear_errors();
            $xpath = new DOMXPath($xpath_doc);

            // content 1
            $cariJudul8 = $xpath->query('//*[@id="main"]/section[3]/div/div/h2/span');
            $cariDesc8 = $xpath->query('//*[@id="main"]/section[3]/div/div/p');
            $cariHrefDesc8 = $xpath->query('//*[@id="main"]/section[3]/div/div/div[1]/div[2]/p/a/@href');
            $cariHrefBeli8 = $xpath->query('//*[@id="main"]/section[3]/div/div/div[1]/div[1]/p/a/@href');

            if($cariJudul8 -> length > 0) {
                foreach($cariJudul8 as $rowjudul8) {
                    $cariJudul_list8[] = array('judul' => $rowjudul8 -> nodeValue); 
                }
                foreach($cariDesc8 as $rowdesc8) {
                    $cariDesc_list8[] = array('desc' => $rowdesc8 -> nodeValue); 
                }
                foreach($cariHrefDesc8 as $rowhrefdesc8) {
                    $cariHrefDesc_list8[] = array('url_desc' => $rowhrefdesc8 -> nodeValue); 
                }
                foreach($cariHrefBeli8 as $rowhrefbeli8) {
                    $cariHrefBeli_list8[] = array('url_beli' => $rowhrefbeli8 -> nodeValue); 
                }

                $i = 0;
                foreach($cariJudul8 as $rowJudul) {
                    $carijudul_list8[] = array(
                        'judul' => $cariJudul_list8[$i]["judul"],
                        'desc' => $cariDesc_list8[$i]["desc"],
                        'url_desc' => 'https://www.apple.com/' . $cariHrefDesc_list8[$i]["url_desc"],
                        'url_beli' => 'https://www.apple.com/' . $cariHrefBeli_list8[$i]["url_beli"]
                    );
                $i++;
                }
            }
        }
        $list1 = $carijudul_list1;
        $list2 = $carijudul_list2;
        $list3 = $carijudul_list3;
        $list4 = $carijudul_list4;
        $list5 = $carijudul_list5;
        $list6 = $carijudul_list6;
        $list7 = $carijudul_list7;
        $list8 = $carijudul_list8;
        $output = array(

            'list1' => $list1,

            'list2' => $list2,
            
            'list3' => $list3,

            'list4' => $list4,

            'list5' => $list5,

            'list6' => $list6,

            'list7' => $list7,

            'list8' => $list8,

			'theme_page' => 'dashboard/index',
		);
		$this->load->view('templates/index', $output);
    }
}