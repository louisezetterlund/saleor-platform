<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q128d2fbec6db5212aa92bc6f7e3ddf2aTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "query CoverEmAll {\n  productVariants(first: 10) {\n    edges {\n      node {\n        id\n        name\n      }\n    }\n  }\n}\n\nquery CoverEmAll2 {\n  productVariant(id: \"UHJvZHVjdFZhcmlhbnQ6MzE0\") {\n    id\n    name\n    product {\n      name\n    }\n  }\n}\n", "variables": {}, "operationName": "CoverEmAll2"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productVariant', $responseContent);
        
        if ($responseContent['productVariant']) {
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['name']);
        
        $this->assertIsString($responseContent['productVariant']['name']);
        
        $this->assertArrayHasKey('product', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['product']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariant']['product']);
        
        $this->assertNotNull($responseContent['productVariant']['product']['name']);
        
        $this->assertIsString($responseContent['productVariant']['product']['name']);
        
        }
        

    }
}