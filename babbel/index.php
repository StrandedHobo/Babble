<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Babbel</title>
</head>
<body>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    <!--HEADER-->
    <nav>
        <div id="AlertDiv">
            <h1>Babbel</h1>
        </div>
    <div class="grid-container" style='grid-template-areas:
        ". . a . ."
        ;'>
        <!-- New user -->
        <div class="a">
            <h4>Gebruiker aanmaken</h4>
            <table id="gebruiker_toevoegen">
            <tr>
    <form method="POST" action="insertintodb.php">
        <td>
            <input type="text" name="name">
        </td>

        <td>
            <input type="text" name="email">
        </td>

        <td>
            <input type="text" name="password">
        </td>
        <td>
        <input type="submit">
        </td>
    </form>
</tr>
            </table>
           
        </div>
    </div>
</body>
</html>
    
</body>
</html>