<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="Style.css">

    <title>الرئيسية</title>
  </head>
  <body>

    <img src="alu.png" alt="Alula"
     height="80" width="100">

    <ul>
      <li><a class="active" href="Alula.html">الرئيسية</a></li>
        <li><a href="Home.html">أكتشف العلا </a></li>
      <li><a href="events.html">الفعاليات والأنشطة </a></li>
      <li><a href="tourism.html">السياحة</a></li>
        </ul>



      <div class="image">
        <img src="oll.jpg" alt="Alula" height="600" width="1260">
        <div class="text">
          <h2 >  مـاهـي الـعُـلا ؟</h2>
              <p>  شاهد الفيديو </p>
            <div class="Video">
              <a href="Videoalula.mp4">
                <img src="videoicon.png" alt="video"
                  height="80" width="80" > </a>
                </div>


    <p><img src="bla.jpg" alt="بلدة العلا القديمة"  height="500" width="750"
    style="position:absolute; right:510px; top:500px;"> </p>
   <p class="TitleoldAlula" style="font-size:40px;font-family:'Noto Kufi Arabic';">  بلدة العلا القديمة </p>
   <p class="TitleoldAlula"><br><br><br><br>
                     يمكن العثور في هذا الموقع الرائع على متاهةً
                     من الشوارع المهجورة التي تضم 900 منزل من
                    الطوب الطيني، و400 متجر، وخمس ساحات
                    مع أزقةٍ متعرجةٍ ونوافذٍ تُطلّ على الممرات
                    المخفية والتراسات على الأسطح التي تُلمِح
                        فقط إلى العالم في الداخل.</p>
    <p> <img src="old.jpg" alt="بلدة العلا القديمة" height="300" width="450"
              style="position:absolute; right:20px;top: 1000px;" ></p>
  <p class="textoldalula" style="top:1100px;">
           بلدة العلا القديمة هي المكان الذي تجمع فيه الحجاج والمسافرون
                      والمستوطنون الدائمون عبر العصور.</p>


    <p><img src="akmah.jpg" alt="جبل عكمة" height="500" width="750"
       style="position:absolute; right:510px; top:1500px;"  ></p>
    <p class="TitleMountIkma" style="font-size:40px;font-family:'Noto Kufi Arabic';" > جبل عكمة </p>
    <p class="TitleMountIkma" ><br><br><br><br>
                       ما كان في الماضي جزءً من محطة طريق
                       القوافل، أصبح مع الزمن حارسًا يحفظ بدقة
                     أحوال ذلك الزمن من خلال المنحوتات
                       التي تُوفّر معلوماتٍ قيّمةٍ حول طريقة حياة
                       الدادانيين واللحيانيين وغيرهم.</p>
     <p> <img src="smikmah.jpg" alt="جبل عكمة" height="300" width="450"
              style="position:absolute; right:20px;  top: 2000px;" ></p>
     <p class="textMountIkma" style="top:2050px;">
              كان جبل عكمة موقعًا مهيبًا على طرق التجارة القديمة، ويضم أكثر من 500 كتابة
   منحوتة على المنحدرات والواجهات الصخرية التي تعود الى الفترتين الدادانية و اللحيانية.</p>


   <p><img src="mo.jpg" alt="الديوان وجبل اثلب" height="500" width="750"
     style="position:absolute; right:510px; top:2500px;"> </p>
   <p class="TitleDiwan" style="font-size:40px;font-family:'Noto Kufi Arabic';top:2500px;">  الديوان وجبل أثلب</p>
   <p class="TitleDiwan" ><br><br><br><br>
 تمركزتْ الممارسات الدينية أو الطقسية في مدينة الحِجر حول جبل أثلب، وهو نتوءٌ جبليٌ طبيعيٌ يقع شرق المدينة. </p>
  <p> <img src="moo.jpg" alt="جبل عكمة" height="300" width="450"
   style="position:absolute; right:20px; top:3000px;"></p>
   <p class="textDiwan" style=" top:3050px;">
"الديوان" وهي غرفة منحوتة في الصخور كانت ذات يوم مكانا ًلإقامة الولائم الفخمة وقاعة اجتماعات لقادة المدينة </p>

<p><img src="st.jpg" alt="استكشف العلا" height="400" width="500" style=" position: absolute; top:3440px;right:350px"></p>
<p class="ExploreAlula">  اكتشف العلا</p>


<p><img src="Sh.jpg" alt=" السياحة" height="400" width="500" style=" position: absolute; top:3900px;right:100px"></p>
<p class="tourism"> السياحة </p>


<p><img src="cxx.png" alt=" الحفلات" height="200" width="500" style=" position: absolute; top:3900px; right:650px">
  <img src="ll.jpg" alt=" الحفلات" height="200" width="500" style=" position: absolute; top:4100px;right:650px"></p>
<p class="Parties"> الحفلات والأنشطة </p>

<p class="footer"></p>

<?php
// define variables and set to empty values
 $emailErr = "";
 $email = "";

  if (empty($_POST["email"])) {
    $emailErr = "";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form class="emill" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
اشترك للحصول على أحدث أخبار العلا من العروض والفعاليات<br>
   <input class="em"  type="text" name="email" placeholder="البريد الإلكتروني"  value="<?php echo $email;?>">
  <br><br>
  <input  class="Submit" type="submit" name="submit" value="اشترك" style="">
</form>

<?php
echo $email;
echo "<br>";
 ?>

<img src="2030.png" width="100" height="100" style=" position:absolute; top:4500px;right:1100px">
<p class="link"> الروابط السريعة</p>
<p class="linker">
<a class="vlink" href="https://youtu.be/KEVZ7K2Qrs0">  مناطيد العلا </a>
<a class="vlink" href="https://youtu.be/IgUB-PnE5C4"><br>حفل كارول سماحة</a>
<a class="vlink" href="https://youtu.be/g3YbFn2ziqs"><br><br>الموسيقار عمر خيرت</a>
</p>
  </body>
</html>
