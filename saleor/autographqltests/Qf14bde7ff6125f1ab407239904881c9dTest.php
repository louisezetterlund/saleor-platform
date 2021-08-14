<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf14bde7ff6125f1ab407239904881c9dTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        fragment BasicProductFields on Product {\n          id\n          name\n          thumbnail {\n            url\n            alt\n          }\n          thumbnail2x: thumbnail(size: 510) {\n            url\n          }\n        }\n\n        fragment Price on TaxedMoney {\n          gross {\n            amount\n            currency\n          }\n          net {\n            amount\n            currency\n          }\n        }\n\n        fragment ProductPricingField on Product {\n          pricing {\n            onSale\n            priceRangeUndiscounted {\n              start {\n                ...Price\n              }\n              stop {\n                ...Price\n              }\n            }\n            priceRange {\n              start {\n                ...Price\n              }\n              stop {\n                ...Price\n              }\n            }\n          }\n        }\n\n        query Category($id: ID!, $pageSize: Int) {\n          products(first: $pageSize, filter: {categories: [$id]}) {\n            totalCount\n            edges {\n              node {\n                ...BasicProductFields\n                ...ProductPricingField\n                category {\n                  id\n                  name\n                }\n              }\n            }\n            pageInfo {\n              endCursor\n              hasNextPage\n              hasPreviousPage\n              startCursor\n            }\n          }\n          category(id: $id) {\n            seoDescription\n            seoTitle\n            id\n            name\n            backgroundImage {\n              url\n            }\n            ancestors(last: 5) {\n              edges {\n                node {\n                  id\n                  name\n                }\n              }\n            }\n          }\n          attributes(filter: {inCategory: $id}, first: 100) {\n            edges {\n              node {\n                id\n                name\n                slug\n                values {\n                  id\n                  name\n                  slug\n                }\n              }\n            }\n          }\n        }\n    ", "variables": {"pageSize": 100, "id": "Q2F0ZWdvcnk6NTQ1"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('products', $responseContent);
        
        if ($responseContent['products']) {
        
        $this->assertArrayHasKey('totalCount', $responseContent['products']);
        
        if ($responseContent['products']['totalCount']) {
        
        $this->assertIsInt($responseContent['products']['totalCount']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['products']);
        
        $this->assertNotNull($responseContent['products']['edges']);
        
        $this->assertIsArray($responseContent['products']['edges']);
        
        for($g = 0; $g < count($responseContent['products']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['products']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['products']['edges'][$g]);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('thumbnail', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['thumbnail']) {
        
        $this->assertArrayHasKey('url', $responseContent['products']['edges'][$g]['node']['thumbnail']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['thumbnail']['url']);
        
        $this->assertArrayHasKey('alt', $responseContent['products']['edges'][$g]['node']['thumbnail']);
        
        if ($responseContent['products']['edges'][$g]['node']['thumbnail']['alt']) {
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['thumbnail']['alt']);
        
        }
        
        }
        
        $this->assertArrayHasKey('thumbnail', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['thumbnail']) {
        
        $this->assertArrayHasKey('url', $responseContent['products']['edges'][$g]['node']['thumbnail']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['thumbnail']['url']);
        
        }
        
        $this->assertArrayHasKey('pricing', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']) {
        
        $this->assertArrayHasKey('onSale', $responseContent['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['onSale']) {
        
        $this->assertIsBool($responseContent['products']['edges'][$g]['node']['pricing']['onSale']);
        
        }
        
        $this->assertArrayHasKey('priceRangeUndiscounted', $responseContent['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']) {
        
        $this->assertArrayHasKey('start', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']) {
        
        $this->assertArrayHasKey('gross', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']) {
        
        $this->assertArrayHasKey('gross', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['currency']);
        
        }
        
        }
        
        $this->assertArrayHasKey('priceRange', $responseContent['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']) {
        
        $this->assertArrayHasKey('start', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']) {
        
        $this->assertArrayHasKey('gross', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']) {
        
        $this->assertArrayHasKey('gross', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['currency']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('category', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['category']) {
        
        $this->assertArrayHasKey('id', $responseContent['products']['edges'][$g]['node']['category']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']['category']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['category']['name']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['category']['name']);
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['products']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['products']['pageInfo']);
        
        if ($responseContent['products']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['products']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['products']['pageInfo']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['products']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['products']['pageInfo']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['products']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['products']['pageInfo']);
        
        if ($responseContent['products']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['products']['pageInfo']['startCursor']);
        
        }
        
        }
        
        $this->assertArrayHasKey('category', $responseContent);
        
        if ($responseContent['category']) {
        
        $this->assertArrayHasKey('seoDescription', $responseContent['category']);
        
        if ($responseContent['category']['seoDescription']) {
        
        $this->assertIsString($responseContent['category']['seoDescription']);
        
        }
        
        $this->assertArrayHasKey('seoTitle', $responseContent['category']);
        
        if ($responseContent['category']['seoTitle']) {
        
        $this->assertIsString($responseContent['category']['seoTitle']);
        
        }
        
        $this->assertArrayHasKey('id', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['name']);
        
        $this->assertIsString($responseContent['category']['name']);
        
        $this->assertArrayHasKey('backgroundImage', $responseContent['category']);
        
        if ($responseContent['category']['backgroundImage']) {
        
        $this->assertArrayHasKey('url', $responseContent['category']['backgroundImage']);
        
        $this->assertNotNull($responseContent['category']['backgroundImage']['url']);
        
        $this->assertIsString($responseContent['category']['backgroundImage']['url']);
        
        }
        
        $this->assertArrayHasKey('ancestors', $responseContent['category']);
        
        if ($responseContent['category']['ancestors']) {
        
        $this->assertArrayHasKey('edges', $responseContent['category']['ancestors']);
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges']);
        
        $this->assertIsArray($responseContent['category']['ancestors']['edges']);
        
        for($g = 0; $g < count($responseContent['category']['ancestors']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['category']['ancestors']['edges'][$g]);
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['category']['ancestors']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['category']['ancestors']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['category']['ancestors']['edges'][$g]['node']['name']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('attributes', $responseContent);
        
        if ($responseContent['attributes']) {
        
        $this->assertArrayHasKey('edges', $responseContent['attributes']);
        
        $this->assertNotNull($responseContent['attributes']['edges']);
        
        $this->assertIsArray($responseContent['attributes']['edges']);
        
        for($g = 0; $g < count($responseContent['attributes']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['attributes']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['attributes']['edges'][$g]);
        
        $this->assertNotNull($responseContent['attributes']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['attributes']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['attributes']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['attributes']['edges'][$g]['node']);
        
        if ($responseContent['attributes']['edges'][$g]['node']['name']) {
        
        $this->assertIsString($responseContent['attributes']['edges'][$g]['node']['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['attributes']['edges'][$g]['node']);
        
        if ($responseContent['attributes']['edges'][$g]['node']['slug']) {
        
        $this->assertIsString($responseContent['attributes']['edges'][$g]['node']['slug']);
        
        }
        
        $this->assertArrayHasKey('values', $responseContent['attributes']['edges'][$g]['node']);
        
        if ($responseContent['attributes']['edges'][$g]['node']['values']) {
        
        $this->assertIsArray($responseContent['attributes']['edges'][$g]['node']['values']);
        
        for($f = 0; $f < count($responseContent['attributes']['edges'][$g]['node']['values']); $f++) {
        
        if ($responseContent['attributes']['edges'][$g]['node']['values'][$f]) {
        
        $this->assertArrayHasKey('id', $responseContent['attributes']['edges'][$g]['node']['values'][$f]);
        
        $this->assertNotNull($responseContent['attributes']['edges'][$g]['node']['values'][$f]['id']);
        
        $this->assertArrayHasKey('name', $responseContent['attributes']['edges'][$g]['node']['values'][$f]);
        
        if ($responseContent['attributes']['edges'][$g]['node']['values'][$f]['name']) {
        
        $this->assertIsString($responseContent['attributes']['edges'][$g]['node']['values'][$f]['name']);
        
        }
        
        $this->assertArrayHasKey('slug', $responseContent['attributes']['edges'][$g]['node']['values'][$f]);
        
        if ($responseContent['attributes']['edges'][$g]['node']['values'][$f]['slug']) {
        
        $this->assertIsString($responseContent['attributes']['edges'][$g]['node']['values'][$f]['slug']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}