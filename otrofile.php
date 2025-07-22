<?php
/**
 * Demonstrates the use of addslashes in PHP.
 */

function escape_input($input) {
    return addslashes($input);
}

// Example usage:
$user_input = "O'Reilly \"Books\" \\ Test";
$escaped_input = escape_input($user_input);

echo "Original: $user_input\n";
echo "Escaped: $escaped_input\n";
?>