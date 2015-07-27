<?php
/**
 * Created by JetBrains PhpStorm.
 * User: clementpatout
 * Date: 06.02.13
 * Time: 18:36
 * To change this template use File | Settings | File Templates.
 */
?>
<h1 xmlns="http://www.w3.org/1999/html">Nos Coordonnées</h1>

<div class="six columns" >
    <?php echo img("assets/images/staticmap.png"); ?>
</div><br>
<div class="five columns">
    <div itemscope itemtype="http://schema.org/LocalBusiness">
        <b><span itemprop="name">SARL AMISUN</span></b>
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">6 allée du Clos Saint Martin</span><br>
            <span itemprop="postalCode">53240</span> <span itemprop="addressLocality">MONTFLOURS</span> - <span itemprop="addressCountry">FRANCE</span>
        </div>
        <br>
        <b class="format">Téléphone : </b>
        <p>
        <ul class="inline-list text-center">
            <li>
                <div><?php echo img("assets/images/fabien.png"); ?></div>
                <div><span itemprop="founder">OLLIVIER Fabien</span><br><span itemprop="telephone">06 46 47 29 69</span> </div>
            </li>
            <li>
                <div><?php echo img("assets/images/david.png"); ?></div>
                <div><span itemprop="founder">LARBRE David</span><br><span itemprop="telephone">06 86 51 17 59</span> </div>
            </li>
        </ul>
        </p>
        <p><strong>AMISUN</strong> est située à 10km de LAVAL (Mayenne), et proche des villes comme RENNES, LE MANS, ANGERS, ALENÇON, PAYS DE LA LOIRE, BRETAGNE, NORMANDIE...</p>
    </div>
</div>
