<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qaccb1aa4c606547dbf93c4949875526eTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ShippingQuery($id: ID!) {\n        shippingZone(id: $id) {\n            name\n            shippingMethods {\n                price {\n                    amount\n                }\n                minimumOrderWeight {\n                    value\n                    unit\n                }\n                maximumOrderWeight {\n                    value\n                    unit\n                }\n            }\n            priceRange {\n                start {\n                    amount\n                }\n                stop {\n                    amount\n                }\n            }\n        }\n    }\n", "variables": {"id": "U2hpcHBpbmdab25lOjQ0MQ=="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shippingZone', $responseContent);
        
        if ($responseContent['shippingZone']) {
        
        $this->assertArrayHasKey('name', $responseContent['shippingZone']);
        
        $this->assertNotNull($responseContent['shippingZone']['name']);
        
        $this->assertIsString($responseContent['shippingZone']['name']);
        
        $this->assertArrayHasKey('shippingMethods', $responseContent['shippingZone']);
        
        if ($responseContent['shippingZone']['shippingMethods']) {
        
        $this->assertIsArray($responseContent['shippingZone']['shippingMethods']);
        
        for($g = 0; $g < count($responseContent['shippingZone']['shippingMethods']); $g++) {
        
        if ($responseContent['shippingZone']['shippingMethods'][$g]) {
        
        $this->assertArrayHasKey('price', $responseContent['shippingZone']['shippingMethods'][$g]);
        
        if ($responseContent['shippingZone']['shippingMethods'][$g]['price']) {
        
        $this->assertArrayHasKey('amount', $responseContent['shippingZone']['shippingMethods'][$g]['price']);
        
        $this->assertNotNull($responseContent['shippingZone']['shippingMethods'][$g]['price']['amount']);
        
        $this->assertIsNumeric($responseContent['shippingZone']['shippingMethods'][$g]['price']['amount']);
        
        }
        
        $this->assertArrayHasKey('minimumOrderWeight', $responseContent['shippingZone']['shippingMethods'][$g]);
        
        if ($responseContent['shippingZone']['shippingMethods'][$g]['minimumOrderWeight']) {
        
        $this->assertArrayHasKey('value', $responseContent['shippingZone']['shippingMethods'][$g]['minimumOrderWeight']);
        
        $this->assertNotNull($responseContent['shippingZone']['shippingMethods'][$g]['minimumOrderWeight']['value']);
        
        $this->assertIsNumeric($responseContent['shippingZone']['shippingMethods'][$g]['minimumOrderWeight']['value']);
        
        $this->assertArrayHasKey('unit', $responseContent['shippingZone']['shippingMethods'][$g]['minimumOrderWeight']);
        
        $this->assertNotNull($responseContent['shippingZone']['shippingMethods'][$g]['minimumOrderWeight']['unit']);
        
        $this->assertContains($responseContent['shippingZone']['shippingMethods'][$g]['minimumOrderWeight']['unit'], ['KG', 'LB', 'OZ', 'G']);
        
        }
        
        $this->assertArrayHasKey('maximumOrderWeight', $responseContent['shippingZone']['shippingMethods'][$g]);
        
        if ($responseContent['shippingZone']['shippingMethods'][$g]['maximumOrderWeight']) {
        
        $this->assertArrayHasKey('value', $responseContent['shippingZone']['shippingMethods'][$g]['maximumOrderWeight']);
        
        $this->assertNotNull($responseContent['shippingZone']['shippingMethods'][$g]['maximumOrderWeight']['value']);
        
        $this->assertIsNumeric($responseContent['shippingZone']['shippingMethods'][$g]['maximumOrderWeight']['value']);
        
        $this->assertArrayHasKey('unit', $responseContent['shippingZone']['shippingMethods'][$g]['maximumOrderWeight']);
        
        $this->assertNotNull($responseContent['shippingZone']['shippingMethods'][$g]['maximumOrderWeight']['unit']);
        
        $this->assertContains($responseContent['shippingZone']['shippingMethods'][$g]['maximumOrderWeight']['unit'], ['KG', 'LB', 'OZ', 'G']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('priceRange', $responseContent['shippingZone']);
        
        if ($responseContent['shippingZone']['priceRange']) {
        
        $this->assertArrayHasKey('start', $responseContent['shippingZone']['priceRange']);
        
        if ($responseContent['shippingZone']['priceRange']['start']) {
        
        $this->assertArrayHasKey('amount', $responseContent['shippingZone']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['shippingZone']['priceRange']['start']['amount']);
        
        $this->assertIsNumeric($responseContent['shippingZone']['priceRange']['start']['amount']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['shippingZone']['priceRange']);
        
        if ($responseContent['shippingZone']['priceRange']['stop']) {
        
        $this->assertArrayHasKey('amount', $responseContent['shippingZone']['priceRange']['stop']);
        
        $this->assertNotNull($responseContent['shippingZone']['priceRange']['stop']['amount']);
        
        $this->assertIsNumeric($responseContent['shippingZone']['priceRange']['stop']['amount']);
        
        }
        
        }
        
        }
        

    }
}