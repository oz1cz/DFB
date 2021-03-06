<?php

$chap['1mos']     = [3,11,32];
$chap['2mos']     = range(1,40);
$chap['4mos']     = range(1,36);
$chap['5mos']     = [8,18];
$chap['dom']      = range(1,21);
$chap['ruth']     = range(1,4);
$chap['sl']       = range(1,150);
$chap['es']       = range(1,66);
$chap['jer']      = [1, 2, 7];
$chap['ez']       = [34,36];
$chap['obad']     = [1];
$chap['nah']      = range(1,3);
$chap['sef']      = range(1,3);
$chap['hab']      = range(1,3);
$chap['hagg']     = [2];
$chap['zak']      = range(1,14);

$chap['matt']     = range(1,28);
$chap['mark']     = range(1,16);
$chap['luk']      = [1,11,16,24];
$chap['joh']      = [3,6,10,14,15,16,20];
$chap['apg']      = [1,2,10];
$chap['ef']       = [5];
$chap['fil']      = [2];
$chap['rom']      = [11];
$chap['1kor']     = range(1,16);
$chap['2kor']     = range(1,13);
$chap['1thess']   = range(1,5);
$chap['hebr']     = [8,13];
$chap['jak']      = [1];
$chap['1pet']     = [2,3,4];
$chap['1joh']     = [1,4,5];

$total_chap_ot = 929;
$total_chap_nt = 260;



$title['GT']      = 'Det Gamle Testamente';
$title['1mos']    = 'Første Mosebog';
$title['2mos']    = 'Anden Mosebog';
$title['4mos']    = 'Fjerde Mosebog';
$title['5mos']    = 'Femte Mosebog';
$title['dom']     = 'Dommerbogen';
$title['ruth']    = 'Ruths Bog';
$title['sl']      = 'Salmernes Bog';
$title['es']      = 'Esajas&rsquo; Bog';
$title['jer']     = 'Jeremias&rsquo; Bog';
$title['ez']      = 'Ezekiels Bog';
$title['obad']    = 'Obadias&rsquo; Bog';
$title['nah']     = 'Nahums Bog';
$title['sef']     = 'Sefanias&rsquo; Bog';
$title['hab']     = 'Habakkuks Bog';
$title['hagg']    = 'Haggajs Bog';
$title['zak']     = 'Zakarias&rsquo; Bog';
$title['NT']      = 'Det Nye Testamente';
$title['matt']    = 'Matthæusevangeliet';
$title['mark']    = 'Markusevangeliet';
$title['luk']     = 'Lukasevangeliet';
$title['joh']     = 'Johannesevangeliet';
$title['apg']     = 'Apostlenes Gerninger';
$title['rom']     = 'Paulus&rsquo; Brev til Romerne';
$title['1kor']    = 'Paulus&rsquo; Første Brev til Korintherne';
$title['2kor']    = 'Paulus&rsquo; Andet Brev til Korintherne';
$title['ef']      = 'Paulus&rsquo; Brev til Efeserne';
$title['fil']     = 'Paulus&rsquo; Brev til Filipperne';
$title['1thess']  = 'Paulus&rsquo; Første Brev til Thessalonikerne';
$title['hebr']    = 'Brevet til Hebræerne';
$title['jak']     = 'Jakobs Brev';
$title['1pet']    = 'Peters Første Brev';
$title['1joh']    = 'Johannes&rsquo; Første Brev';

$style['GT'] = 'btn-success'; // Bedste værdi for GT's kapitler
$style['NT'] = 'btn-info'; // Bedste værdi for NT's kapitler


foreach ($chap as $k => $v)
    $chaptype[$k] = 'kapitel';

$chaptype['sl']   = 'salme';

$abbrev['1mos'] = '1 Mos';
$abbrev['2mos'] = '2 Mos';
$abbrev['4mos'] = '4 Mos';
$abbrev['5mos'] = '5 Mos';
$abbrev['dom']  = 'Dom';
$abbrev['ruth'] = 'Ruth';
$abbrev['sl']   = 'Sl';
$abbrev['es']   = 'Es';
$abbrev['jer']  = 'Jer';
$abbrev['ez']   = 'Ez';
$abbrev['obad'] = 'Obad';
$abbrev['nah']  = 'Nah';
$abbrev['sef']  = 'Sef';
$abbrev['hab']  = 'Hab';
$abbrev['hagg'] = 'Hagg';
$abbrev['zak']  = 'Zak';
$abbrev['matt'] = 'Matt';
$abbrev['mark'] = 'Mark';
$abbrev['luk']  = 'Luk';
$abbrev['joh']  = 'Joh';
$abbrev['apg']  = 'ApG';
$abbrev['rom']  = 'Rom';
$abbrev['1kor'] = '1 Kor';
$abbrev['2kor'] = '2 Kor';
$abbrev['ef']   = 'Ef';
$abbrev['fil']  = 'Fil';
$abbrev['1thess'] = '1 Thess';
$abbrev['hebr'] = 'Heb';
$abbrev['jak']  = 'Jak';
$abbrev['1pet'] = '1 Pet';
$abbrev['1joh'] = '1 Joh';

$deabbrev = [];
foreach ($abbrev as $k => $v)
    $deabbrev[$v] = $k;


$style['1mos']    = 'btn-secondary';
$style['2mos']    = 'btn-info';
$style['4mos']    = 'btn-info';
$style['5mos']    = 'btn-secondary';
$style['dom']     = 'btn-success';
$style['ruth']    = 'btn-success';

$style['sl'] = array();
for ($k=1; $k<=135; ++$k)
    $style['sl'][$k] = 'btn-success';
for ($k=136; $k<=150; ++$k)
    $style['sl'][$k] = 'btn-info';
$style['sl'][119] = 'btn-info';

$style['es']      = [ 1 => 'btn-success',
                      2 => 'btn-success', 
                      3 => 'btn-success', 
                      4 => 'btn-success', 
                      5 => 'btn-success', 
                      6 => 'btn-success', 
                      7 => 'btn-success'];
for ($k=8; $k<=66; ++$k)
    $style['es'][$k] = 'btn-warning';

$style['jer']     = 'btn-success';
$style['ez']      = 'btn-secondary';
$style['obad']    = 'btn-info';
$style['nah']     = 'btn-info';
$style['sef']     = 'btn-info';
$style['hab']     = 'btn-info';
$style['hagg']    = 'btn-secondary';
$style['zak']     = 'btn-success';
$style['matt']    = 'btn-info';
$style['mark']    = 'btn-warning';
$style['luk']     = 'btn-secondary';
$style['joh']     = 'btn-secondary';
$style['apg']     = 'btn-secondary';
$style['rom']     = 'btn-secondary';
$style['1kor']    = 'btn-warning';
$style['2kor']    = 'btn-warning';
$style['ef']      = 'btn-secondary';
$style['fil']     = 'btn-secondary';
$style['1thess']  = 'btn-warning';
$style['hebr']    = 'btn-secondary';
$style['jak']     = 'btn-secondary';
$style['1pet']    = 'btn-secondary';
$style['1joh']    = 'btn-secondary';


