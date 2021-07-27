
<main>

    <!-- slider Area Start-->
    <div class="slider-area">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/fooldal/mainpic1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".4s" >Minőségi munka <br>alacsony áron.</h1>
                                <span id="nev_fonts" data-animation="fadeInUp" data-delay=".8s" >Balázs Gumi Kft.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/fooldal/mainpic2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".4s">Keressen minket <br>bizalommal!</h1>
                                <span id="nev_fonts" data-animation="fadeInUp" data-delay=".8s">Balázs Gumi Kft.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- slider Area End-->

    <!-- Fo munkak -->
    <div class="col-lg-12">
        <div class="section-tittle text-center mt-150">
            <h2 class=" wow fadeInUp" data-wow-delay=".3s">Legkeresetebb munkáink</h2>
        </div>
    </div>
    

    <?php

    $topSelect = "SELECT * FROM munkaink";
    $topRes = mysqli_query($link, $topSelect);

    if (mysqli_num_rows($topRes)) {

        ?>
        <div class="clients-area section-padding30">
            <div class="container">  
                <div class="row">
        <?php
        $counter = 1;
        $timer = 2;
        while ($topRow = mysqli_fetch_object($topRes)) {
            if ($counter > 3) {
                break;
            }
            $name = $topRow->name;
            $id = $topRow->id;
            $desc = $topRow->description;
            $sku = $topRow->sku;
            ?>
                        
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-offers mb-50 wow fadeInUp" data-wow-delay="<?php '.' .  $timer .'s' ?>" >
                                    <div class="offers-img imgsize">
                                        <img src="assets/img/munkaink/<?php echo $sku; ?>.jpg" alt="" width="350vh" height="310vh">
                                    </div>
                                    <div class="offers-cap">
                                        <span><?php echo $counter; ?></span>
                                        <h3><a href="/munkaink#<?php echo $sku; ?>"><?php echo $name; ?></a></h3>
                                        <p class="pt-20">
                                        <?php
                                        echo "<a href='/munkaink#$sku'>[Részletek]</a>";
                                        ?> 
                                        </p>
                                    </div>
                                </div>
                            </div>
            <?php
            $counter++;
            $timer += 2;
        }
    }
    ?>
            </div>
        </div>
    </div>
    <!-- Fo munkak vege -->
<!-- Adatok -->
        <div class="container pb-130">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle02 wow fadeInUp" data-wow-delay=".2s">
                        <h2>Balázs Gumi Kft.</h2>
                    </div>
                </div>
            </div>
            <div class=" wow fadeInUp" data-wow-delay=".5s">
				<div class="row gallery-item">
					<div class="col-md-4">
                        <h3 style="color: white" align="center"><strong>Autóállások száma</strong></h3>
							<div class="single-gallery-image">
                                <img src="assets/img/szamok/hat.png" alt="" style="margin-left: auto; margin-right: auto; display: block;">
                            </div>
					</div>
					<div class="col-md-4">
                    <h3 style="color: white" align="center"><strong>Garázsok száma</strong></h3>
							<div class="single-gallery-image">
                            <img src="assets/img/szamok/harom.png" alt="" style="margin-left: auto; margin-right: auto; display: block;">
                            </div>
					</div>
					<div class="col-md-4">
                        <h3 style="color: white" align="center"><strong>Alkalmazottak száma</strong></h3>
							<div class="single-gallery-image">
                            <img src="assets/img/szamok/kilenc.png" alt="" style="margin-left: auto; margin-right: auto; display: block;">
                            </div>
					</div>
		        </div>
            </div>
        </div>
            <!-- Adatok vege-->
    <!-- Elerhetosegek -->
    <div class="visit-tailor-area fix pt-135">
        <!-- Bal oldal -->
        <div class="tailor-details text-center wow fadeInLeft" data-wow-delay=".2s">
            <span id="nev_fonts">Balázs Gumi Kft.</span>
            <h3>Látogasson el üzletünkbe!</h3>
            <p>6800, Hódmezővásárhely, Szántó Kovács János u. 147,<br> balazsgumi@vmi.com,<br> 06 30 123 4567</p>
            <ul>
                <li> Nyitva tartás:</li>
                <li>Hétfő - Péntek: 10.00 - 19.00</li>
                <li>Szombat – Vasárnap: 12:00 – 15:00</li>
            </ul>
        </div>
        <!--Jobb oldal  -->
        <div class="tailor-details text-center wow fadeInRight" data-wow-delay=".2s">
        <img src="assets/img/fooldal/uzlet.jpg" width="850px" >
        </div>
    </div>
    <!-- Elerhetosegek vege -->
    

</main>