<?php
$order = [
    "order_id" => "ORD202405111230",
    "order_date" => "2025-05-11 12:30:00",
    "user" => [
        "user_id" => 1093,
        "name" => "Ariana Rahman",
        "email" => "ariana.rahman@example.com",
        "phone" => "+8801787654321",
        "address" => [
            "street" => "House 12, Road 7",
            "city" => "Dhaka",
            "postal_code" => "1207",
            "country" => "Bangladesh"
        ],
        "account_created" => "2022-03-15"
    ],
    "products" => [
        [
            "product_id" => 101,
            "name" => "Wireless Mouse",
            "category" => "Electronics",
            "quantity" => 2,
            "price" => 950.00,
            "discount" => 0.10 // 10%
        ],
        [
            "product_id" => 202,
            "name" => "Office Chair",
            "category" => "Furniture",
            "quantity" => 1,
            "price" => 7500.00,
            "discount" => 0.05 // 5%
        ],
        [
            "product_id" => 305,
            "name" => "Notebook Pack (5pcs)",
            "category" => "Stationery",
            "quantity" => 3,
            "price" => 250.00,
            "discount" => 0.00
        ]
    ],
    "shipping" => [
        "method" => "Home Delivery",
        "carrier" => "Pathao Express",
        "tracking_id" => "TRKBD20250511A9",
        "estimated_delivery" => "2025-05-13",
        "shipping_cost" => 80.00,
        "status" => "In Transit"
    ],
    "payment" => [
        "method" => "bKash",
        "status" => "Paid",
        "transaction_id" => "BK202505112134",
        "paid_at" => "2025-05-11 12:35:12",
        "amount" => 9325.00
    ],
    "billing_address" => [
        "street" => "House 12, Road 7",
        "city" => "Dhaka",
        "postal_code" => "1207",
        "country" => "Bangladesh"
    ],
    "discounts" => [
        "promo_code" => "MAY25",
        "promo_discount" => 300.00
    ],
    "notes" => "Please deliver after 5 PM. Call before arriving.",
    "invoice_generated" => true,
    "return_policy" => [
        "eligible" => true,
        "duration_days" => 7,
        "instructions" => "Contact support within 7 days of delivery."
    ]
];

// foreach($order as $o) {
//     foreach($o as $i => $v) {
//         echo $i;
//     }
// }

$a = $order ["user"] ["address"] ["country"];

echo $a . "\n";

$d = $order ["products"] [2] ["discount"];

echo $d . "\n";

echo $order ["invoice_generated"] . "\n";

echo $order ["notes"];