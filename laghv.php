<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <title>
            صفحه ی لغو نوبت
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
                        لغو نوبت
            </h3>
            <table>
                <tr>
                    <td>کد پیگیری</td>
                   
                    <td>کد ملی</td>
                </tr>
                 
                <tr>
                    <td>
                        <input type="text" id="text" style="width:100px;">
                    </td>
                                    

                    <td>
                        <input type="text" id="text" style="width:100px;">
                    </td>
                </tr>
                <tr style="height:65px;">
                    <td colspan="2">
                        <input type="submit" value="لغو کردن">
                    </td>
                </tr>
            </table>

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