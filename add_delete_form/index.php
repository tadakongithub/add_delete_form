<?php
    if($_POST['person-data']) {
        $name = $_POST['name'];
        $hobby = $_POST['hobby'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
    <table class="table table-bordered">
        <tr>
            <th>name</th>
            <th>hobby</th>
        </tr>

        <?php if(is_array($name)) :?>
            <?php for($i = 0; $i < count($name); $i++) :?>
                <tr>
                    <td><?php echo $name[$i]; ?></td>
                    <td><?php echo $hobby[$i]; ?></td>
                </tr>
            <?php endfor ;?>
        <?php endif ;?>
    </table>
    </div>


    <div class="bottom">
    <form class="my-form" action="" method="post">
        <div class="field-container">
            <h2>Hit the "add person" button below to add fields</h2>
        </div>
        <button type="button" class="add-person btn btn-primary">add person</button>
        <input class="btn btn-success" type="submit" name="person-data" value="submit">
    </form>
    </div>
    
    <script src="./index.js"></script>
</body>
</html>