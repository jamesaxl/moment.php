<?php

// locale: norweigan (no-NO)

return array(
    "months" => explode('_', 'januar_februar_mars_april_mai_juni_juli_august_september_oktober_november_desember'),
    "monthsShort" => explode('_', 'jan_feb_mars_apr_mai_jun_jul_aug_sep_okt_nov_des'),
    "weekdays" => explode('_', 'mandag_tirsdag_onsdag_torsdag_fredag_lørdag_søndag'),
    "weekdaysShort" => explode('_', 'man_tir_ons_tor_fre_lør_søn'),
    "calendar" => array(
        "sameDay" => '[I dag]',
        "nextDay" => '[I morgen]',
        "lastDay" => '[I går]',
        "lastWeek" => '[Sidste] l',
        "sameElse" => 'l',
        "withTime" => '[kl] H:i',
        "default" => 'd/m/Y',
    ),
    "relativeTime" => array(
        "future" => 'om %s',
        "past" => '%s siden',
        "s" => 'få sekunder',
        "ss" => '%d sekunder',
        "m" => 'ett minutt',
        "mm" => '%d minutter',
        "h" => 'en time',
        "hh" => '%d timer',
        "d" => 'en dag',
        "dd" => '%d dager',
        "M" => 'en måned',
        "MM" => '%d måneder',
        "y" => 'et år',
        "yy" => '%d år',
    ),

    "ordinal" => function ($number) {
        return $number . '.';
    },
    "week" => array(
        "dow" => 1, // Monday is the first day of the week.
        "doy" => 4  // The week that contains Jan 4th is the first week of the year.
    ),
    "customFormats" => array(
        "LTS"  => "G:i:s", // 20:30:35
        "LT"   => "G:i", // 20:30
        "L"    => "d.m.Y", // 04/09/1986
        "l"    => "j/n/Y", // 4/9/1986
        "LL"   => "jS F Y", // 4 Septembre 1986
        "ll"   => "j M Y", // 4 Sep 1986
        "LLL"  => "jS F Y G:i", // 4 Septembre 1986 20:30
        "lll"  => "j M Y G:i", // 4 Sep 1986 20:30
        "LLLL" => "l, jS F Y [kl.] G:i", // Jeudi, 4 Septembre 1986 20:30
        "llll" => "D, j M Y [kl.] G:i", // Jeu, 4 Sep 1986 20:30
    ),
);
