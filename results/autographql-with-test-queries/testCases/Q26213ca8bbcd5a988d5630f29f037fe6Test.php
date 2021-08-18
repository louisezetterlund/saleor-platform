<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q26213ca8bbcd5a988d5630f29f037fe6Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query shippingZoneById($shippingZoneId: ID!) {\n        shippingZone(id: $shippingZoneId) {\n            shippingMethods {\n                translation(languageCode: PL) {\n                    name\n                    language {\n                        code\n                    }\n                }\n            }\n        }\n    }\n    ", "variables": {"shippingZoneId": "U2hpcHBpbmdab25lOjQzMQ=="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shippingZone', $responseContent);
        
        if ($responseContent['shippingZone']) {
        
        $this->assertArrayHasKey('shippingMethods', $responseContent['shippingZone']);
        
        if ($responseContent['shippingZone']['shippingMethods']) {
        
        $this->assertIsArray($responseContent['shippingZone']['shippingMethods']);
        
        for($g = 0; $g < count($responseContent['shippingZone']['shippingMethods']); $g++) {
        
        if ($responseContent['shippingZone']['shippingMethods'][$g]) {
        
        $this->assertArrayHasKey('translation', $responseContent['shippingZone']['shippingMethods'][$g]);
        
        if ($responseContent['shippingZone']['shippingMethods'][$g]['translation']) {
        
        $this->assertArrayHasKey('name', $responseContent['shippingZone']['shippingMethods'][$g]['translation']);
        
        if ($responseContent['shippingZone']['shippingMethods'][$g]['translation']['name']) {
        
        $this->assertIsString($responseContent['shippingZone']['shippingMethods'][$g]['translation']['name']);
        
        }
        
        $this->assertArrayHasKey('language', $responseContent['shippingZone']['shippingMethods'][$g]['translation']);
        
        $this->assertNotNull($responseContent['shippingZone']['shippingMethods'][$g]['translation']['language']);
        
        $this->assertArrayHasKey('code', $responseContent['shippingZone']['shippingMethods'][$g]['translation']['language']);
        
        $this->assertNotNull($responseContent['shippingZone']['shippingMethods'][$g]['translation']['language']['code']);
        
        $this->assertContains($responseContent['shippingZone']['shippingMethods'][$g]['translation']['language']['code'], ['AR', 'AZ', 'BG', 'BN', 'CA', 'CS', 'DA', 'DE', 'EL', 'EN', 'ES', 'ES_CO', 'ET', 'FA', 'FI', 'FR', 'HI', 'HU', 'HY', 'ID', 'IS', 'IT', 'JA', 'KA', 'KM', 'KO', 'LT', 'MN', 'MY', 'NB', 'NL', 'PL', 'PT', 'PT_BR', 'RO', 'RU', 'SK', 'SL', 'SQ', 'SR', 'SV', 'SW', 'TA', 'TH', 'TR', 'UK', 'VI', 'ZH_HANS', 'ZH_HANT']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}