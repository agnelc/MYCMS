<?php

class Frontend_Controller extends MY_Controller {

    public function __construct() {
        parent::__construct();


        //Load stuff
        $this->load->model('page_m');
        $this->load->model('article_m');
        

        //Fetch Nav
        $this->data['menu'] = $this->page_m->get_nested();
        $this->data['news_archive_link'] = $this->page_m->get_archive_link();
        
        $this->data['meta_title'] = config_item('site_name');
    }

}
