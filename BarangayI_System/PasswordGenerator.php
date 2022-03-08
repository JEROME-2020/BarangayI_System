
<form action="PasswordGenerator.php" method="post">
    <input type="input" name="generate" placeholder="Generate Paswword">
    <br><br>
    <input type="submit" name="Submit">
</form>


<?php


    if(isset($_POST['Submit'])){

        $Password = $_POST['generate'];

        echo $Password . ": ";

        if(isset($Password)){
            $newpas = password_hash($Password, PASSWORD_DEFAULT);
            echo "Here is the output just: " . $newpas;
        }
        else{
            echo "No Value";
        }

       

    }





?>