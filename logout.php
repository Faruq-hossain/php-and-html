<?php
    #akhane login korar por session start hoi logout korar por session unset kore dibe logout hoa jabe eader("Location: login.php"); ai location connect kore dici
    # 8 no button er kaj korbo student management e tr jonno admin dashboard e right e kaj korbo
    session_start();
    session_unset();
    header("Location: log.php");
?>