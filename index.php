<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>tsak1</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <header style="margin: 57px;background: var(--bs-blue);"></headervalue=tyle=>
    <?php
            $dbhost = "localhost";
            $dbuser = "hero";
            $dbpass = "1234";
            $db = "smartmethodtasks";
            $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);  

            ?>
    <div style="text-align: center;"> 
      
       <form action="updateEngines.php" method="get">

        <div class="row" style="text-align: center;width: 1036px;">
            <div class="col" style="width: 384px;">
                <input class="form-range" type="range"  id="egnine1" name="egnine1"  min="0" value= "90" step="1" max="180"  style="width: 254px;margin: 0px;"
                oninput= "this.nextElementSibling.value = this.value">
                <output> 90 </output>
                </div>
            <div class="col" style="width: 219px;">
                <h1 style="width: 160px;font-size: 17.520000000000003px;text-align: right;">محرك 1</h1>
            </div>
        </div>
        <div class="row" style="text-align: center;width: 1036px;">
            <div class="col" style="width: 384px;">
                <input class="form-range" type="range" id="egnine2" name="egnine2"  min="0"value= "90" step="1" max="180" style="width: 254px;margin: 0px;"
                oninput= "this.nextElementSibling.value = this.value">
                <output> 90 </output>
                </div>
            <div class="col" style="width: 219px;">
                <h1 style="width: 160px;font-size: 17.520000000000003px;text-align: right;">محرك 2</h1>
            </div>
        </div>
        <div class="row" style="text-align: center;width: 1036px;">
            <div class="col" style="width: 384px;">
                <input class="form-range" type="range" id="egnine3" name="egnine3" min="0" value= "90" step="1" max="180"  style="width: 254px;margin: 0px;"
                oninput= "this.nextElementSibling.value = this.value">
                <output> 90 </output>
                </div>
            <div class="col" style="width: 219px;">
                <h1 style="width: 160px;font-size: 17.520000000000003px;text-align: right;">محرك 3</h1>
            </div>
        </div>
        <div class="row" style="text-align: center;width: 1036px;">
            <div class="col" style="width: 384px;">
                <input class="form-range" type="range" id="egnine4" name="egnine4"  min="0" value= "90" step="1" max="180" style="width: 254px;margin: 0px;"
                oninput= "this.nextElementSibling.value = this.value">
                <output> 90 </output>
                </div>
            <div class="col" style="width: 219px;">
                <h1 style="width: 160px;font-size: 17.520000000000003px;text-align: right;">محرك 4</h1>
            </div>
        </div>
        <div class="row" style="text-align: center;width: 1036px;">
            <div class="col" style="width: 384px;">
                <input class="form-range" type="range" id="egnine5" name="egnine5"  min="0"  step="10" max="180" style="width: 254px;margin: 0px;"
                oninput= "this.nextElementSibling.value = this.value">
                <output> 90 </output>
                </div>
            <div class="col" style="width: 219px;">
                <h1 style="width: 160px;font-size: 17.520000000000003px;text-align: right;">محرك 5</h1>
            </div>
        </div>
        <div class="row" style="text-align: center;width: 1036px;">
            <div class="col" style="width: 384px;">
                <input class="form-range" type="range" id="egnine6" name="egnine6"   min="0"  step="1" max="180" style="width: 254px;margin: 0px;"
                oninput= "this.nextElementSibling.value = this.value">
                <output> 90 </output>
                </div>
            <div class="col" style="width: 219px;">
                <h1 style="width: 160px;font-size: 17.520000000000003px;text-align: right;">محرك 6</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <input class="btn btn-primary" type="submit" value="Save" style="margin: 0px;padding-right: 12px;margin-left: 47px;background: var(--bs-secondary);"></input>

                    </form>
                    <form action="turn.php" method="GET">
            <input class="btn btn-primary" type="submit" value="Turn on" style="color: var(--bs-light);background: var(--bs-secondary);"></input>
                    </form>
            </div>

        </div>
       

    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>