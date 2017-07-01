<?php include('db_conn.php'); ?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <title>
            صفحه ی دریافت نوبت
    </title>
</head>

<body>
    <header>
        <h1>
            سامانه نوبت دهي بيمارستانی
        </h1>
    </header>
    <section>
        <h3 style="text-align:right;">
            تایید نهایی
        </h3>
        <form  action="register.php" method="post">
            <table id="reserve_tb">
                <tr>
                    <td>نام بیمار</td>
                    <td>فامیلی بیمار</td>
                    <td>کد ملی بیمار</td>
                    <td>کد پزشک</td>
                </tr>
                <tr>
                    <td>
                        <input name="p_name" />
                    </td>
                    <td>
                        <input name="p_family" />
                    </td>
                    <td>
                        <input  name="p_codeMelli" />
                    </td>
                    <td>
                        <input name="dr_code" type="text" <?php if(isset($_GET['id']))
                        { echo "value=".$_GET['id'];}  
                        ?>
                        />
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input type="submit" value="تایید و ثبت"  />
                    </td>
                </tr>
                <?php
                if(isset($_POST['p_codeMelli']))
                {
                    $name = $_POST['p_name'];
                    $family = $_POST['p_family'];
                    $codeMelli = $_POST['p_codeMelli'];
                    $doctor_code = $_POST['dr_code'];
                    $visitTime = "انتظار";
                    
                    $sql = "INSERT INTO patient_tb(`name`,`family`,code_melli,doctor_code,visit_time) values('".$name."', '".$family."', '".$codeMelli."','".$doctor_code."', '".$visitTime."')";
                    $db->exec($sql);
                    echo "<tr><td style='color:red;font-size:30px;'>";
                    echo $codeMelli;
                    echo "</td></tr>";

                }
?>
            </table>
            <div>
            </div>
        </form>


    </section>
    <aside id="category_sec">
        <?php include('./category.php') ?>    
    </aside>
    <footer>
        <span>
                1396/04/08               شرکت داده آوران ارائه کننده انواع سيستمهاي نوبت دهي   www.dadehavaran.com
            </span>
    </footer>
</body>

</html>