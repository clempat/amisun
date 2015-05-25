<?php
/**
 * Created by JetBrains PhpStorm.
 * User: clementpatout
 * Date: 06.02.13
 * Time: 18:36
 * To change this template use File | Settings | File Templates.
 */
?>
<h1 xmlns="http://www.w3.org/1999/html">Dépannage</h1>


<div class="twelve columns" style="margin-top: 20px">
    <?php echo img(array('src' => 'assets/images/depannage.png', 'class' => 'four columns', 'style' => 'float:right;')); ?>
    <h3>Dépannage technique</h3>
    <p>
        Les pannes les plus fréquentes de mon générateur photovoltaïque :
    </p>
    <ul class="disc">
        <li>Mon installation ne fonctionne plus,</li>
        <li>Baisse de production,</li>
        <li>L’onduleur HS ou en défaut,</li>
        <li>Onduleur inadapté à votre configuration,</li>
        <li>Déconnexion du disjoncteur 30mA dans le coffret,</li>
        <li>Déclenchement parafoudre,</li>
        <li>Panneau cassé,</li>
        <li>Problème étanchéité,</li>
        <li>Mise en conformité,</li>
        <li>Votre système de communication (monitoring) ne fonctionne plus (MaxWeb, Webbox, Tigo Energy, Solaredge,
            Solarlog, Météocontrol…)
        </li>
        <li>...</li>
    </ul>

    <h3>Dépannage administratif</h3>

    <ul class="disc">
        <li>Installation terminée mais non raccordée avec dossier technique Consuel sans VISA,</li>
        <li>Compteur ERDF non posé (assistance prévue jusqu'à la mise en service),</li>
        <li>Contrat OA (Obligation Achat) reçu, mais votre installateur n’existe plus pour attester sur l’honneur que
            votre installation respecte les critères d’intégration pour valider votre tarif de rachat,
        </li>
        <li>...</li>
    </ul>


    <p><strong>AMISUN dépanne toutes les marques d’onduleurs (SolarMax, Kaco, SMA, PowerOne, ABB, GE, Schneider, Delta,
            Wurth Solar, Solaredge, Nedap, Socomec, Fronuis, Ingeteam, Mastervolt, Kostal, Voltéa…)</strong></p>
    <p><strong>AMISUN vous proposera un onduleur de prêt le temps de l’échange avec le constructeur (sous réserve de disponibilité)</strong></p>
    <p><strong>Un dépannage ne fera pas l’objet d’une maintenance préventive.</strong></p>
    <p><strong>Chaque dépannage de votre installation fera l’objet d’une demande intervention, nous nous engagerons à intervenir dans les meilleurs délais.</strong></p>
    <p><strong>N’hésitez pas à remplir le formulaire <?php echo anchor("contact", "« Contact »") ?>.</strong></p>
</div>
