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
            'Toiture' => 'Toiture',
            'Sol' => 'Au Sol',
            'Facade' => 'En Facade',
            'Autre' => 'Autre'
        );
        $data['form']['module'] = array (
            '1' => 'Panneau avec cadre',
            '2' => 'Panneau sans cadre',
            '3' => 'Membrane',
            '4' => 'Je ne sais pas'
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
            '1' => 'Maintenance + Nettoyage',
            '2' => 'Nettoyage',
            '3' => 'Maintenance',
            '4' => 'Dépannage',
            '5' => 'Autres'
        );
        $mail_sent = "non";
        if ($this->input->post('q'))
        {
            foreach ($data['form']['module'] as $choice => $module_choice) {
                if ($choice == $this->input->post('module')) {
                    $module = $module_choice;
                    break;
                }
            }
            foreach ($data['form']['object'] as $choice => $object_choice) {
                if ($choice == $this->input->post('object')) {
                    $object = $object_choice;
                    break;
                }
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

        $this->load->view('sections/head', array('page_title' => 'Amisun - Contactez-nous, demande de devis gratuit !'));
        $this->load->view('pages/contact',$data);
        $this->load->view('sections/footer');
    }
}