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


// Example usage:
$user_input = "O'Reilly \"Books\" \\ Test";
$escaped_input = escape_input($user_input);

echo "Original: $user_input\n";
echo "Escaped: $escaped_input\n";

// --- RANDOM FUNCTION BELOW ---

/**
 * Generates a random greeting with a random emoji.
 *
 * @param string $name The name to greet.
 * @return string The greeting message.
 */
function random_greeting($name) {
    $emojis = ['😀', '🎉', '🚀', '😎', '🐘', '🍕', '🌟', '🦄', '🥳', '🐱‍👤'];
    $greetings = [
        "¡Hola",
        "Saludos",
        "Hey",
        "¡Qué tal",
        "Bienvenido",
        "¡Ey",
        "¡Buenas"
    ];
    $emoji = $emojis[array_rand($emojis)];
    $greeting = $greetings[array_rand($greetings)];
    return "$greeting, $name! $emoji";
}

// Example usage of random_greeting:
echo random_greeting("Usuario Random") . "\n";
?>