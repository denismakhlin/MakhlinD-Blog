<?php
//Below is my variable for the title section of my post
//It takes info of my title and uts it into the variable
//The filter input code prevents my title from getting hacked
//The FILTER_SANITIZE_STRING code is to make sure no illegal characters are used
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
//Below is my variable for the post section of my post
//It takes info of my post and uts it into the variable
//The filter input code prevents my title from getting hacked
//The FILTER_SANITIZE_STRING code is to make sure no illegal characters are used
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

    echo "<p>Post: $title</p>";
    echo "<p>Post: $post</p>";