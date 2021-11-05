<?php

// locale: slovak (sk)
// author: James Axl https://github.com/jamesaxl

$ifPast = function ($direction, $trueString, $falseString)
{
    return $direction === 'past' ? $trueString : $falseString;
};

$ifCountSmaller = function ($count, $countSmallerThan, $trueString, $falseString)
{
    return $count < $countSmallerThan ? $trueString : $falseString;
};


return array(
    "months"        => explode('_', 'január_február_marec_apríl_máj_jún_júl_august_september_október_november_december'),
    "monthsShort"   => explode('_', 'jan_feb_mar_apr_máj_jún_júl_aug_sep_okt_nov_dec'),
    "weekdays"      => explode('_', 'pondelok_utorok_streda_štvrtok_piatok_sobota_nedeľa'),
    "weekdaysShort" => explode('_', 'po_ut_st_št_pi_so_ne'),
    "calendar"      => array(
        "sameDay"  => '[Snes o]',
        "nextDay"  => '[Zajtra o]',
        "lastDay"  => '[Včera o]',
        "lastWeek" => function($moment) {
            switch ($moment->getWeekDay()) {
                case 0:
                    return '[v nedeľu o]';
                case 1:
                case 2:
                    return '[v] dddd [o]';
                case 3:
                    return '[v stredu o]';
                case 4:
                    return '[vo štvrtok o]';
                case 5:
                    return '[v piatok o]';
                case 6:
                    return '[v sobotu o]';
            }
        },
        "sameElse" => 'l',
        "withTime" => '[o] G:i',
        "default"  => 'd/m/Y',
    ),

    "relativeTime"  => array(
        "future" => 'za %s',
        "past"   => 'pred %s',
        "s"      => function ($count, $direction, Moment $m) use ($ifPast)
        {
            return $ifPast($direction, 'okamžikem', 'okamžik');
        },
        "ss"     => function ($count, $direction, Moment $m) use ($ifPast)
        {
            return $ifPast($direction, 'okamžikem', 'okamžik');
        },
        "m"      => function ($count, $direction, Moment $m) use ($ifPast)
        {
            return $ifPast($direction, 'okamžikem', 'okamžik');
        },
        "mm"     => function ($count, $direction, Moment $m) use ($ifPast)
        {
            return $ifPast($direction, 'okamžikem', 'okamžik');
        },
        "h"      => function ($count, $direction, Moment $m) use ($ifPast)
        {
            return $ifPast($direction, 'okamžikem', 'okamžik');
        },
        "hh"     => function ($count, $direction, Moment $m) use ($ifPast)
        {
            return $ifPast($direction, 'okamžikem', 'okamžik');
        },
        "d"      => function ($count, $direction, Moment $m) use ($ifPast)
        {
            return $ifPast($direction, 'okamžikem', 'okamžik');
        },
        "dd"     => function ($count, $direction, Moment $m) use ($ifPast)
        {
            return $ifPast($direction, 'okamžikem', 'okamžik');
        },
        "M"      => function ($count, $direction, Moment $m) use ($ifPast)
        {
            return $ifPast($direction, 'okamžikem', 'okamžik');
        },
        "MM"     => function ($count, $direction, Moment $m) use ($ifPast)
        {
            return $ifPast($direction, 'okamžikem', 'okamžik');
        },
        "y"      => function ($count, $direction, Moment $m) use ($ifPast)
        {
            return $ifPast($direction, 'okamžikem', 'okamžik');
        },
        "yy"     => function ($count, $direction, Moment $m) use ($ifPast)
        {
            return $ifPast($direction, 'okamžikem', 'okamžik');
        },
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
