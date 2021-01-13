
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            <h3>Her kan du vælge hvilken bilmodel du gerne vil se nærmere på:</h3>
        </div>
        <div class="col-sm-2">
            <h3>
<form class="modelDropdown">
    <label class="infoTxt">
        <?php //echo $txtFile['dropdownTxt']; ?>
    </label>
    <select class="carModel frontpageStyle">
        <option style="font-size: 20px;">
            <?php echo $txtFile['chooseModel']; ?>
        </option>
        <option class="carModelOptions" value="Volvo V60">Volvo V60</option>
        <option class="carModelOptions" value="Volvo XC40">Volvo XC40</option>
        <option class="carModelOptions" value="Volvo V40">Volvo V40</option>
        <option class="carModelOptions" value="vw t-roc">Vw T-roc</option>
        <option class="carModelOptions" value="Volvo V40%20CC V40CC">Volvo V40 CC</option>
        <option class="carModelOptions" value="Audi A3">Audi A3</option>
        <option class="carModelOptions" value="Audi A4">Audi A4</option>
        <option class="carModelOptions" value="Audi A6">Audi A6</option>
        <option class="carModelOptions" value="Saab 9-3">Saab 9-3</option>
        <option class="carModelOptions" value="Saab 9-5">Saab 9-5</option>
        <option class="carModelOptions" value="Ford Fiesta">Ford Fiesta</option>
        <option class="carModelOptions" value="BMW ms-3-Serie">Bmw 3-serie</option>
        <option class="carModelOptions" value="BMW ms-2-Serie">Bmw 2-serie</option>
        <option class="carModelOptions" value="Peugeot 206">Peugeot 206+</option>
    </select>
</form>


            </h3>
        </div>
        <div class="col-sm-2">
            <h3>
                <form action="/Webpage-Lsn/controller/frontpage.php" method="post">
                    <button class="frontpageStyle" style="width: 160px;" type="submit">
                        <?php echo $txtFile['back']; ?>
                    </button>
                </form>
            </h3>
        </div>
    </div>
</div>

<div class="startSearch searchTxt infoTxt">
    <?php echo $txtFile['searchOne']; ?>  <center class="theChoosenModel"> </center>
    <?php echo $txtFile['searchTwo']; ?>
</div>
<div class="middleSearch searchTxt infoTxt">
    <?php echo $txtFile['searchThree']; ?>
    <div id="bilbasenurls" style="margin-left: 500px; margin-top: -25px;"> </div>
    <?php echo $txtFile['searchFour']; ?>
    <div id="guloggratisurls" style="margin-left: 220px; margin-top: -25px;"> </div>
    <?php echo $txtFile['searchFive']; ?>
</div>
<div class="endSearch searchTxt infoTxt">
    <?php echo $txtFile['searchFinish']; ?>
</div>