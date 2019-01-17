<?php

/* Unset every session variable and destroy the session */
session_start();
session_unset();
session_destroy();

header('Location: /contact/logout/success');