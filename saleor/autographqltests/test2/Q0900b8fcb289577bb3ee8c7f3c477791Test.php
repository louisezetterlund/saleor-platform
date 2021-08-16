<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q0900b8fcb289577bb3ee8c7f3c477791Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query attributeMeta($id: ID!){\n        attribute(id: $id){\n            metadata{\n                key\n                value\n            }\n        }\n    }\n", "variables": {"id": "QXR0cmlidXRlOjIzNw=="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('attribute', $responseContent);
        
        if ($responseContent['attribute']) {
        
        $this->assertArrayHasKey('metadata', $responseContent['attribute']);
        
        $this->assertNotNull($responseContent['attribute']['metadata']);
        
        $this->assertIsArray($responseContent['attribute']['metadata']);
        
        for($g = 0; $g < count($responseContent['attribute']['metadata']); $g++) {
        
        if ($responseContent['attribute']['metadata'][$g]) {
        
        $this->assertArrayHasKey('key', $responseContent['attribute']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['attribute']['metadata'][$g]['key']);
        
        $this->assertIsString($responseContent['attribute']['metadata'][$g]['key']);
        
        $this->assertArrayHasKey('value', $responseContent['attribute']['metadata'][$g]);
        
        $this->assertNotNull($responseContent['attribute']['metadata'][$g]['value']);
        
        $this->assertIsString($responseContent['attribute']['metadata'][$g]['value']);
        
        }
        
        }
        
        }
        

    }
}