<?php include('includes/header.php') ?>

<style>


.row {
    margin-top:none;
}
   
.share{
    justify-content: space-evenly;
}

.colorcheckbox{
    background-color: rgba(235, 188, 0, 0.92);

}
.form-control{
    background-color:#D9D9D9; 
    border-radius: 0px;
    
}

input:focus, :focus, select:focus{
    outline: none;
}
.form-check .form-check-input {
    float: none !important;
    margin-left: -1.5em;
}

.btn-warning{
    border-radius: 4px;
    width:120px !important;

}
.bold{
    font-size: larger;
}

::-webkit-input-placeholder {
    color: black !important; 
    font-weight: bold;
}


.checkbox{ 
    width: 250px;
    height: 100px;
    background-color: #D9D9D9;
    text-align:-webkit-center;
    }
</style>
<div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-2 col-md-3 col-sm-6 mt-1">
                <h5>Property ID :</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <input type="text" name="" id="" class="form-control bld" placeholder="6547848467" />
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-lg-2 col-md-3 col-sm-6 mt-1">
                <h5 class="media">Property INFO :</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <!-- <input type="text" name="" id="" class="form-control scroll"
                    placeholder="All information and document..." /> -->
                    <textarea name="" id="" cols="53" class="form-control" rows="10" placeholder="All information and document" style="max-height: 40px;"></textarea>
            </div>
        </div>
    </div>

    <!-- shares -->

    <div class="container mt-5">
        <div class="row justify-content-evenly share mb-4 ">
            <div class="col-lg-4">
                <label for="firstName" class="form-label"> <b> Available Share</b></label>
                <input type="text" class="form-control" id="firstName" placeholder="2000" value="" required=""
                    fdprocessedid="mvul8">

            </div>

            <div class="col-lg-4">
                <label for="firstName" class="form-label"><b>BID Shares:</b></label>
                <input type="text" class="form-control" id="firstName" placeholder="R.S 0000 " value="" required=""
                    fdprocessedid="mvul8">

            </div>
        </div>
    </div>

    <!-- offer -->
    <div class="container">


        <div class="row justify-content-evenly share ">
            <div class="col-lg-4">
                <label for="firstName" class="form-label"> <b>Share to Buy </b></label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required=""
                    fdprocessedid="mvul8">

            </div>

            <div class="col-lg-4">
                <label for="firstName" class="form-label"><b>Offers</b></label>
                <input type="text" class="form-control" id="firstName" placeholder="R" value="" required=""
                    fdprocessedid="mvul8">

            </div>
        </div>

    </div>

    <!-- accept -->

    <div class="container">

        <div class="row mt-5 text-center">
            <div class="col-md-12 text-center">
              <center> <div class="checkbox mt-2" >

                    <strong>Terms & Conditions</strong>
                    <div class="form-check mt-2">
                        <input class="form-check-input colorcheckbox " type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault"> <strong>Accept</strong>

                        </label></div></div></center> 
                    </div>
                </div>
            </div>
        

    <!-- button -->
    <div class="container">
        <div class="row mt-4">
            <center>
                <button type="button" class="btn btn-warning ">proceed</button>
              </center>
        </div>
    </div>



    <?php include('includes/footer.php') ?>