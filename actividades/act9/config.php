<?php
    define("SITE_NAME", "Pastelitos de colores");
    echo "Config file loaded!";  // Add this line temporarily for debugging

    define("PRODUCTS", [
        [
            "name" => "Pastelito de fresa",
            "description" => "Pastelito de fresa con crema",
            "price" => 10,
            "image_url" => "actividad9/images/fresa.jpeg"
        ],
        [
            "name" => "Pastelito de chocolate",
            "description" => "Pastelito de chocolate con crema",
            "price" => 15,
            "image_url" => "actividad9/images/chocolate.jpeg"
        ],
        [
            "name" => "Pastelito de vainilla",
            "description" => "Pastelito de vainilla con crema",
            "price" => 11,
            "image_url" => "actividad9/images/vanila.jpeg"
        ]
    ]);

    $cart = [];
?>
