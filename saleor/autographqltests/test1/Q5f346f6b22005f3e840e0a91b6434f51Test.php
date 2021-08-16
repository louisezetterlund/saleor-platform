<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q5f346f6b22005f3e840e0a91b6434f51Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        {\n          products(first: 10) {\n            edges {\n              node {\n                attributes {\n                  values {\n                    type\n                    inputType\n                  }\n                }\n              }\n            }\n          }\n        }\n    ", "variables": "", "operationName": ""}
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
        
        $this->assertArrayHasKey('attributes', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['attributes']);
        
        $this->assertIsArray($responseContent['products']['edges'][$g]['node']['attributes']);
        
        for($f = 0; $f < count($responseContent['products']['edges'][$g]['node']['attributes']); $f++) {
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['attributes'][$f]);
        
        $this->assertArrayHasKey('values', $responseContent['products']['edges'][$g]['node']['attributes'][$f]);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values']);
        
        $this->assertIsArray($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values']);
        
        for($e = 0; $e < count($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values']); $e++) {
        
        if ($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values'][$e]) {
        
        $this->assertArrayHasKey('inputType', $responseContent['products']['edges'][$g]['node']['attributes'][$f]['values'][$e]);
        
        if ($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values'][$e]['inputType']) {
        
        $this->assertContains($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values'][$e]['inputType'], ['DROPDOWN', 'MULTISELECT']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}