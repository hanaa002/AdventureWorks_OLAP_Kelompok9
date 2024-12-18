<?php
        include 'koneksi.php';
        $mainQuery = "SELECT * FROM revcountry";
        $mainResult = $conn->query($mainQuery);
        $mainData = array();

        if ($mainResult->num_rows > 0) {
            while ($row = $mainResult->fetch_assoc()) {
                $mainData[] = array(
                    'name' => $row['Name'],
                    'sales' => floatval($row['Revenue']),
                    'y' => floatval($row['Persen']),
                    'drilldown' => $row['Name'] 
                );
            }
        }

        $drilldownQuery = "SELECT * FROM revregion";
        $drilldownResult = $conn->query($drilldownQuery);
        $drilldownData = array();

        if ($drilldownResult->num_rows > 0) {
            while ($row = $drilldownResult->fetch_assoc()) {
                $browser = $row['Name'];
                if (!isset($drilldownData[$browser])) {
                    $drilldownData[$browser] = array(
                        'name' => $browser,
                        'id' => $browser,
                        'y' => $browser,
                        'data' => array()
                    );
                }
                $drilldownData[$browser]['data'][] = array(
                    $row['Region'],
                    floatval($row['Persen'])
                );
            }
        }


$conn->close();

echo "var mainChartData = " . json_encode($mainData) . ";";
echo "var drilldownChartData = " . json_encode(array_values($drilldownData)) . ";";
?>