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
    <?php echo img("images/staticmap.png"); ?>
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
        <span itemprop="telephone">06 46 47 29 69</span> ou <span itemprop="telephone">06 86 51 17 59</span>
        <br>
        <b class="format">Email : </b>
        <span itemprop="email"><?php echo mailto('amisun.ouest@gmail.com', 'amisun.ouest@gmail.com');?></span>
    </div>
</div>