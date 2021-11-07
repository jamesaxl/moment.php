<?php

// locale: serbian (sr)
// author: James Axl https://github.com/jamesaxl

use Moment\Moment;

$ifPast = function ($direction, $trueString, $falseString)
{
    return $direction === 'past' ? $trueString : $falseString;
};

$ifCountSmaller = function ($count, $countSmallerThan, $trueString, $falseString)
{
    return $count < $countSmallerThan ? $trueString : $falseString;
};

return array(
    "months"        => explode('_', 'januar_februar_mart_april_maj_jun_jul_avgust_septembar_oktobar_novembar_decembar'),
    "monthsShort"   => explode('_', 'jan._feb._mar._apr._maj_jun_jul_avg._sep._okt._nov._dec.'),
    "weekdays"      => explode('_', 'ponedeljak_utorak_sreda_četvrtak_petak_subota_nedelja'),
    "weekdaysShort" => explode('_', 'pon._uto._sre._čet._pet._sub._ned.'),
    "calendar"      => array(
        "sameDay"  => '[Danas u] l',
        "nextDay"  => '[Sutra u] l',
        "lastDay"  => '[Juče u] l',
        "lastWeek" => function($moment) {
            $lastWeekDays = array(
                '[prošle] [nedelje] [u] l',
                '[prošlog] [ponedeljka] [u] l',
                '[prošlog] [utorka] [u] l',
                '[prošle] [srede] [u] l',
                '[prošlog] [četvrtka] [u] l',
                '[prošlog] [petka] [u] l',
                '[prošle] [subote] [u] l',
            );
            return $lastWeekDays[$moment->getWeekDay()];
        },
        "sameElse" => 'l',
        "withTime" => '[на] G:i',
        "default"  => 'd/m/Y',
    ),
    "relativeTime"  => array(
        "future" => 'za %s',
        "past"   => 'pre %s',
        "s"      => '',
        "ss"     => '',
        "m"      => '',
        "mm"     => '',
        "h"      => '',
        "hh"     => '',
        "d"      => '',
        "dd"     => '',
        "M"      => '',
        "MM"     => '',
        "y"      => '',
        "yy"     => '',
    ),
    "ordinal"       => function ($number)
    {
        return $number . '.';
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
