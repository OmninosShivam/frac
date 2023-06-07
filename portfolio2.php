<?php include('includes/header.php') ?>
<style>
    /* portfolio 2 css starts  */


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
                    <h5 >Property ID :</h5>
    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <input type="text" name="" id="" class="form-control bld" placeholder="6547848467">
                </div>
                </div>
            
        

        
            <div class="row justify-content-center mt-5">
                
                <div class="col-lg-2 col-md-3 col-sm-6 mt-1">
                    <h5 class="media">Property INFO :</h5>
    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <textarea class="form-control bld" placeholder="All information and document..." name="" id="" cols="53" rows="10" style="max-height: 40px;"></textarea>
                </div>
             
    
    
                </div>
        
    </div>
    <!-- shares -->

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 col-md-7 col-sm-12">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-1">
                        <h5>Number of Share :</h5>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <input type="text" placeholder="832" name="" id="" class="form-control">
                    </div>
                </div>
                         
            </div>
            <div class="col-lg-6 col-md-5 col-sm-12">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-12 mt-1">
                        <h5>BID Price :</h5>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-12">
                        <input type="text" name="" placeholder="$457074" id="" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- offer -->
    

    <!-- accept -->

    <div class="container">

        <div class="row mt-5 text-center">
            <div class="col-md-12 text-center">
              <center> <div class="checkbox mt-2" >

                    <strong>Terms & Conditions</strong>
                    <div class="form-check mt-2">
                        <input class="form-check-input colorcheckbox " type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault"> <strong>Accept</strong>

                        </label>
                    </div>
                </div>
            </center> 
                
                
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