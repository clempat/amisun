<?php
/**
 * Created by JetBrains PhpStorm.
 * User: clementpatout
 * Date: 06.02.13
 * Time: 19:33
 * To change this template use File | Settings | File Templates.
 */

class Pages extends CI_Controller {

    public function view($page = 'welcome')
    {
        if ( ! file_exists('application/views/pages/'.$page.'.php'))
        {
            show_404();
        }

        $data['page'] = "AMISUN - Maintenance Photovoltaïque : ".ucfirst($page);



        $this->load->view('sections/head', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('sections/footer', $data);
    }
}