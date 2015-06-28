<?php
/**
 * Created by JetBrains PhpStorm.
 * User: clementpatout
 * Date: 06.02.13
 * Time: 19:33
 * To change this template use File | Settings | File Templates.
 */
class Pages extends CI_Controller
{

    public function index($page = 'welcome')
    {
        if (!file_exists('application/views/pages/' . $page . '.php')) {
            show_404();
        }

        $start = 2005;
        $now   = (int) date('Y');

        $data['page'] = "AMISUN - Maintenance Photovoltaïque : " . ucfirst($page);
        //$data['experience'] = $start->diff($now); old php :(
        $data['experience'] = $now - $start;

        if ($page === 'welcome') {
            $data['page'] = 'AMISUN entretien photovoltaïque, Maintenance électrique, Nettoyage panneaux solaires, Dépannage panneaux / onduleurs, SAV, Grand Ouest, Mayenne, Sarthe, Maine et Loire, Ille et Vilaine, Orne...';
        }

        $this->load->view('sections/head', array('page_title' => $data['page']));
        $this->load->view('pages/' . $page, $data);
        $this->load->view('sections/footer', $data);
    }
}