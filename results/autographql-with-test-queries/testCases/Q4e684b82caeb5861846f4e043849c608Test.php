<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q4e684b82caeb5861846f4e043849c608Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\nquery CollectionProducts($id: ID!, $filters: ProductFilterInput) {\n  collection(id: $id) {\n    products(first: 10, filter: $filters) {\n      edges {\n        node {\n          id\n          attributes {\n            attribute {\n              values {\n                slug\n              }\n            }\n          }\n        }\n      }\n    }\n  }\n}\n", "variables": "{\"id\": \"Q29sbGVjdGlvbjozNg==\", \"filters\": {\"isPublished\": True}}", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('collection', $responseContent);
        
        if ($responseContent['collection']) {
        
        $this->assertArrayHasKey('products', $responseContent['collection']);
        
        if ($responseContent['collection']['products']) {
        
        $this->assertArrayHasKey('edges', $responseContent['collection']['products']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges']);
        
        $this->assertIsArray($responseContent['collection']['products']['edges']);
        
        for($g = 0; $g < count($responseContent['collection']['products']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['collection']['products']['edges'][$g]);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['collection']['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('attributes', $responseContent['collection']['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['attributes']);
        
        $this->assertIsArray($responseContent['collection']['products']['edges'][$g]['node']['attributes']);
        
        for($f = 0; $f < count($responseContent['collection']['products']['edges'][$g]['node']['attributes']); $f++) {
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['attributes'][$f]);
        
        $this->assertArrayHasKey('attribute', $responseContent['collection']['products']['edges'][$g]['node']['attributes'][$f]);
        
        $this->assertNotNull($responseContent['collection']['products']['edges'][$g]['node']['attributes'][$f]['attribute']);
        
        $this->assertArrayHasKey('values', $responseContent['collection']['products']['edges'][$g]['node']['attributes'][$f]['attribute']);
        
        if ($responseContent['collection']['products']['edges'][$g]['node']['attributes'][$f]['attribute']['values']) {
        
        $this->assertIsArray($responseContent['collection']['products']['edges'][$g]['node']['attributes'][$f]['attribute']['values']);
        
        for($e = 0; $e < count($responseContent['collection']['products']['edges'][$g]['node']['attributes'][$f]['attribute']['values']); $e++) {
        
        if ($responseContent['collection']['products']['edges'][$g]['node']['attributes'][$f]['attribute']['values'][$e]) {
        
        $this->assertArrayHasKey('slug', $responseContent['collection']['products']['edges'][$g]['node']['attributes'][$f]['attribute']['values'][$e]);
        
        if ($responseContent['collection']['products']['edges'][$g]['node']['attributes'][$f]['attribute']['values'][$e]['slug']) {
        
        $this->assertIsString($responseContent['collection']['products']['edges'][$g]['node']['attributes'][$f]['attribute']['values'][$e]['slug']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}