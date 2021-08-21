<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q75fc9cb2750c53fe86210e6fa12b73cfTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        query ProductsList {\n          shop {\n            description\n            name\n            homepageCollection {\n              id\n              backgroundImage {\n                url\n              }\n              name\n            }\n          }\n          categories(level: 0, first: 4) {\n            edges {\n              node {\n                id\n                name\n                backgroundImage {\n                  url\n                }\n              }\n            }\n          }\n        }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shop', $responseContent);
        
        $this->assertNotNull($responseContent['shop']);
        
        $this->assertArrayHasKey('description', $responseContent['shop']);
        
        if ($responseContent['shop']['description']) {
        
        $this->assertIsString($responseContent['shop']['description']);
        
        }
        
        $this->assertArrayHasKey('name', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['name']);
        
        $this->assertIsString($responseContent['shop']['name']);
        
        $this->assertArrayHasKey('categories', $responseContent);
        
        if ($responseContent['categories']) {
        
        $this->assertArrayHasKey('edges', $responseContent['categories']);
        
        $this->assertNotNull($responseContent['categories']['edges']);
        
        $this->assertIsArray($responseContent['categories']['edges']);
        
        for($g = 0; $g < count($responseContent['categories']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['categories']['edges'][$g]);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['categories']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['categories']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['categories']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('backgroundImage', $responseContent['categories']['edges'][$g]['node']);
        
        if ($responseContent['categories']['edges'][$g]['node']['backgroundImage']) {
        
        $this->assertArrayHasKey('url', $responseContent['categories']['edges'][$g]['node']['backgroundImage']);
        
        $this->assertNotNull($responseContent['categories']['edges'][$g]['node']['backgroundImage']['url']);
        
        $this->assertIsString($responseContent['categories']['edges'][$g]['node']['backgroundImage']['url']);
        
        }
        
        }
        
        }
        

    }
}