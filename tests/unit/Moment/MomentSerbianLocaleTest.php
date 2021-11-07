<?php

namespace Moment;

use PHPUnit\Framework\TestCase;

class MomentSerbianLocaleTest extends TestCase
{
    public function setUp(): void
    {
        Moment::setLocale('sr_SR');
    }

    public function testWeekdayNames()
    {
        $startingDate = '2015-01-04T00:00:00+0000';

        $moment = new Moment($startingDate);

        $weekdayNames = array(
            1 => array('pon.', 'ponedeljak'),
            2 => array('uto.', 'utorak'),
            3 => array('sre.', 'sreda'),
            4 => array('čet.', 'četvrtak'),
            5 => array('pet.', 'petak'),
            6 => array('sub.', 'subota'),
            7 => array('ned.', 'nedelja'),
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
            1  => array('jan.', 'januar'),
            2  => array('feb.', 'februar'),
            3  => array('mar.', 'mart'),
            4  => array('apr.', 'april'),
            5  => array('maj', 'maj'),
            6  => array('jun', 'jun'),
            7  => array('jul', 'jul'),
            8  => array('avg.', 'avgust'),
            9  => array('sep.', 'septembar'),
            10 => array('okt.', 'oktobar'),
            11 => array('nov.', 'novembar'),
            12 => array('dec.', 'decembar'),
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
            array('l, F d Y, g:i:s a',                  'nedelja, februar 14 2010, 3:25:50 pm'),
            array('D, gA',                              'ned., 3PM'),
            array('n m F M',                            '2 02 februar feb.'),
            array('Y y',                                '2010 10'),
            array('j d',                                '14 14'),
            array('z [dana u godini]',          '44 dana u godini')
        );
        $b = new Moment('2010-02-14 15:25:50');
        for ($i = 0; $i < count($a); $i++) {
            self::assertEquals($a[$i][1], $b->format($a[$i][0]));
        }
    }

    public function testRelative()
    {
        $beginningMoment = new Moment('2015-06-14 20:46:22', 'Europe/Berlin');
        $endMoment = new Moment('2015-06-14 20:48:32', 'Europe/Berlin');
        self::assertEquals('za 2 minuta', $endMoment->from($beginningMoment)->getRelative());
        self::assertEquals('pre 2 minuta', $beginningMoment->from($endMoment)->getRelative());
    }
}
