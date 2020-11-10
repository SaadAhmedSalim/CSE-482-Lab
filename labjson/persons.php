<?php
$json = file_get_contents('persons.json');
$jsonData = json_decode($json);
$persons = $jsonData->persons;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persons list</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
        </tr>
        <?php foreach ($persons as $person): ?>
        <tr>
            <td><?php echo $person->name; ?></td>
            <td><?php echo $person->age; ?></td>
            <td><?php echo $person->city; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>