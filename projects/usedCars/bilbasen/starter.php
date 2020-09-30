
<script>

	function callingFirstUrl(urlOne, modelArray) 
	{
            $.get(urlOne, 
                    function( data ) {
                            for ($i = 0; $i < data.length; $i++) {
                                    subStr = data.substring($i, $i+200);

                                    temp = subStr.search(/href="\/brugt\/bil\/[a-z]+\/[a-zA-Z0-9-]+\/[a-zA-Z0-9-]+\/[0-9]+(\">)$/);
                                    if (temp != -1) {
                                            var theFirstString = subStr.substring(temp + 6, subStr.length - 2);
                                            theFirstString = "https://www.bilbasen.dk" + theFirstString;

											if (!firstUrlArr.includes(theFirstString)) {
												firstUrlArr.push(theFirstString);
											}
                                    }
                            }
                    }, 
                    'html' // or 'text', 'xml', 'more'
            );  
	}		
	
		
	function getTheUsedCarBilbasen() {
		
            var loopII = 0;
            mySecondLoop();
            function mySecondLoop() {       
                    setTimeout(function() {   
							getTheCarFromBilbasen(firstUrlArr[loopII]);
							loopII++;                  
                            if (loopII < firstUrlArr.length) {         
                                    mySecondLoop();             
                            } else {  
                                    setTimeout(function() {  
                                            lastBool = true;
                                    }, 3000)
                            }					
                    }, 120)
            }
	}
	
	
	function getTheCarFromBilbasen(url)
	{
            $.get(url, 
                    function( data ) {

                            var singleCarArray = new Array();
                            theLink = url;
                            getMainAttributes(data, singleCarArray);
                            setPrimerAttributes(data, singleCarArray);
                            setExtraEquipment(data);

                            setTheFirstArray(singleCarArray);
                    },
                    'html'
            );
	}










</script>