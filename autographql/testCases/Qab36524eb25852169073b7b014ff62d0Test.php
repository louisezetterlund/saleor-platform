<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qab36524eb25852169073b7b014ff62d0Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\nquery {\n  products(first: 1) {\n    edges {\n      node {\n        variants {\n          isAvailable\n          pricing {\n            onSale\n\n            discount {\n              currency\n              net {\n                amount\n              }\n            }\n\n            priceUndiscounted {\n              currency\n              net {\n                amount\n              }\n            }\n\n            price {\n              currency\n              net {\n                amount\n              }\n            }\n          }\n        }\n      }\n    }\n  }\n}\n", "variables": {}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('products', $responseContent);
        
        if ($responseContent['products']) {
        
        $this->assertArrayHasKey('edges', $responseContent['products']);
        
        $this->assertNotNull($responseContent['products']['edges']);
        
        $this->assertIsArray($responseContent['products']['edges']);
        
        for($g = 0; $g < count($responseContent['products']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['products']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['products']['edges'][$g]);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('variants', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['variants']) {
        
        $this->assertIsArray($responseContent['products']['edges'][$g]['node']['variants']);
        
        for($f = 0; $f < count($responseContent['products']['edges'][$g]['node']['variants']); $f++) {
        
        if ($responseContent['products']['edges'][$g]['node']['variants'][$f]) {
        
        $this->assertArrayHasKey('pricing', $responseContent['products']['edges'][$g]['node']['variants'][$f]);
        
        if ($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']) {
        
        $this->assertArrayHasKey('onSale', $responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']);
        
        if ($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['onSale']) {
        
        $this->assertIsBool($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['onSale']);
        
        }
        
        $this->assertArrayHasKey('discount', $responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']);
        
        if ($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['discount']) {
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['discount']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['discount']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['discount']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['discount']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['discount']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['discount']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['discount']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['discount']['net']['amount']);
        
        }
        
        $this->assertArrayHasKey('priceUndiscounted', $responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']);
        
        if ($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['priceUndiscounted']) {
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['priceUndiscounted']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['priceUndiscounted']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['priceUndiscounted']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['priceUndiscounted']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['priceUndiscounted']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['priceUndiscounted']['net']['amount']);
        
        }
        
        $this->assertArrayHasKey('price', $responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']);
        
        if ($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['price']) {
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['price']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['price']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['price']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['price']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['price']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['price']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['price']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['variants'][$f]['pricing']['price']['net']['amount']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}