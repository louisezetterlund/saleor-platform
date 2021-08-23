<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q4aea30c612105445a592991ebb6000a0Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment AttributeTranslationFragment on Attribute {\n  id\n  name\n  translation(languageCode: $language) {\n    id\n    name\n    __typename\n  }\n  values {\n    id\n    name\n    translation(languageCode: $language) {\n      id\n      name\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nfragment ProductTypeTranslationFragment on ProductType {\n  id\n  name\n  productAttributes {\n    ...AttributeTranslationFragment\n    __typename\n  }\n  variantAttributes {\n    ...AttributeTranslationFragment\n    __typename\n  }\n  __typename\n}\n\nquery ProductTypeTranslationDetails($id: ID!, $language: LanguageCodeEnum!) {\n  productType(id: $id) {\n    ...ProductTypeTranslationFragment\n    __typename\n  }\n}\n", "variables": {"id": "UHJvZHVjdFR5cGU6MTE=", "language": "SV"}, "operationName": "ProductTypeTranslationDetails"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productType', $responseContent);
        
        if ($responseContent['productType']) {
        
        $this->assertEquals('ProductType' , $responseContent['productType']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productType']);
        
        $this->assertNotNull($responseContent['productType']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productType']);
        
        $this->assertNotNull($responseContent['productType']['name']);
        
        $this->assertIsString($responseContent['productType']['name']);
        
        $this->assertArrayHasKey('productAttributes', $responseContent['productType']);
        
        if ($responseContent['productType']['productAttributes']) {
        
        $this->assertIsArray($responseContent['productType']['productAttributes']);
        
        for($g = 0; $g < count($responseContent['productType']['productAttributes']); $g++) {
        
        if ($responseContent['productType']['productAttributes'][$g]) {
        
        $this->assertEquals('Attribute' , $responseContent['productType']['productAttributes'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productType']['productAttributes'][$g]);
        
        $this->assertNotNull($responseContent['productType']['productAttributes'][$g]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productType']['productAttributes'][$g]);
        
        if ($responseContent['productType']['productAttributes'][$g]['name']) {
        
        $this->assertIsString($responseContent['productType']['productAttributes'][$g]['name']);
        
        }
        
        $this->assertArrayHasKey('translation', $responseContent['productType']['productAttributes'][$g]);
        
        if ($responseContent['productType']['productAttributes'][$g]['translation']) {
        
        $this->assertEquals('AttributeTranslation' , $responseContent['productType']['productAttributes'][$g]['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productType']['productAttributes'][$g]['translation']);
        
        $this->assertNotNull($responseContent['productType']['productAttributes'][$g]['translation']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productType']['productAttributes'][$g]['translation']);
        
        $this->assertNotNull($responseContent['productType']['productAttributes'][$g]['translation']['name']);
        
        $this->assertIsString($responseContent['productType']['productAttributes'][$g]['translation']['name']);
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['productType']['productAttributes'][$g]);
        
        if ($responseContent['productType']['productAttributes'][$g]['values']) {
        
        $this->assertIsArray($responseContent['productType']['productAttributes'][$g]['values']);
        
        for($f = 0; $f < count($responseContent['productType']['productAttributes'][$g]['values']); $f++) {
        
        if ($responseContent['productType']['productAttributes'][$g]['values'][$f]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['productType']['productAttributes'][$g]['values'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productType']['productAttributes'][$g]['values'][$f]);
        
        $this->assertNotNull($responseContent['productType']['productAttributes'][$g]['values'][$f]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productType']['productAttributes'][$g]['values'][$f]);
        
        if ($responseContent['productType']['productAttributes'][$g]['values'][$f]['name']) {
        
        $this->assertIsString($responseContent['productType']['productAttributes'][$g]['values'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('translation', $responseContent['productType']['productAttributes'][$g]['values'][$f]);
        
        if ($responseContent['productType']['productAttributes'][$g]['values'][$f]['translation']) {
        
        $this->assertEquals('AttributeValueTranslation' , $responseContent['productType']['productAttributes'][$g]['values'][$f]['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productType']['productAttributes'][$g]['values'][$f]['translation']);
        
        $this->assertNotNull($responseContent['productType']['productAttributes'][$g]['values'][$f]['translation']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productType']['productAttributes'][$g]['values'][$f]['translation']);
        
        $this->assertNotNull($responseContent['productType']['productAttributes'][$g]['values'][$f]['translation']['name']);
        
        $this->assertIsString($responseContent['productType']['productAttributes'][$g]['values'][$f]['translation']['name']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('variantAttributes', $responseContent['productType']);
        
        if ($responseContent['productType']['variantAttributes']) {
        
        $this->assertIsArray($responseContent['productType']['variantAttributes']);
        
        for($g = 0; $g < count($responseContent['productType']['variantAttributes']); $g++) {
        
        if ($responseContent['productType']['variantAttributes'][$g]) {
        
        $this->assertEquals('Attribute' , $responseContent['productType']['variantAttributes'][$g]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productType']['variantAttributes'][$g]);
        
        $this->assertNotNull($responseContent['productType']['variantAttributes'][$g]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productType']['variantAttributes'][$g]);
        
        if ($responseContent['productType']['variantAttributes'][$g]['name']) {
        
        $this->assertIsString($responseContent['productType']['variantAttributes'][$g]['name']);
        
        }
        
        $this->assertArrayHasKey('translation', $responseContent['productType']['variantAttributes'][$g]);
        
        if ($responseContent['productType']['variantAttributes'][$g]['translation']) {
        
        $this->assertEquals('AttributeTranslation' , $responseContent['productType']['variantAttributes'][$g]['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productType']['variantAttributes'][$g]['translation']);
        
        $this->assertNotNull($responseContent['productType']['variantAttributes'][$g]['translation']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productType']['variantAttributes'][$g]['translation']);
        
        $this->assertNotNull($responseContent['productType']['variantAttributes'][$g]['translation']['name']);
        
        $this->assertIsString($responseContent['productType']['variantAttributes'][$g]['translation']['name']);
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['productType']['variantAttributes'][$g]);
        
        if ($responseContent['productType']['variantAttributes'][$g]['values']) {
        
        $this->assertIsArray($responseContent['productType']['variantAttributes'][$g]['values']);
        
        for($f = 0; $f < count($responseContent['productType']['variantAttributes'][$g]['values']); $f++) {
        
        if ($responseContent['productType']['variantAttributes'][$g]['values'][$f]) {
        
        $this->assertEquals('AttributeValue' , $responseContent['productType']['variantAttributes'][$g]['values'][$f]['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productType']['variantAttributes'][$g]['values'][$f]);
        
        $this->assertNotNull($responseContent['productType']['variantAttributes'][$g]['values'][$f]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productType']['variantAttributes'][$g]['values'][$f]);
        
        if ($responseContent['productType']['variantAttributes'][$g]['values'][$f]['name']) {
        
        $this->assertIsString($responseContent['productType']['variantAttributes'][$g]['values'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('translation', $responseContent['productType']['variantAttributes'][$g]['values'][$f]);
        
        if ($responseContent['productType']['variantAttributes'][$g]['values'][$f]['translation']) {
        
        $this->assertEquals('AttributeValueTranslation' , $responseContent['productType']['variantAttributes'][$g]['values'][$f]['translation']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['productType']['variantAttributes'][$g]['values'][$f]['translation']);
        
        $this->assertNotNull($responseContent['productType']['variantAttributes'][$g]['values'][$f]['translation']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productType']['variantAttributes'][$g]['values'][$f]['translation']);
        
        $this->assertNotNull($responseContent['productType']['variantAttributes'][$g]['values'][$f]['translation']['name']);
        
        $this->assertIsString($responseContent['productType']['variantAttributes'][$g]['values'][$f]['translation']['name']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}