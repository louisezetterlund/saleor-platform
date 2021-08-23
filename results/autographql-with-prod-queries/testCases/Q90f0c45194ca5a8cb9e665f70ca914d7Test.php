<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q90f0c45194ca5a8cb9e665f70ca914d7Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query CoverEmAll {\n  productVariants(first: 10) {\n    edges {\n      node {\n        id\n        name\n      }\n    }\n  }\n}\n", "variables": {}, "operationName": "CoverEmAll"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productVariants', $responseContent);
        
        if ($responseContent['productVariants']) {
        
        $this->assertArrayHasKey('edges', $responseContent['productVariants']);
        
        $this->assertNotNull($responseContent['productVariants']['edges']);
        
        $this->assertIsArray($responseContent['productVariants']['edges']);
        
        for($g = 0; $g < count($responseContent['productVariants']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['productVariants']['edges'][$g]);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['name']);
        
        }
        
        }
        

    }
}