<?php
ini_set("display_errors", "0");
if (isset($_POST["submit"])) {
    $hargaAwal = $_POST["hargaAwal"];
    $diskon = $_POST["diskon"];

    $potonganDiskon = $hargaAwal * ($diskon / 100);
    $hasilDiskon = $hargaAwal - $potonganDiskon;
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
  
  </head>
    <title>UJIAN PTS PRODUKTIF</title>
</head>
<body>
<!-- NAVBAR -->
<nav class="bg-gray-800">

  <!-- Mobile menu, show/hide based on menu state. -->

    <div class="space-y-1 px-2 pb-3 pt-2 flex">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="diskon.php" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Exercise 1</a>
      <a href="zakat.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Exercise 2</a>
    </div>

</nav>
<!-- NAVBAR END -->

<div class=" mx-auto text-center">
    <h1 class="text-3xl font-bold text-sky-600 pt-4 text-center">KALKULATOR DISKON</h1>

    
    <form action="diskon.php" method="POST" class="">
        <div class="bg-gray-200 w-1/2 h-32 mx-auto mt-12 rounded-lg flex p-6 justify-around">
            <div>
                <p>Harga Awal (Rupiah) : </p>
                <input type="number" name="hargaAwal" class="rounded-lg h-8 w-64 border-2">
            </div>
            <div>
                <p>Diskon (%) : </p>
                <input type="number" name="diskon" class="rounded-lg h-8 w-64 border-2">
            </div>
        </div>
            <button class="bg-sky-700 text-white p-3 w-52 mt-5 hover:bg-sky-400 transition ease-in-out delay-100 hover:-translate-y-1 hover-scale-110 duration-3200 rounded-full" type="submit" name="submit">Hitung Diskonnya!</button>  
    </form>
    

</div>
<div class="mx-64 mt-10">
    <h1 class="font-semibold text-sky-400 text-2xl">Diskon Anda </h1>
    <hr>
    <div class="flex gap-20 mt-2">
    <h1 class="font-semibold text-sky-400">Harga Sebelum Diskon</h1>
    <?= number_format($hargaAwal,2,'.',',') ?>
    </div>
    <hr>
    <div class="flex gap-20 mt-2">
    <h1 class="font-semibold text-sky-400">Besar Diskon</h1>
    <?php echo number_format($potonganDiskon,2,'.',',');
        echo " ($diskon%)";?>
    </div>
    <hr>
    <div class="flex gap-20 mt-2">
    <h1 class="font-semibold text-sky-400">Harga Setelah Diskon</h1>
    <?= number_format($hasilDiskon,2,'.',',') ?>
    </div>
    <hr>
</div>
</body>
</html>