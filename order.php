<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Orders - Order Page</title>
    <style type=text/css>
    h1 {
        color: #b65;
        font-family: "Times New Roman", Times, serif;
    }
    .card {
        border: 1px solid black;
        margin-left: 20px; 
        margin-top: 15px;
        width: 180px;
        height: auto;
        float: left;
        font-size: 14px;
        background-color: #CCCC;
        display: inline-block;
    }
    .struk{
        width: 250px;
        position: absolute; 
        right: 0;
    }
    .container{
        width: auto;
        height: auto;
    }
    .btnPilih{
        margin-left: 3px;
        margin-bottom: 3px;
    }
    img{
        width: 180px;
        height: 160px;
        border-bottom: 1.5px solid black;
    }
    p{
        line-height: 12px;
        margin-left: 3px;
    }
    ul{
        padding-left: 15px;
    }
    .cardcontainer{
        display: inline-block;
        width: auto;
        position: absolute;
        left: 0;
        right: 255px;
    }
    </style>
</head>
<body>
    <h1>Daftar Menu Makanan</h1>
    <a href="index.php">Kembali ke Halaman Awal</a><br>
<?php
    session_start();
    if (isset($_SESSION['foods']) or isset($_POST['save']))
    {
        echo "<div class='container'>";
        echo "<div class='cardcontainer'>";
        foreach ($_SESSION['foods'] as $key => $value)
        {
            echo "<div class='card'>";
            echo "<img src=".$value['gambar']." alt='Gambar Makanan'>";
            echo "<p id='nama$key'>".$value['nama']."</p>";
            echo "<p> Rp.<span id='harga$key'> ".$value['harga']."</span> </p>";
            echo "<button class='btnPilih' nama='#nama$key' harga = '#harga$key'>Pilih</button>";
            echo "</div>";
        }
        echo "</div>";
        echo "<div class='struk'>";
            echo "<h2> Pilihanku: </h2>";
            echo "<ul>";
            echo "</ul>";
            echo "<h3> </h3>";
        echo "</div>";
        echo "</div>";
    }
?>
<script src="jquery-3.7.0.min.js"></script>
<script> 
    var result = 0;
    $(".btnPilih").click(function() {
        $(this).attr("disabled", true);
        var nama = $(this).attr("nama");
        var harga = $(this).attr("harga");
        $("ul").append("<li>" + $(nama).html() + "  (Rp."+ $(harga).html() + ") </li>");
        result = result + parseInt($(harga).html());
        $("h3").html("<h3> TOTAL: Rp. " +  result + "</h3>");
	});
</script>
</body>
</html>