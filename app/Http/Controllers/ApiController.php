<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;

class ResponseObject {
    private $_id;
    private $_title;
    private $_description;
    private $_src = '';
    private $_url = '';
    private $_responseData = array();

    public function setID($id) {
        
        if(($id !== null) && (!is_numeric($id) || $id <= 0 || $id > 9223372036854775807 || $this->_id !== null)) {
            throw new TaskException("Task ID error");
        }

        $this->_id = $id;
    }

    public function setTitle($title) {
        if(strlen($title) < 0 || strlen($title) > 255) {
            throw new TaskException("Task title error");
        }

        $this->_title = $title;
    }

    public function setDescription($description) {

        if(($description !== null) && (strlen($description) > 16777215)) {
            throw new TaskException("Task description error");
        }
        $this->_description = $description;
    }
   
    public function setSrc($src) {

        if(($src !== null) && (strlen($src) > 16777215)) {
            throw new TaskException("Task description error");
        }
        $this->_src = $src;
    }

    public function setURL($url) {

        if(($url !== null) && (strlen($url) > 16777215)) {
            throw new TaskException("Task description error");
        }
        $this->_url = $url;
    }

    public function send() {
        $this->_responseData['id'] = $this->_id;
        $this->_responseData['title'] = $this->_title;
        $this->_responseData['description'] = $this->_description;
        $this->_responseData['src'] = $this->_src;
        $this->_responseData['url'] = $this->_url;
        
        return $this->_responseData;
    }
}

