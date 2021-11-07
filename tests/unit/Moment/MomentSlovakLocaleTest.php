<?php

/**
 * Slovak Unit Test
 *
 * @author james Axl <https://github.com/jamesaxl>
 *
 */

namespace Moment;

use PHPUnit\Framework\TestCase;

class MomentSlovakLocaleTest extends TestCase
{
    public function setUp()
    {
        Moment::setLocale('sk_SK');
    }

    public function testWeekdayNames()
    {
        $startingDate = '2015-01-04T00:00:00+0000';

        $moment = new Moment($startingDate);

        $weekdayNames = array(
            1 => array('po', 'pondelok'),
            2 => array('ut', 'utorok'),
            3 => array('st', 'streda'),
            4 => array('št', 'štvrtok'),
            5 => array('pi', 'piatok'),
            6 => array('so', 'sobota'),
            7 => array('ne', 'nedeľa'),
        );

        for ($d = 1; $d < 7; $d++)
        {
            self::assertEquals($weekdayNames[$moment->getWeekday()][0], $moment->getWeekdayNameShort(), 'weekday short name failed');
            self::assertEquals($weekdayNames[$moment->getWeekday()][1], $moment->getWeekdayNameLong(), 'weekday long name failed');

            $moment->addDays(1);
        }
    }

    public function testMonthNames()
    {
        $startingDate = '2015-01-04T00:00:00+0000';

        $moment = new Moment($startingDate);

        $monthNames = array(
            1  => array('jan', 'január'),
            2  => array('feb', 'február'),
            3  => array('mar', 'marec'),
            4  => array('apr', 'apríl'),
            5  => array('máj', 'máj'),
            6  => array('jún', 'jún'),
            7  => array('júl', 'júl'),
            8  => array('aug', 'august'),
            9  => array('sep', 'september'),
            10 => array('okt', 'október'),
            11 => array('nov', 'november'),
            12 => array('dec', 'december'),
        );

        for ($d = 1; $d < 12; $d++)
        {
            self::assertEquals($monthNames[$moment->format('n')][0], $moment->getMonthNameShort(), 'month short name failed');
            self::assertEquals($monthNames[$moment->format('n')][1], $moment->getMonthNameLong(), 'month long name failed');

            $moment->addMonths(1);
        }
    }

    public function testFormat()
    {
        $a = array(
            array('l, F d Y, g:i:s a', 'nedeľa, február 14 2010, 3:25:50 pm'),
            array('D, gA', 'ne, 3PM'),
            array('n m F M', '2 02 február feb'),
            array('Y y', '2010 10'),
            array('j d', '14 14'),
            array("z[. deň v roku]", "44. deň v roku")
        );
        $b = new Moment('2010-02-14 15:25:50');
        for ($i = 0; $i < count($a); $i++) {
            self::assertEquals($a[$i][1], $b->format($a[$i][0]));
        }
    }

    public function testOrdinalsFormat()
    {
        $moment = new Moment('2010-06-02T00:00:00+0000');
        self::assertEquals('2.', $moment->format('jS'));
        $moment = new Moment('2010-06-01T00:00:00+0000');
        self::assertEquals('1.', $moment->format('jS'));
    }

    public function testRelative()
    {
        $beginningMoment = new Moment('2015-06-14 20:46:22', 'Europe/Berlin');
        $endMoment = new Moment('2015-06-14 20:48:32', 'Europe/Berlin');
        self::assertEquals('za 2 minúty', $endMoment->from($beginningMoment)->getRelative());
        self::assertEquals('pred 2 minútami', $beginningMoment->from($endMoment)->getRelative());
    }
}
