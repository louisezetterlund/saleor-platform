<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q4cf2e93285de5f7f8eb69bd8073bee15Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ($filter: PermissionGroupFilterInput ){\n        permissionGroups(first: 5, filter: $filter){\n            edges{\n                node{\n                    id\n                    name\n                    permissions{\n                        name\n                        code\n                    }\n                    users {\n                        email\n                    }\n                    userCanManage\n                }\n            }\n        }\n    }\n    ", "variables": {"filter": {}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('permissionGroups', $responseContent);
        
        if ($responseContent['permissionGroups']) {
        
        $this->assertArrayHasKey('edges', $responseContent['permissionGroups']);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges']);
        
        $this->assertIsArray($responseContent['permissionGroups']['edges']);
        
        for($g = 0; $g < count($responseContent['permissionGroups']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['permissionGroups']['edges'][$g]);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['permissionGroups']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['permissionGroups']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['permissionGroups']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('permissions', $responseContent['permissionGroups']['edges'][$g]['node']);
        
        if ($responseContent['permissionGroups']['edges'][$g]['node']['permissions']) {
        
        $this->assertIsArray($responseContent['permissionGroups']['edges'][$g]['node']['permissions']);
        
        for($f = 0; $f < count($responseContent['permissionGroups']['edges'][$g]['node']['permissions']); $f++) {
        
        if ($responseContent['permissionGroups']['edges'][$g]['node']['permissions'][$f]) {
        
        $this->assertArrayHasKey('name', $responseContent['permissionGroups']['edges'][$g]['node']['permissions'][$f]);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]['node']['permissions'][$f]['name']);
        
        $this->assertIsString($responseContent['permissionGroups']['edges'][$g]['node']['permissions'][$f]['name']);
        
        $this->assertArrayHasKey('code', $responseContent['permissionGroups']['edges'][$g]['node']['permissions'][$f]);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]['node']['permissions'][$f]['code']);
        
        $this->assertContains($responseContent['permissionGroups']['edges'][$g]['node']['permissions'][$f]['code'], ['MANAGE_USERS', 'MANAGE_STAFF', 'MANAGE_SERVICE_ACCOUNTS', 'MANAGE_APPS', 'MANAGE_DISCOUNTS', 'MANAGE_PLUGINS', 'MANAGE_GIFT_CARD', 'MANAGE_MENUS', 'MANAGE_ORDERS', 'MANAGE_PAGES', 'MANAGE_PRODUCTS', 'MANAGE_PRODUCT_TYPES_AND_ATTRIBUTES', 'MANAGE_SHIPPING', 'MANAGE_SETTINGS', 'MANAGE_TRANSLATIONS', 'MANAGE_CHECKOUTS']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('users', $responseContent['permissionGroups']['edges'][$g]['node']);
        
        if ($responseContent['permissionGroups']['edges'][$g]['node']['users']) {
        
        $this->assertIsArray($responseContent['permissionGroups']['edges'][$g]['node']['users']);
        
        for($f = 0; $f < count($responseContent['permissionGroups']['edges'][$g]['node']['users']); $f++) {
        
        if ($responseContent['permissionGroups']['edges'][$g]['node']['users'][$f]) {
        
        $this->assertArrayHasKey('email', $responseContent['permissionGroups']['edges'][$g]['node']['users'][$f]);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]['node']['users'][$f]['email']);
        
        $this->assertIsString($responseContent['permissionGroups']['edges'][$g]['node']['users'][$f]['email']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('userCanManage', $responseContent['permissionGroups']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['permissionGroups']['edges'][$g]['node']['userCanManage']);
        
        $this->assertIsBool($responseContent['permissionGroups']['edges'][$g]['node']['userCanManage']);
        
        }
        
        }
        

    }
}