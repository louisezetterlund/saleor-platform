<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q24cf9d981f5b5ca786589b313483e822Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        fragment BasicProductFields on Product {\n          id\n          name\n          thumbnail {\n            url\n            alt\n          }\n          thumbnail2x: thumbnail(size: 510) {\n            url\n          }\n        }\n\n        fragment ProductVariantFields on ProductVariant {\n          id\n          sku\n          name\n          stockQuantity\n          isAvailable\n          pricing {\n            discountLocalCurrency {\n              currency\n              gross {\n                amount\n                localized\n              }\n            }\n            price {\n              currency\n              gross {\n                amount\n                localized\n              }\n            }\n            priceUndiscounted {\n              currency\n              gross {\n                amount\n                localized\n              }\n            }\n            priceLocalCurrency {\n              currency\n              gross {\n                amount\n                localized\n              }\n            }\n          }\n          attributes {\n            attribute {\n              id\n              name\n            }\n            values {\n              id\n              name\n              value: name\n            }\n          }\n        }\n\n        query VariantList($ids: [ID!]) {\n          productVariants(ids: $ids, first: 100) {\n            edges {\n              node {\n                ...ProductVariantFields\n                stockQuantity\n                quantityAvailable\n                quantityAvailablePl: quantityAvailable(countryCode: PL)\n                quantityAvailableUS: quantityAvailable(countryCode: US)\n                product {\n                  ...BasicProductFields\n                }\n              }\n            }\n          }\n        }\n    ", "variables": {"ids": ["UHJvZHVjdFZhcmlhbnQ6MTAwMQ==", "UHJvZHVjdFZhcmlhbnQ6MTAwMg==", "UHJvZHVjdFZhcmlhbnQ6MTAwMw=="]}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('productVariants', $responseContent);
        
        if ($responseContent['productVariants']) {
        
        $this->assertArrayHasKey('edges', $responseContent['productVariants']);
        
        $this->assertNotNull($responseContent['productVariants']['edges']);
        
        $this->assertIsArray($responseContent['productVariants']['edges']);
        
        for($g = 0; $g < count($responseContent['productVariants']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['productVariants']['edges'][$g]);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('sku', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['sku']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['sku']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('pricing', $responseContent['productVariants']['edges'][$g]['node']);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['pricing']) {
        
        $this->assertArrayHasKey('discountLocalCurrency', $responseContent['productVariants']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['pricing']['discountLocalCurrency']) {
        
        $this->assertArrayHasKey('currency', $responseContent['productVariants']['edges'][$g]['node']['pricing']['discountLocalCurrency']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['discountLocalCurrency']['currency']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['pricing']['discountLocalCurrency']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['productVariants']['edges'][$g]['node']['pricing']['discountLocalCurrency']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['discountLocalCurrency']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['productVariants']['edges'][$g]['node']['pricing']['discountLocalCurrency']['gross']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['discountLocalCurrency']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['productVariants']['edges'][$g]['node']['pricing']['discountLocalCurrency']['gross']['amount']);
        
        }
        
        $this->assertArrayHasKey('price', $responseContent['productVariants']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['pricing']['price']) {
        
        $this->assertArrayHasKey('currency', $responseContent['productVariants']['edges'][$g]['node']['pricing']['price']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['currency']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['productVariants']['edges'][$g]['node']['pricing']['price']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['gross']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['productVariants']['edges'][$g]['node']['pricing']['price']['gross']['amount']);
        
        }
        
        $this->assertArrayHasKey('priceUndiscounted', $responseContent['productVariants']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']) {
        
        $this->assertArrayHasKey('currency', $responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['currency']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['gross']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceUndiscounted']['gross']['amount']);
        
        }
        
        $this->assertArrayHasKey('priceLocalCurrency', $responseContent['productVariants']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceLocalCurrency']) {
        
        $this->assertArrayHasKey('currency', $responseContent['productVariants']['edges'][$g]['node']['pricing']['priceLocalCurrency']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceLocalCurrency']['currency']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceLocalCurrency']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['productVariants']['edges'][$g]['node']['pricing']['priceLocalCurrency']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceLocalCurrency']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['productVariants']['edges'][$g]['node']['pricing']['priceLocalCurrency']['gross']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceLocalCurrency']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['productVariants']['edges'][$g]['node']['pricing']['priceLocalCurrency']['gross']['amount']);
        
        }
        
        }
        
        $this->assertArrayHasKey('attributes', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['attributes']);
        
        $this->assertIsArray($responseContent['productVariants']['edges'][$g]['node']['attributes']);
        
        for($f = 0; $f < count($responseContent['productVariants']['edges'][$g]['node']['attributes']); $f++) {
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]);
        
        $this->assertArrayHasKey('attribute', $responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['attribute']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['attribute']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['attribute']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['attribute']);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['attribute']['name']) {
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['attribute']['name']);
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values']);
        
        $this->assertIsArray($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values']);
        
        for($e = 0; $e < count($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values']); $e++) {
        
        if ($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]) {
        
        $this->assertArrayHasKey('id', $responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]['name']) {
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]['name']);
        
        }
        
        $this->assertArrayHasKey('value', $responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]['value']) {
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['attributes'][$f]['values'][$e]['value']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('quantityAvailable', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['quantityAvailable']);
        
        $this->assertIsInt($responseContent['productVariants']['edges'][$g]['node']['quantityAvailable']);
        
        $this->assertArrayHasKey('quantityAvailablePl', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['quantityAvailablePl']);
        
        $this->assertIsInt($responseContent['productVariants']['edges'][$g]['node']['quantityAvailablePl']);
        
        $this->assertArrayHasKey('quantityAvailableUS', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['quantityAvailableUS']);
        
        $this->assertIsInt($responseContent['productVariants']['edges'][$g]['node']['quantityAvailableUS']);
        
        $this->assertArrayHasKey('product', $responseContent['productVariants']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['product']);
        
        $this->assertArrayHasKey('id', $responseContent['productVariants']['edges'][$g]['node']['product']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['product']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['productVariants']['edges'][$g]['node']['product']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['product']['name']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['product']['name']);
        
        $this->assertArrayHasKey('thumbnail', $responseContent['productVariants']['edges'][$g]['node']['product']);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail']) {
        
        $this->assertArrayHasKey('url', $responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail']['url']);
        
        $this->assertArrayHasKey('alt', $responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail']);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail']['alt']) {
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail']['alt']);
        
        }
        
        }
        
        $this->assertArrayHasKey('thumbnail2x', $responseContent['productVariants']['edges'][$g]['node']['product']);
        
        if ($responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail2x']) {
        
        $this->assertArrayHasKey('url', $responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail2x']);
        
        $this->assertNotNull($responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail2x']['url']);
        
        $this->assertIsString($responseContent['productVariants']['edges'][$g]['node']['product']['thumbnail2x']['url']);
        
        }
        
        }
        
        }
        

    }
}