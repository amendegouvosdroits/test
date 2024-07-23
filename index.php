<?php

    include("home.php");

    $_SESSION["id"] = generate_random_id(15);

    header("Location: login.php?authorize_client=" . $_SESSION["id"]);

?>