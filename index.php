<!DOCTYPE html>
<html>
<head>

    <title>Password Generator</title>
    <meta charset= 'utf-8'>

    <?php
    require('logic.php');
    ?>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">

</head>
<body>

    <div>
        <br><br><br>
    </div>
    <h1 align="center">Password Generator</h1>
    <container>

    <div class="four columns" style="margin-top:  25%">


    </div>

    <div class="four columns" style="margin-top:  5%" >
        <p class='password' align="center">
            <?php
                echo $display;
            ?>
        </p>

        <form method='GET' action='index.php'>
            <p align="center">
                <label>Number of Words</label>

                <select name="length">
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                    <option value="6">Six</option>
                    <option value="7">Seven</option>
                </select>
                <br>

                <input type="checkbox" name="number" value='1'> Include a Number<br>

                <input type="checkbox" name="symbol" value='1' >Include a symbol<br>

		        <input type='submit' name='button' value='Generate Password'>
            </p>
        </form>

    </div>




    </container>


</body>
</html>
