<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <?php
        $title = 'Elenco di parolacce di uso frequente';
        $text = 'Di seguito si riporta un elenco di lemmi di uso frequente nella lingua italiana, generalmente considerati parolacce. Tra parentesi sono riportati i significati letterali e quelli figurati. Alcuni dei termini riportati sono stati nobilitati da letterati e poeti, come ad esempio Dante Alighieri, nella Divina Commedia, Giuseppe Gioachino Belli, nei celebri sonetti in romanesco, l\'Aretino, nei Sonetti lussuriosi, e molti altri ancora. Bisogna considerare inoltre che molti termini del registro basso frequentemente utilizzati sono in realtà appartenenti all\'italiano regionale o al dialetto del luogo e non propriamente alla lingua italiana. <br>
        <br>
        Bagascia, baldracca, battona, mignotta, puttana, troia, zoccola (prostituta)[22][23]<br>
        Bastardo (let. figlio non riconosciuto dai genitori, fig. persona odiosa)<br>
        Bocchino, pompino, pompa, soffocotto (fellatio)<br>
        Cacare, cagare (defecare)<br>
        Cazzo (pene)[24]<br>
        Coglione (let. testicolo, fig. persona con scarso intelletto)[25]<br>
        Culo (let. fondoschiena, fig. fortuna es. "Che culo!" con significato di "Che fortuna!")<br>
        Ditalino (masturbazione femminile)<br>
        Fica, figa[26] (in Italia settentrionale, a causa del processo di lenizione per cui le occlusive sorde del tardolatino sono diventate stabilmente sonore, questo termine è più diffuso nella variante con la g [/g/] al posto della c [/k/], similmente a quanto accade per la coppia "cacare/cagare"), fregna, passera,[27] topa (vagina)<br>
        Finocchio, frocio, ricchione (maschio omosessuale)<br>
        Fottere (let. avere un rapporto sessuale, fig. ingannare; usato in forma riflessiva con significato di non curarsi di qualcosa o di qualcuno es. "fottitene"[28])<br>
        Inculata (let. sesso anale, fig. inganno)<br>
        Merda (let. feci, fig. persona o oggetto di pessimo valore; imprecazione per una situazione potenzialmente sfavorevole)[22][29]<br>
        Minchia (let. pene, fig. interiezione di stupore; persona con scarso intelletto o abilità es. "minchione", "amminchiato" ecc.)<br>
        Palla (let. testicolo, fig. menzogna, sciocchezza, seccatura o noia, es. "Che palle!" ha il significato di "Che noia!"[30])<br>
        Pippa[31], pugnetta, sega[32], raspone[33] (masturbazione maschile)<br>
        Piscia, pisciare (urina, urinare)<br>
        Porco/porca, (let. maiale, fig. persona con atteggiamenti sessuali ritenuti osceni. Termine usato nelle bestemmie in associazione con elementi sacri)<br>
        Sborra, sborrare (sperma, eiaculare)<br>
        Scopare (avere un rapporto sessuale)<br>
        Stronzo (let. massa fecale solida, fig. persona stupida, incosciente o cattiva)<br>
        Trombare (let. avere un rapporto sessuale[34])<br>
        Vaffanculo (let. esortazione ad avere un rapporto anale, fig. esortazione ad andarsene e a non disturbare[35])<br>
        Generalmente sono considerate parole volgari anche i derivati delle parolacce e le parole composte che le contengono. Ad esempio così com\'è considerato volgare il termine cazzo sono considerati volgari anche incazzarsi, incazzato, scazzo, cazzeggio[36], ecc.<br>
        <br>
        Nei vocabolari le parolacce sono talvolta riportate aggiungendo accanto l\'abbreviazione volg. (che vuol dire appunto "volgare"), l\'abbreviazione triv. (che vuol dire "triviale") o l\'abbreviazione pop. (che vuol dire popolare).';
        $arrCensuredWord = explode(",", $_GET['censuredWord']);
        foreach($arrCensuredWord as $word) {

            $text = str_ireplace($word, '***', $text);

        }
        

        $strLenght = strlen($text);

    ?>
    <form method="GET" action="">
        <label for="censure">Parola da censurare</label>
        <input type="text" id="censure" name="censuredWord">
        <button>Censura</button>
    </form>
    <h1><?= $title; ?></h1>
    <p><?= $text ?></p>
    <div>
        <h2>Lunghezza paragrafo</h2>
        <span><?= $strLenght ?> caratteri</span>
    </div>
</body>
</html>