<?php

// locale: greek (el)
// author: James Axl https://github.com/jamesaxl

use Moment\Moment;

return array(
    "monthsNominative" => explode('_', 'Ιανουάριος_Φεβρουάριος_Μάρτιος_Απρίλιος_Μάιος_Ιούνιος_Ιούλιος_Αύγουστος_Σεπτέμβριος_Οκτώβριος_Νοέμβριος_Δεκέμβριος'),
    "months" => explode('_', 'Ιανουαρίου_Φεβρουαρίου_Μαρτίου_Απριλίου_Μαΐου_Ιουνίου_Ιουλίου_Αυγούστου_Σεπτεμβρίου_Οκτωβρίου_Νοεμβρίου_Δεκεμβρίου'),
    "monthsShort"   => explode('_', 'Ιαν_Φεβ_Μαρ_Απρ_Μαϊ_Ιουν_Ιουλ_Αυγ_Σεπ_Οκτ_Νοε_Δεκ'),
    "weekdays"      => explode('_', 'Δευτέρα_Τρίτη_Τετάρτη_Πέμπτη_Παρασκευή_Σάββατο_Κυριακή'),
    "weekdaysShort" => explode('_', 'Δευ_Τρι_Τετ_Πεμ_Παρ_Σαβ_Κυρ'),
    "calendar"      => array(
        "sameDay"  => '[Σήμερα]',
        "nextDay"  => '[Αύριο]',
        "lastDay"  => '[Χθες]',
        "lastWeek" => function (Moment $moment) {
            switch ($moment->getWeekday()) {
                case 6:
                    return '[το προηγούμενο] l';
                default:
                    return '[την προηγούμενη] l';
            }
        },
        "sameElse" => 'l',
        "withTime" => '[στις] G:i',
        "default"  => 'd/m/Y',
    ),
    "relativeTime"  => array(
        'future' => 'σε %s',
        'past' => '%s πριν',
        's' => 'λίγα δευτερόλεπτα',
        'ss' => '%d δευτερόλεπτα',
        'm' => 'ένα λεπτό',
        'mm' => '%d λεπτά',
        'h' => 'μία ώρα',
        'hh' => '%d ώρες',
        'd' => 'μία μέρα',
        'dd' => '%d μέρες',
        'M' => 'ένας μήνας',
        'MM' => '%d μήνες',
        'y' => 'ένας χρόνος',
        'yy' => '%d χρόνια',
    ),
    "ordinal"       => function ($number)
    {
        return $number . 'η';
    },
    "week"          => array(
        "dow" => 1, // Monday is the first day of the week.
        "doy" => 4  // The week that contains Jan 4th is the first week of the year.
    ),
    "customFormats" => array(
        "LTS"   => "G:i:s", // 20:30:45
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
