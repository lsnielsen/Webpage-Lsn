
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 pt-3"></div>
        <div class="col-sm-4 text-center">
            <h3 class="pt-3">
                Her kan du vælge hvilken bilmodel du gerne vil se nærmere på:
            </h3>
        </div>
        <div class="form-group col-sm-2 pt-3">
            <select class="carModel custom-select form-select form-select-lg mb-3" aria-label=".form-select-lg">
                <option> <?php echo $txtFile['chooseModel']; ?> </option>
                <option class="dropdown-item" style="font-size: 30px;" disabled>Volvo</option>
                <option class="dropdown-item" value="Volvo V60">Volvo V60</option>
                <option class="dropdown-item" value="Volvo XC40">Volvo XC40</option>
                <option class="dropdown-item" value="Volvo V40">Volvo V40</option>
                <option class="dropdown-item" value="Volvo V40%20CC V40CC">Volvo V40 CC</option>
                <h5 class="dropdown-header">Volkswagen</h5>
                <option class="dropdown-item" value="vw t-roc">Vw T-roc</option>
                <h5 class="dropdown-header">Audi</h5>
                <option class="dropdown-item" value="Audi A3">Audi A3</option>
                <option class="dropdown-item" value="Audi A4">Audi A4</option>
                <option class="dropdown-item" value="Audi A6">Audi A6</option>
                <h5 class="dropdown-header">Saab</h5>
                <option class="dropdown-item" value="Saab 9-3">Saab 9-3</option>
                <option class="dropdown-item" value="Saab 9-5">Saab 9-5</option>
                <h5 class="dropdown-header">Ford</h5>
                <option class="dropdown-item" value="Ford Fiesta">Ford Fiesta</option>
                <h5 class="dropdown-header">Bmw</h5>
                <option class="dropdown-item" value="BMW ms-3-Serie">Bmw 3-serie</option>
                <option class="dropdown-item" value="BMW ms-2-Serie">Bmw 2-serie</option>
                <h5 class="dropdown-header">Peugeot</h5>
                <option class="dropdown-item" value="Peugeot 206">Peugeot 206+</option>
            </select>
        </div>
    </div>
        <div class="col-sm-2 pt-3">
            <h3>
                <form action="/Webpage-Lsn/controller/frontpage.php" method="post">
                    <button class="btn btn-info btn-lg active" type="submit">
                        <?php echo $txtFile['back']; ?>
                    </button>
                </form>
            </h3>
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