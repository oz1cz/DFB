<?php

function replaceit($filename) {
    $txt = file_get_contents($filename);

    if (preg_match('/"/',$txt)) {
        echo "<h1>Fejl</h1>\n";
        echo "<p>Tekst indeholder dobbelt citationstegn.</p>\n";
        die;
    }


    $from[] = '/===/';
    $to[] = '@@';

    $from[] = '/==/';
    $to[] = '@';

    $from[] = '/>>>/';
    $to[] = '»›';

    $from[] = '/<<</';
    $to[] = '‹«';

    $from[] = '/>>/';
    $to[] = '»';

    $from[] = '/<</';
    $to[] = '«';

    $from[] = '/>/';
    $to[] = '›';

    $from[] = '/</';
    $to[] = '‹';

    $from[] = '/\'/';
    $to[] = '&rsquo;';

    $from[] = '/\*([^\*]+)\*/';
    $to[] = '<i>\1</i>';

    $from[] = '/{E: *([^}]+)}/';
    $to[] = '<span class="ref refa"><span class="refnum">[REFALET]</span><span class="refbody">\1</span></span>';

    $from[] = '/{T: *([^}]+)}/';
    $to[] = '<span class="ref ref1"><span class="refnum">[REFANUM]</span><span class="refbody">\1</span></span>';


    $from[] = '/JHVHs/i';
    $to[] = '<span class="thenames">JHVHs</span>';

    $from[] = '/JHVH/i';
    $to[] = '<span class="thename">JHVH</span>';


    $from[] = '/([^a-z])v([0-9]+) */';
    $to[] = '\1<span class="verseno">\2</span>';

    $from[] = '/\n *\n/';
    $to[] = 'QQ';

    $from[] = '/\n/';
    $to[] = ' ';
 

    $from[] = '/QQ/';
    $to[] = "\n";

    $from[] = '/^ *([^\n@]+) *$/m';
    $to[] = '<div class="paragraph">\1</div>';

    $from[] = '/@@([^@]+)@@/';
    $to[] = '<h1>\1</h1>';

    $from[] = '/@([^@]+)@/';
    $to[] = '<h2>\1</h2>';

    $txt = preg_replace($from, $to, $txt);

    global $nextletter;
    $nextletter = 'a';
    global $nextnumber;
    $nextnumber = 1;

    $txt = preg_replace_callback('/REFALET/',
                                 function ($matches) {
                                     global $nextletter;
                                     return $nextletter++;
                                 }, $txt);

    $txt = preg_replace_callback('/REFANUM/',
                                 function ($matches) {
                                     global $nextnumber;
                                     return $nextnumber++;
                                 }, $txt);

    return $txt;
  }