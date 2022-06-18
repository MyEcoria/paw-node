<?php

// FIRST USE
// Please copy this file as config.php

// To edit a config uncomment the line, otherwise
// defaults will be used for each variable.

// ----------- General Variables -----------

// To switch between monitoring Nano / Banano nodes,
// set $currency, $themeChoice, and $blockExplorer to
// corresponding Nano / Banano values.

// Currency 'nano' or 'banano' or 'nano-beta' or 'paw'
$currency = 'paw';

// Theme of your Node Monitor
// Nano Themes:   'dark' or 'light'
// Banano Themes: 'banano' or 'banano-dark'
// PAW Themes: 'paw'
$themeChoice = 'paw';

// Choice of block explorer
// Nano Explorers:      'ninja', 'nanocrawler'
// Nano Beta Explorers: 'nanocrawler-beta'
// Banano Explorers:    'bananocreeper', 'bananolooker', 'yellowspyglass'
// PAW Explorers:       'tracker'
$blockExplorer = 'tracker';

// Choice of widget
// Options: 'qr', 'natricon', 'monkey', 'paw'
$widgetType = 'paw';

// Autorefresh interval for the status webpage in seconds
$autoRefreshInSeconds = 5;

// Name of your node (default: your hostname)
$nanoNodeName = 'Lion Familly';

// Location of your node
// If left empty, we try to get it from My Nano Ninja.
$nodeLocation = 'The world';

// A welcome message shown on top
$welcomeMsg = 'Change this';

// ----------- Cache Engine -----------

// The cache engine allows for caching of RPC calls to reduce load on your Nano node.

// Duration in seconds between cache invalidation, i.e. RPC calls to the node
$cacheTimeToLive = 30;

// Possible options for "engine" are:
//    - NULL (no caching)
//    - "files" (caches to file; kind of slow)
//    - "apc" (APC cache; requires extension; fast)
//      - Options: 'ttl' => cache time in seconds
//    - "apcu" (APCu cache; requires extension; fast)
//      - Options: 'ttl' => cache time in seconds
//    - "redis" (Redis cache; requires extension; fast)
//      - Options:
//        - 'host' => optional; address of the Redis host (defaults to localhost)
//        - 'port' => optional; port for the Redis host (defaults to 6379)
//        - 'redis' => optional; an instantiated Redis instance (replaces use of host/port)
//        - 'ttl' => optional; cache time in seconds

$cache = [
  "engine" => "files",
  "options" => ["ttl" => $cacheTimeToLive]
];

// ----------- Node Variables -----------

// IP address for RPC (default: [::1])
$nanoNodeRPCIP   = '127.0.0.1';

// Port for RPC (default: 7076)
// Nano nodes typically use port 7076.
// Nano Beta nodes typically use port 55000.
// Banano nodes typically use port 7072.
$nanoNodeRPCPort = '7040';

// Account of this node
$nanoNodeAccount = 'paw_3peo8pjgcd83eh6n933grzwy9pbqeq5s7r4qi95ouwao7tncyyy1m1orme6j';

// Donation account for maintaining this node
$nanoDonationAccount = 'paw_3peo8pjgcd83eh6n933grzwy9pbqeq5s7r4qi95ouwao7tncyyy1m1orme6j';

// Number of decimal places to display Nano balances, i.e.
$nanoNumDecimalPlaces = 2;

// ----------- Analytics -----------

// Google Analytics Tracking ID, leave blank to disable Google Analytics.
// $googleAnalyticsId = '';

// ----------- Social -----------

// Add your social accounts
// Tutorial: https://github.com/NanoTools/nanoNodeMonitor/wiki/Social-Accounts
$socials['twitter'] = 'https://twitter.com/dewarucie4';
$socials['instagram'] = 'https://instagram.com/myecoria';
