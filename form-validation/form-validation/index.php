<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>PHP Form validation</title>
    <style>
        .container{
            width: 600px;
        }
    </style>
</head>
<body class="bg-gray-200">

    <div class="bg-white rounded container mx-auto my-24 p-4">
        <?php if (count($_SESSION['errors'])): ?>
        <div class="bg-red-200 p-2 border border-red-500 mb-4 rounded">
            <ul>
                <?php foreach ($_SESSION['errors'] as $error): ?>
                <li><?= $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>



        <form action="/validator.php" method="POST">
            <div class="grid grid-cols-4 mb-4 items-center">
                <label for="name" class="col-span-1">Name</label>
                <input type="text" class="w-full border col-span-3 p-1" name="name" id="name" value="<?php echo $_SESSION['values']['name'] ?>">
            </div>
            <div class="grid grid-cols-4 mb-4 items-center">
                <label for="username" class="col-span-1">Username</label>
                <input type="text" class="w-full border col-span-3 p-1" name="username" id="username" value="<?php echo $_SESSION['values']['username'] ?>">
            </div>
            <div class="grid grid-cols-4 mb-4 items-center">
                <label for="password" class="col-span-1">Password</label>
                <input type="text" class="w-full border col-span-3 p-1" name="password" id="password" value="<?php echo $_SESSION['values']['password'] ?>">
            </div>
            <div class="grid grid-cols-4 mb-4 items-center">
                <label for="re_password" class="col-span-1">Re-type Password</label>
                <input type="text" class="w-full border col-span-3 p-1" name="re_password" id="re_password" value="<?php echo $_SESSION['values']['re_password'] ?>">
            </div>
            <div class="grid grid-cols-4 mb-4 items-center">
                <label for="gender" class="col-span-1">Gender</label>
                <label>
                    <input type="radio" name="gender" value="male">
                    Male
                </label>
                <label>
                    <input type="radio" name="gender" value="female">
                    Female
                </label>
                <label>
                    <input type="radio" name="gender" value="other">
                    Other
                </label>
            </div>
            <div class="grid grid-cols-4 mb-4  items-center">
                <label for="skills" class="col-span-1">Programming skills</label>
                <label>
                    <input type="checkbox" name="skills" value="java">
                    java
                </label>
                <label>
                    <input type="checkbox" name="skills" value="node">
                    Node
                </label>
                <label>
                    <input type="checkbox" name="skills" value="python">
                    Python
                </label>
            </div>
            <div class="grid grid-cols-4 mb-4 items-center">
                <label for="contact_no" class="col-span-1">Contact no</label>
                <input type="text" class="w-full border col-span-3 p-1" name="contact_no" id="contact_no" value="<?php echo $_SESSION['values']['contact_no'] ?>">
            </div>
            <div class="grid grid-cols-4 mb-4 items-center">
                <label for="email" class="col-span-1">Email</label>
                <input type="text" class="w-full border col-span-3 p-1" name="email" id="email" value="<?php echo $_SESSION['values']['email'] ?>">
            </div>
            <div class="grid grid-cols-4 mb-4 items-center">
                <label for="college" class="col-span-1">College</label>
                <select name="college" id="college" class="border p-1 w-full col-span-3 rounded">
                    <option value="">Select college</option>
                    <option value="NSU">North South University</option>
                    <option value="IUB">Independent university bangladesh</option>
                </select>
            </div>
            <div class="grid grid-cols-4 mb-4 items-center">
                <label for="college" class="col-span-1"></label>
                <button class="rounded bg-indigo-500 text-white py-1 uppercase text-sm">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>