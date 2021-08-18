<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q7ff21854e039512d883a1ca4d109d4f0Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        {\n          products(first: 10) {\n            edges {\n              node {\n                id\n                  productType {\n                    name\n                  productAttributes {\n                    name\n                  }\n                  variantAttributes {\n                    name\n                  }\n                }\n              }\n            }\n          }\n        }\n    ", "variables": {}, "operationName": ""}
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
        
        $this->assertArrayHasKey('id', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('productType', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['productType']);
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']['productType']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['productType']['name']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['productType']['name']);
        
        $this->assertArrayHasKey('productAttributes', $responseContent['products']['edges'][$g]['node']['productType']);
        
        if ($responseContent['products']['edges'][$g]['node']['productType']['productAttributes']) {
        
        $this->assertIsArray($responseContent['products']['edges'][$g]['node']['productType']['productAttributes']);
        
        for($f = 0; $f < count($responseContent['products']['edges'][$g]['node']['productType']['productAttributes']); $f++) {
        
        if ($responseContent['products']['edges'][$g]['node']['productType']['productAttributes'][$f]) {
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']['productType']['productAttributes'][$f]);
        
        if ($responseContent['products']['edges'][$g]['node']['productType']['productAttributes'][$f]['name']) {
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['productType']['productAttributes'][$f]['name']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('variantAttributes', $responseContent['products']['edges'][$g]['node']['productType']);
        
        if ($responseContent['products']['edges'][$g]['node']['productType']['variantAttributes']) {
        
        $this->assertIsArray($responseContent['products']['edges'][$g]['node']['productType']['variantAttributes']);
        
        for($f = 0; $f < count($responseContent['products']['edges'][$g]['node']['productType']['variantAttributes']); $f++) {
        
        if ($responseContent['products']['edges'][$g]['node']['productType']['variantAttributes'][$f]) {
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']['productType']['variantAttributes'][$f]);
        
        if ($responseContent['products']['edges'][$g]['node']['productType']['variantAttributes'][$f]['name']) {
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['productType']['variantAttributes'][$f]['name']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}