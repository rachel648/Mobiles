<?php
// Define the multidimensional array for continents, countries, and counties
$world = [
    "Africa" => [
        "Kenya" => [
            "Nairobi",
            "Mombasa",
            "Kisumu",
            "Nakuru",
            "Eldoret"
        ],
        "Nigeria" => [
            "Lagos",
            "Kano",
            "Ibadan",
            "Kaduna",
            "Port Harcourt"
        ],
        "South Africa" => [
            "Gauteng",
            "KwaZulu-Natal",
            "Eastern Cape",
            "Western Cape",
            "Mpumalanga"
        ]
    ],
    "Europe" => [
        "France" => ["Paris", "Lyon", "Marseille", "Nice", "Toulouse"],
        "Germany" => ["Berlin", "Munich", "Frankfurt", "Hamburg", "Stuttgart"]
    ],
    "Asia" => [
        "India" => ["Delhi", "Mumbai", "Bangalore", "Chennai", "Kolkata"],
        "China" => ["Beijing", "Shanghai", "Shenzhen", "Guangzhou", "Chengdu"]
    ]
];

// Display counties in Kenya
echo "Counties in Kenya (Africa):<br>";
foreach ($world["Africa"]["Kenya"] as $county) {
    echo "- $county<br>";
}
?>