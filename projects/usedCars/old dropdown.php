
<form method="post">
    <button type="submit"
            id="arrayButton"
            name="usedCarsArray"
            style="display: none;"
            action="/Webpage-Lsn/controller/usedCars.php">
    </button>
</form>
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
<form class="modelDropdown">
    <label class="infoTxt">
        <?php echo $txtFile['dropdownTxt']; ?>
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


<form action="/Webpage-Lsn/controller/frontpage.php" method="post">
    <button class="frontpageStyle" style="width: 160px;" id="backButton" type="submit">
        <?php echo $txtFile['back']; ?>
    </button>
</form>



<div class="dropdownContainer form-group col-sm-2 pt-3">
    <select class="carModel custom-select form-select form-select-lg mb-3" aria-label=".form-select-lg">
        <option> <?php echo $txtFile['chooseModel']; ?> </option>
        <option class="dropdown-item header" disabled>Volvo: </option>
        <option class="dropdown-item" value="Volvo V60">Volvo V60</option>
        <option class="dropdown-item" value="Volvo XC40">Volvo XC40</option>
        <option class="dropdown-item" value="Volvo V40">Volvo V40</option>
        <option class="dropdown-item" value="Volvo V40%20CC V40CC">Volvo V40 CC</option>

        <option class="dropdown-item header" disabled>Volkswagen: </option>
        <option class="dropdown-item" value="vw t-roc">Vw T-roc</option>

        <option class="dropdown-item header" disabled>Audi: </option>
        <option class="dropdown-item" value="Audi A3">Audi A3</option>
        <option class="dropdown-item" value="Audi A4">Audi A4</option>
        <option class="dropdown-item" value="Audi A6">Audi A6</option>

        <option class="dropdown-item header" disabled>Saab: </option>
        <option class="dropdown-item" value="Saab 9-3">Saab 9-3</option>
        <option class="dropdown-item" value="Saab 9-5">Saab 9-5</option>

        <option class="dropdown-item header" disabled>Ford: </option>
        <option class="dropdown-item" value="Ford Fiesta">Ford Fiesta</option>

        <option class="dropdown-item header" disabled>Bmw: </option>
        <option class="dropdown-item" value="BMW ms-3-Serie">Bmw 3-serie</option>
        <option class="dropdown-item" value="BMW ms-2-Serie">Bmw 2-serie</option>

        <option class="dropdown-item header" disabled>Peugeot: </option>
        <option class="dropdown-item" value="Peugeot 206">Peugeot 206+</option>
    </select>
</div>


<style>
    .header {
        font-size: 20px;
        font-weight: bold;
    }
    .dropdownContainer {
        padding-left: 40px;
        padding-right: 40px;
    }
</style>