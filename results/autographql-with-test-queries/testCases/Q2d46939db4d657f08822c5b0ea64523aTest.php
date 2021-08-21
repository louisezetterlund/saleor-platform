<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q2d46939db4d657f08822c5b0ea64523aTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ($id: ID!){\n        permissionGroup(id: $id){\n            id\n            name\n            permissions {\n                name\n                code\n            }\n            users{\n                email\n            }\n            userCanManage\n        }\n    }\n    ", "variables": {"id": "R3JvdXA6NTg="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('permissionGroup', $responseContent);
        
        if ($responseContent['permissionGroup']) {
        
        $this->assertArrayHasKey('id', $responseContent['permissionGroup']);
        
        $this->assertNotNull($responseContent['permissionGroup']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['permissionGroup']);
        
        $this->assertNotNull($responseContent['permissionGroup']['name']);
        
        $this->assertIsString($responseContent['permissionGroup']['name']);
        
        $this->assertArrayHasKey('permissions', $responseContent['permissionGroup']);
        
        if ($responseContent['permissionGroup']['permissions']) {
        
        $this->assertIsArray($responseContent['permissionGroup']['permissions']);
        
        for($g = 0; $g < count($responseContent['permissionGroup']['permissions']); $g++) {
        
        if ($responseContent['permissionGroup']['permissions'][$g]) {
        
        $this->assertArrayHasKey('name', $responseContent['permissionGroup']['permissions'][$g]);
        
        $this->assertNotNull($responseContent['permissionGroup']['permissions'][$g]['name']);
        
        $this->assertIsString($responseContent['permissionGroup']['permissions'][$g]['name']);
        
        $this->assertArrayHasKey('code', $responseContent['permissionGroup']['permissions'][$g]);
        
        $this->assertNotNull($responseContent['permissionGroup']['permissions'][$g]['code']);
        
        $this->assertContains($responseContent['permissionGroup']['permissions'][$g]['code'], ['MANAGE_USERS', 'MANAGE_STAFF', 'MANAGE_SERVICE_ACCOUNTS', 'MANAGE_APPS', 'MANAGE_DISCOUNTS', 'MANAGE_PLUGINS', 'MANAGE_GIFT_CARD', 'MANAGE_MENUS', 'MANAGE_ORDERS', 'MANAGE_PAGES', 'MANAGE_PRODUCTS', 'MANAGE_PRODUCT_TYPES_AND_ATTRIBUTES', 'MANAGE_SHIPPING', 'MANAGE_SETTINGS', 'MANAGE_TRANSLATIONS', 'MANAGE_CHECKOUTS']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('users', $responseContent['permissionGroup']);
        
        if ($responseContent['permissionGroup']['users']) {
        
        $this->assertIsArray($responseContent['permissionGroup']['users']);
        
        for($g = 0; $g < count($responseContent['permissionGroup']['users']); $g++) {
        
        if ($responseContent['permissionGroup']['users'][$g]) {
        
        $this->assertArrayHasKey('email', $responseContent['permissionGroup']['users'][$g]);
        
        $this->assertNotNull($responseContent['permissionGroup']['users'][$g]['email']);
        
        $this->assertIsString($responseContent['permissionGroup']['users'][$g]['email']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('userCanManage', $responseContent['permissionGroup']);
        
        $this->assertNotNull($responseContent['permissionGroup']['userCanManage']);
        
        $this->assertIsBool($responseContent['permissionGroup']['userCanManage']);
        
        }
        

    }
}