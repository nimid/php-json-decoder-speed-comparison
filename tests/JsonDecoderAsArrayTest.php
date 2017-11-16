<?php
require_once 'Base.php';

class JsonDecoderAsArrayTest extends Base
{
    /**
     * @dataProvider additionProvider
     */
    public function testDecodeJsonStringByReturnTypeIsArray($json)
    {
        $assoc = true;

        for ($i = 0; $i < self::LOOP_LIMIT; $i++) {
            json_decode($json, $assoc);
        }
    }
}
