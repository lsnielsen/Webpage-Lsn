

<script>



	function getModelName(data, singleCarArray)
	{
		nameStart = data.search("<h1 id=\"bbVipTitle\" title=\"");
		nameEnd = data.search("<div class=\"reviews-wrapper\">");
		console.log("nameStart, nameEnd = " + nameStart + ", " + nameEnd);
		if (nameStart != -1 && nameEnd != -1) {
			firstSubstring = data.substring(nameStart, nameEnd);
			
			modelStart = firstSubstring.search("<span>");
			modelEnd = firstSubstring.search("</span>");
			secondSubstring = firstSubstring.substring(modelStart+6, modelEnd);
			singleCarArray['carModel'] = secondSubstring;
			
			thirdSubstring = firstSubstring.substring(modelEnd+7, modelEnd+20);
			singleCarArray['engine'] = thirdSubstring;
			console.log("Model: " + secondSubstring + ", engine: " + thirdSubstring);
		} else {
			singleCarArray['carModel'] = "-";
			singleCarArray['engine'] = "-";
		}
	}

	function setPriceAttributes(data, singleCarArray)
	{				
		priceEnd = data.search("kr</td>");
		//console.log("price start, end: " + priceEnd);
		if (priceEnd != -1) {
			priceString = data.substring(priceEnd-20, priceEnd);
			for(i=0; i<10; i++) {
				priceString = priceString.replace(/\n/, "");
			}
			for(i=0; i<60; i++) {
				priceString = priceString.replace(" ", "");
			}
			priceString = priceString.replace(/[a-z">]+/, "");
			//console.log(priceString);
			singleCarArray['price'] = priceString;
		} else {
			singleCarArray['price'] = "-";
		}
	}
	
	function setColorAttributes(data, singleCarArray)
	{			
		colorStart = data.search("<span>Farve:</span>");
		//console.log("color start, end: " + colorStart);
		if (colorStart != -1) {
			colorString = data.substring(colorStart, colorStart+60);
			colorString = colorString.replace("<span>Farve:</span>", "");
			colorString = colorString.replace("</li>", "");
			for(i=0; i<10; i++) {
				colorString = colorString.replace(/\n/, "");
			}
			for(i=0; i<60; i++) {
				colorString = colorString.replace(" ", "");
			}
			colorString = colorString.replace(/<[a-z<>\/]*/, "");
			colorString = colorString.replace(/<[a-z<>\/]*/, "");
			//console.log(colorString);
			singleCarArray['color'] = colorString;
		} else {
			singleCarArray['color'] = "-";
		}
	}


	function setEquipmentAttributes(data, singleCarArray)
	{				
		equipStart = data.search("<section id=\"bbVipEquipment\" class=\"section\">");
		equipEnd = data.search("<section id=\"bbVipDescription\" class=\"section cf\">");
		if (equipStart != -1 && equipEnd != -1) {
			equipString = data.substring(equipStart, equipEnd);
			equipString = equipString.replace("<section id=\"bbVipEquipment\" class=\"section\">", "");
			equipString = equipString.replace("<ul class=\"last\">", "");
			equipString = equipString.replace("</ul>", "");
			equipString = equipString.replace("</section>", "");

			for(i=0; i<100; i++) {
				equipString = equipString.replace("<li>", "");
				equipString = equipString.replace("</li>", "");
			}
			for(i=0; i<80; i++) {
				equipString = equipString.replace(/\n +/, " ");
			}
			equipString = equipString.trim().split(" ");
		}
		//console.log("Equipment values:");
		//console.log(equipString);
		
		singleCarArray.push(equipString);
	}


























</script>