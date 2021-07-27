
<?php
$skus = [];
$skuSelect = "SELECT * FROM munkaink ";
$skuRes = mysqli_query($link, $skuSelect);
if (mysqli_num_rows($skuRes)) {
    while ($sku = mysqli_fetch_object($skuRes)) {
        $skus[] = $sku->sku;
    }
}


if (isset($_GET['id'])) {
    $sku = $_GET['id'];
    if (in_array($sku, $skus)) {
        $singleSelect = "SELECT * FROM munkaink WHERE sku = ('$sku')";
        $singleRes = mysqli_query($link, $singleSelect);
        if (mysqli_num_rows($singleRes)) {
            while ($singleRow = mysqli_fetch_object($singleRes)) {
                $name = $singleRow->name;
                $desc = $singleRow->description;
                $sku = $singleRow->sku;
            }
            ?>
            <main>
            <!-- slider Area Start-->
            <div class="slider-area ">
                <!-- Mobile Menu -->
                <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/munkaink/singlemunkafo.jpg">
                </div>
            </div>
            <!-- slider Area End-->
            <!-- Clients testimonial Start  -->
            <div class="clients-testimonial testimonial-padding01 fix">
                <div class="container">
                    <!-- Section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center mb-100">
                                <span id="nev_fonts" class="wow fadeInUp" data-wow-delay=".2s">Balázs Gumi Kft.</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s"><?php echo $name ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="clients-speech-active dot-style">
                                <div class="single-clients-speech">
                                    <img src="assets/img/munkaink/<?php echo $sku; ?>.jpg" alt="" height="800vh" ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Clients testimonial End  -->
            <!-- Testimonial Start -->
            <div class="testimonial-area testimonial-padding3">
                <div class="container">
                    <!-- Section Tittle 02 -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle02  wow fadeInUp" data-wow-delay=".2s">
                                <h2>Leírás</h2>
                            </div>
                        </div>
                    </div>
                <div class="row d-flex justify-content-center">
                        <div class="col-lg-12">
                            <div class="wow fadeInUp" data-wow-delay=".5s">
                                <!-- Single Testimonial -->
                                <div class="single-testimonial text-center">
                                    <!-- Testimonial Content -->
                                    <div class="testimonial-caption ">
                                        <div class="testimonial-top-cap">
                                            <p><?php echo $desc; ?></p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->
        </main>
        <?php
        }
    } else {
        echo "<script>";
        echo  'location.replace("/")';
        echo "</script>";
    }
} else {
    echo "<script>";
    echo  'location.replace("/")';
    echo "</script>";
}




?>

