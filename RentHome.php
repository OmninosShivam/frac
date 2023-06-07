<style>
    .rentinputt {
        width: 100% !important;
        height: 55px;
        border: none;
        outline: none;
        background-color: #D9D9D9 !important;
        margin-top: 15px;
        appearance: none;
    }
</style>

<?php include('includes/header.php') ?>

<!-- Rent A Home Section start -->
<section>

    <div class="container my-5">
        <div class="row text-center pt-4">
            <h1>Rent a Home</h1>
            <p style="font-size:22px; font-weight: 500; margin-top: 30px"> Please fill in your details. If you are
                working for a Property to Rent:</p>
        </div>
        <div class="row justify-content-around">
            <div class="col-md">
                <h3>First Name</h3>
                <input type="text" class="rentinputt">
            </div>
            <div class="col-md">
                <h3>Last Name</h3>
                <input type="text" class="rentinputt">
            </div>
        </div>
        <div class="row justify-content-evenly mt-5">
            <div class="col-md">
                <h3>Email</h3>
                <input type="text" class="rentinputt">
            </div>
            <div class="col-md">
                <h3>Mobile No.</h3>
                <input type="text" class="rentinputt">
            </div>
        </div>
        <div class="row justify-content-evenly mt-5">
            <div class="col-md-6">
                <h3>Select Properties</h3>
                <select name="" id="" class="rentinputt form-select ps-3 font-bold">
                    <option value="" class="font-bold">Select Properties</option>
                    <option value=""> Standrad </option>
                    <option value="">Premium</option>
                    <option value="">Exclusive</option>
                </select>
            </div>
            <div class="col-md-6">
            </div>

        </div>

    </div>

</section>




<?php include('includes/footer.php') ?>