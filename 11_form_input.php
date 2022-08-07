<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Name <input type="text" name="userName"><br>
        Phone Number <input type="number" name="userPhone"><br>
        <input type="submit" value="Save" name="saveBtn">
        <button type="submit" name="clearBtn">Clear</button>
    </form>

    <?php
        if(isset($_POST['saveBtn'])){
            $name = $_POST["userName"];
            $phone = $_POST["userPhone"];

            if($name == null || $phone == null){
                echo "You need to fill both text!";
            } else {
                echo $name;
                echo $phone;
            }
        }

        if(isset($_POST['clearBtn'])){
            echo "Clear btn click";
        }
    ?>
</body>
</html>