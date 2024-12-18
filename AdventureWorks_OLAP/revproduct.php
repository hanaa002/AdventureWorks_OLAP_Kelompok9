<?php
include 'koneksi.php';
        $mainQuery = "SELECT * FROM revcp";
        $mainResult = $conn->query($mainQuery);
        $mainData = array();

        if ($mainResult->num_rows > 0) {
            while ($row = $mainResult->fetch_assoc()) {
                $mainData[] = array(
                    'name' => $row['CategoryName'],
                    'sales' => floatval($row['Revenue']),
                    'y' => floatval($row['Revenue']),
                    'drilldown' => $row['CategoryName'] 
                );
            }
        }

        $drilldownQuery = "SELECT * FROM revp";
        $drilldownResult = $conn->query($drilldownQuery);
        $drilldownData = array();

        if ($drilldownResult->num_rows > 0) {
            while ($row = $drilldownResult->fetch_assoc()) {
                $browser = $row['CategoryName'];
                if (!isset($drilldownData[$browser])) {
                    $drilldownData[$browser] = array(
                        'name' => $browser,
                        'id' => $browser,
                        'data' => array()
                    );
                }
                $drilldownData[$browser]['data'][] = array(
                    $row['ProductName'],
                    floatval($row['Revenue'])
                );
            }
        }

$conn->close();

echo "var mainChartData = " . json_encode($mainData) . ";";
echo "var drilldownChartData = " . json_encode(array_values($drilldownData)) . ";";
?>