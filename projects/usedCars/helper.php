

<?php

function getFileName()
{
    $fileName = "";
    if(isset($_COOKIE['theChoosenCarModel'])) {
        $fileName = $_COOKIE['theChoosenCarModel'];
    }
    return $fileName;
}

function setFrontpageWithData($usedCarsArray)
{
    include("../projects/usedCars/table/headerArray.php");

    $dataArr = prepareArray($usedCarsArray);

    $tempArr = removeBlankColoums($dataArr, $headerArray);
    $dataArr = $tempArr[0];
    $headerArray = $tempArr[1];

    $tempArr = spliceArray($dataArr);
    $autoArr = $tempArr[0];
    $manuelArr = $tempArr[1];

    sleep(1);
    $fileName = getFileName();

    if (!file_exists('../diverse/carFiles')) {
        mkdir('../diverse/carFiles', 0777, true);
    }
    $fp = fopen('../diverse/carFiles/Brugte biler - ' . $fileName . '.csv' , 'w');
    fputcsv($fp, $headerArray);
    foreach ($autoArr as $row) {
        fputcsv($fp, $row);
    }

    fputcsv($fp, [ ]);
    fputcsv($fp, [ ]);
    fputcsv($fp, [ ]);

    fputcsv($fp, $headerArray);
    foreach ($manuelArr as $row) {
        fputcsv($fp, $row);
    }
    fclose($fp);
    $downloadButton = "isset";

    include("../projects/usedCars/frontpage.php");
    //include("../projects/usedCars/frontpage/downloadButton.php");
    include("../projects/usedCars/table/usedCarTable.php");
}

function downloadCSVFile()
{
	$fileName = getFileName();
	$csv = array();
	$lines = file('../diverse/carFiles/Brugte biler - ' . $fileName . '.csv', FILE_IGNORE_NEW_LINES);

	foreach ($lines as $key => $value) {
		$csv[$key] = str_getcsv($value);
	}

	//echo '<pre>'; print_r($csv); echo '</pre>';
	$xlsx = SimpleXLSXGen::fromArray($csv);
	$xlsx->saveAs('../diverse/carFiles/Brugte biler - ' . $fileName . '.xlsx');
	$xlsx->downloadAs($fileName . '.xlsx');
}

function spliceArray($array)
{
    $autoArray = array();
    $manuelArray = array();
    $tempArray = array();
    for ($i=0; $i<sizeof($array); $i++) {
        if(in_array("Automatisk", $array[$i]) !== false) {
            $autoArray[] = $array[$i];
        }	else if(in_array("Manuel", $array[$i]) !== false || in_array("Manuel", $array[$i]) !== false) {
            $manuelArray[] = $array[$i];
        } else {
            $tempArray[] = $array[$i];
        }
    }
    $manuelArray = array_merge($manuelArray, $tempArray);
    return [$autoArray, $manuelArray];
}

function prepareArray($input)
{
    $dataArr = array();
    $counter = 0;
    $input = explode(",", $input);

    for($i=0; $i< sizeof($input); $i++) {
        if($input[$i] != "") {
            $tempValue = trim(preg_replace('/\n/', ' ', $input[$i]));
            $dataArr[$counter][] = $tempValue;
        }
        if (isset($input[$i+1])) {
            $bilbasenUrl = preg_match("/https:\/\/www.bilbasen.dk\/brugt\//", $input[$i+1]);
            $gogUrl = preg_match("/https:\/\/www.guloggratis.dk\/biler\/personbiler\//", $input[$i+1]);
            $biltorvetUrl = preg_match("/https:\/\/www.biltorvet.dk\/bil\//", $input[$i+1]);
            if ($bilbasenUrl || $gogUrl || $biltorvetUrl) {
                $counter++;
            }
        }
    }
    return $dataArr;
}

function removeBlankColoums($array, $titleArray)
{
    $blankTest;

    for ($i=0; $i<sizeof($array); $i++) {
        for ($j=28; $j<sizeof($array[$i]); $j++) {
            if ($array[$i][$j] != "-") {
                $blankTest[$j] = true;
            } elseif ($array[$i][$j] == "-" && !isset($blankTest[$j])) {
                $blankTest[$j] = false;
            }
        }
    }

    $keys = array_keys($blankTest);

    for ($i=0; $i<sizeof($array); $i++) {
        $columnCounter = 0;
        for ($j=0; $j<sizeof($keys); $j++) {
            if($blankTest[$keys[$j]] == false) {
                //echo "columnCounter: " . $columnCounter . ", and j = " . $j . "<br>";
                array_splice($array[$i], $keys[$j - $columnCounter], 1);
                $columnCounter++;
            }
        }
    }
    $columnCounter = 0;

    for ($j=0; $j<sizeof($keys); $j++) {
        if($blankTest[$keys[$j]] == false) {
            //echo "About to splice titleArray with j = " . $j . ", and keys[j] = " . $keys[$j] . " <br>";
            array_splice($titleArray, $keys[$j-$columnCounter], 1);
            $columnCounter++;
        }
    }

    return [$array, $titleArray];
}

    ?>