<?php
$popularBrowsers = ["Opera", "OPR/", "Edg", "Chrome", "Safari", "Firefox", "MSIE", "Trident"];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$userBrowser = '';
$backgroundColor = 'white';
$logoUrl = '#';

foreach ($popularBrowsers as $browser) {
    if (strpos($userAgent, $browser) !== false) {
        $userBrowser = $browser;
        echo ($userBrowser);
        if ($userBrowser == 'Firefox') {
            $backgroundColor = 'red';
            $logoUrl = 'https://www.mozilla.org/media/img/structured-data/logo-firefox-browser.fbc7ffbb50fd.png';
        } else if ($userBrowser == 'Chrome') {
            $backgroundColor = 'black';
            $logoUrl = 'https://logo-download.com/wp-content/data/images/png/Google-Chrome-logo.png';
        } else if ($userBrowser == 'Edg') {
            $backgroundColor = 'black';
            $logoUrl = 'https://cdn.mos.cms.futurecdn.net/moUGpr2w7QzQzrgX7QNZFY.jpg';
        } else {
            $backgroundColor = 'white';
            $logoUrl = '#';
        }
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">

</head>

<body style="background-color:<?php echo ($backgroundColor); ?> ;">
    <div style="width: 20%; margin: 5rem auto;">
        <img style="height: 200px; width: auto;" src="<?php echo ($logoUrl); ?>" alt="browser logo">
    </div>
</body>

</html>