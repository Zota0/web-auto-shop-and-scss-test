<!DOCTYPE html>
<html>
    <head>
        <?php
            include 'ConnectSQL.php';
            
            $EncryptPath = 'https://github.com/Zota0/web-auto-shop-and-scss-test/blob/main/Encrypt.py';
            $Encrypt = shell_exec('python $EncryptPath');
            echo "PHP -";

            $connect = connectToDatabase($dbServerName, $dbUsername, $dbPassword, $dbName, $dbPort);
        ?>
    </head>

    <body> 
        <br>
        <?php
            echo $encrypt;
            $Lang = 'pl';
            $FirstName = $_POST['firstname'];
            $LastName = $_POST['lastname'];
            $Password = $_POST['password'];
            $DateOfBirth = $_POST['birthdate'];

            if (isset($_POST['create'])) {
                // Check if any required field is empty
                if (empty($FirstName) || empty($LastName) || empty($Password) || empty($DateOfBirth)) {
                    echo " error: missing required fields";
                    if (empty($FirstName)) {
                        echo "<br>   error: FirstName";
                    }
                    if (empty($LastName)) {
                        echo "<br>   error: LastName";
                    }
                    if (empty($Password)) {
                        echo "<br>   error: Password";
                    }
                    if (empty($DateOfBirth)) {
                        echo "<br>   error: DateOfBirth";
                    }
                } else {
                    $BirthDate = date("Y-m-d", strtotime($DateOfBirth));

                    $userData = [
                        'FirstName' => $_POST["firstname"],
                        'LastName' => $_POST["lastname"],
                        'Pass' => $_POST["password"],
                        'enc_key' => 'x1',
                        'language' => $Lang,
                        'DateOfBirth' => $BirthDate,
                        'DateOfCreation' => date("Y-m-d H:i:s"),
                        'OtherData' => null
                    ];
                    
                    $result = insertUserData($connect, $userData);
                    if (isset($result)) {
                        echo $result;
                        
                    } else {
                        echo "error: no result";
                    }
                }
            } else {
                echo "not submitted";
            }
        ?>
        <form method='post' class='m-px-100' action=''>
            <label for="firstname">Imię:</label>
            <input type="text" placeholder="Wpisz swoje imię" name="firstname">
            <br>
            <br>
            <label for="lastname">Nazwisko:</label>
            <input type="text" placeholder="Wpisz swoje nazwisko" name="lastname">
            <br>
            <br>
            <label for="password">Hasło:</label>
            <input type="password" placeholder="Wpisz swoje hasło" name="password" >
            <br>
            <br>
            <label for="birthdate">Data urodzenia:</label>
            <input type="datetime-local" placeholder="Wpisz swoją datę urodzenia" name="birthdate">
            <br>
            <br>
            <input class='ta-center ml-px-10 w-px-200' type='submit' value='Create' name='create'>

        </form>
        <br>

        
        <?php 
            closeConnection($connect);
            unset($userData, $Lang, $FirstName, $LastName, $Password, $DateOfBirth);
        ?>
    </body>

</html>