<?php
    $person = new stdClass();
    $json = file_get_contents('persons.json');
    $persons_array = json_decode($json)->persons;
    
    $person->name = "Lex";
    $person->age = 30;
    $person->city = "Chennai";

    if($_POST['submit'])
    {
        $person->name = $_POST['name'];
        $person->age = $_POST['age'];
        $person->city = $_POST['city'];

        $values = new stdClass();
        array_push($persons_array,$person);

        $values->persons = $persons_array;
        file_put_contents('persons.json', json_encode($values));
        echo "Saved";

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON writter form</title>
</head>
<body>

    <h1><a href="persons.php">Registered persons</a></h1>

    <form action="index.php" method="POST">
        <div>
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="name">Your age</label>
            <input type="number" name="age" id="age" required>
        </div>
        <div>
            <label for="name">Your city</label>
            <input type="number" name="city" id="city" required>
        </div>
        <div>
            <input type="submit" value="Submit" name="submit">
        </div>
    </form>

</body>
</html>