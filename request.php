<?php
    include('./db_conn.php');
?>
<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <title>
            صفحه ی پیگیری نوبت
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
                        پیگیری نوبت
            </h3>
            <form action="" method="post">
            <table>
                <tr>
                    <td>کد پیگیری</td>
                   
                    <td>کد ملی</td>
                </tr>
                <tr>
                    <td>
                        کد پیگیری<input type="text" id="text" name="code_peygiri" style="width:100px;">
                    </td>
                                    

                    <td>
                        <input type="text" id="text" style="width:100px;">
                    </td>
                </tr>
                <tr style="height:65px;">
                    <td colspan="2">
                        <input type="submit" value="پیگیری ">
                    </td>
                </tr>
                 
                
                <?php
                    if(isset($_POST['code_peygiri']))
                    {
                        $code_peygiri = $_POST['code_peygiri'];
                        // echo "کد پیگیری".$code_peygiri;
                        $sql = "select * from patient_tb WHERE code_melli='".$code_peygiri."'";
                        $result = $db->query($sql);
                        echo "<table border='1'><tr><td>نام بیمار</td>
                                        <td>فامیلی بیمار</td>
                                        <td>کد ملی</td>
                                        <td>کد دکتر</td>
                                        <td>وضعیت نوبت</td>
                                    </tr>";
                        while ($row = $result->fetch())
                        {
                            echo "
                                        
                                    <tr >
                                        <td >".$row['name']."
                                        </td>
                                        <td >".$row['family']."
                                        </td>
                                        <td >".$row['code_melli']."
                                        </td>
                                        <td >".$row['doctor_code']."
                                        </td>
                                        <td >".$row['visit_time']."
                                        </td>
                                    </tr>
                                ";
                        }
                    }
                    echo "</table>";
                ?>
                
            </table>
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