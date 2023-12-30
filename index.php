<html lang="en">
<head>
    <title>Welcome to Food Orders</title>
</head>
<body>
    <style type=text/css> 
        h1
        {
            color: #b65;
            font-family: "Times New Roman", Times, serif;
        }
    </style>
<?php
    session_start();
    // session_destroy();
    if (isset($_SESSION['foods'])) {  //cek apakah session array sudah ada jika sudah ada
        $arr_food = $_SESSION['foods']; 
    }
    else {
        $arr_food = array();
    }

    if (isset($_POST['save'])){ //cek apakah formnya sudah disubmit dan baca isi dari form
        $food = array("kode"=> $_POST['kode'], "nama" => $_POST['nama'], 
        "harga"=> $_POST['harga'], "gambar" => $_POST['gambar']);
        $arr_food = $food;

        $_SESSION['foods'][] = $arr_food;
    }
?>
    <h1>Food Orders</h1>   
    <form method= "POST" action="index.php">
    Kode Makanan: <input type="number" name = "kode"required=""> <br><br> 
    Nama Makanan: <input type="text" name = "nama"> <br><br>
    Harga Makanan: Rp <input type="number" name = "harga"> <br><br>
    Link Gambar Makanan: <input type="text" name = "gambar"> <br><br>
    <input type="submit" name="save" value="Simpan">
    <br><br>
    <a href="order.php">Ke halaman order</a>
    <br><br>
    <p> Website ini merupakan Tugas 2 - Web Programming KP: F <br> Oleh:</p>
    <ul> 
        <li>160721004 - Fenny Cahyawati</li>
        <li>160721022 - Fransisca Priscillia T</li>
        <li>160721023 - Christin Gunawan</li>  
    <ul>
    </form>
</body>
</html>