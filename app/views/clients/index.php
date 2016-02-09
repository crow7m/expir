<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-table.css">
    <title>Document</title>
    <script src="js/jquery-1.11.2.js"></script>
    <script src="js/bootstrap-table.min.js"></script>
    <script src="js/bootstrap-table.js"></script>


       <head>
           <body>
    <table class = "table table-condensed table-striped table-hover">
        <tr>
            <th>Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date</th>
                </tr>

        <?php
           foreach($clients as $client) {
            ?>

            <tr>

                <td><?=$client['name']?></td>
                <td><?=$client['lastName']?></td>
                <td><?=$client['email']?></td>
                <td><?=$client['date']?></td>

                <td>


                </td>

            </tr>

        <?php
        }
        ?>


    </table>



    </head>
</body>

</html>