class ApiController extends Controller {
    public function get() {
        $api_response_arr = array();

        $item1 = new ResponseObject();
        $item1->setID('1');
        $item1->setTitle('il gigante Osvaldo');
        $item1->setDescription(' É un silent book che parla della diversità, dellemarginazione e della paura per il "diverso".');
        $item1->setSrc('https://mir-s3-cdn-cf.behance.net/project_modules/1400/c2845a101671027.5f23ffdd4f2d0.jpg');
        $item1->setURL('https://www.behance.net/gallery/101671027/il-gigante-Osvaldo?tracking_source=best_of_behance');
        $api_response_arr[] = $item1->send();

        $item2 = new ResponseObject();
        $item2->setID('2');
        $item2->setTitle('Stetson');
        $item2->setDescription(' É un silent book che parla della diversità, dellemarginazione e della paura per il "diverso".');
        $item2->setSrc('https://mir-s3-cdn-cf.behance.net/project_modules/1400/97b29c102341867.5f3432221dc72.png');
        $item2->setURL('https://www.behance.net/gallery/102341867/Stetson?tracking_source=best_of_behance');
        $api_response_arr[] = $item2->send();

        $item3 = new ResponseObject();
        $item3->setID('3');
        $item3->setTitle('DUO (CI6)');
        $item3->setDescription('Character Illustration VI. Inspired by Picasso.');
        $item3->setSrc('https://mir-s3-cdn-cf.behance.net/project_modules/1400/b6fd93102040509.5f2d27f9ce599.jpg');
        $item3->setURL('https://www.behance.net/gallery/102040509/DUO-%28CI6%29?tracking_source=best_of_behance');
        $api_response_arr[] = $item3->send();
        
        $item4 = new ResponseObject();
        $item4->setID('4');
        $item4->setTitle('The Wheelhouse Hotel');
        $item4->setDescription('The Wheelhouse Hotel is a modern boutique hotel located in Wrigleyville, an area adjacent to Wrigley Stadium–the iconic Major League Baseball park and home of the Chicago Cubs.');
        $item4->setSrc('https://mir-s3-cdn-cf.behance.net/project_modules/1400/ca6e36102348517.5f344f6418fbc.jpg');
        $item4->setURL('https://www.behance.net/gallery/102348517/The-Wheelhouse-Hotel?tracking_source=best_of_behance');
        $api_response_arr[] = $item4->send();
        

        $item5 = new ResponseObject();
        $item5->setID('5');
        $item5->setTitle('Selected works | 2019-2020');
        $item5->setDescription('Michał Sawtyruk');
        $item5->setSrc('https://mir-s3-cdn-cf.behance.net/project_modules/1400_opt_1/fe4123102282989.5f32f770d6ec3.jpg');
        $item5->setURL('https://www.behance.net/gallery/102282989/Selected-works-2019-2020?tracking_source=best_of_behance');
        $api_response_arr[] = $item5->send();

        $item6 = new ResponseObject();
        $item6->setID('6');
        $item6->setTitle('Challenging Youth | Sindroms Pink');
        $item6->setDescription('Youth is challenging. And sometimes even overrated. A visual exploration with photographer John Gribben about challenge,pressure, clumsiness and balance for Sindroms Magazine.');
        $item6->setSrc('https://mir-s3-cdn-cf.behance.net/project_modules/1400_opt_1/dc41eb101926405.5f2aa2ef9d247.jpg');
        $item6->setURL('https://www.behance.net/gallery/101926405/Challenging-Youth-Sindroms-Pink?tracking_source=best_of_behance');
        $api_response_arr[] = $item6->send();

        $item7 = new ResponseObject();
        $item7->setID('7');
        $item7->setTitle('Self-promotional, 2019-2013');
        $item7->setDescription('Ko. Machiyama');
        $item7->setSrc('https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/77244f101797321.5f27d88da7890.jpg');
        $item7->setURL('https://www.behance.net/gallery/101797321/Self-promotional2019-2013?tracking_source=best_of_behance');
        $api_response_arr[] = $item7->send();

        $item8 = new ResponseObject();
        $item8->setID('8');
        $item8->setTitle('Deft');
        $item8->setDescription('he corporate identity of the DEFT');
        $item8->setSrc('https://mir-s3-cdn-cf.behance.net/project_modules/1400/56f3f7102049187.5f2d52ff24f35.jpg');
        $item8->setURL('https://www.behance.net/gallery/102049187/Deft?tracking_source=best_of_behance');
        $api_response_arr[] = $item8->send();

        $item9 = new ResponseObject();
        $item9->setID('9');
        $item9->setTitle('Camp by Walmart');
        $item9->setDescription('Camp by Walmart is an experience designed for the Internet. ');
        $item9->setSrc('https://mir-s3-cdn-cf.behance.net/project_modules/1400/e23a19101825057.5f28ae0395108.jpg');
        $item9->setURL('https://www.behance.net/gallery/101825057/Camp-by-Walmart?tracking_source=best_of_behance');
        $api_response_arr[] = $item9->send();

        $item10 = new ResponseObject();
        $item10->setID('10');
        $item10->setTitle('Calligraphy Animal Skeletons');
        $item10->setDescription('Returning to my calligraphy animals project, ');
        $item10->setSrc('https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/52afd2102252231.5f326f3b02910.jpg');
        $item10->setURL('https://www.behance.net/gallery/102252231/Calligraphy-Animal-Skeletons?tracking_source=best_of_behance');
        $api_response_arr[] = $item10->send();

        $item11 = new ResponseObject();
        $item11->setID('11');
        $item11->setTitle('Midnight In The Valley');
        $item11->setDescription('Photographs of Death Valley National Park.');
        $item11->setSrc('https://mir-s3-cdn-cf.behance.net/project_modules/1400_opt_1/62814a90406983.5e1672d3993e2.jpg');
        $item11->setURL('https://www.behance.net/gallery/90406983/Midnight-In-The-Valley-Vol-2?tracking_source=best_of_behance');
        $api_response_arr[] = $item11->send();

        $item12 = new ResponseObject();
        $item12->setID('12');
        $item12->setTitle('IMAGINATION - INTELLIGENCE');
        $item12->setDescription('In this project i explored the interaction between imagination and intelligence using and starting from 3 main patterns drawn in Illustrator.');
        $item12->setSrc('https://mir-s3-cdn-cf.behance.net/project_modules/1400/505d7e101814337.5f282c15007ac.jpg');
        $item12->setURL('https://www.behance.net/gallery/101814337/IMAGINATION-INTELLIGENCE?tracking_source=best_of_behance');
        $api_response_arr[] = $item12->send();

        return response(json_encode($api_response_arr), 200)
                  ->header('Content-Type', 'application/json')
                  ->header('Access-Control-Allow-Origin', '*');
    }
}