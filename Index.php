<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $i = 0;
/*
       // Çift sayıların toplamı için bir değişken       
       // While döngüsü ile 0-100 arasındaki sayıları kontrol et
       while ($i <= 100) {
           if ($i % 2 == 0) { // Çift sayıları kontrol et
               echo "$i "; // Çift sayıyı yazdır
           }
           $i++;
       }

        // 50 ye kadar olan tek sayıları yazdır
       $j=0;
        while($j <= 50){
            if ($j % 2 == 1) {
                echo"".$j;
            }
            $j++;
        };

        // 0 dan 100 e kadar olan çift sayıların toplamını aldığımız program !!!
        $x=1;
        $toplam = 0;

        while($x <= 100){
            if ($x % 2 == 0) 
            {
                echo "<br>".$x;
                $toplam += $x;
            }
            $x++;
        }
  
        

        // 0 dan 100 e kadar olan tek sayıların toplam değeri
        $toplam1 = 0;
       $y = 0;

       while($y <= 100){
        if ($y % 2 == 1) {
            echo "<br>".$y;
            $toplam1 += $y;
        }
        $y++; 
       }

       echo "<br> tek sayıların toplam değeri: ".$toplam1;

       

            $i = 0;

            do{
                echo"<br> Merhaba--".$i;
                $i++;
            }
            while($i > 100);

        $a = 5;

        do {
            
        } 
        while ($a );
       

       //do While döngüsü ile tek sayıları alıp toplayıp toplamını ekrana
            $a = 0;
            $toplam = 0;
       do {
        if ($a % 2 == 1) {
            $toplam += $a;
            echo"--".$a;
        }
        $a++;
       } 
       while ($a <= 100);
       echo"Tek sayıların toplamı".$toplam;

    //---------------------------------------------- FOR -----------------------------
       
    for ($i=0; $i <= 10; $i++) { 
           echo $i;
        }


         //0 dan 20 ye kadar olan tek ve çift sayıları ayıralım

        for ($i=0; $i <= 20 ; $i++) { 
            if ($i % 2 == 0) {
                echo"<br> Çift sayı \n".$i;
            } else {
                echo"<br> Tek sayı \n".$i;
            }
            
        }
/* Harika! Şimdi seviyeyi biraz daha artırarak bir problem çözümü yapalım. 1 ile 50 arasındaki sayıları döngüde kontrol edeceğiz ve:
            3'e bölünebilen sayılar için "3'e bölünebilen sayı: X",
            5'e bölünebilen sayılar için "5'e bölünebilen sayı: X",
            Hem 3'e hem 5'e bölünebilen sayılar için "3 ve 5'e bölünebilen sayı: X" yazdıracağız. 
           

             for ($i=1; $i <= 50 ; $i++) { 
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo"<br> 3 e ve 5 e bölünebilir sayı".$i; 
            }
            elseif($i % 3 == 0)
            {
               echo"<br> 3 e bölünebilir sayı".$i;
            }
            elseif($i % 5 == 0) {
                echo"<br> 5 e bölünebilir sayı".$i;
            }
        }

//---------------------------------------------- FOREACH -----------------------------
         //Foreach level 1 örnek

       $markalar = array("Volvo","Mercedes","Bmw");

       foreach ($markalar as $markalars) {
        echo"--". $markalars;
       }

       $isimler = ["Ege","Cemre","Alperen","Taner"];

        foreach ($isimler as $name) {
            echo"--".$name;
        }    

            // Ders ve notlardan oluşan bir dizi
            $derslerVeNotlar = [
                "Matematik" => 85,
                "Fizik" => 90,
                "Kimya" => 78,
                "Türkçe" => 92,
                "Biyoloji" => 88
            ];

            $toplamNot = 0;
            $dersSayisi = 0;

            // foreach döngüsü ile her dersin adı ve notunu yazdır
            foreach ($derslerVeNotlar as $ders => $not) {
                echo "Ders: $ders, Not: $not\n";
                $toplamNot += $not; // Notları topla
                $dersSayisi++;      // Ders sayısını artır
            }

            // Ortalama hesapla
            $ortalama = $toplamNot / $dersSayisi;

            // Ortalama sonucu yazdır
            echo "\nOrtalama Not: $ortalama\n";


             //---------------------------------------------- Brek Continue -----------------------------
       
            // 1'den 10'a kadar olan sayılar arasında döngü
            for ($i = 1; $i <= 10; $i++) {
            // Eğer sayı tekse, o iterasyonu atla
            if ($i % 2 != 0) {
                continue;  // Tek sayılar için atla
            }
            echo "$i\n";  // Sadece çift sayıları yazdır
            }

            for ($i = 1; $i <= 10; $i++) {
                // Eğer sayı 5'e eşitse, döngüyü sonlandır
                if ($i == 5) {
                    break;  // 5'e geldiğinde döngüyü durdur
                }
                echo "$i\n";  // Sayıyı yazdır
            }

            // break ile döngüyü durdurma
            for ($i=1; $i <= 10 ; $i++) { 
                if ($i == 7) {
                    break;
                }
                echo"". $i;
            }
                // continue ile sadece tek sayıları alma
            for ($i=1; $i <30 ; $i++) { 
                if ($i % 2 != 1) {
                    continue;
                }
                else {
                    echo "<br>". $i;
                }
            }
          

          for($i=1;$i<=6; $i++)
		{
			for($k=6;$k>=$i;$k--)
			{
				echo "*";
			}
			echo "<br>";
		}



	$IndirimKodu="Kartal";
	$fiyat=1000;

	switch ($IndirimKodu) {
		case 'Kartal':
			echo"indirim ugulanmış fiyat".$fiyat * 0.20;	
			break;
		case 'civciv':
			echo"indirim ugulanmış fiyat".$fiyat * 0.50;	
			break;
		case 'BabaErzincan':
			echo"indirim ugulanmış fiyat".$fiyat * 0.76;	
			break;
		
		default:
			echo"Ne anlation";
			break;
	}

	if ($IndirimKodu == "Kartal") {
		echo"indirim ugulanmış fiyat".$fiyat * 0.20."<br>";
	} else {
		# code...
	}
		//kişinin kilosu 60 dan azsa küçük 60 80 normal 80 üstü kilolu

		$kilo=55;

			switch ($kilo) {
				case $kilo <= 60: echo "kilonuz zayıf"; break;
				case $kilo >= 60 && $kilo <= 80: echo"kilonuz normal";break;
				case $kilo >= 80: echo"kilonuz fazla";break;
				
				default:
					echo"Böyle bir aralık bulınmamakta";
					break;
			}

		//50 ile 100 arası çift asyıları ekrana ayz<dıran program 
	

			$i=1;

			while ($i <= 50) {
				if ($i % 2 == 0) {
					echo"<br>".$i;
				}
				$i++;
			}


echo"<hr/>";

    //Çarpım Tablosu



        for ($i=1; $i <=10 ; $i++) { 
            for ($j=1; $j <=10 ; $j++) { 
                $Exam=$i*$j;
                echo"$i x $j=$Exam <br>";
            }
            echo"<br>";
        }

*/

//1'den 20'ye kadar olan sayıların toplamını bulan bir program yazmak için hangi döngü kullanılır ve bu döngü nasıl yazılır?


$toplam = 0;
for ($i=1; $i <=20 ; $i++) { 
    $toplam += $i;
}
echo"Toplam $toplam";

/*Soru 1:
Bir sayı verildiğinde, bu sayının pozitif, negatif veya sıfır olduğunu belirlemek için bir program nasıl yazılır?

Soru 2:
1'den 20'ye kadar olan sayıların toplamını bulan bir program yazmak için hangi döngü kullanılır ve bu döngü nasıl yazılır?

Soru 3:
Bir kullanıcıdan alınan bir sayının, 1'den 10'a kadar olan sayılarla çarpımını yazdıran bir program nasıl yazılır?

Soru 4:
Bir sayı verildiğinde, bu sayının tek mi çift mi olduğunu kontrol eden bir program yazınız. Hangi koşul kullanılmalıdır?

Soru 5:
Bir dizi içerisindeki tüm sayıların toplamını bulan bir PHP programında hangi döngü ve koşullar kullanılabilir? */

         ?>
</body>
</html>