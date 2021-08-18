<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q5f34d25d7f3a52b9ae22ebe4fa9a280aTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    {\n        translations(kind: PRODUCT, first: 1) {\n            edges {\n                node {\n                    ... on ProductTranslatableContent {\n                        name\n                        translation(languageCode: PL) {\n                            name\n                        }\n                    }\n                }\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('translations', $responseContent);
        
        if ($responseContent['translations']) {
        
        $this->assertArrayHasKey('edges', $responseContent['translations']);
        
        $this->assertNotNull($responseContent['translations']['edges']);
        
        $this->assertIsArray($responseContent['translations']['edges']);
        
        for($g = 0; $g < count($responseContent['translations']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['translations']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['translations']['edges'][$g]);
        
        $this->assertNotNull($responseContent['translations']['edges'][$g]['node']);
        
        }
        
        }
        

    }
}