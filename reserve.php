<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <title>
        hi
    </title>
</head>

<?php include('db_conn.php'); ?>
<body>
    <header>
        <h1>
            سامانه نوبت دهي بيمارستانی
        </h1>
    </header>
    <section>
        <h3 style="text-align:right;">
            گرفتن نوبت
        </h3>
        <form class="" action="reserve.php" method="post">
            <table id="reserve_tb">
                <tr>
                    <td>تا تاریخ</td>
                    <td>گروه تخصص</td>
                    <td>نوع تخصص</td>
                    <td>پزشک</td>



                </tr>
                <tr>
                    <td>
                        <select name="" id="" class="full-width" disabled>
                        <option value="">تا ۱ روز آینده</option>
                      
                   </select>
                    </td>
                    <td>
                        <select class="full-width" id name>
                            <option selected="selected" value="1">------------</option>
                            <option value="2"> اطفال</option>
                            <option value="11">داخلي</option>
                            <option value="13">چشم</option>
                            <option value="15">مغز و اعصاب</option>
                            <option value="17">جراحي عمومي</option>
                            <option value="19">فك و صورت</option>
                            <option value="21">ارتوپدي</option>
                            <option value="23">عفوني</option>
                            <option value="25">پوست</option>
                            <option value="27">گوش و حلق و بيني</option>
                            <option value="29">آلر&zwj;ژي</option>
                            <option value="31"> دندانپزشكي</option>
                            <option value="33"> اورولوژی</option>
                            <option value="35">تغذيه</option>
                            <option value="37">روانشناسی</option>
                            <option value="39">قلب</option>
                   </select>
                    </td>
                    <td>
                        <select name="" id="" class="full-width">
                        <option value="">1</option>
                        <option value="">2</option>
                   </select>
                    </td>
                    <td>
                        <select name="" id="" class="full-width">   
                        <option value="0">------------</option>
                        <?php
                            
                        ?>
                            <option value="687">دکتر دباغ زاده</option>
                            <option value="576">دكتر جعفري راد</option>
                            <option value="699">دکتر اعلا</option>
                            <option value="556">دكتر نوروز پور</option>
                            <option value="613">دكتر كوثريان</option>
                            <option value="567">دكتر باغبانيان</option>
                            <option value="633">دکتر يوسفی</option>
                            <option value="593">دكتر عمادي پوست</option>
                            <option value="547">دكتر سليماني</option>
                            <option value="670">دکتر باری</option>
                            <option value="616">دكتر غفاري نوزادان</option>
                            <option value="673">دکتر پاکروان</option>
                            <option value="550">دكتر حق پرست</option>
                            <option value="667">دکتر ملاحسنی </option>
                            <option value="713">دکتر شهباز نژاد</option>
                            <option value="596">دكتر مطهري</option>
                            <option value="690">دکتر کاظمی نژاد</option>
                            <option value="668">دکترباقری</option>
                            <option value="714">دکتر نیکخواه</option>
                            <option value="599">دكتر پورموسي</option>
                            <option value="591">دكتر حاج حيدري پوست</option>
                            <option value="559">دكتر فرخ فر</option>
                            <option value="602">دكتر جواد غفاري</option>
                            <option value="625">دکتر جعفری</option>
                            <option value="645">دکتر حجتی</option>
                            <option value="562">دكتر كريمي</option>
                            <option value="611">دكتر رضايي</option>
                            <option value="671">دکتر حیدری</option>
                            <option value="565">دكتر خوش نما</option>
                            <option value="694"> خانم دکتر رحیمی </option>
                            <option value="706">دکتر حسین کرمی</option>
                            <option value="614">دكتر موسوي</option>
                            <option value="560">دكتر شيخ رضايي</option>
                            <option value="617">دكتر فرهادي</option>
                            <option value="563">دكتر زرواني</option>
                            <option value="629">دکتر عابد </option>
                            <option value="606">دكتر جمشیدی</option>
                            <option value="723">دکتر مسیحا</option>
                            <option value="637">آقای خانعلی زاده</option>
                            <option value="574">دكتر حجتي</option>
                            <option value="720">دکتر محمودی</option>
                            <option value="566">دكتر چراغ مكاني</option>
                            <option value="577">دكتر ايزدي</option>
                            <option value="597">دكتر نيكخواه</option>
                            <option value="689">دکتر شجایی</option>
                            <option value="623">آقای دکتر فروتن</option>
                            <option value="557">دكتر احمدزاده</option>
                            <option value="618">دكتر نخشب</option>
                            <option value="718">دکتر جوکار</option>
                            <option value="638">دکتر احمدی</option>
                            <option value="575">دكتر صادقي</option>
                            <option value="661">دکتر تقیان</option>
                            <option value="704">دکتر عباسخانیان</option>
                            <option value="598">دكتر مدني</option>
                            <option value="692">دکتر درویش نیا</option>
                            <option value="612">دكتر زمانفر</option>
                            <option value="632">دکتر يوسف پور</option>
                            <option value="701">دکتر محمد جعفری</option>
                            <option value="681">دکتر سوادکوهی</option>
                            <option value="589">دكتر گلپور </option>
                            <option value="561">دكتر عابديني</option>
                            <option value="721">دکتر انعامی</option>
                            <option value="655">دکتر بابایی </option>
                            <option value="698">دکتر حسن کرمی</option>
                            <option value="592">دكتر رحمت پور پوست</option>

                    </select>
                    </td>

                </tr>




                <td colspan="5" style="height:80px;">
                    <input type="submit" name="patient_name" class="medium-width" value="نمایش لیست نوبت ها">
                    <br />
                </td>
                </tr>
            </table>
            <div>
                 <?php
                // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "Select * from drlist_tb";
                $result = $db->query($sql);
                echo "<table border='1'>
                        <tr>
                            <td>تخصص</td>   
                            <td>تخصص</td>
                            <td>تخصص</td>
                            <td>تخصص</td>
                        </tr>";
                while ($row = $result->fetch())
                    {
                        echo    "<tr>
                                    <td>".$row['name']."</td>
                                    <td>".$row['name']."</td>
                                    <td>".$row['name']."</td>
                                    <td>
                                        <a href='search?id=".$row['id']."'".$row['id']."'>
                                            رزرو نوبت
                                        </a>
                                    </td>
                                </tr>";
                    }
                        echo "</table>";
                ?>
            </div>
        </form>


    </section>
    <aside id="category_sec">

        <ul>
            <li>
                <a href="./index.php" id="">
                        صفحه اصلی
                    </a>
            </li>
            <li>
                <a href="#" id="">
                        گرفتن نوبت
                    </a>
            </li>
            <li>
                <a href="./request.php" id="">
                        پیگیری نوبت
                    </a>
            </li>
            <li>
                <a href="./laghv.php" id="">
                        لغو نوبت
                    </a>
            </li>
            <li>
                <a href="#" id="">
                        تخصص ها
                    </a>

            </li>
        </ul>
    </aside>
    <footer>
        <span>
                1396/04/08               شرکت داده آوران ارائه کننده انواع سيستمهاي نوبت دهي   www.dadehavaran.com
            </span>
    </footer>
</body>

</html>