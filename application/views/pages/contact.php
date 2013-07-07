<?php
/**
 * Created by JetBrains PhpStorm.
 * User: clementpatout
 * Date: 06.02.13
 * Time: 18:36
 * To change this template use File | Settings | File Templates.
 */?>
<?php if ($mail_sent === "ok") {?>
        <div class="alert-box success">Votre message à bien été envoyé ! <a href="" class="close">&times;</a></div>
<?php }elseif ($mail_sent === "error"){ ?>
        <div class="alert-box success">Votre message n'a pas été envoyé, veuillez contacter le webmaster ! <a href="" class="close">&times;</a></div>
<?php } ?>
<h1>Nous Contacter</h1>
<form id="contactForm" action="contact" method="POST" class="custom">

<?php echo form_label('Votre nom :', 'name', array('class'=>'required'));?>
<div class="six columns"><?php echo form_input($form['name']);?></div>
<div class="six columns"><?php echo form_input($form['firstName']);?></div>

<?php echo form_label('Votre email :', 'email', array('class'=>'required'));?>
<div class="twelve columns"><?php echo form_input($form['email']);?></div>
<?php echo form_label('Téléphone :', 'tel', array('class'=>'required'));?>
<div class="twelve columns"><?php echo form_input($form['tel']);?></div>
<?php echo form_label('Votre adresse :', 'street');?>
<div class="twelve columns"><?php echo form_input($form['street']);?></div>

<div class="four columns"><?php echo form_input($form['ZIP']);?></div>
<div class="eight columns"><?php echo form_input($form['city']);?></div>
<?php echo form_label('Ville de l\'installation :', 'building', array('class'=>'required'));?>
<div class="twelve columns"><?php echo form_input($form['building']);?></div>

    <?php echo form_label('La puissance de votre installation (kWc) :', 'power')?>
<div class="twelve columns">
    <div class="row collapse">
       <div class="nine mobile-three columns">
           <?php echo form_input($form['power']);?>
       </div>
       <div class="three mobile-one columns">
           <span class="postfix">kWc</span>
       </div>
    </div>
</div>
<div class="row">
    <div class="four columns hide-for-small"><?php echo form_label('Choisissez le type d\'installation :', 'type', array('class'=>'required'))?></div>
    <div class="four columns hide-for-small"><?php echo form_label('Choisissez le type de module :', 'module', array('class'=>'required'))?></div>
    <div class="four columns hide-for-small"><?php echo form_label('Êtes vous propriétaire de la centrale :', 'propriety', array('class'=>'required'))?></div>
</div>
<?php echo form_label('Choisissez le type d\'installation :', 'type', array('class'=>'show-for-small required'))?>
<div class="four columns"><?php echo form_dropdown('type', $form['type'], '1');?></div>
<?php echo form_label('Choisissez le type de module :', 'module', array('class'=>'show-for-small required'))?>
<div class="four columns"><?php echo form_dropdown('module', $form['module'], '1');?></div>
<?php echo form_label('Êtes vous propriétaire de la centrale :', 'propriety', array('class'=>'show-for-small required'))?>
<div class="four columns"><?php echo form_dropdown('propriety', $form['propriety'], '1');?></div>
<?php echo form_label('Objet du message :', 'propriety', array('class'=>'required'))?>
<div class="twelve columns"><?php echo form_dropdown('object', $form['object'], '1');?></div>
<?php echo form_label('Votre Message:', 'msg', array('class'=>'required'))?>
<div class="twelve columns"><?php echo form_textarea($form['msg']);?></div>
<?php echo form_submit($form['mySubmit']);?>

</form>