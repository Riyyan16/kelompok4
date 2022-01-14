<?php
    function debug_to_console($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);
    
        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }
    // Koneksikan Gan
    $conn = mysqli_connect("localhost", "root", "", "praktikum_9");
    if(!$conn)
        die('gagal konek databasenya :(');

    function query($query){
        global $conn;
        $data = mysqli_query($conn, $query);
        $hasil = array();
        while( $i = mysqli_fetch_assoc($data) ) {
            $hasil[] = $i;
        }
        return $hasil;
        
    }
?>