
    <table class="table table-hover table-dark table-bordered">
        <thead>
            <tr>
                <th scope="col"> </th>
                <th scope="col">Fald/stigning</th>
                <th scope="col">Værdi</th>
                <th scope="col">Ændring</th>
                <th scope="col">Hjemmeside</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Guld</th>
                <td>Op</td>
                <td>23,3</td>
                <td>2%</td>
                <td>google.dk</td>
            </tr>
            <tr>
                <th scope="row">Euro/USD</th>
                <td>Ned</td>
                <td id="euroVal">54,4</td>
                <td>5%</td>
                <td>
                    <a href="https://www.marketwatch.com/investing/currency/eurusd" target="_blank">
                        marketwatch.com
                    </a>
                </td>
            </tr>
            <tr>
                <th scope="row">Olie</th>
                <td>Samme</td>
                <td>94,234</td>
                <td>10,5%</td>
                <td>google.dk</td>
            </tr>
        </tbody>
    </table>


    <script>
        function getStockData()
        {
            getEuroUsdData();
        }

        function getEuroUsdData()
        {
            callUrl();
            function callUrl() {
                var url = "https://www.marketwatch.com/investing/currency/eurusd";
                    $.get( url,
                        function( data ) {
                            getEuroValue(data);
                        },
                        'html'
                    );
                setTimeout(function () {
                    callUrl();
                }, 500);
            }
        }

        function getEuroValue(data)
        {
            let euroRegex = /channel="\/zigman2\/quotes\/210561242\/realtime\/sampled[ -=a-z0-9">]*">([0-9.]+)<\/bg-quote>/;
            let euroMatch = euroRegex.exec(data);
            if (euroMatch !== null) {
                console.log("Match: " + euroMatch[1]);
                $("#euroVal").text(euroMatch[1]);
            } else {
                console.log("match = null: " + euroMatch);
            }
        }

    </script>
