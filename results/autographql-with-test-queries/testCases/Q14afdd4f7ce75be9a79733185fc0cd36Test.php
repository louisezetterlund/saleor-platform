<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q14afdd4f7ce75be9a79733185fc0cd36Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ($id: ID! ){\n        app(id: $id){\n            id\n            created\n            isActive\n            permissions{\n                code\n            }\n            tokens{\n                authToken\n            }\n            webhooks{\n                name\n            }\n            name\n            type\n            aboutApp\n            dataPrivacy\n            dataPrivacyUrl\n            homepageUrl\n            supportUrl\n            configurationUrl\n            appUrl\n            accessToken\n        }\n    }\n    ", "variables": {"id": "QXBwOjk2"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('app', $responseContent);
        
        if ($responseContent['app']) {
        
        $this->assertArrayHasKey('id', $responseContent['app']);
        
        $this->assertNotNull($responseContent['app']['id']);
        
        $this->assertArrayHasKey('created', $responseContent['app']);
        
        if ($responseContent['app']['created']) {
        
        }
        
        $this->assertArrayHasKey('isActive', $responseContent['app']);
        
        if ($responseContent['app']['isActive']) {
        
        $this->assertIsBool($responseContent['app']['isActive']);
        
        }
        
        $this->assertArrayHasKey('permissions', $responseContent['app']);
        
        if ($responseContent['app']['permissions']) {
        
        $this->assertIsArray($responseContent['app']['permissions']);
        
        for($g = 0; $g < count($responseContent['app']['permissions']); $g++) {
        
        if ($responseContent['app']['permissions'][$g]) {
        
        $this->assertArrayHasKey('code', $responseContent['app']['permissions'][$g]);
        
        $this->assertNotNull($responseContent['app']['permissions'][$g]['code']);
        
        $this->assertContains($responseContent['app']['permissions'][$g]['code'], ['MANAGE_USERS', 'MANAGE_STAFF', 'MANAGE_SERVICE_ACCOUNTS', 'MANAGE_APPS', 'MANAGE_DISCOUNTS', 'MANAGE_PLUGINS', 'MANAGE_GIFT_CARD', 'MANAGE_MENUS', 'MANAGE_ORDERS', 'MANAGE_PAGES', 'MANAGE_PRODUCTS', 'MANAGE_PRODUCT_TYPES_AND_ATTRIBUTES', 'MANAGE_SHIPPING', 'MANAGE_SETTINGS', 'MANAGE_TRANSLATIONS', 'MANAGE_CHECKOUTS']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('tokens', $responseContent['app']);
        
        if ($responseContent['app']['tokens']) {
        
        $this->assertIsArray($responseContent['app']['tokens']);
        
        for($g = 0; $g < count($responseContent['app']['tokens']); $g++) {
        
        if ($responseContent['app']['tokens'][$g]) {
        
        $this->assertArrayHasKey('authToken', $responseContent['app']['tokens'][$g]);
        
        if ($responseContent['app']['tokens'][$g]['authToken']) {
        
        $this->assertIsString($responseContent['app']['tokens'][$g]['authToken']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('webhooks', $responseContent['app']);
        
        if ($responseContent['app']['webhooks']) {
        
        $this->assertIsArray($responseContent['app']['webhooks']);
        
        for($g = 0; $g < count($responseContent['app']['webhooks']); $g++) {
        
        if ($responseContent['app']['webhooks'][$g]) {
        
        $this->assertArrayHasKey('name', $responseContent['app']['webhooks'][$g]);
        
        $this->assertNotNull($responseContent['app']['webhooks'][$g]['name']);
        
        $this->assertIsString($responseContent['app']['webhooks'][$g]['name']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('name', $responseContent['app']);
        
        if ($responseContent['app']['name']) {
        
        $this->assertIsString($responseContent['app']['name']);
        
        }
        
        $this->assertArrayHasKey('type', $responseContent['app']);
        
        if ($responseContent['app']['type']) {
        
        $this->assertContains($responseContent['app']['type'], ['LOCAL', 'THIRDPARTY']);
        
        }
        
        $this->assertArrayHasKey('aboutApp', $responseContent['app']);
        
        if ($responseContent['app']['aboutApp']) {
        
        $this->assertIsString($responseContent['app']['aboutApp']);
        
        }
        
        $this->assertArrayHasKey('dataPrivacy', $responseContent['app']);
        
        if ($responseContent['app']['dataPrivacy']) {
        
        $this->assertIsString($responseContent['app']['dataPrivacy']);
        
        }
        
        $this->assertArrayHasKey('dataPrivacyUrl', $responseContent['app']);
        
        if ($responseContent['app']['dataPrivacyUrl']) {
        
        $this->assertIsString($responseContent['app']['dataPrivacyUrl']);
        
        }
        
        $this->assertArrayHasKey('homepageUrl', $responseContent['app']);
        
        if ($responseContent['app']['homepageUrl']) {
        
        $this->assertIsString($responseContent['app']['homepageUrl']);
        
        }
        
        $this->assertArrayHasKey('supportUrl', $responseContent['app']);
        
        if ($responseContent['app']['supportUrl']) {
        
        $this->assertIsString($responseContent['app']['supportUrl']);
        
        }
        
        $this->assertArrayHasKey('configurationUrl', $responseContent['app']);
        
        if ($responseContent['app']['configurationUrl']) {
        
        $this->assertIsString($responseContent['app']['configurationUrl']);
        
        }
        
        $this->assertArrayHasKey('appUrl', $responseContent['app']);
        
        if ($responseContent['app']['appUrl']) {
        
        $this->assertIsString($responseContent['app']['appUrl']);
        
        }
        
        $this->assertArrayHasKey('accessToken', $responseContent['app']);
        
        if ($responseContent['app']['accessToken']) {
        
        $this->assertIsString($responseContent['app']['accessToken']);
        
        }
        
        }
        

    }
}