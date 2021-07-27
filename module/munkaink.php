


<main>
            <!-- slider Area Start-->
            <div class="slider-area ">
                <!-- Mobile Menu -->
                <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/munkaink/munkainkfo.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="hero-cap">
                                    <h2>Munkáink</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider Area End-->
            <!-- Clients Offers Start -->
            <div class="clients-area section-padding03">
                <div class="container">
                    <!-- Section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center mb-100">
                                <h2 class=" wow fadeInUp" data-wow-delay=".3s">Amit kínálunk vásárlóinknak</h2>
                            </div>
                        </div>
                    </div>
<?php

$munkaSelect = "SELECT * FROM munkaink";
$munkaRes = mysqli_query($link, $munkaSelect);

if (mysqli_num_rows($munkaRes)) {
    
    ?> 
    
    <div class="row">
    <?php
    $counter = 1;
    $timer = 2;
    while ($munkaRow = mysqli_fetch_object($munkaRes)) {
        $name = $munkaRow->name;
        $id = $munkaRow->id;
        $desc = $munkaRow->description;
        $sku = $munkaRow->sku;
        ?>
                    
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="single-offers mb-50 wow fadeInUp" data-wow-delay="<?php '.' .  $timer .'s' ?>" >
                                <div class="offers-img imgsize">
                                    <img src="assets/img/munkaink/<?php echo $sku; ?>.jpg" alt="" width="500vh" height="450vh">
                                </div>
                                <div class="offers-cap">
                                    <span><?php echo $counter; ?></span>
                                    <h3 style="color: white;"><strong><?php echo $name; ?></strong></h3>
                                    <p><?php echo $desc; ?></p>
                                </div>
                            </div>
                        </div>
                        <a id="<?php echo $sku; ?>"></a>
                    


        <?php
        $counter++;
        $timer += 2;
    }
}
?>
</div>
                </div>
            </div>
            <!-- Clients Offers End -->
        </main>
