<?php ?>

<html>

<head>
    <meta charset="utf-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table,
        #border {
            border: 1px solid #000;
        }

        th {
            background: #000;
            color: #fff;
            padding: 10px;
        }

        td {
            padding: 20px;
        }

    </style>
</head>

<body>
<!--    <table>-->
<!--
        <tr>
            <th>name</th>
            <th>email</th>
            <th>project</th>
            <th>description</th>
        </tr>
-->

        <?php
    
        $cnt = mysqli_connect('localhost', 'root','', 'inquiries');
        
        $qry = "select * from inquiries";
        
        $result = mysqli_query($cnt, $qry);
        
//        print_r($result);
        
        while($row = $result->fetch_assoc()){
//            print_r($row);
//            echo '<br><br>';
            echo '
            <div id="border">
                <p>Name: '.$row['name'].'</p>
                <p>Email: '.$row['email'].'</p>
                <p>Project: '.$row['project'].'</p>
                <p>Description: '.$row['description'].'</p>
            </div>
            ';
        };
        
        mysqli_close($cnt);
        
        ?>

<!--    </table>-->
</body>

</html>
