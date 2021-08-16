<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qb12ad48b247b5b1ba57b1c1de83ac8ceTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\nquery products(\n  $field: ProductOrderField\n  $attributeId: ID\n  $direction: OrderDirection!\n) {\n  products(\n    first: 100\n    sortBy: { field: $field, attributeId: $attributeId, direction: $direction }\n  ) {\n    edges {\n      node {\n        name\n        attributes {\n          attribute {\n            slug\n          }\n          values {\n            name\n          }\n        }\n      }\n    }\n  }\n}\n", "variables": {"attributeId": "QXR0cmlidXRlOjc0MQ==", "direction": "DESC"}, "operationName": ""}
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
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('attributes', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['attributes']);
        
        $this->assertIsArray($responseContent['products']['edges'][$g]['node']['attributes']);
        
        for($f = 0; $f < count($responseContent['products']['edges'][$g]['node']['attributes']); $f++) {
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['attributes'][$f]);
        
        $this->assertArrayHasKey('attribute', $responseContent['products']['edges'][$g]['node']['attributes'][$f]);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['attributes'][$f]['attribute']);
        
        $this->assertArrayHasKey('slug', $responseContent['products']['edges'][$g]['node']['attributes'][$f]['attribute']);
        
        if ($responseContent['products']['edges'][$g]['node']['attributes'][$f]['attribute']['slug']) {
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['attributes'][$f]['attribute']['slug']);
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['products']['edges'][$g]['node']['attributes'][$f]);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values']);
        
        $this->assertIsArray($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values']);
        
        for($e = 0; $e < count($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values']); $e++) {
        
        if ($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values'][$e]) {
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']['attributes'][$f]['values'][$e]);
        
        if ($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values'][$e]['name']) {
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['attributes'][$f]['values'][$e]['name']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}