<?php

require_once(__DIR__ . '/vendor/autoload.php');

$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'c82hma2ad3ia1259343g');
$client = new Finnhub\Api\DefaultApi(
    new GuzzleHttp\Client(),
    $config

);

$a = 'TWTR';
$b = 'AAPL';
$c = 'FDX';
$d = 'SM';
$search = $_GET['search'] ?? '';

$myCompanies = [$a, $b, $c, $d];


function compareResults($client, $company): float
{
    $currentPrice = $client->quote($company)->getC();
    $pastClosure = $client->quote($company)->getPc();

    $result = ($currentPrice - $pastClosure) / $pastClosure * 100;
    return number_format($result, 2);

}


?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <h1>STOCKS API</h1>
</header>
<div class="container">
    <?php foreach ($myCompanies

    as $company): ?>
    <?php
    $result = compareResults($client, $company) ?>
    <?php if ($result < 0): ?>
    <div class="box box-red">
        <?php elseif ($result > 0): ?>
        <div class="box box-green">
            <?php else: ?>
            <div class="box box-neutral">
                <?php endif; ?>
                <h3><?php echo $client->companyProfile2($company)->getName(); ?></h3>
                <h3 class="current-price"><?php echo $client->quote($company)->getC(); ?></h3>
                <p><?php echo "PC: " . $client->quote($company)->getPc() ?></p>
                <p><?php echo $result . "%" ?></p>

            </div>

            <?php endforeach; ?>

        </div>
        <div class="search-container">
            <form method="get" action="/">
                <input name="search" type="text" placeholder="Enter symbol...">
                <button type="submit">Search</button>
            </form>
            <?php
            $result = compareResults($client, $search) ?>
            <?php if ($result < 0): ?>
            <div class="box box-red">
                <?php elseif ($result > 0): ?>
                <div class="box box-green">
                    <?php else: ?>
                    <div class="box box-neutral">
                        <?php endif; ?>
                        <h3><?php echo $client->companyProfile2($search)->getName(); ?></h3>
                        <h3 class="current-price"><?php echo $client->quote($search)->getC(); ?></h3>
                        <p><?php echo "PC: " . $client->quote($search)->getPc() ?></p>
                        <p><?php echo $result . "%" ?></p>

                    </div>
                </div>

            </div>
</html>

