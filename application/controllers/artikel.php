<?php
class artikel extends CI_Controller {


    function index() {
      $data = $this->Home_models->readBerita();
      $datatampil = array('databarang'=> $data);
      $this->load->view('view_artikel_post', $datatampil);
    }

    function contoh($id =null){

      echo $id;
      //$data = $this->namamodel->fungsimodel($id);
    }


}
