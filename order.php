<?php
$page = 'Project | Home';
$pageDesc = '""';
$pageTag = '""';
include 'includes/header.php';
$page = 'Home';
?>


<section class="pay">
    <div class="container">
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="sign3">
                    <div class="pay8">
                        <h2>PAYMENT ORDER</h2>
                    </div>
                    <div class="d-flex pay1">
                        <p>Product:</p>
                        <h6>Shirts</h6>
                    </div>
                    <div class="pay2">
                        <p>$49.14</p>
                    </div>
                    <div class="d-flex pay3">
                        <p>Subtotal:</p>
                        <h6>$49.14</h6>
                    </div>

                    <div class="d-flex pay3">
                        <p>Tax:</p>
                        <h6>$0.00</h6>
                    </div>

                    <div class="d-flex pay3">
                        <p>Total:</p>
                        <h6>$49.14</h6>
                    </div>
                    <div class="d-flex">
                        <div class="mb-3 mt-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Credit Card</label>
                        </div>
                        <div class="pay4">
                            <img src="images/card2.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="mb-3 pay5">
                        <label for="exampleInputPassword1" class="form-label">Card Number*</label>
                        <input type="password" class="form-control" placeholder="**** **** **** ****" id="exampleInputPassword1">
                    </div>
                    <div class="d-flex col-md-12 col-lg-12 col-xl-12 pay6">
                        <div class="col-md-5 col-lg-5 col-xl-5">
                            <div class="mb-3 pay5">
                                <label for="exampleInputPassword1" class="form-label">Expiry (MM/YY)</label>
                                <input type="password" class="form-control" placeholder="MM/YY" id="exampleInputPassword1">
                            </div>
                        </div>

                        <div class="col-md-5 col-lg-5 col-xl-5">
                            <div class="mb-3 pay5">
                                <label for="exampleInputPassword1" class="form-label">Card Code</label>
                                <input type="password" class="form-control" placeholder="CVC" id="exampleInputPassword1">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 mt-3 form-check pay7">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">I would Like to receive referral marketing and <br>promotional emails (optional)</label>
                    </div>

                    <a href=""><button class="btn sign5">PLACE ORDER</button></a>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="footer">
    <div class="container">
        <div class="home5">
            <div class="home6">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="rtr_inner_content d-flex align-items-center gap-3">
                        <img src="images/ready_to_raise_icon.png" alt="">
                        <div>
                            <h4>Your story starts from here</h4>
                            <h2>Ready to raise funds for idea?</h2>
                        </div>
                    </div>
                    <button class="btn-theme3">Make it Happen</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
$page = 'Home';
?>