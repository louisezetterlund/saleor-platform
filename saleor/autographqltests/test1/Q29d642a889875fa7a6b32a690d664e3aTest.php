<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q29d642a889875fa7a6b32a690d664e3aTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n            query getProductType($id: ID!) {\n                productType(id: $id) {\n                    name\n                    products(first: 20) {\n                        totalCount\n                        edges {\n                            node {\n                                name\n                            }\n                        }\n                    }\n                    taxRate\n                    taxType {\n                        taxCode\n                        description\n                    }\n                }\n            }\n        ", "variables": {"id": "UHJvZHVjdFR5cGU6NDcw"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productType', $responseContent);
        
        if ($responseContent['productType']) {
        
        $this->assertArrayHasKey('name', $responseContent['productType']);
        
        $this->assertNotNull($responseContent['productType']['name']);
        
        $this->assertIsString($responseContent['productType']['name']);
        
        $this->assertArrayHasKey('products', $responseContent['productType']);
        
        if ($responseContent['productType']['products']) {
        
        $this->assertArrayHasKey('totalCount', $responseContent['productType']['products']);
        
        if ($responseContent['productType']['products']['totalCount']) {
        
        $this->assertIsInt($responseContent['productType']['products']['totalCount']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['productType']['products']);
        
        $this->assertNotNull($responseContent['productType']['products']['edges']);
        
        $this->assertIsArray($responseContent['productType']['products']['edges']);
        
        for($g = 0; $g < count($responseContent['productType']['products']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['productType']['products']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['productType']['products']['edges'][$g]);
        
        $this->assertNotNull($responseContent['productType']['products']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('name', $responseContent['productType']['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productType']['products']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['productType']['products']['edges'][$g]['node']['name']);
        
        }
        
        }
        
        $this->assertArrayHasKey('taxRate', $responseContent['productType']);
        
        if ($responseContent['productType']['taxRate']) {
        
        $this->assertContains($responseContent['productType']['taxRate'], ['ACCOMMODATION', 'ADMISSION_TO_CULTURAL_EVENTS', 'ADMISSION_TO_ENTERTAINMENT_EVENTS', 'ADMISSION_TO_SPORTING_EVENTS', 'ADVERTISING', 'AGRICULTURAL_SUPPLIES', 'BABY_FOODSTUFFS', 'BIKES', 'BOOKS', 'CHILDRENS_CLOTHING', 'DOMESTIC_FUEL', 'DOMESTIC_SERVICES', 'E_BOOKS', 'FOODSTUFFS', 'HOTELS', 'MEDICAL', 'NEWSPAPERS', 'PASSENGER_TRANSPORT', 'PHARMACEUTICALS', 'PROPERTY_RENOVATIONS', 'RESTAURANTS', 'SOCIAL_HOUSING', 'STANDARD', 'WATER', 'WINE']);
        
        }
        
        $this->assertArrayHasKey('taxType', $responseContent['productType']);
        
        if ($responseContent['productType']['taxType']) {
        
        $this->assertArrayHasKey('taxCode', $responseContent['productType']['taxType']);
        
        if ($responseContent['productType']['taxType']['taxCode']) {
        
        $this->assertIsString($responseContent['productType']['taxType']['taxCode']);
        
        }
        
        $this->assertArrayHasKey('description', $responseContent['productType']['taxType']);
        
        if ($responseContent['productType']['taxType']['description']) {
        
        $this->assertIsString($responseContent['productType']['taxType']['description']);
        
        }
        
        }
        
        }
        

    }
}