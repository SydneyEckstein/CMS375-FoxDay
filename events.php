<?php
$event1 = array("Paddleboard with Tommy Tar🛶",
                "April 10, 2026; 12 PM",
                "Dinky Dock, Lake Virginia",
                "Rent a free paddle board and explore the beautiful chain of lakes right in our backyard!");

$event2 = array("Welcome to the Cookout🌭",
                "April 10, 2026; 5 PM",
                "Mills Lawn",
                "Grab a friend and enjoy this Rollins tradition on Mills Lawn. You'll find comfort food of all kinds!");

$event3 = array("Build-A-Fox Station🔨",
                "April 10, 2026; 2:30 - 3:30 PM",
                "Bush Lawn",
                "Don't miss out on bringing a furry friend home! Take one while supplies last.");

$event4 = array("Pool Party☀️",
                "April 10, 2026; 3 - 6 PM",
                "Lakeside Pool",
                "Lounge by the pool with refreshing drinks and appetizers! Music will be provided by DJ Tommy.");

function display_event($event) {
    echo '<div class="card">';
    echo '<h2>' . $event[0] . '</h2>';
    echo '<p><strong>When:</strong> ' . $event[1] . '</p>';
    echo '<p><strong>Where:</strong> ' . $event[2] . '</p>';
    echo '<p>' . $event[3] . '</p>';
    echo '</div>';
}

display_event($event1);
display_event($event2);
display_event($event3);
display_event($event4);


echo '<a href="index.html">Go back to the Home page.</a>';

?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
</body>
</html>