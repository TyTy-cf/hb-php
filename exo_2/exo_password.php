<?php

/**
 * Check if the password is valid
 *
 * @param string $password the password
 * @return bool true if the password is valid or false
 */
function checkPassword(string $password): bool {
    if (strlen($password) > 9 && strpos($password, '@') !== false) {
        return true;
    }
    return false;
}

if (checkPassword('poeeeerer@uet')) {
    echo 'OK';
} else {
    echo 'KO';
}
