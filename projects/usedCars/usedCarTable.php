


    <div class="tableContainer">
        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                <?php
                    echo "<th>Nr: </th>";
                    foreach($headerArray as $attribute) {
                        echo "<th>" . $attribute . "</th>";
                    }
                ?>
                </tr>
            </thead>
            <?php
                $carCounter = 1;
                if (isset($autoArr)) {
                    for($i=0; $i<sizeOf($autoArr); $i++) {
                        echo "<tr>";
                            echo "<td class=\"carCounterCell\"> $carCounter </td>";
                            for($j=0; $j<sizeOf($autoArr[$i]); $j++) {
                                if ($j == 0 && strpos($autoArr[$i][0], 'bilbasen') !== false) {
                                    echo "<td class=\"carCell\">";
                                    echo "<a href='".$autoArr[$i][$j]."' target=\"_blank\">Link til bilbasen</a>";
                                    echo "</td>";
                                } elseif ($j == 0 && strpos($autoArr[$i][0], 'guloggratis') !== false) {
                                    echo "<td class=\"carCell\">";
                                    echo "<a href='".$autoArr[$i][$j]."' target=\"_blank\">Link til guloggratis</a>";
                                    echo "</td>";
                                } else {
                                    echo "<td class=\"carCell\">";
                                    echo $autoArr[$i][$j];
                                    echo "</td>";
                                }
                            }
                        echo "</tr>";
                        $carCounter++;
                    }
                }

                if (isset($manuelArr)) {
                    for($i=0; $i<sizeOf($manuelArr); $i++) {
                        echo "<tr>";
                            echo "<td class=\"carCounterCell\"> $carCounter </td>";
                            for($j=0; $j<sizeOf($manuelArr[$i]); $j++) {
                                if ($j == 0 && strpos($manuelArr[$i][0], 'bilbasen') !== false) {
                                    echo "<td class=\"carCell\">";
                                    echo "<a href='".$manuelArr[$i][$j]."' target=\"_blank\">Link til bilbasen</a>";
                                    echo "</td>";
                                } elseif ($j == 0 && strpos($manuelArr[$i][0], 'guloggratis') !== false) {
                                    echo "<td class=\"carCell\">";
                                    echo "<a href='".$manuelArr[$i][$j]."' target=\"_blank\">Link til guloggratis</a>";
                                    echo "</td class=\"carCell\">";
                                } else {
                                    echo "<td class=\"carCell\">";
                                    echo $manuelArr[$i][$j];
                                    echo "</td>";
                                }
                            }
                        echo "</tr>";
                        $carCounter++;
                    }
                }
                ?>
		</table>
    </div>

<style>
    .tableContainer {
        margin-left: -15px;
    }
</style>



