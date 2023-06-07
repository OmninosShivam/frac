<?php include('includes/header.php') ?>




    <div class="container">
        <div class="row mt-5">
            <div col-md-5>
                <h2> <b> Listng | Auction</b></h2>
            </div>
        </div>
        <form class="">
            <div class="col-md-5">
                <div class="input-group mt-3 pt-4">
                    <label for="" class="amount pay">Total Amount</label>
                    <input type="number" class="form-control inputbgclr" id="inlineFormInputGroupUsername"
                        placeholder="$ 000000">
                </div>
            </div>
            <div class="row drop">
                <div class="col-md-11 mt-4">
                    <label class="pay " for="inlineFormSelectPref ">Select Payment Methods</label><br>
                    <div class="dropdown pt-4">
                        <div class="col-12">
                            <select class="select inputbgclr">
                                <option value="1">Wallet</option>
                                <option value="2">Bank Transfer</option>
                                <option value="3">Atm Card</option>
                            </select>
                            <input type="submit" class="btn  btn1" value="submit">
                        </div>

                    </div>
                </div>
            </div>

    </div>
    <div class="container-fluid pt-5 pb-2" style="background-color: #F9F4F4;">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-7 pb-4">

                    <label for="" class="amount pay">Pay From Wallet</label> <br>
                    <div class="input-group mt-3">
                        <input type="text" class="form-control inputbgclr" id="inlineFormInputGroupUsername"
                            placeholder="$000000">
                        <div class="col-md-5"> <a class="btn  btn1" href="#"> Pay</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid" style="background-color: #F9F4F4; margin-top: 100px;">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-7">

                    <label for="" class="amount pay">Pay With Bank Transfer</label> <br>
                    <div class="input-group mt-3">
                        <input type="text" class="form-control inputbgclr" id="inlineFormInputGroupUsername"
                            placeholder="$000000">
                        <div class="col-md-5"> <a class="btn  btn1" href="#">select</a></div>
                    </div>
                </div>
                <div class="row mb-4 mt-4">
                    <div class="col-md-4">
                        <div class="form-outline">
                            <label class="form-label  pay" for="form3Example1">Name</label>
                            <input type="text" id="form3Example1 " class="form-control inputbgclr" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-outline">
                            <label class="form-label  pay" for="form3Example2">Surname</label>
                            <input type="text" id="form3Example2" class="form-control inputbgclr" />

                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="form-outline">
                            <label class="form-label  pay" for="form3Example1">Bank Name</label>
                            <input type="text" id="form3Example1" class="form-control inputbgclr" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-outline">
                            <label class="form-label  pay" for="form3Example2">Pin Code</label>
                            <input type="number" id="form3Example2" class="form-control inputbgclr" />

                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="form-outline">
                            <label class="form-label  pay" for="form3Example1">Account Number</label>
                            <input type="number" id="form3Example1" class="form-control inputbgclr" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-outline">
                            <label class="form-label pay" for="form3Example2">IFSC code</label>
                            <input type="text" id="form3Example2" class="form-control inputbgclr" />

                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6 pay_btn">
                        <a class="btn " href="#"> Pay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid" style="background-color: #F9F4F4;">
        <div class="container  mt-5">
            <div class="row">
                <div class="col-md-7">

                    <label for="" class="amount pay">Pay With Card</label> <br>
                    <div class="input-group mt-3">
                        <input type="text" class="form-control inputbgclr" id="inlineFormInputGroupUsername"
                            placeholder="$000000">
                        <div class="col-md-5 card_btn"> <a class="btn  btn1" href="#">Card</a></div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <img src="images/download-removebg-preview.png" width="50%">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6 pt-3">
                    <div class="form-outline">
                        <label class="form-label pay" for="form3Example1">Full Name</label>
                        <input type="text" id="form3Example1" class="form-control inputbgclr" />
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="form-outline">
                        <label class="form-label pay" for="form3Example2">Card Number</label>
                        <input type="number" id="form3Example2" class="form-control inputbgclr" />
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="form-outline">
                        <label class="form-label pay" for="form3Example1">Ecpiry Date</label>
                        <input type="text" id="form3Example1" class="form-control inputbgclr" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-outline">
                        <label class="form-label pay" for="form3Example2">CVV</label>
                        <input type="password" id="form3Example2" class="form-control inputbgclr" />
                    </div>
                </div>
            </div>
            <div class="row mb-5 pb-5">
                <div class="col-md-6 pay_btn">
                    <a class="btn " href="#">Pay</a>
                </div>
            </div>
        </div>
    </div>
    </form>
    </div>



<?php include('includes/footer.php') ?>
