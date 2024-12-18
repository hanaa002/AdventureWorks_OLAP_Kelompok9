<?php
         include 'koneksi.php';
        $mainQuery = "SELECT * FROM salestahun";
        $mainResult = $conn->query($mainQuery);
        $mainData = array();

        if ($mainResult->num_rows > 0) {
            while ($row = $mainResult->fetch_assoc()) {
                $mainData[] = array(
                    'name' => $row['tahun'],
                    'x' => floatval($row['tahun']),
                    'y' => floatval($row['Sales_Amount']),
                    'drilldown' => $row['tahun'] 
                );
            }
        }

        $drilldownQuery = "SELECT * FROM salesbulan";
        $drilldownResult = $conn->query($drilldownQuery);
        $drilldownData = array();

        if ($drilldownResult->num_rows > 0) {
            while ($row = $drilldownResult->fetch_assoc()) {
                $browser = $row['tahun'];
                if (!isset($drilldownData[$browser])) {
                    $drilldownData[$browser] = array(
                        'name' => $browser,
                        'id' => $browser,
                        'x' => ($row['nama_bulan']),
                        'data' => array()
                    );
                }
                $drilldownData[$browser]['data'][] = array(
                    $row['nama_bulan'],
                    floatval($row['Sales_Amount']),
                );
            }
        }

$conn->close();

echo "var mainChartData = " . json_encode($mainData) . ";";
echo "var drilldownChartData = " . json_encode(array_values($drilldownData)) . ";";
?>