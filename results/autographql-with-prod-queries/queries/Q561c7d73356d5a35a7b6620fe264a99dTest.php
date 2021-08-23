<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q561c7d73356d5a35a7b6620fe264a99dTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query CoverEmAll {\n  translations(kind: PRODUCT) {\n    edges {\n      cursor\n      node {\n        __typename\n      }\n    }\n  }\n}\n", "variables": {}, "operationName": "CoverEmAll"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
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
        
        $this->assertArrayHasKey('cursor', $responseContent['translations']['edges'][$g]);
        
        $this->assertNotNull($responseContent['translations']['edges'][$g]['cursor']);
        
        $this->assertIsString($responseContent['translations']['edges'][$g]['cursor']);
        
        $this->assertArrayHasKey('node', $responseContent['translations']['edges'][$g]);
        
        $this->assertNotNull($responseContent['translations']['edges'][$g]['node']);
        
        }
        
        }
        

    }
}