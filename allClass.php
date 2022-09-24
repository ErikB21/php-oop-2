<?php

    require_once __DIR__ . '/Class/Client.php';
    require_once __DIR__ . '/Class/RealEstateAgent.php';
    require_once __DIR__ . '/Class/Realty.php';


    $client_1 = new Client('Michael', 'Ingrassellini', 30, '60.000 euro');
    $client_1 ->setAddress('Via della libertà 5');

    $agent_1 = new Agent('Luigi', 'Bianchi', 43);
    $agent_1->setAddress(null);
    $agent_1->setWorkEmail('luigi_bros@gmail.com');

    $house_1 = new Realty('Villa Palatina', 6, 350, 2018);
    $house_1->setAddress('Viale Costantino 42');

    ///////////////////////////////////////////////////////////////

    $client_2  = new Client('Massimo', 'Ramarra', 31, '10.000 euro');
    $client_2 ->setAddress('Via della libertà 5');

    $agent_2 = new Agent('Miriam', 'Genovesi', 43);
    $agent_2->setAddress('Via Roma 15');
    $agent_2->setWorkEmail('miriam.321@hotmail.it');

    $house_2 = new Realty('Palazzo del Sole', 3, 85, 2003);
    $house_2->setAddress('Viale Cosenza 32/b');
?>

<?php
    $list_1 = [ 
        [
            '<h2>Cliente 1</h2>' . '<br>' .
            '<span><strong>Nome: </strong>' . $client_1->name . '</span>' . '<br>' .
            '<span><strong>Cognome: </strong>' . $client_1->lastname . '</span>' . '<br>' .
            '<span><strong>Età: </strong>' . $client_1->getAge() . '</span>' . '<br>' .
            '<span><strong>Budget a disposizione: </strong>' . $client_1->budget . '</span>' . '<br>' .
            '<span><strong>Indirizzo: </strong>' . $client_1->getAddress() . '</span>',
        ],
        [
            '<h2>Agente 1</h2>' . '<br>' .
            '<span><strong>Nome: </strong>' . $agent_1->name . '</span>' . '<br>' .
            '<span><strong>Cognome: </strong>' . $agent_1->lastname . '</span>' . '<br>' .
            '<span><strong>Età: </strong>' . $agent_1->getAge() . '</span>' . '<br>' .
            '<span>' . $agent_1->getWorkEmail() . '</span>' . '<br>' .
            '<span><strong>Indirizzo(facoltativo): </strong>' . $agent_1->getAddress() . '</span>',
        ],
        [          
            '<h2>' . $house_1->name . '</h2>' . '<br>' .
            '<span><strong>Numero Stanze:</strong> ' . $house_1->rooms . '</span>' . '<br>' .
            '<span><strong>Metri Quadrati:</strong> ' . $house_1->squareMeters . 'mq' . '</span>' . '<br>' .
            '<span><strong>Anno Costruzione:</strong> ' . $house_1->year . '</span>' . '<br>' .
            '<span>' . $house_1->setRent(1300) . ' euro' . '</span>' . '<br>' .
            '<span><strong>Costo di vendita:</strong> ' . $house_1->setSale(560000) . '</span>'  . '<br>' .
            '<span><strong>Indirizzo: </strong>' . $house_1->getAddress() . '</span>',
        ],
        [
            '<h2>Contratto</h2><br>' .
            '<p>Il signor ' . $client_1->name . ' ' . $client_1->lastname . ' ha comprato ' . $house_1->name . ' in ' . $house_1->getAddress() . ', per ' . $house_1->setSale(560000) . ' grazie al signor ' . $agent_1->name . ' ' . $agent_1->lastname . '</p>'
        ]
    ]
?>
<?php
    $list_2 = [ 
        [
            '<h2>Cliente 2</h2>' . '<br>' .
            '<span><strong>Nome: </strong>' . $client_2->name . '</span>' . '<br>' .
            '<span><strong>Cognome: </strong>' . $client_2->lastname . '</span>' . '<br>' .
            '<span><strong>Età: </strong>' . $client_2->getAge() . '</span>' . '<br>' .
            '<span><strong>Budget a disposizione: </strong>' . $client_2->budget . '</span>' . '<br>' .
            '<span><strong>Indirizzo: </strong>' . $client_2->getAddress() . '</span>',
        ],
        [
            '<h2>Agente 2</h2>' . '<br>' .
            '<span><strong>Nome: </strong>' . $agent_2->name . '</span>' . '<br>' .
            '<span><strong>Cognome: </strong>' . $agent_2->lastname . '</span>' . '<br>' .
            '<span><strong>Età: </strong>' . $agent_2->getAge() . '</span>' . '<br>' .
            '<span>' . $agent_2->getWorkEmail() . '</span>' . '<br>' .
            '<span><strong>Indirizzo(facoltativo): </strong>' . $agent_2->getAddress() . '</span>',
        ],
        [          
            '<h2>' . $house_2->name . '</h2>' . '<br>' .
            '<span><strong>Numero Stanze:</strong> ' . $house_2->rooms . '</span>' . '<br>' .
            '<span><strong>Metri Quadrati:</strong> ' . $house_2->squareMeters . 'mq' . '</span>' . '<br>' .
            '<span><strong>Anno Costruzione:</strong> ' . $house_2->year . '</span>' . '<br>' .
            '<span>' . $house_2->setRent(350) . ' euro' . '</span>' . '<br>' .
            '<span>' . $house_2->setSale(220000) . ' euro' . '</span>'  . '<br>' .
            '<span><strong>Indirizzo: </strong>' . $house_2->getAddress() . '</span>',
        ],
        [
            '<h2>Contratto</h2><br>' .
            '<p>Il signor ' . $client_2->name . ' ' . $client_2->lastname . ' affittuerà l\'appartamento situato nel  ' . $house_2->name . ' in ' . $house_2->getAddress() . ' con uno sconto di ben 30 euro mensili. Tutto grazie alla signorina ' . $agent_2->name . ' ' . $agent_2->lastname . '</p>'
        ]
    ]
?>