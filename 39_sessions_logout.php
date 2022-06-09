<?php

//destroying  the session
session_start();
session_unset();
session_destroy();

echo "thankyou you have been loged out ";