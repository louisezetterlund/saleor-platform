<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q7b1ad872b0745c07b7822c01aaf30e02Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query {\n        shop {\n            permissions {\n                code\n                name\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shop', $responseContent);
        
        $this->assertNotNull($responseContent['shop']);
        
        $this->assertArrayHasKey('permissions', $responseContent['shop']);
        
        $this->assertNotNull($responseContent['shop']['permissions']);
        
        $this->assertIsArray($responseContent['shop']['permissions']);
        
        for($g = 0; $g < count($responseContent['shop']['permissions']); $g++) {
        
        if ($responseContent['shop']['permissions'][$g]) {
        
        $this->assertArrayHasKey('code', $responseContent['shop']['permissions'][$g]);
        
        $this->assertNotNull($responseContent['shop']['permissions'][$g]['code']);
        
        $this->assertContains($responseContent['shop']['permissions'][$g]['code'], ['MANAGE_USERS', 'MANAGE_STAFF', 'MANAGE_SERVICE_ACCOUNTS', 'MANAGE_APPS', 'MANAGE_DISCOUNTS', 'MANAGE_PLUGINS', 'MANAGE_GIFT_CARD', 'MANAGE_MENUS', 'MANAGE_ORDERS', 'MANAGE_PAGES', 'MANAGE_PRODUCTS', 'MANAGE_PRODUCT_TYPES_AND_ATTRIBUTES', 'MANAGE_SHIPPING', 'MANAGE_SETTINGS', 'MANAGE_TRANSLATIONS', 'MANAGE_CHECKOUTS']);
        
        $this->assertArrayHasKey('name', $responseContent['shop']['permissions'][$g]);
        
        $this->assertNotNull($responseContent['shop']['permissions'][$g]['name']);
        
        $this->assertIsString($responseContent['shop']['permissions'][$g]['name']);
        
        }
        
        }
        

    }
}