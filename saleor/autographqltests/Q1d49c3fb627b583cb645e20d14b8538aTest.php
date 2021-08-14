<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q1d49c3fb627b583cb645e20d14b8538aTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query User($id: ID!) {\n        user(id: $id) {\n            email\n            firstName\n            lastName\n            isStaff\n            isActive\n            addresses {\n                id\n                isDefaultShippingAddress\n                isDefaultBillingAddress\n            }\n            orders {\n                totalCount\n            }\n            dateJoined\n            lastLogin\n            defaultShippingAddress {\n                firstName\n                lastName\n                companyName\n                streetAddress1\n                streetAddress2\n                city\n                cityArea\n                postalCode\n                countryArea\n                phone\n                country {\n                    code\n                }\n                isDefaultShippingAddress\n                isDefaultBillingAddress\n            }\n            defaultBillingAddress {\n                firstName\n                lastName\n                companyName\n                streetAddress1\n                streetAddress2\n                city\n                cityArea\n                postalCode\n                countryArea\n                phone\n                country {\n                    code\n                }\n                isDefaultShippingAddress\n                isDefaultBillingAddress\n            }\n            avatar {\n                url\n            }\n            permissions {\n                code\n            }\n            userPermissions {\n                code\n                sourcePermissionGroups(userId: $id) {\n                    name\n                }\n            }\n            permissionGroups {\n                name\n                permissions {\n                    code\n                }\n            }\n            editableGroups {\n                name\n            }\n        }\n    }\n", "variables": {"id": "VXNlcjo1Mg=="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('user', $responseContent);
        
        if ($responseContent['user']) {
        
        $this->assertArrayHasKey('email', $responseContent['user']);
        
        $this->assertNotNull($responseContent['user']['email']);
        
        $this->assertIsString($responseContent['user']['email']);
        
        $this->assertArrayHasKey('firstName', $responseContent['user']);
        
        $this->assertNotNull($responseContent['user']['firstName']);
        
        $this->assertIsString($responseContent['user']['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['user']);
        
        $this->assertNotNull($responseContent['user']['lastName']);
        
        $this->assertIsString($responseContent['user']['lastName']);
        
        $this->assertArrayHasKey('isStaff', $responseContent['user']);
        
        $this->assertNotNull($responseContent['user']['isStaff']);
        
        $this->assertIsBool($responseContent['user']['isStaff']);
        
        $this->assertArrayHasKey('isActive', $responseContent['user']);
        
        $this->assertNotNull($responseContent['user']['isActive']);
        
        $this->assertIsBool($responseContent['user']['isActive']);
        
        $this->assertArrayHasKey('addresses', $responseContent['user']);
        
        if ($responseContent['user']['addresses']) {
        
        $this->assertIsArray($responseContent['user']['addresses']);
        
        for($g = 0; $g < count($responseContent['user']['addresses']); $g++) {
        
        if ($responseContent['user']['addresses'][$g]) {
        
        $this->assertArrayHasKey('id', $responseContent['user']['addresses'][$g]);
        
        $this->assertNotNull($responseContent['user']['addresses'][$g]['id']);
        
        $this->assertArrayHasKey('isDefaultShippingAddress', $responseContent['user']['addresses'][$g]);
        
        if ($responseContent['user']['addresses'][$g]['isDefaultShippingAddress']) {
        
        $this->assertIsBool($responseContent['user']['addresses'][$g]['isDefaultShippingAddress']);
        
        }
        
        $this->assertArrayHasKey('isDefaultBillingAddress', $responseContent['user']['addresses'][$g]);
        
        if ($responseContent['user']['addresses'][$g]['isDefaultBillingAddress']) {
        
        $this->assertIsBool($responseContent['user']['addresses'][$g]['isDefaultBillingAddress']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('orders', $responseContent['user']);
        
        if ($responseContent['user']['orders']) {
        
        $this->assertArrayHasKey('totalCount', $responseContent['user']['orders']);
        
        if ($responseContent['user']['orders']['totalCount']) {
        
        $this->assertIsInt($responseContent['user']['orders']['totalCount']);
        
        }
        
        }
        
        $this->assertArrayHasKey('dateJoined', $responseContent['user']);
        
        $this->assertNotNull($responseContent['user']['dateJoined']);
        
        $this->assertArrayHasKey('lastLogin', $responseContent['user']);
        
        if ($responseContent['user']['lastLogin']) {
        
        }
        
        $this->assertArrayHasKey('defaultShippingAddress', $responseContent['user']);
        
        if ($responseContent['user']['defaultShippingAddress']) {
        
        $this->assertArrayHasKey('firstName', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['firstName']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['lastName']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['lastName']);
        
        $this->assertArrayHasKey('companyName', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['companyName']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['companyName']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['streetAddress1']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['streetAddress2']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['streetAddress2']);
        
        $this->assertArrayHasKey('city', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['city']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['city']);
        
        $this->assertArrayHasKey('cityArea', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['cityArea']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['cityArea']);
        
        $this->assertArrayHasKey('postalCode', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['postalCode']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['postalCode']);
        
        $this->assertArrayHasKey('countryArea', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['countryArea']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['countryArea']);
        
        $this->assertArrayHasKey('phone', $responseContent['user']['defaultShippingAddress']);
        
        if ($responseContent['user']['defaultShippingAddress']['phone']) {
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['phone']);
        
        }
        
        $this->assertArrayHasKey('country', $responseContent['user']['defaultShippingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['country']);
        
        $this->assertArrayHasKey('code', $responseContent['user']['defaultShippingAddress']['country']);
        
        $this->assertNotNull($responseContent['user']['defaultShippingAddress']['country']['code']);
        
        $this->assertIsString($responseContent['user']['defaultShippingAddress']['country']['code']);
        
        $this->assertArrayHasKey('isDefaultShippingAddress', $responseContent['user']['defaultShippingAddress']);
        
        if ($responseContent['user']['defaultShippingAddress']['isDefaultShippingAddress']) {
        
        $this->assertIsBool($responseContent['user']['defaultShippingAddress']['isDefaultShippingAddress']);
        
        }
        
        $this->assertArrayHasKey('isDefaultBillingAddress', $responseContent['user']['defaultShippingAddress']);
        
        if ($responseContent['user']['defaultShippingAddress']['isDefaultBillingAddress']) {
        
        $this->assertIsBool($responseContent['user']['defaultShippingAddress']['isDefaultBillingAddress']);
        
        }
        
        }
        
        $this->assertArrayHasKey('defaultBillingAddress', $responseContent['user']);
        
        if ($responseContent['user']['defaultBillingAddress']) {
        
        $this->assertArrayHasKey('firstName', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['firstName']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['lastName']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['lastName']);
        
        $this->assertArrayHasKey('companyName', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['companyName']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['companyName']);
        
        $this->assertArrayHasKey('streetAddress1', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['streetAddress1']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['streetAddress1']);
        
        $this->assertArrayHasKey('streetAddress2', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['streetAddress2']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['streetAddress2']);
        
        $this->assertArrayHasKey('city', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['city']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['city']);
        
        $this->assertArrayHasKey('cityArea', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['cityArea']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['cityArea']);
        
        $this->assertArrayHasKey('postalCode', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['postalCode']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['postalCode']);
        
        $this->assertArrayHasKey('countryArea', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['countryArea']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['countryArea']);
        
        $this->assertArrayHasKey('phone', $responseContent['user']['defaultBillingAddress']);
        
        if ($responseContent['user']['defaultBillingAddress']['phone']) {
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['phone']);
        
        }
        
        $this->assertArrayHasKey('country', $responseContent['user']['defaultBillingAddress']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['country']);
        
        $this->assertArrayHasKey('code', $responseContent['user']['defaultBillingAddress']['country']);
        
        $this->assertNotNull($responseContent['user']['defaultBillingAddress']['country']['code']);
        
        $this->assertIsString($responseContent['user']['defaultBillingAddress']['country']['code']);
        
        $this->assertArrayHasKey('isDefaultShippingAddress', $responseContent['user']['defaultBillingAddress']);
        
        if ($responseContent['user']['defaultBillingAddress']['isDefaultShippingAddress']) {
        
        $this->assertIsBool($responseContent['user']['defaultBillingAddress']['isDefaultShippingAddress']);
        
        }
        
        $this->assertArrayHasKey('isDefaultBillingAddress', $responseContent['user']['defaultBillingAddress']);
        
        if ($responseContent['user']['defaultBillingAddress']['isDefaultBillingAddress']) {
        
        $this->assertIsBool($responseContent['user']['defaultBillingAddress']['isDefaultBillingAddress']);
        
        }
        
        }
        
        $this->assertArrayHasKey('avatar', $responseContent['user']);
        
        if ($responseContent['user']['avatar']) {
        
        $this->assertArrayHasKey('url', $responseContent['user']['avatar']);
        
        $this->assertNotNull($responseContent['user']['avatar']['url']);
        
        $this->assertIsString($responseContent['user']['avatar']['url']);
        
        }
        
        $this->assertArrayHasKey('userPermissions', $responseContent['user']);
        
        if ($responseContent['user']['userPermissions']) {
        
        $this->assertIsArray($responseContent['user']['userPermissions']);
        
        for($g = 0; $g < count($responseContent['user']['userPermissions']); $g++) {
        
        if ($responseContent['user']['userPermissions'][$g]) {
        
        $this->assertArrayHasKey('code', $responseContent['user']['userPermissions'][$g]);
        
        $this->assertNotNull($responseContent['user']['userPermissions'][$g]['code']);
        
        $this->assertContains($responseContent['user']['userPermissions'][$g]['code'], ['MANAGE_USERS', 'MANAGE_STAFF', 'MANAGE_SERVICE_ACCOUNTS', 'MANAGE_APPS', 'MANAGE_DISCOUNTS', 'MANAGE_PLUGINS', 'MANAGE_GIFT_CARD', 'MANAGE_MENUS', 'MANAGE_ORDERS', 'MANAGE_PAGES', 'MANAGE_PRODUCTS', 'MANAGE_PRODUCT_TYPES_AND_ATTRIBUTES', 'MANAGE_SHIPPING', 'MANAGE_SETTINGS', 'MANAGE_TRANSLATIONS', 'MANAGE_CHECKOUTS']);
        
        $this->assertArrayHasKey('sourcePermissionGroups', $responseContent['user']['userPermissions'][$g]);
        
        if ($responseContent['user']['userPermissions'][$g]['sourcePermissionGroups']) {
        
        $this->assertIsArray($responseContent['user']['userPermissions'][$g]['sourcePermissionGroups']);
        
        for($f = 0; $f < count($responseContent['user']['userPermissions'][$g]['sourcePermissionGroups']); $f++) {
        
        $this->assertNotNull($responseContent['user']['userPermissions'][$g]['sourcePermissionGroups'][$f]);
        
        $this->assertArrayHasKey('name', $responseContent['user']['userPermissions'][$g]['sourcePermissionGroups'][$f]);
        
        $this->assertNotNull($responseContent['user']['userPermissions'][$g]['sourcePermissionGroups'][$f]['name']);
        
        $this->assertIsString($responseContent['user']['userPermissions'][$g]['sourcePermissionGroups'][$f]['name']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('permissionGroups', $responseContent['user']);
        
        if ($responseContent['user']['permissionGroups']) {
        
        $this->assertIsArray($responseContent['user']['permissionGroups']);
        
        for($g = 0; $g < count($responseContent['user']['permissionGroups']); $g++) {
        
        if ($responseContent['user']['permissionGroups'][$g]) {
        
        $this->assertArrayHasKey('name', $responseContent['user']['permissionGroups'][$g]);
        
        $this->assertNotNull($responseContent['user']['permissionGroups'][$g]['name']);
        
        $this->assertIsString($responseContent['user']['permissionGroups'][$g]['name']);
        
        $this->assertArrayHasKey('permissions', $responseContent['user']['permissionGroups'][$g]);
        
        if ($responseContent['user']['permissionGroups'][$g]['permissions']) {
        
        $this->assertIsArray($responseContent['user']['permissionGroups'][$g]['permissions']);
        
        for($f = 0; $f < count($responseContent['user']['permissionGroups'][$g]['permissions']); $f++) {
        
        if ($responseContent['user']['permissionGroups'][$g]['permissions'][$f]) {
        
        $this->assertArrayHasKey('code', $responseContent['user']['permissionGroups'][$g]['permissions'][$f]);
        
        $this->assertNotNull($responseContent['user']['permissionGroups'][$g]['permissions'][$f]['code']);
        
        $this->assertContains($responseContent['user']['permissionGroups'][$g]['permissions'][$f]['code'], ['MANAGE_USERS', 'MANAGE_STAFF', 'MANAGE_SERVICE_ACCOUNTS', 'MANAGE_APPS', 'MANAGE_DISCOUNTS', 'MANAGE_PLUGINS', 'MANAGE_GIFT_CARD', 'MANAGE_MENUS', 'MANAGE_ORDERS', 'MANAGE_PAGES', 'MANAGE_PRODUCTS', 'MANAGE_PRODUCT_TYPES_AND_ATTRIBUTES', 'MANAGE_SHIPPING', 'MANAGE_SETTINGS', 'MANAGE_TRANSLATIONS', 'MANAGE_CHECKOUTS']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('editableGroups', $responseContent['user']);
        
        if ($responseContent['user']['editableGroups']) {
        
        $this->assertIsArray($responseContent['user']['editableGroups']);
        
        for($g = 0; $g < count($responseContent['user']['editableGroups']); $g++) {
        
        if ($responseContent['user']['editableGroups'][$g]) {
        
        $this->assertArrayHasKey('name', $responseContent['user']['editableGroups'][$g]);
        
        $this->assertNotNull($responseContent['user']['editableGroups'][$g]['name']);
        
        $this->assertIsString($responseContent['user']['editableGroups'][$g]['name']);
        
        }
        
        }
        
        }
        
        }
        

    }
}