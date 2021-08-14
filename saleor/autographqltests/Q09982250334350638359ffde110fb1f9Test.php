<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q09982250334350638359ffde110fb1f9Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query {\n        shop {\n            authorizationKeys {\n                name\n                key\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shop', $responseContent);
        
        $this->assertNotNull($responseContent['shop']);
        
        $this->assertArrayHasKey('authorizationKeys', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['authorizationKeys']);
        
        $this->assertIsArray($responseContent['shop']['authorizationKeys']);
        
        for($g = 0; $g < count($responseContent['shop']['authorizationKeys']); $g++) {
        
        if ($responseContent['shop']['authorizationKeys'][$g]) {
        
        $this->assertArrayHasKey('name', $responseContent['shop']['authorizationKeys'][$g]);
        
        $this->assertNotNull($responseContent['shop']['authorizationKeys'][$g]['name']);
        
        $this->assertContains($responseContent['shop']['authorizationKeys'][$g]['name'], ['FACEBOOK', 'GOOGLE_OAUTH2']);
        
        $this->assertArrayHasKey('key', $responseContent['shop']['authorizationKeys'][$g]);
        
        $this->assertNotNull($responseContent['shop']['authorizationKeys'][$g]['key']);
        
        $this->assertIsString($responseContent['shop']['authorizationKeys'][$g]['key']);
        
        }
        
        }
        

    }
}