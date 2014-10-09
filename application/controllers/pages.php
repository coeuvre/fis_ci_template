<?php

class Pages extends CI_Controller {

    function index() {
        $this->template->write_view('child', 'regions/child');
        $this->template->render();
    }
}