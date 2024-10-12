<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">

    <style>
        table {
            margin: 20px;
            padding: 30px;
        }

        button {
            font-size: 13px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        #de {
            background-color: red;
        }

        #ed {
            background-color: green;
        }
    </style>
</head>

<body>
    <table class="table table-striped-columns">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php
        include "./connect.php";

        $sql = "SELECT * FROM `db`";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>" . $row["user_id"] . "</td>
                    <td>" . $row["user_name"] . "</td>
                    <td>" . $row["user_email"] . "</td>
                    <td>" . $row["password"] . "  </td> <td>  <button id=de>Delet</button> | <button id=ed>Edit</button>"   . "</td>
                  </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No information</td></tr>";
        }
        ?>

    </table>


</body>
<script src="./js/bootstrap.js"></script>

</html>