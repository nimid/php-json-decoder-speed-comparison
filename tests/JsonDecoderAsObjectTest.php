<?php
require_once 'Base.php';

class JsonDecoderAsObjectTest extends Base
{
    /**
     * @dataProvider additionProvider
     */
    public function testDecodeJsonStringByReturnTypeIsObject($json)
    {
        $assoc = false;

        for ($i = 0; $i < self::LOOP_LIMIT; $i++) {
            json_decode($json, $assoc);
        }
    }
}
