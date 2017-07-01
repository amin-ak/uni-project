[1mdiff --git a/index.php b/index.php[m
[1mindex 6b3e3fa..25c6e09 100644[m
[1m--- a/index.php[m
[1m+++ b/index.php[m
[36m@@ -4,7 +4,7 @@[m
          <meta charset="UTF-8">[m
         <link rel="stylesheet" type="text/css" href="./assets/css/style.css">[m
         <title>[m
[31m-            hi[m
[32m+[m[32m            خانه[m
         </title>[m
     </head>[m
     <body>[m
[36m@@ -23,35 +23,7 @@[m
 [m
         </section>[m
         <aside id="category_sec">[m
[31m-            [m
[31m-            <ul>[m
[31m-                <li>[m
[31m-                    <a href="#" id="">[m
[31m-                        صفحه اصلی[m
[31m-                    </a>[m
[31m-                </li>[m
[31m-                <li>[m
[31m-                    <a href="./reserve.php" id="">[m
[31m-                        گرفتن نوبت[m
[31m-                    </a>[m
[31m-                </li>[m
[31m-                <li>[m
[31m-                    <a href="./request.php" id="">[m
[31m-                        پیگیری نوبت[m
[31m-                    </a>[m
[31m-                </li>[m
[31m-                <li>[m
[31m-                    <a href="./laghv.php" id="">[m
[31m-                        لغو نوبت[m
[31m-                    </a>[m
[31m-                </li>[m
[31m-                <li>[m
[31m-                    <a href="#" id="">[m
[31m-                        تخصص ها[m
[31m-                    </a>[m
[31m-[m
[31m-                </li>[m
[31m-            </ul>[m
[32m+[m[32m            <?php include('./category.php') ?>[m[41m    [m
         </aside>[m
         <footer>[m
             <span>[m
[1mdiff --git a/laghv.php b/laghv.php[m
[1mindex d74fb97..35f130c 100644[m
[1m--- a/laghv.php[m
[1m+++ b/laghv.php[m
[36m@@ -4,7 +4,7 @@[m
          <meta charset="UTF-8">[m
         <link rel="stylesheet" type="text/css" href="./assets/css/style.css">[m
         <title>[m
[31m-            hi[m
[32m+[m[32m            صفحه ی لغو نوبت[m
         </title>[m
     </head>[m
     <body>[m
[36m@@ -44,35 +44,7 @@[m
         </section>[m
        [m
         <aside id="category_sec">[m
[31m-            [m
[31m-            <ul>[m
[31m-                <li>[m
[31m-                    <a href="./index.php" id="">[m
[31m-                        صفحه اصلی[m
[31m-                    </a>[m
[31m-                </li>[m
[31m-                <li>[m
[31m-                    <a href="./reserve.php" id="">[m
[31m-                        گرفتن نوبت[m
[31m-                    </a>[m
[31m-                </li>[m
[31m-                <li>[m
[31m-                    <a href="./request.php" id="">[m
[31m-                        پیگیری نوبت[m
[31m-                    </a>[m
[31m-                </li>[m
[31m-                <li>[m
[31m-                    <a href="./laghv.php" id="">[m
[31m-                        لغو نوبت[m
[31m-                    </a>[m
[31m-                </li>[m
[31m-                <li>[m
[31m-                    <a href="#" id="">[m
[31m-                        تخصص ها[m
[31m-                    </a>[m
[31m-[m
[31m-                </li>[m
[31m-            </ul>[m
[32m+[m[32m            <?php include('./category.php') ?>[m[41m   [m
         </aside>[m
         <footer>[m
             <span>[m
[1mdiff --git a/request.php b/request.php[m
[1mindex 46a4925..7a50ca3 100644[m
[1m--- a/request.php[m
[1m+++ b/request.php[m
[36m@@ -4,7 +4,7 @@[m
          <meta charset="UTF-8">[m
         <link rel="stylesheet" type="text/css" href="./assets/css/style.css">[m
         <title>[m
[31m-            hi[m
[32m+[m[32m            صفحه ی پیگیری نوبت[m
         </title>[m
     </head>[m
     <body>[m
[36m@@ -43,35 +43,7 @@[m
 [m
         </section>[m
         <aside id="category_sec">[m
[31m-            [m
[31m-            <ul>[m
[31m-                <li>[m
[31m-                    <a href="./index.php" id="">[m
[31m-                        صفحه اصلی[m
[31m-                    </a>[m
[31m-                </li>[m
[31m-                <li>[m
[31m-                    <a href="./reserve.php" id="">[m
[31m-                        گرفتن نوبت[m
[31m-                    </a>[m
[31m-                </li>[m
[31m-                <li>[m
[31m-                    <a href="./request.php" id="">[m
[31m-                        پیگیری نوبت[m
[31m-                    </a>[m
[31m-                </li>[m
[31m-                <li>[m
[31m-                    <a href="./laghv.php" id="">[m
[31m-                        لغو نوبت[m
[31m-                    </a>[m
[31m-                </li>[m
[31m-                <li>[m
[31m-                    <a href="#" id="">[m
[31m-                        تخصص ها[m
[31m-                    </a>[m
[31m-[m
[31m-                </li>[m
[31m-            </ul>[m
[32m+[m[32m            <?php include('./category.php') ?>[m[41m    [m
         </aside>[m
         <footer>[m
             <span>[m
[1mdiff --git a/reserve.php b/reserve.php[m
[1mindex 3f0650f..6828770 100644[m
[1m--- a/reserve.php[m
[1m+++ b/reserve.php[m
[36m@@ -1,11 +1,10 @@[m
 <!DOCTYPE html>[m
 <html>[m
[31m-[m
 <head>[m
     <meta charset="UTF-8">[m
     <link rel="stylesheet" type="text/css" href="./assets/css/style.css">[m
     <title>[m
[31m-        hi[m
[32m+[m[32m        صفحه ی دریافت نوبت[m
     </title>[m
 </head>[m
 [m
[36m@@ -27,17 +26,16 @@[m
                     <td>گروه تخصص</td>[m
                     <td>نوع تخصص</td>[m
                     <td>پزشک</td>[m
[31m-[m
[31m-[m
[31m-[m
                 </tr>[m
                 <tr>[m
                     <td>[m
[32m+[m[32m                    <!--date-->[m
                         <select name="" id="" class="full-width" disabled>[m
                         <option value="">تا ۱ روز آینده</option>[m
                       [m
                    </select>[m
                     </td>[m
[32m+[m[32m                    <!--grouh takhasos -->[m
                     <td>[m
                         <select class="full-width" id name>[m
                             <option selected="selected" value="1">------------</option>[m
[36m@@ -59,14 +57,18 @@[m
                             <option value="39">قلب</option>[m
                    </select>[m
                     </td>[m
[32m+[m[32m                    <!--noe takhasos-->[m
                     <td>[m
[31m-                        <select name="" id="" class="full-width">[m
[31m-                        <option value="">1</option>[m
[31m-                        <option value="">2</option>[m
[32m+[m[32m                        <select name="degree_p" id="" class="full-width">[m
[32m+[m[32m                        <option value="1">1</option>[m
[32m+[m[32m                        <option value="2">2</option>[m
[32m+[m[32m                        <option value="10">10</option>[m
[32m+[m[41m                        [m
                    </select>[m
                     </td>[m
[32m+[m[32m                    <!--dr list-->[m
                     <td>[m
[31m-                        <select name="" id="" class="full-width">   [m
[32m+[m[32m                        <select name="dr_p" id="" class="full-width">[m[41m   [m
                         <option value="0">------------</option>[m
                         <?php[m
                             [m
[36m@@ -153,30 +155,43 @@[m
             </table>[m
             <div>[m
                  <?php[m
[32m+[m[41m                 [m
[32m+[m[32m                 if(isset($_POST['degree_p']))[m
[32m+[m[32m                 {[m
[32m+[m[32m                     $posted = $_POST['degree_p'];[m
[32m+[m[32m                     echo $_POST['degree_p'];[m
[32m+[m[41m                [m
                 // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);[m
[31m-                $sql = "Select * from drlist_tb";[m
[32m+[m[32m                $sql = "Select * from drlist_tb where degree=".$posted;[m
                 $result = $db->query($sql);[m
                 echo "<table border='1'>[m
                         <tr>[m
[31m-                            <td>تخصص</td>   [m
[31m-                            <td>تخصص</td>[m
[31m-                            <td>تخصص</td>[m
[32m+[m[32m                            <td>نام</td>[m[41m   [m
[32m+[m[32m                            <td>فامیلی</td>[m
                             <td>تخصص</td>[m
[32m+[m[32m                            <td>وقت</td>[m
[32m+[m[32m                            <td>عملیات مورد نظر</td>[m[41m                            [m
                         </tr>";[m
                 while ($row = $result->fetch())[m
                     {[m
                         echo    "<tr>[m
                                     <td>".$row['name']."</td>[m
[31m-                                    <td>".$row['name']."</td>[m
[31m-                                    <td>".$row['name']."</td>[m
[32m+[m[32m                                    <td>".$row['family']."</td>[m
[32m+[m[32m                                    <td>".$row['degree']."</td>[m
[32m+[m[32m                                    <td>".$row['visit_time']."</td>[m
                                     <td>[m
[31m-                                        <a href='search?id=".$row['id']."'".$row['id']."'>[m
[32m+[m[32m                                        <a href='register.php?id=".$row['id']."'".$row['id']."'>[m
                                             رزرو نوبت[m
                                         </a>[m
                                     </td>[m
                                 </tr>";[m
                     }[m
                         echo "</table>";[m
[32m+[m[32m                         }[m
[32m+[m[32m                 else[m
[32m+[m[32m                 {[m
[32m+[m[32m                     echo "sorry";[m
[32m+[m[32m                 }[m
                 ?>[m
             </div>[m
         </form>[m
[36m@@ -185,34 +200,7 @@[m
     </section>[m
     <aside id="category_sec">[m
 [m
[31m-        <ul>[m
[31m-            <li>[m
[31m-                <a href="./index.php" id="">[m
[31m-                        صفحه اصلی[m
[31m-                    </a>[m
[31m-            </li>[m
[31m-            <li>[m
[31m-                <a href="#" id="">[m
[31m-                        گرفتن نوبت[m
[31m-                    </a>[m
[31m-            </li>[m
[31m-            <li>[m
[31m-                <a href="./request.php" id="">[m
[31m-                        پیگیری نوبت[m
[31m-                    </a>[m
[31m-            </li>[m
[31m-            <li>[m
[31m-                <a href="./laghv.php" id="">[m
[31m-                        لغو نوبت[m
[31m-                    </a>[m
[31m-            </li>[m
[31m-            <li>[m
[31m-                <a href="#" id="">[m
[31m-                        تخصص ها[m
[31m-                    </a>[m
[31m-[m
[31m-            </li>[m
[31m-        </ul>[m
[32m+[m[32m          <?php include('./category.php') ?>[m[41m    [m
     </aside>[m
     <footer>[m
         <span>[m
