<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q82fb61f799cb57549d3cdb3de354494aTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query {\n        shop{\n            companyAddress{\n                city\n                streetAddress1\n                postalCode\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shop', $responseContent);
        
        $this->assertNotNull($responseContent['shop']);
        
        $this->assertArrayHasKey('companyAddress', $responseContent['shop']);
        
        if ($responseContent['shop']['companyAddress']) {
        
        $this->assertArrayHasKey('city', $responseContent['shop']['companyAddress']);
        
        $this->assertNotNull($responseContent['shop']['companyAddress']['city']);
        
        $this->assertIsString($responseContent['shop']['companyAddress']['city']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['shop']['companyAddress']);
        
        $this->assertNotNull($responseContent['shop']['companyAddress']['streetAddress1']);
        
        $this->assertIsString($responseContent['shop']['companyAddress']['streetAddress1']);
        
        $this->assertArrayHasKey('postalCode', $responseContent['shop']['companyAddress']);
        
        $this->assertNotNull($responseContent['shop']['companyAddress']['postalCode']);
        
        $this->assertIsString($responseContent['shop']['companyAddress']['postalCode']);
        
        }
        

    }
}