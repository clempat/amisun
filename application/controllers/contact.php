<?php
/**
 * Created by JetBrains PhpStorm.
 * User: clementpatout
 * Date: 07.02.13
 * Time: 22:46
 * To change this template use File | Settings | File Templates.
 */

class Contact extends CI_Controller {
    public function index()
    {
        $data['form']['name'] = array (
            'name' => 'name',
            'id' => 'name',
            'placeholder' => 'Nom'
        );
        $data['form']['firstName'] = array (
            'name' => 'firstName',
            'id' => 'firstName',
            'placeholder' => 'Prenom'
        );
        $data['form']['email'] = array (
            'name' => 'email',
            'id' => 'email',
            'placeholder' => 'Email'
        );
        $data['form']['tel'] = array (
            'name' => 'tel',
            'id' => 'tel',
            'placeholder' => '0000000000'
        );
        $data['form']['street'] = array (
            'name' => 'street',
            'id' => 'street',
            'placeholder' => 'Numéro, Rue'
        );
        $data['form']['ZIP'] = array (
            'name' => 'ZIP',
            'id' => 'ZIP',
            'placeholder' => 'Code Postal'
        );
        $data['form']['city'] = array (
            'name' => 'city',
            'id' => 'city',
            'placeholder' => 'Ville'
        );
        $data['form']['building'] = array (
            'name' => 'building',
            'id' => 'building',
            'placeholder' => 'Ville'
        );
        $data['form']['power'] = array (
            'name' => 'power',
            'id' => 'power',
            'placeholder' => 'XX',
            'style' => 'text-align: right;'
        );
        $data['form']['type'] = array (
            'Sol' => 'Au Sol',
            'Toiture' => 'Toiture',
            'Facade' => 'En Facade',
            'Autre' => 'Autre'
        );
        $data['form']['module'] = array (
            '1' => 'Cristallin cadré',
            '2' => 'Cristallin sans cadre',
            '3' => 'Couche mince',
            '4' => 'Membrane',
            '5' => 'Je ne sais pas'
        );
        $data['form']['propriety'] = array (
            'oui' => 'oui',
            'non' => 'non',
        );
        $data['form']['msg'] = array (
            'name' => 'msg',
            'id' => 'msg',
            'rows' => '10',
        );
        $data['form']['mySubmit'] = array (
            'name' => 'q',
            'value' => 'Envoyer',
            'class' => 'button'
        );
        $data['form']['object'] = array (
            '1' => 'Maintenance',
            '2' => 'Nettoyage',
            '3' => 'Maintenance + Nettoyage',
            '4' => 'Dépannage',
            '5' => 'Autres'
        );
        $mail_sent = "non";
        if ($this->input->post('q'))
        {
            switch($this->input->post('module')){
                case '1':
                    $module = "Cristallin cadré";
                    break;
                case '2':
                    $module = "Cristallin sans cadre";
                    break;
                case '3':
                    $module = "Couche mince";
                    break;
                case '4':
                    $module = "Membrane";
                    break;
                case '5':
                    $module = "Ne sait pas";
                    break;

            }
            switch($this->input->post('object')){
                case '1':
                    $object = "Maintenance";
                    break;
                case '2':
                    $object = "Nettoyage";
                    break;
                case '3':
                    $object = "Maintenance + Nettoyage";
                    break;
                case '4':
                    $object = "Dépannage";
                    break;
                case '5':
                    $object = "Autres";
                    break;

            }
            $message =nl2br($this->input->post('msg'));
            $adresse = (empty($_POST['street']) and empty($_POST['ZIP']) and empty($_POST['city']))? $adresse="N.C." : $adresse = $this->input->post('street').', '.$this->input->post('ZIP').' '.$this->input->post('city');
            $power = (empty($_POST['power']))? $power="N.C." : $power = $this->input->post('power') ;
            $this->load->library('email');
            $this->email->from($this->input->post('email', $this->input->post('firstName')." ".$this->input->post('name')));
            $this->email->to('amisun.ouest@gmail.com');//amisun.ouest@gmail.com
            $this->email->subject('Demande de contact émanant du site amisun.fr : '.$object);
            $this->email->message('Message de Mr/Mme '.$this->input->post('name').' '.$this->input->post('firstName').',<br><br>
            <b>Téléphone</b> : '.$this->input->post('tel').'<br>
            <b>Adresse</b> : '.$adresse.'<br>
            <b>Ville de l\'installation</b> : '.$this->input->post('building').'<br>
            <b>Puissance de l\'installation</b>: '.$power.'<br>
            <b>Type d\'installation</b> : '.$this->input->post('type').'<br>
            <b>Type de module</b> : '.$module.'<br>
            <b>Propriétaire</b> : '.$this->input->post('propriety').'<br><br>
            <b>Message</b> : <br>'.$message
            );

            if ($this->email->send())
            {
                $mail_sent = "ok";
            } else {
                $mail_sent = "error";
            }

        }
        $data['mail_sent']=$mail_sent;

        $this->load->view('sections/head');
        $this->load->view('pages/contact',$data);
        $this->load->view('sections/footer');
    }
}