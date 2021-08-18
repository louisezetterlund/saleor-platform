<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q922bd49f550e5161a3d4598052fe0c91Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ($filter: AppFilterInput ){\n        apps(first: 5, filter: $filter){\n            edges{\n                node{\n                    id\n                    isActive\n                    permissions{\n                        name\n                        code\n                    }\n                    tokens{\n                        authToken\n                    }\n                    webhooks{\n                        name\n                    }\n                    name\n                    type\n                    aboutApp\n                    dataPrivacy\n                    dataPrivacyUrl\n                    homepageUrl\n                    supportUrl\n                    configurationUrl\n                    appUrl\n                }\n            }\n        }\n    }\n    ", "variables": {"filter": {}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('apps', $responseContent);
        
        if ($responseContent['apps']) {
        
        $this->assertArrayHasKey('edges', $responseContent['apps']);
        
        $this->assertNotNull($responseContent['apps']['edges']);
        
        $this->assertIsArray($responseContent['apps']['edges']);
        
        for($g = 0; $g < count($responseContent['apps']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['apps']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['apps']['edges'][$g]);
        
        $this->assertNotNull($responseContent['apps']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['apps']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['apps']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('isActive', $responseContent['apps']['edges'][$g]['node']);
        
        if ($responseContent['apps']['edges'][$g]['node']['isActive']) {
        
        $this->assertIsBool($responseContent['apps']['edges'][$g]['node']['isActive']);
        
        }
        
        $this->assertArrayHasKey('permissions', $responseContent['apps']['edges'][$g]['node']);
        
        if ($responseContent['apps']['edges'][$g]['node']['permissions']) {
        
        $this->assertIsArray($responseContent['apps']['edges'][$g]['node']['permissions']);
        
        for($f = 0; $f < count($responseContent['apps']['edges'][$g]['node']['permissions']); $f++) {
        
        if ($responseContent['apps']['edges'][$g]['node']['permissions'][$f]) {
        
        $this->assertArrayHasKey('name', $responseContent['apps']['edges'][$g]['node']['permissions'][$f]);
        
        $this->assertNotNull($responseContent['apps']['edges'][$g]['node']['permissions'][$f]['name']);
        
        $this->assertIsString($responseContent['apps']['edges'][$g]['node']['permissions'][$f]['name']);
        
        $this->assertArrayHasKey('code', $responseContent['apps']['edges'][$g]['node']['permissions'][$f]);
        
        $this->assertNotNull($responseContent['apps']['edges'][$g]['node']['permissions'][$f]['code']);
        
        $this->assertContains($responseContent['apps']['edges'][$g]['node']['permissions'][$f]['code'], ['MANAGE_USERS', 'MANAGE_STAFF', 'MANAGE_SERVICE_ACCOUNTS', 'MANAGE_APPS', 'MANAGE_DISCOUNTS', 'MANAGE_PLUGINS', 'MANAGE_GIFT_CARD', 'MANAGE_MENUS', 'MANAGE_ORDERS', 'MANAGE_PAGES', 'MANAGE_PRODUCTS', 'MANAGE_PRODUCT_TYPES_AND_ATTRIBUTES', 'MANAGE_SHIPPING', 'MANAGE_SETTINGS', 'MANAGE_TRANSLATIONS', 'MANAGE_CHECKOUTS']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('tokens', $responseContent['apps']['edges'][$g]['node']);
        
        if ($responseContent['apps']['edges'][$g]['node']['tokens']) {
        
        $this->assertIsArray($responseContent['apps']['edges'][$g]['node']['tokens']);
        
        for($f = 0; $f < count($responseContent['apps']['edges'][$g]['node']['tokens']); $f++) {
        
        if ($responseContent['apps']['edges'][$g]['node']['tokens'][$f]) {
        
        $this->assertArrayHasKey('authToken', $responseContent['apps']['edges'][$g]['node']['tokens'][$f]);
        
        if ($responseContent['apps']['edges'][$g]['node']['tokens'][$f]['authToken']) {
        
        $this->assertIsString($responseContent['apps']['edges'][$g]['node']['tokens'][$f]['authToken']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('webhooks', $responseContent['apps']['edges'][$g]['node']);
        
        if ($responseContent['apps']['edges'][$g]['node']['webhooks']) {
        
        $this->assertIsArray($responseContent['apps']['edges'][$g]['node']['webhooks']);
        
        for($f = 0; $f < count($responseContent['apps']['edges'][$g]['node']['webhooks']); $f++) {
        
        if ($responseContent['apps']['edges'][$g]['node']['webhooks'][$f]) {
        
        $this->assertArrayHasKey('name', $responseContent['apps']['edges'][$g]['node']['webhooks'][$f]);
        
        $this->assertNotNull($responseContent['apps']['edges'][$g]['node']['webhooks'][$f]['name']);
        
        $this->assertIsString($responseContent['apps']['edges'][$g]['node']['webhooks'][$f]['name']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('name', $responseContent['apps']['edges'][$g]['node']);
        
        if ($responseContent['apps']['edges'][$g]['node']['name']) {
        
        $this->assertIsString($responseContent['apps']['edges'][$g]['node']['name']);
        
        }
        
        $this->assertArrayHasKey('type', $responseContent['apps']['edges'][$g]['node']);
        
        if ($responseContent['apps']['edges'][$g]['node']['type']) {
        
        $this->assertContains($responseContent['apps']['edges'][$g]['node']['type'], ['LOCAL', 'THIRDPARTY']);
        
        }
        
        $this->assertArrayHasKey('aboutApp', $responseContent['apps']['edges'][$g]['node']);
        
        if ($responseContent['apps']['edges'][$g]['node']['aboutApp']) {
        
        $this->assertIsString($responseContent['apps']['edges'][$g]['node']['aboutApp']);
        
        }
        
        $this->assertArrayHasKey('dataPrivacy', $responseContent['apps']['edges'][$g]['node']);
        
        if ($responseContent['apps']['edges'][$g]['node']['dataPrivacy']) {
        
        $this->assertIsString($responseContent['apps']['edges'][$g]['node']['dataPrivacy']);
        
        }
        
        $this->assertArrayHasKey('dataPrivacyUrl', $responseContent['apps']['edges'][$g]['node']);
        
        if ($responseContent['apps']['edges'][$g]['node']['dataPrivacyUrl']) {
        
        $this->assertIsString($responseContent['apps']['edges'][$g]['node']['dataPrivacyUrl']);
        
        }
        
        $this->assertArrayHasKey('homepageUrl', $responseContent['apps']['edges'][$g]['node']);
        
        if ($responseContent['apps']['edges'][$g]['node']['homepageUrl']) {
        
        $this->assertIsString($responseContent['apps']['edges'][$g]['node']['homepageUrl']);
        
        }
        
        $this->assertArrayHasKey('supportUrl', $responseContent['apps']['edges'][$g]['node']);
        
        if ($responseContent['apps']['edges'][$g]['node']['supportUrl']) {
        
        $this->assertIsString($responseContent['apps']['edges'][$g]['node']['supportUrl']);
        
        }
        
        $this->assertArrayHasKey('configurationUrl', $responseContent['apps']['edges'][$g]['node']);
        
        if ($responseContent['apps']['edges'][$g]['node']['configurationUrl']) {
        
        $this->assertIsString($responseContent['apps']['edges'][$g]['node']['configurationUrl']);
        
        }
        
        $this->assertArrayHasKey('appUrl', $responseContent['apps']['edges'][$g]['node']);
        
        if ($responseContent['apps']['edges'][$g]['node']['appUrl']) {
        
        $this->assertIsString($responseContent['apps']['edges'][$g]['node']['appUrl']);
        
        }
        
        }
        
        }
        

    }
}