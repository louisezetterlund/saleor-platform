<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q3f0d3dfa82d25168ad9a2f17af809249Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query ProductVariantDetails($id: ID!, $countyCode: CountryCode) {\n        productVariant(id: $id) {\n            id\n            stocks(countryCode: $countyCode) {\n                id\n            }\n            attributes {\n                attribute {\n                    id\n                    name\n                    slug\n                    values {\n                        id\n                        name\n                        slug\n                    }\n                }\n                values {\n                    id\n                    name\n                    slug\n                }\n            }\n            costPrice {\n                currency\n                amount\n            }\n            images {\n                id\n            }\n            name\n            price {\n                currency\n                amount\n            }\n            product {\n                id\n            }\n            weight {\n                unit\n                value\n            }\n        }\n    }\n    ", "variables": {"id": "UHJvZHVjdFZhcmlhbnQ6NzQ4", "countyCode": "EU"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productVariant', $responseContent);
        
        if ($responseContent['productVariant']) {
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['id']);
        
        $this->assertArrayHasKey('stocks', $responseContent['productVariant']);
        
        if ($responseContent['productVariant']['stocks']) {
        
        $this->assertIsArray($responseContent['productVariant']['stocks']);
        
        for($g = 0; $g < count($responseContent['productVariant']['stocks']); $g++) {
        
        if ($responseContent['productVariant']['stocks'][$g]) {
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['stocks'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['stocks'][$g]['id']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('attributes', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['attributes']);
        
        $this->assertIsArray($responseContent['productVariant']['attributes']);
        
        for($g = 0; $g < count($responseContent['productVariant']['attributes']); $g++) {
        
        $this->assertNotNull($responseContent['productVariant']['attributes'][$g]);
        
        $this->assertArrayHasKey('attribute', $responseContent['productVariant']['attributes'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['attributes'][$g]['attribute']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['attributes'][$g]['attribute']);
        
        $this->assertNotNull($responseContent['productVariant']['attributes'][$g]['attribute']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariant']['attributes'][$g]['attribute']);
        
        if ($responseContent['productVariant']['attributes'][$g]['attribute']['name']) {
        
        $this->assertIsString($responseContent['productVariant']['attributes'][$g]['attribute']['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['productVariant']['attributes'][$g]['attribute']);
        
        if ($responseContent['productVariant']['attributes'][$g]['attribute']['slug']) {
        
        $this->assertIsString($responseContent['productVariant']['attributes'][$g]['attribute']['slug']);
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['productVariant']['attributes'][$g]['attribute']);
        
        if ($responseContent['productVariant']['attributes'][$g]['attribute']['values']) {
        
        $this->assertIsArray($responseContent['productVariant']['attributes'][$g]['attribute']['values']);
        
        for($f = 0; $f < count($responseContent['productVariant']['attributes'][$g]['attribute']['values']); $f++) {
        
        if ($responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]) {
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]);
        
        $this->assertNotNull($responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]);
        
        if ($responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]['name']) {
        
        $this->assertIsString($responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]);
        
        if ($responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]['slug']) {
        
        $this->assertIsString($responseContent['productVariant']['attributes'][$g]['attribute']['values'][$f]['slug']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['productVariant']['attributes'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['attributes'][$g]['values']);
        
        $this->assertIsArray($responseContent['productVariant']['attributes'][$g]['values']);
        
        for($f = 0; $f < count($responseContent['productVariant']['attributes'][$g]['values']); $f++) {
        
        if ($responseContent['productVariant']['attributes'][$g]['values'][$f]) {
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['attributes'][$g]['values'][$f]);
        
        $this->assertNotNull($responseContent['productVariant']['attributes'][$g]['values'][$f]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariant']['attributes'][$g]['values'][$f]);
        
        if ($responseContent['productVariant']['attributes'][$g]['values'][$f]['name']) {
        
        $this->assertIsString($responseContent['productVariant']['attributes'][$g]['values'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['productVariant']['attributes'][$g]['values'][$f]);
        
        if ($responseContent['productVariant']['attributes'][$g]['values'][$f]['slug']) {
        
        $this->assertIsString($responseContent['productVariant']['attributes'][$g]['values'][$f]['slug']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('costPrice', $responseContent['productVariant']);
        
        if ($responseContent['productVariant']['costPrice']) {
        
        $this->assertArrayHasKey('currency', $responseContent['productVariant']['costPrice']);
        
        $this->assertNotNull($responseContent['productVariant']['costPrice']['currency']);
        
        $this->assertIsString($responseContent['productVariant']['costPrice']['currency']);
        
        $this->assertArrayHasKey('amount', $responseContent['productVariant']['costPrice']);
        
        $this->assertNotNull($responseContent['productVariant']['costPrice']['amount']);
        
        $this->assertIsNumeric($responseContent['productVariant']['costPrice']['amount']);
        
        }
        
        $this->assertArrayHasKey('images', $responseContent['productVariant']);
        
        if ($responseContent['productVariant']['images']) {
        
        $this->assertIsArray($responseContent['productVariant']['images']);
        
        for($g = 0; $g < count($responseContent['productVariant']['images']); $g++) {
        
        if ($responseContent['productVariant']['images'][$g]) {
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['images'][$g]);
        
        $this->assertNotNull($responseContent['productVariant']['images'][$g]['id']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('name', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['name']);
        
        $this->assertIsString($responseContent['productVariant']['name']);
        
        $this->assertArrayHasKey('price', $responseContent['productVariant']);
        
        if ($responseContent['productVariant']['price']) {
        
        $this->assertArrayHasKey('currency', $responseContent['productVariant']['price']);
        
        $this->assertNotNull($responseContent['productVariant']['price']['currency']);
        
        $this->assertIsString($responseContent['productVariant']['price']['currency']);
        
        $this->assertArrayHasKey('amount', $responseContent['productVariant']['price']);
        
        $this->assertNotNull($responseContent['productVariant']['price']['amount']);
        
        $this->assertIsNumeric($responseContent['productVariant']['price']['amount']);
        
        }
        
        $this->assertArrayHasKey('product', $responseContent['productVariant']);
        
        $this->assertNotNull($responseContent['productVariant']['product']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariant']['product']);
        
        $this->assertNotNull($responseContent['productVariant']['product']['id']);
        
        $this->assertArrayHasKey('weight', $responseContent['productVariant']);
        
        if ($responseContent['productVariant']['weight']) {
        
        $this->assertArrayHasKey('unit', $responseContent['productVariant']['weight']);
        
        $this->assertNotNull($responseContent['productVariant']['weight']['unit']);
        
        $this->assertContains($responseContent['productVariant']['weight']['unit'], ['KG', 'LB', 'OZ', 'G']);
        
        $this->assertArrayHasKey('value', $responseContent['productVariant']['weight']);
        
        $this->assertNotNull($responseContent['productVariant']['weight']['value']);
        
        $this->assertIsNumeric($responseContent['productVariant']['weight']['value']);
        
        }
        
        }
        

    }
}