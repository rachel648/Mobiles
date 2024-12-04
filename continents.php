<?php
// Define the multidimensional array
$world = [
    "Africa" => [
        "Kenya" => [
            "Nairobi", "Mombasa", "Kisumu", "Nakuru", "Machakos"
        ],
        "Nigeria" => [
            "Lagos", "Abuja", "Kano", "Ibadan", "Port Harcourt"
        ],
        "South Africa" => [
            "Gauteng", "Western Cape", "KwaZulu-Natal", "Eastern Cape", "Mpumalanga"
        ]
    ],
    "Asia" => [
        "India" => [
            "Maharashtra", "Delhi", "Karnataka", "Tamil Nadu", "West Bengal"
        ],
        "China" => [
            "Beijing", "Shanghai", "Guangdong", "Zhejiang", "Shandong"
        ]
    ],
    "Europe" => [
        "France" => [
            "Île-de-France", "Provence-Alpes-Côte d'Azur", "Nouvelle-Aquitaine", "Auvergne-Rhône-Alpes", "Brittany"
        ],
        "Germany" => [
            "Bavaria", "Baden-Württemberg", "North Rhine-Westphalia", "Hesse", "Saxony"
        ]
    ]
];

// Loop through continents and countries to display counties
foreach ($world as $continent => $countries) {
    echo "<div class='continent'>$continent</div>";
    foreach ($countries as $country => $counties) {
        echo "<div class='country'>$country</div>";
        foreach ($counties as $county) {
            echo "<div class='county'>$county</div>";
        }
    }
}
?>
