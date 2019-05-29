<?php
require './vendor/autoload.php';

class LoginController extends BaseController {
    private $model;

    public function onInit() {

        $this->title = "Login";
        $this->model = new HomeModel();
    }

    function index(){

        $fb = new Facebook\Facebook([
            'app_id' => '1329387850532482',
            'app_secret' => '50fbc6b7542af4984595cf78e9425bce',
            'default_graph_version' => 'v2.7'
        ]);

        $helper = $fb->getRedirectLoginHelper();
        $loginUrl = $helper->getLoginUrl("http://localhost");

        try {
            $accessToken = $helper->getAccessToken();

            if (isset($accessToken)) {
                $_SESSION['access_token'] = (string) $accessToken;

                //if session is set we can redirect to the user to any page
                header("Location:index.php");
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
}