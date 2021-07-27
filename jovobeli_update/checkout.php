 <?php
 $sku = $_GET['id'];
 $singleSelect = "SELECT * FROM munkaink WHERE sku = ('$sku')";
 $singleRes = mysqli_query($link, $singleSelect);
 if (mysqli_num_rows($singleRes)) {
     while ($singleRow = mysqli_fetch_object($singleRes)) {
        $name = $singleRow->name;
        $desc = $singleRow->description;
        $sku = $singleRow->sku;
     }
    }
 
 ?>
 
 <!-- slider Area Start-->
 <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/checkout/checkoutfo.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap">
                            <h2>Vásárlás</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title" style="color:azure"><?php echo $name; ?></h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="checkout_process.php" method="post" id="checkoutForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Üzenet'" placeholder=" Üzenet"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Név'" placeholder="Név">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tárgy'" placeholder="Tárgy">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-checkoutForm boxed-btn">Küldés</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->