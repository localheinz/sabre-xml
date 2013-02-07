<?php

namespace Sabre\XML;

class UtilTest extends \PHPUnit_Framework_TestCase {

    function testParseClarkNotation() {

        $this->assertEquals(array(
            'http://sabredav.org/ns',
            'elem',
        ), Util::parseClarkNotation('{http://sabredav.org/ns}elem'));

    }

    /**
     * @expectedException \InvalidArgumentException
     */
    function testParseClarkNotationFail() {

        Util::parseClarkNotation('http://sabredav.org/ns}elem');

    }

}
