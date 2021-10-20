<?php

require_once __DIR__ . '/../config/twig.php';

$contactEmail = 'nouvel email';

echo $twig->render('details.html.twig', ['email' => $contactEmail]);