<?php

// locale: french (fr)
// author: John Fischer https://github.com/jfroffice

return array(
    "months"        => explode('_', 'januari_februari_mars_april_maj_juni_juli_augusti_september_oktober_november_december'),
    "monthsShort"   => explode('_', 'jan_feb_mar_apr_maj_jun_jul_aug_sep_okt_nov_dec'),
    "weekdays"      => explode('_', 'måndag_tisdag_onsdag_torsdag_fredag_lördag_söndag'),
    "weekdaysShort" => explode('_', 'mån_tis_ons_tor_fre_lör_sön'),
    "calendar"      => array(
        "sameDay"  => '[Idag]',
        "nextDay"  => '[Imorgon]',
        "lastDay"  => '[Igår]',
        "lastWeek" => '[I] l',
        "sameElse" => 'l',
        "withTime" => '[o] G:i',
        "default"  => 'd/m/Y',
    ),
    "relativeTime"  => array(
        "future" => 'dans %s',
        "past"   => 'il y a %s',
        "s"      => 'quelques secondes',
        "ss"     => '%d secondes',
        "m"      => 'une minute',
        "mm"     => '%d minutes',
        "h"      => 'une heure',
        "hh"     => '%d heures',
        "d"      => 'un jour',
        "dd"     => '%d jours',
        "M"      => 'un mois',
        "MM"     => '%d mois',
        "y"      => 'un an',
        "yy"     => '%d ans',
    ),
    "ordinal" => function ($number) {
        $b = $number % 10;
        $output = '[e]';

        if (~~(($number % 100) / 10) === 1 || $b === 3) {
            $output = '[e]';
        } else if ($b === 1 || $b === 2) {
            $output = '[a]';
        }

        return $number . $output;
    },
    "week"          => array(
        "dow" => 1, // Monday is the first day of the week.
        "doy" => 4  // The week that contains Jan 4th is the first week of the year.
    ),
    "customFormats" => array(
        "LTS"   => "G:i:s", // 20:30:35
        "LT"   => "G:i", // 20:30
        "L"    => "d/m/Y", // 04/09/1986
        "l"    => "j/n/Y", // 4/9/1986
        "LL"   => "jS F Y", // 4 Septembre 1986
        "ll"   => "j M Y", // 4 Sep 1986
        "LLL"  => "jS F Y G:i", // 4 Septembre 1986 20:30
        "lll"  => "j M Y G:i", // 4 Sep 1986 20:30
        "LLLL" => "l, jS F Y G:i", // Jeudi, 4 Septembre 1986 20:30
        "llll" => "D, j M Y G:i", // Jeu, 4 Sep 1986 20:30
    ),
);
