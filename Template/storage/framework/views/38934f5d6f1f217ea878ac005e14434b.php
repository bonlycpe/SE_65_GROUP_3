<?php

    session_start();
    if(session_destroy()){
        header("Location: login");
    }
?><?php /**PATH C:\Users\user\Desktop\campaing\resources\views/logout.blade.php ENDPATH**/ ?>