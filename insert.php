<?php
 include("check.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #background_insert{
            background-image: url('image/insert_bg.jpg');
            background-size: cover; height: 600px; width: 100%;
            alt: 'Background image error';
        }
        label{
             color: rgb(13, 2, 27)!important;
        }
    </style>
</head>
<body>
    <div id="background_insert" class="w3-display-container w3-grayscale-min">
    <form action="/server.php" class="w3-display-middle" method="get">
    <table class="w3-table w3-large">
        <tr>
            <td><label for="level">Exam Level</label></td>
            <td><input class="w3-radio" type="radio" name="level" value="ip">IP</td>
            <td><input class="w3-radio" type="radio" name="level" value="fe">FE</td>
        </tr>
        <tr>
            <td><label for="years">Year:</label></td>
            <td colspan="2"> 
                <select name="years" value="years">
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="months">Month:</label></td>
            <td><input class="w3-radio" type="radio" name="months" value="April">April</td>
            <td><input class="w3-radio" type="radio" name="months" value="October">October</td>
        </tr>
        <tr>
            <td><label for="chapter">Chapter:</label></td>
            <td colspan="2">
                <select class="w3-light-grey" name="chapter" value="chapter" size="8">
                    <option value="Volume1" disabled>Volume One</option>
                    <option value="v1ch1">Chapter 1.Hardware</option>
                    <option value="v1ch2">Chapter 2.Information Processing System</option>
                    <option value="v1ch3">Chapter 3.Software</option>
                    <option value="v1ch4">Chapter 4.Database</option>
                    <option value="v1ch5">Chapter 5.Network</option>
                    <option value="v1ch6">Chapter 6.Security</option>
                    <option value="v1ch7">Chapter 7.Data Structure and Algorithm</option>
                    <option value="Volume2" disabled>Volume Two</option>
                    <option value="v2ch1">Chapter 1.Corporate and Legal Affairs</option>
                    <option value="v2ch2">Chapter 2.Business Strategy</option>
                    <option value="v2ch3">Chapter 3.Information Systems Strategy</option>
                    <option value="v2ch4">Chapter 4.Development Technology</option>
                    <option value="v2ch5">Chapter 5.Project Management</option>
                    <option value="v2ch6">Chapter 6.Service Management</option>
                    <option value="v2ch7">Chapter 7.System Audit and Internal Control</option>
                </select>
            </td>
        </tr>
        <tr>
            <td> <label for="upload">Upload file:</label></td>
            <td></td>
        </tr>
    </table>
    <button type="submit">INSERT</button>
</div>
</form>
</body>
</html>