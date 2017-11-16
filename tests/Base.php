<?php
class Base extends PHPUnit_Framework_TestCase
{
    const LOOP_LIMIT = 10000000;

    public function additionProvider()
    {
        $json = <<<EOD
{
  "object": "test",
  "id": "test_1234567890abcdefghi",
  "livemode": false,
  "location": "/tests/test_1234567890abcdefghi",
  "key": "test.test",
  "created": "1970-01-01T00:00:00Z",
  "data": {
    "object": "test",
    "id": "test_1234567890abcdefghi",
    "livemode": false,
    "location": "/test/test_1234567890abcdefghi",
    "amount": 10000,
    "currency": "thb",
    "description": "Test",
    "metadata": {
      "test": "test"
    },
    "status": "successful",
    "capture": true,
    "authorized": true,
    "reversed": false,
    "paid": true,
    "transaction": "test_1234567890abcdefghi",
    "source_of_fund": "test",
    "refunded": 0,
    "refunds": {
      "object": "list",
      "from": "1970-01-01T00:00:00Z",
      "to": "1970-01-01T00:00:00Z",
      "offset": 0,
      "limit": 20,
      "total": 0,
      "order": null,
      "location": "/tests/test_1234567890abcdefghi/refunds",
      "data": [

      ]
    },
    "return_uri": "https://test.test/",
    "offsite": "test",
    "offline": null,
    "reference": "test_1234567890abcdefghi",
    "authorize_uri": "https://test.test",
    "failure_code": null,
    "failure_message": null,
    "card": null,
    "customer": null,
    "ip": null,
    "dispute": null,
    "created": "1970-01-01T00:00:00Z"
  }
}
EOD;

        return [
            [$json]
        ];
    }
}
