<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{
    public $header_data = array();
    public $documents;

    function __construct()
    {
        parent::__construct();
        $this->load->model("DB", "api", TRUE);
        $this->documents = $this->api->searchDocuments();
        $this->header_data['document'] = current($this->documents);
    }

    public function index()
    {
        $data = array();
        $this->_home('home', $data);
    }

    function about_us()
    {
        $data = array();
        $this->_home('about-us');
    }

    function clients()
    {
        $data = array();
        $this->_home('clients');
    }

    function gallery()
    {
        $data = array();
        $this->_home('gallery/index', $data);
    }

    function upcoming_events()
    {
        $data = array();
        $this->_home('projects/upcoming', $data);
    }

    function previous_events()
    {
        $data = array();
        $this->_home('projects/previous', $data);
    }


    function corporate_events()
    {
        $data = array();
        $this->_home('events/corporate-events');
    }

    function customized_events()
    {
        $data = array();
        $this->_home('events/customized-events', $data);
    }

    function indoor_events()
    {
        $data = array();
        $this->_home('events/indoor-events', $data);
    }

    function outdoor_events()
    {
        $data = array();
        $this->_home('events/outdoor-events', $data);
    }

    function promotional_events()
    {
        $data = array();
        $this->_home('events/promotional-events', $data);
    }

    function water_float_events()
    {
        $data = array();
        $this->_home('events/water-float-events', $data);
    }

    function contact_us()
    {
        $data = array();
        if (!empty($_POST)) {
            $pdata['contact_request_name'] = $_POST['name'];
            $pdata['contact_request_email'] = $_POST['email'];
            $pdata['contact_request_message'] = $_POST['message'];
            $pdata['contact_requested_on'] = date('Y-m-d H:i:s');
            $this->api->add('tbl_contact_requests', $pdata);
            redirect(base_url('contact-us'));
        }
        $this->_home('contact-us');
    }
}
