<?php
$files = [
    'c:/wamp/www/Project/PU/Hair Salon/homepage.php' => [
        'separator' => '<div class="header" ></div>',
        'suffix'    => "\n</ul>\n</li>\n</ul>\n</nav>\n\n<div class=\"header\" ></div>"
    ],
    'c:/wamp/www/Project/PU/Hair Salon/aboutus.php' => [
        'separator' => '<div class="header" ></div>',
        'suffix'    => "\n</ul>\n</li>\n</ul>\n</nav>\n\n<div class=\"header\" ></div>"
    ],
    'c:/wamp/www/Project/PU/Hair Salon/Contact_us.php' => [
        'separator' => '<div id="box">',
        'suffix'    => "\n</ul>\n</nav>\n</div>\n\n<div id=\"box\">"
    ]
];

foreach ($files as $f => $config) {
    if (!file_exists($f)) continue;
    $c = file_get_contents($f);
    
    $search = '<li><a href="cust_register.php">Customer Register</a></li>';
    $pos1 = strpos($c, $search);
    if ($pos1 === false) continue;
    
    $pos2 = strpos($c, $config['separator'], $pos1);
    if ($pos2 === false) continue;
    
    $start_part = substr($c, 0, $pos1 + strlen($search));
    $end_part = substr($c, $pos2 + strlen($config['separator']));
    
    $injection = "\n<?php if(isset(\$_SESSION['a_id'])) { echo '<li><a href=\"adminpanel.php\">Admin Dashboard</a></li>'; } ?>";
    
    $new_content = $start_part . $injection . $config['suffix'] . $end_part;
    file_put_contents($f, $new_content);
    echo "Fixed: $f\n";
}
?>
