<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{
    public $header_data = array();

    function __construct()
    {
        parent::__construct();
        $this->load->model("DB", "api", TRUE);
    }

    public function index()
    {
        $data = array();
        $data['about'] = $this->api->getAbout();
        $data['post'] = $this->api->searchPosts(['offset' => '0', 'limit' => '1']);
        $data['video_post'] = $this->api->searchPosts(['limit' => '1','post_type'=>'VIDEO']);
        $data['recent_posts'] = $this->api->searchPosts(['offset' => '2', 'limit' => '3']);
        $this->_home('home', $data);
    }

    public function about_me()
    {
        $data = array();
        $data['about'] = $this->api->getAbout();
        $this->_home('about', $data);
    }

    function privacy()
    {
        echo "Privacy & policy";
    }

    public function contact_me()
    {
        $this->_home('contact');
    }

    public function politics()
    {
        $data=array();
        $data['bposts'] = $this->api->searchPosts(['offset' => '0', 'limit' => '3']);

        $data['brtposts'] = $this->api->searchPosts(['offset' => '3', 'limit' => '2']);
        $data['brbposts'] = $this->api->searchPosts(['offset' => '5', 'limit' => '2']);

        $data['posts'] = $this->api->searchPosts(['offset' => '7', 'limit' => '8']);
        $data['recent_posts'] = $this->api->searchPosts(['offset' => '15', 'limit' => '3']);
        $this->_home('politics',$data);
    }

    public function article($str = '')
    {
        $data = array();
        $post = $this->api->getPostBySlug($str);
        $this->header_data['meta'] = $post;
        $data['post'] = $post;
        $this->_home('article', $data);
    }

    public function gallery($str = '')
    {
        $data = array();
        if (!empty($str)) {
            $data['gallery'] = $this->api->getGalleryBySlug($str);
        } else {
            $data['galleries'] = $this->api->searchGallery();
        }
        $this->_home('gallery', $data);
    }
}
