<?php ?>
<!doctype html>

<html>

<head>


</head>

<body>
    <form method="post" action="process.php" enctype='multipart/form-data'>
        <label>Name
            <input type="text" name="name" required><span class="error">*</span><br>
        </label>
        <br>
        <label>E-mail
            <input type="email" name="email" required><span class="error">*</span><br>
        </label>
        <br>
        <label>Project Type
            <br>
            <input type="radio" name="project" value="Short Term">Short Term
            <br>
            <input type="radio" name="project" value="Long Term">Long Term
            <br>
        </label>
        <br>
        <label>Description
            <br>
            <input type="textarea" name="description">
        </label>
        <br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>
