<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qc455192f199d509982fd73f82585a48bTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        fragment BasicProductFields on Product {\n          id\n          name\n          thumbnail {\n            url\n            alt\n          }\n          thumbnail2x: thumbnail(size: 510) {\n            url\n          }\n        }\n\n        fragment ProductVariantFields on ProductVariant {\n          id\n          sku\n          name\n          stockQuantity\n          isAvailable\n          pricing {\n            discountLocalCurrency {\n              currency\n              gross {\n                amount\n                localized\n              }\n            }\n            price {\n              currency\n              gross {\n                amount\n                localized\n              }\n            }\n            priceUndiscounted {\n              currency\n              gross {\n                amount\n                localized\n              }\n            }\n            priceLocalCurrency {\n              currency\n              gross {\n                amount\n                localized\n              }\n            }\n          }\n          attributes {\n            attribute {\n              id\n              name\n            }\n            values {\n              id\n              name\n              value: name\n            }\n          }\n        }\n\n        query ProductDetails($id: ID!) {\n          product(id: $id) {\n            ...BasicProductFields\n            description\n            category {\n              id\n              name\n              products(first: 4) {\n                edges {\n                  node {\n                    ...BasicProductFields\n                    category {\n                      id\n                      name\n                    }\n                    pricing {\n                      priceRange {\n                        start{\n                          currency\n                          gross {\n                            amount\n                            localized\n                          }\n                        }\n                        stop{\n                          currency\n                          gross {\n                            amount\n                            localized\n                          }\n                        }\n                      }\n                      priceRangeUndiscounted {\n                        start{\n                          currency\n                          gross {\n                            amount\n                            localized\n                          }\n                        }\n                        stop{\n                          currency\n                          gross {\n                            amount\n                            localized\n                          }\n                        }\n                      }\n                      priceRangeLocalCurrency {\n                        start{\n                          currency\n                          gross {\n                            amount\n                            localized\n                          }\n                        }\n                        stop{\n                          currency\n                          gross {\n                            amount\n                            localized\n                          }\n                        }\n                      }\n                    }\n                  }\n                }\n              }\n            }\n            images {\n              id\n              url\n            }\n            variants {\n              ...ProductVariantFields\n            }\n            seoDescription\n            seoTitle\n            isAvailable\n          }\n        }\n    ", "variables": {"id": "UHJvZHVjdDo3NTI="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('product', $responseContent);
        
        if ($responseContent['product']) {
        
        $this->assertArrayHasKey('id', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['name']);
        
        $this->assertIsString($responseContent['product']['name']);
        
        $this->assertArrayHasKey('thumbnail', $responseContent['product']);
        
        if ($responseContent['product']['thumbnail']) {
        
        $this->assertArrayHasKey('url', $responseContent['product']['thumbnail']);
        
        $this->assertNotNull($responseContent['product']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['product']['thumbnail']['url']);
        
        $this->assertArrayHasKey('alt', $responseContent['product']['thumbnail']);
        
        if ($responseContent['product']['thumbnail']['alt']) {
        
        $this->assertIsString($responseContent['product']['thumbnail']['alt']);
        
        }
        
        }
        
        $this->assertArrayHasKey('thumbnail2x', $responseContent['product']);
        
        if ($responseContent['product']['thumbnail2x']) {
        
        $this->assertArrayHasKey('url', $responseContent['product']['thumbnail2x']);
        
        $this->assertNotNull($responseContent['product']['thumbnail2x']['url']);
        
        $this->assertIsString($responseContent['product']['thumbnail2x']['url']);
        
        }
        
        $this->assertArrayHasKey('description', $responseContent['product']);
        
        $this->assertNotNull($responseContent['product']['description']);
        
        $this->assertIsString($responseContent['product']['description']);
        
        $this->assertArrayHasKey('category', $responseContent['product']);
        
        if ($responseContent['product']['category']) {
        
        $this->assertArrayHasKey('id', $responseContent['product']['category']);
        
        $this->assertNotNull($responseContent['product']['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['category']);
        
        $this->assertNotNull($responseContent['product']['category']['name']);
        
        $this->assertIsString($responseContent['product']['category']['name']);
        
        $this->assertArrayHasKey('products', $responseContent['product']['category']);
        
        if ($responseContent['product']['category']['products']) {
        
        $this->assertArrayHasKey('edges', $responseContent['product']['category']['products']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges']);
        
        $this->assertIsArray($responseContent['product']['category']['products']['edges']);
        
        for($g = 0; $g < count($responseContent['product']['category']['products']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['product']['category']['products']['edges'][$g]);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['category']['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['category']['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('thumbnail', $responseContent['product']['category']['products']['edges'][$g]['node']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail']) {
        
        $this->assertArrayHasKey('url', $responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail']['url']);
        
        $this->assertArrayHasKey('alt', $responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail']['alt']) {
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail']['alt']);
        
        }
        
        }
        
        $this->assertArrayHasKey('thumbnail2x', $responseContent['product']['category']['products']['edges'][$g]['node']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail2x']) {
        
        $this->assertArrayHasKey('url', $responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail2x']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail2x']['url']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['thumbnail2x']['url']);
        
        }
        
        $this->assertArrayHasKey('category', $responseContent['product']['category']['products']['edges'][$g]['node']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['category']) {
        
        $this->assertArrayHasKey('id', $responseContent['product']['category']['products']['edges'][$g]['node']['category']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['category']['products']['edges'][$g]['node']['category']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['category']['name']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['category']['name']);
        
        }
        
        $this->assertArrayHasKey('pricing', $responseContent['product']['category']['products']['edges'][$g]['node']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']) {
        
        $this->assertArrayHasKey('priceRange', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']) {
        
        $this->assertArrayHasKey('start', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']) {
        
        $this->assertArrayHasKey('currency', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['currency']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['amount']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']) {
        
        $this->assertArrayHasKey('currency', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['currency']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['amount']);
        
        }
        
        }
        
        $this->assertArrayHasKey('priceRangeUndiscounted', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']) {
        
        $this->assertArrayHasKey('start', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']) {
        
        $this->assertArrayHasKey('currency', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['currency']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']) {
        
        $this->assertArrayHasKey('currency', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['currency']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        }
        
        }
        
        $this->assertArrayHasKey('priceRangeLocalCurrency', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']) {
        
        $this->assertArrayHasKey('start', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']['start']) {
        
        $this->assertArrayHasKey('currency', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']['start']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']['start']['currency']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']['start']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']['start']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']['start']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']['start']['gross']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']['start']['gross']['amount']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']);
        
        if ($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']['stop']) {
        
        $this->assertArrayHasKey('currency', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']['stop']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']['stop']['currency']);
        
        $this->assertIsString($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']['stop']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']['stop']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']['stop']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']['stop']['gross']);
        
        $this->assertNotNull($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']['stop']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['category']['products']['edges'][$g]['node']['pricing']['priceRangeLocalCurrency']['stop']['gross']['amount']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('images', $responseContent['product']);
        
        if ($responseContent['product']['images']) {
        
        $this->assertIsArray($responseContent['product']['images']);
        
        for($g = 0; $g < count($responseContent['product']['images']); $g++) {
        
        if ($responseContent['product']['images'][$g]) {
        
        $this->assertArrayHasKey('id', $responseContent['product']['images'][$g]);
        
        $this->assertNotNull($responseContent['product']['images'][$g]['id']);
        
        $this->assertArrayHasKey('url', $responseContent['product']['images'][$g]);
        
        $this->assertNotNull($responseContent['product']['images'][$g]['url']);
        
        $this->assertIsString($responseContent['product']['images'][$g]['url']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('variants', $responseContent['product']);
        
        if ($responseContent['product']['variants']) {
        
        $this->assertIsArray($responseContent['product']['variants']);
        
        for($g = 0; $g < count($responseContent['product']['variants']); $g++) {
        
        if ($responseContent['product']['variants'][$g]) {
        
        $this->assertArrayHasKey('id', $responseContent['product']['variants'][$g]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['id']);
        
        $this->assertArrayHasKey('sku', $responseContent['product']['variants'][$g]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['sku']);
        
        $this->assertIsString($responseContent['product']['variants'][$g]['sku']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['variants'][$g]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['name']);
        
        $this->assertIsString($responseContent['product']['variants'][$g]['name']);
        
        $this->assertArrayHasKey('pricing', $responseContent['product']['variants'][$g]);
        
        if ($responseContent['product']['variants'][$g]['pricing']) {
        
        $this->assertArrayHasKey('discountLocalCurrency', $responseContent['product']['variants'][$g]['pricing']);
        
        if ($responseContent['product']['variants'][$g]['pricing']['discountLocalCurrency']) {
        
        $this->assertArrayHasKey('currency', $responseContent['product']['variants'][$g]['pricing']['discountLocalCurrency']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['discountLocalCurrency']['currency']);
        
        $this->assertIsString($responseContent['product']['variants'][$g]['pricing']['discountLocalCurrency']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['variants'][$g]['pricing']['discountLocalCurrency']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['discountLocalCurrency']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['variants'][$g]['pricing']['discountLocalCurrency']['gross']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['discountLocalCurrency']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['variants'][$g]['pricing']['discountLocalCurrency']['gross']['amount']);
        
        }
        
        $this->assertArrayHasKey('price', $responseContent['product']['variants'][$g]['pricing']);
        
        if ($responseContent['product']['variants'][$g]['pricing']['price']) {
        
        $this->assertArrayHasKey('currency', $responseContent['product']['variants'][$g]['pricing']['price']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['price']['currency']);
        
        $this->assertIsString($responseContent['product']['variants'][$g]['pricing']['price']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['variants'][$g]['pricing']['price']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['price']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['variants'][$g]['pricing']['price']['gross']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['price']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['variants'][$g]['pricing']['price']['gross']['amount']);
        
        }
        
        $this->assertArrayHasKey('priceUndiscounted', $responseContent['product']['variants'][$g]['pricing']);
        
        if ($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']) {
        
        $this->assertArrayHasKey('currency', $responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['currency']);
        
        $this->assertIsString($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['gross']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['gross']['amount']);
        
        }
        
        $this->assertArrayHasKey('priceLocalCurrency', $responseContent['product']['variants'][$g]['pricing']);
        
        if ($responseContent['product']['variants'][$g]['pricing']['priceLocalCurrency']) {
        
        $this->assertArrayHasKey('currency', $responseContent['product']['variants'][$g]['pricing']['priceLocalCurrency']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['priceLocalCurrency']['currency']);
        
        $this->assertIsString($responseContent['product']['variants'][$g]['pricing']['priceLocalCurrency']['currency']);
        
        $this->assertArrayHasKey('gross', $responseContent['product']['variants'][$g]['pricing']['priceLocalCurrency']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['priceLocalCurrency']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['variants'][$g]['pricing']['priceLocalCurrency']['gross']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['priceLocalCurrency']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['variants'][$g]['pricing']['priceLocalCurrency']['gross']['amount']);
        
        }
        
        }
        
        $this->assertArrayHasKey('attributes', $responseContent['product']['variants'][$g]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['attributes']);
        
        $this->assertIsArray($responseContent['product']['variants'][$g]['attributes']);
        
        for($f = 0; $f < count($responseContent['product']['variants'][$g]['attributes']); $f++) {
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['attributes'][$f]);
        
        $this->assertArrayHasKey('attribute', $responseContent['product']['variants'][$g]['attributes'][$f]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['attributes'][$f]['attribute']);
        
        $this->assertArrayHasKey('id', $responseContent['product']['variants'][$g]['attributes'][$f]['attribute']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['attributes'][$f]['attribute']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['variants'][$g]['attributes'][$f]['attribute']);
        
        if ($responseContent['product']['variants'][$g]['attributes'][$f]['attribute']['name']) {
        
        $this->assertIsString($responseContent['product']['variants'][$g]['attributes'][$f]['attribute']['name']);
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['product']['variants'][$g]['attributes'][$f]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['attributes'][$f]['values']);
        
        $this->assertIsArray($responseContent['product']['variants'][$g]['attributes'][$f]['values']);
        
        for($e = 0; $e < count($responseContent['product']['variants'][$g]['attributes'][$f]['values']); $e++) {
        
        if ($responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]) {
        
        $this->assertArrayHasKey('id', $responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]);
        
        if ($responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]['name']) {
        
        $this->assertIsString($responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]['name']);
        
        }
        
        $this->assertArrayHasKey('value', $responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]);
        
        if ($responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]['value']) {
        
        $this->assertIsString($responseContent['product']['variants'][$g]['attributes'][$f]['values'][$e]['value']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('seoDescription', $responseContent['product']);
        
        if ($responseContent['product']['seoDescription']) {
        
        $this->assertIsString($responseContent['product']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['product']);
        
        if ($responseContent['product']['seoTitle']) {
        
        $this->assertIsString($responseContent['product']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('isAvailable', $responseContent['product']);
        
        if ($responseContent['product']['isAvailable']) {
        
        $this->assertIsBool($responseContent['product']['isAvailable']);
        
        }
        
        }
        

    }
}