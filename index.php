<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DOG.mp4</title>
    <link rel="stylesheet" href="Kaolo.css">
</head>

<body>
    <div id="window">
        <h1>[Insert YT Ripoff name here]</h1>
        <video id="movie" width="854" height="480" controls>
            <source src="movies/DOG.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <h2 id="videoname">DOG</h2>
        <h3 id="spacing">________________________</h3>
        <script type="text/javascript">
            function validateForm(e){
                var name = document.forms["usercomment"]._name.value;
                var mail = document.forms["usercomment"]._mail.value;
                var c_content = document.forms["usercomment"]._comment.value;
                if ((name == "" || name == null) || (c_content == "" || c_content == null) || (mail == "" || mail == null)){
                    alert("fill all fields before submitting!");
                    return false;
                }

            }
        </script>
        <form method="POST" name="usercomment" onsubmit="return validateForm()" action="./DatabaseConnections/insert_DOG.php">
            <div>
            <input type="text" name="_name" placeholder="naam">
            <input type="text" name="_mail" placeholder="email@adress.com" id="mailstyle">
            </div>
            <div>
            <input type="text" class="commentbar" name="_comment" placeholder="comment">
            </div>
            <div>
            <input type="submit" value="submit" id="submit">
            </div>
        </form>
        <h3 id="spacing">________________________</h3>
        <h2 id="comments">Comments</h2>
        <div id="commentsection">
            <?php
            include  "./DatabaseConnections/connect_DOG.php";
            ?>
        </div>
    </div>
</body>

</html> 