<?php
// filepath: /Users/semihnebitokalak/Desktop/Desktop_2/FrontendEgitimi/2210206050_Lab_Sheet_3.php

// 2210206050 Semih Nebi Tokalak
// CPE212
// Oğuzhan MENEMENCİOĞLU
// Bilgisayar Mühendisliği %30(II)
// Lab Sheet 3

// 1. Echo Kullanımı ve Değişkenler
// Bu egzersizde, PHP'de echo komutu kullanılarak bir cümle yazdırılmış ve değişkenler ile
// değişken değerleri değiştirilerek tekrar yazdırılmıştır.

// İlk olarak sabit bir metin yazdırıyoruz.
echo "Twinkle, Twinkle little star.<br>";
// Değişkenleri tanımlıyoruz
$word1 = "Twinkle";
$word2 = "star";
// Değişkenler ile birlikte aynı cümleyi yazdırıyoruz
echo "$word1, $word1 little $word2.<br>";
// Değişkenlerin değerlerini değiştiriyoruz
$word1 = "Shiny";
$word2 = "moon";
// Yeni değerlerle aynı cümleyi tekrar yazdırıyoruz
echo "$word1, $word1 little $word2.<br>";

// 2. Aritmetik Operatörler
// Bu kısımda, PHP'nin aritmetik operatörleri kullanılarak çeşitli matematiksel işlemler
// yapılmış ve sonuçları ekrana yazdırılmıştır.

// Değişkenleri tanımlıyoruz
$x = 10;
$y = 7;
// Aritmetik işlemleri gerçekleştirerek sonuçları ekrana yazdırıyoruz
echo "$x + $y = " . ($x + $y) . "<br>";
echo "$x - $y = " . ($x - $y) . "<br>";
echo "$x * $y = " . ($x * $y) . "<br>";
echo "$x / $y = " . ($x / $y) . "<br>";
echo "$x % $y = " . ($x % $y) . "<br>";

// 3. Aritmetik Atama Operatörleri
// Bu bölümde, bir değişken üzerinde işlem yaparak çıktılar oluşturulmuştur.

// Başlangıç değeri belirleniyor
$value = 8;
echo "Value is now $value.<br>";
$value += 2;
echo "Add 2. Value is now $value.<br>";
$value -= 4;
echo "Subtract 4. Value is now $value.<br>";
$value *= 5;
echo "Multiply by 5. Value is now $value.<br>";
$value /= 3;
echo "Divide by 3. Value is now $value.<br>";
$value++;
echo "Increment value by one. Value is now $value.<br>";
$value--;
echo "Decrement value by one. Value is now $value.<br>";

// 4. Değişken İçeriğini Görüntüleme
// Bu kısımda, PHP'de değişken türlerini ve değerlerini yazdırmak için var_dump fonksiyonu
// kullanılmıştır.

// Değişkenler tanımlanıyor
$name = "Harry";
$age = 28;
$emptyVar = NULL;
// var_dump fonksiyonu ile türler ekrana yazdırılıyor
var_dump($name);
echo "<br>";
echo $name . "<br>";
var_dump($age);
echo "<br>";
var_dump($emptyVar);

// 5. Tek Tırnak ve Çift Tırnak Kullanımı
// Bu bölümde, PHP'de tek tırnak ve çift tırnak kullanım farkları gösterilmiştir.

$around = "around";
echo 'What goes ' . $around . ', comes ' . $around . '.<br>';

// 6. Koşullu İfade Kullanımı
// Bu kısımda, PHP'de if kontrol yapısı kullanılarak, ay bilgisine göre farklı mesajlar
// görüntülenmiştir.

// Geçerli ayı alıyoruz
$currentMonth = date('F', time());
// Koşullu ifade kullanarak mesaj belirliyoruz
if ($currentMonth == "August") {
    echo "It's August, so it's really hot.";
} else {
    echo "Not August, so at least not in the peak of the heat.";
}
?>