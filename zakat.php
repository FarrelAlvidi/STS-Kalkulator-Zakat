<?php

ini_set("display_errors", "0");
if (isset($_POST["submit"])) {
    $gajiBulan = $_POST["gajiBulan"];
    $bonusBulan = $_POST["bonusBulan"];
    $totalBulan = $gajiBulan + $bonusBulan;

    $zakat = $totalBulan * 0.025; 
    $gajiTahun = ($gajiBulan * 12) + ($bonusBulan * 12);



};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
   
    <title>UJIAN PTS PRODUKTIF</title>
</head>
<body>
<!-- NAVBAR -->
<nav class="bg-gray-800">

  <!-- Mobile menu, show/hide based on menu state. -->

    <div class="space-y-1 px-2 pb-3 pt-2 flex">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="diskon.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Exercise 1</a>
      <a href="zakat.php" class="bg-gray-900 text-white  rounded-md px-3 py-2 text-base font-medium" aria-current="page" >Exercise 2</a>
    </div>

</nav>
<!-- NAVBAR END -->

<div class="">
    <h1 class="text-3xl font-bold text-green-600 pt-4 text-center">Kalkulator Zakat</h1>

    <div class="w-1/2 mx-auto mt-10">
        <form action="zakat.php" method="POST">
            <h1 class="font-semibold">Jumlah Pendapatan per Bulan</h1>
            <input type="number" name="gajiBulan" class="border-2 rounded-lg w-full p-1 px-2 text-slate-600 mt-2">

            <h1 class="font-semibold mt-5">Bonus, THR dan Lainnya</h1>
            <input type="number" name="bonusBulan" class="border-2 rounded-lg w-full p-1 px-2 text-slate-600 mt-2">

            <button type="submit" name="submit" class="bg-green-700 text-white font-semibold p-2 rounded-lg mt-5 w-52">Hitung</button>
        </form>
    </div>

    <div class="w-1/2 mx-auto mt-16 ">
        <?php

        if ($gajiTahun > 82312725) {
        
         echo '<h1 class="font-semibold text-2xl text-center">Jumlah Zakat Penghasilan Anda : </h1>';
         echo '<h2 class="text-center font-semibold text-4xl mt-4">Rp',number_format($zakat,2,'.',','),',-</h2>';
         echo '<div class="flex justify-between mt-5 text-lg">
         <h2>Pendapatan per bulan:</h2>
         <p>Rp ', number_format($gajiBulan,2,'.',','),'</div>';
         echo '<div class="flex justify-between mt-5 text-lg"> 
         <h2>Bonus, THR dan Lainnya:</h2>
         <p>Rp ', number_format($bonusBulan,2,'.',','),'</div>';
         
         echo '<button class="bg-green-700 text-white font-semibold p-3 rounded-xl mt-7 w-60">Bayar Zakat Penghasilan</button>';
         
        } elseif ($gajiTahun < 82312725) {
            echo '<h1 class="font-semibold text-2xl text-center">Jumlah Zakat Penghasilan Anda : </h1>';
            echo '<h2 class="text-center font-semibold text-4xl mt-4">Rp 0,-</h2>';
            echo '<h1 class="text-center font-semibold text-lg mt-4">Penghasilan Anda belum mencapai Nisab. <br> Anda tetap bisa menyempurnakan niat baik dengan sedekah</h1>';
            echo '<div class="flex justify-between mt-5 text-lg">
            <h2>Pendapatan per bulan:</h2>
            <p>Rp ', number_format($gajiBulan,2,'.',','),'</div>';
            echo '<div class="flex justify-between mt-5 text-lg"> 
            <h2>Bonus, THR dan Lainnya:</h2>
            <p>Rp ', number_format($bonusBulan,2,'.',','),'</div>';
        }
        ?>
        <h1 class="text-center font-semibold text-3xl mt-10">Metode Pembayaran</h1>
        <p class="text-center text-lg">Silahkan Pilih salah satu metode pembayaran</p>

        <h1 class="font-semibold text-2xl mt-12">Virtual Account</h1>
        <p class=" text-md">Minimal Pembayaran Rp10.001</p>
        <div class="flex mt-3 justify-between">
            <img src="lgbsi.png" width="150px" class="">
            <h1 class="mt-5 font-semibold text-lg">BSI Virtual Account</h1>
            <input type="radio" class="mt-5">
        </div>
        <div class="flex mt-3 justify-between">
            <img src="bca.png" width="150px" class="">
            <h1 class="mt-5 font-semibold text-lg">BSI Virtual Account</h1>
            <input type="radio" class="mt-5">
        </div>
        <div class="flex mt-3 justify-between ">
            <img src="mandiri.png" width="150px" class="">
            <h1 class="mt-5 font-semibold text-lg">BSI Virtual Account</h1>
            <input type="radio" class="mt-5">
        </div>


        <div class="mt-32 text-center">
            <img src="niat.jpg" alt="">
            <h1 class="text-center font-semibold text-lg mt-2">"Nawaitu an ukhrija zakata maali fardhan lillahi ta'aala."</h1>
            <p class="text-center text-md mt-2">Aku niat mengeluarkan Zakat hartaku fardhu karea Allah Ta'aala.</p>
            <button class="bg-green-700 text-white font-semibold p-2 rounded-lg mt-7 w-1/2 text-xl">Bayar</button>
        </div>
    </div>


</div>



</body>
</html>