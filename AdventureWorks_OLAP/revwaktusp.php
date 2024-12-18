<?php
        include 'koneksi.php';
        $mainQuery = "SELECT * FROM revsm";
        $mainResult = $conn->query($mainQuery);
        $mainData = array();
        if ($mainResult->num_rows > 0) {
            while ($row = $mainResult->fetch_assoc()) {
                $mainData[] = array(
                    'name' => $row['Name'],
                    'y' => floatval($row['Revenue']),
                    'drilldown' => $row['Name'] 
                );
            }
        }

        $mainQuery2 = "SELECT * FROM revso";
        $mainResult2 = $conn->query($mainQuery2);
        $mainData2 = array();
        if ($mainResult2->num_rows > 0) {
            while ($row = $mainResult2->fetch_assoc()) {
                $mainData2[] = array(
                    'name' => $row['Description'],
                    'y' => floatval($row['Revenue'])
                );
            }
        }



$conn->close();
echo "var mainChartData = " . json_encode($mainData) . ";";
echo "var mainChartData2 = " . json_encode($mainData2) . ";";
?>