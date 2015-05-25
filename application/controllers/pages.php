<?php
/**
 * Created by JetBrains PhpStorm.
 * User: clementpatout
 * Date: 06.02.13
 * Time: 19:33
 * To change this template use File | Settings | File Templates.
 */

class Pages extends CI_Controller {

    public function index($page = 'welcome')
    {
        if ( ! file_exists('application/views/pages/'.$page.'.php'))
        {
            show_404();
        }

        $start = new DateTime('2005-01-01');
        $now   = new DateTime();

        $data['page'] = "AMISUN - Maintenance Photovoltaïque : ".ucfirst($page);
        $data['experience'] = $start->diff($now);


        $this->load->view('sections/head', ['page_title' => $data['page']]);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('sections/footer', $data);
    }
}