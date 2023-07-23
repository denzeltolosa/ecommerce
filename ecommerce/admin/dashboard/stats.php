<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    stats($_POST['month']);
} else {
    echo 'Invalid request.';
}

function stats($month = "") {
    $response = [];

    if (!empty($month)) {
        $month = $month . "-01";
        $cdate_from = date('Y-m', strtotime($month)) . '-01';
        $m = date('m', strtotime($month));
        $y = date('Y', strtotime($month));

        $dnumber = cal_days_in_month(CAL_GREGORIAN, $m, $y);
        $cdate_to = date('Y-m', strtotime($month)) . '-' . $dnumber;

        $days = [];
        $sday = [];

        for ($i = 1; $i <= $dnumber; $i++) {
            $i = sprintf("%'.02d", $i);
            $day = $y . '-' . $m . '-' . $i;
            $days[] = $day;
            $sday[$day] = 0;
            $i = number_format($i);
        }

        $connection = mysqli_connect("localhost", "root", "", "db_ecommerce");
        if (!$connection) {
            die("Database connection failed: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM tblsummary WHERE DATE(CLAIMEDADTE) BETWEEN '$cdate_from' AND '$cdate_to' AND ORDEREDSTATS = 'Delivered'";
        $sales = mysqli_query($connection, $query);

        if (!$sales) {
            die("Query failed: " . mysqli_error($connection));
        }

        while ($row = mysqli_fetch_assoc($sales)) {
            $sday[date('Y-m-d', strtotime($row['CLAIMEDADTE']))] += ($row['PAYMENT']);
        }

        $response['labels'] = $days; // Update key name to 'labels'
        $response['sales'] = array_values($sday); // Use 'sales' instead of 'sday'
        $response['colors'] = [
            '#007bffa3',
            '#17a2b8',
            '#FF0000',
            '#008B8B',
            '#ffff24',
            8
        ];
        $response['monthLabel'] = date("F, Y", strtotime($cdate_from));
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}


?>
