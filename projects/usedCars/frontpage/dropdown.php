




<form class="modelDropdown">
    <select class="carModel dropdownStyle">
        <option style="font-size: 20px;">
            Vælg bilmodel
        </option>

        <option class="subheader" disabled> Volvo: </option>
        <option class="carOption" value="Volvo V60">Volvo V60</option>
        <option class="carOption" value="Volvo XC40">Volvo XC40</option>
        <option class="carOption" value="Volvo V40">Volvo V40</option>
        <option class="carOption" value="Volvo V40%20CC V40CC">Volvo V40 CC</option>

        <option class="subheader" disabled>Volkswagen: </option>
        <option class="carOption" value="VW T-roc">Vw T-roc</option>

        <option class="subheader" disabled>Audi: </option>
        <option class="carOption" value="Audi A3">Audi A3</option>
        <option class="carOption" value="Audi A4">Audi A4</option>
        <option class="carOption" value="Audi A6">Audi A6</option>

        <option class="subheader" disabled>Saab: </option>
        <option class="carOption" value="Saab 9-3">Saab 9-3</option>
        <option class="carOption" value="Saab 9-5">Saab 9-5</option>

        <option class="subheader" disabled>Ford: </option>
        <option class="carOption" value="Ford Fiesta">Ford Fiesta</option>

        <option class="subheader" disabled>Bmw: </option>
        <option class="carOption" value="BMW ms-3-Serie">Bmw 3-serie</option>
        <option class="carOption" value="BMW ms-2-Serie">Bmw 2-serie</option>

        <option class="subheader" disabled>Peugeot: </option>
        <option class="carOption" value="Peugeot 206">Peugeot 206+</option>
    </select>
</form>

<style>
    .carOption {
        font-weight: bolder;
    }
    .subheader {
        font-size: 21px;
        font-weight: bold;
        color: #8282ff;
    }
    .dropdownStyle {
        color: #fff !important;
        text-transform: uppercase;
        text-decoration: none;
        background: #4b4b48;
        padding:  20px 30px 20px 15px;
        border-radius: 5px;
        display: inline-block;
        border: none;
        transition: all 0.4s ease 0s;
        margin-left: 30px;
    }
    .dropdownStyle:hover {
        background: #434343;
        -webkit-box-shadow: 0px 5px 40px -10px rgba(0, 0, 0, 0.57);
        -moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
        box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
        transition: all 0.4s ease 0s;
        cursor: pointer;
    }
</style>