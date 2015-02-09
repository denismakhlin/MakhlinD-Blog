<!--Below is the code that links to my config.php file-->
<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>Create Blog Post</h1>
<!--Below inside my form tag the method I am using is for it to "post" the
information below-->
<!--I am also letting my post file reach my create-post.php file by linking it-->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
<!--Below is the code that I provide the user with a textarea to write their
title-->
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title"/>
    </div>
<!--Below is the code that I provide the user with a textarea to write their
post-->
    <div>
        <label for="post">Post: </label>
        <textarea name="post"></textarea>     
    </div>
    
    <div>
    <!--Below is the code that creates a button that submits my post 
    to my database-->
        <button type="submit">Submit</button>
    </div>
</form>
