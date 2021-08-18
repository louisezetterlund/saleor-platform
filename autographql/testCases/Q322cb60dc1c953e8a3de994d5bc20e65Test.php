<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q322cb60dc1c953e8a3de994d5bc20e65Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query Root($categoryId: ID!, $sortBy: ProductOrder, $first: Int,\n            $attributesFilter: [AttributeInput]) {\n\n        category(id: $categoryId) {\n            ...CategoryPageFragmentQuery\n            __typename\n        }\n        products(first: $first, sortBy: $sortBy, filter: {categories: [$categoryId],\n            attributes: $attributesFilter}) {\n\n            ...ProductListFragmentQuery\n            __typename\n        }\n        attributes(first: 20, filter: {inCategory: $categoryId}) {\n            edges {\n                node {\n                    ...ProductFiltersFragmentQuery\n                    __typename\n                }\n            }\n        }\n    }\n\n    fragment CategoryPageFragmentQuery on Category {\n        id\n        name\n        url\n        ancestors(first: 20) {\n            edges {\n                node {\n                    name\n                    id\n                    url\n                    __typename\n                }\n            }\n        }\n        children(first: 20) {\n            edges {\n                node {\n                    name\n                    id\n                    url\n                    slug\n                    __typename\n                }\n            }\n        }\n        __typename\n    }\n\n    fragment ProductListFragmentQuery on ProductCountableConnection {\n        edges {\n            node {\n                ...ProductFragmentQuery\n                __typename\n            }\n            __typename\n        }\n        pageInfo {\n            hasNextPage\n            __typename\n        }\n        __typename\n    }\n\n    fragment ProductFragmentQuery on Product {\n        id\n        isAvailable\n        name\n        pricing {\n            ...ProductPriceFragmentQuery\n            __typename\n        }\n        thumbnailUrl1x: thumbnail(size: 255){\n            url\n        }\n        thumbnailUrl2x:     thumbnail(size: 510){\n            url\n        }\n        url\n        __typename\n    }\n\n    fragment ProductPriceFragmentQuery on ProductPricingInfo {\n        discount {\n            gross {\n                amount\n                currency\n                __typename\n            }\n            __typename\n        }\n        priceRange {\n            stop {\n                gross {\n                    amount\n                    currency\n                    localized\n                    __typename\n                }\n                currency\n                __typename\n            }\n            start {\n                gross {\n                    amount\n                    currency\n                    localized\n                    __typename\n                }\n                currency\n                __typename\n            }\n            __typename\n        }\n        __typename\n    }\n\n    fragment ProductFiltersFragmentQuery on Attribute {\n        id\n        name\n        slug\n        values {\n            id\n            name\n            slug\n            __typename\n        }\n        __typename\n    }\n    ", "variables": {"categoryId": "Q2F0ZWdvcnk6MTk1", "sortBy": {"field": "NAME", "direction": "ASC"}, "first": 1, "attributesFilter": [{"slug": "color", "value": "red"}]}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('category', $responseContent);
        
        if ($responseContent['category']) {
        
        $this->assertEquals('Category' , $responseContent['category']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['category']);
        
        $this->assertNotNull($responseContent['category']['name']);
        
        $this->assertIsString($responseContent['category']['name']);
        
        $this->assertArrayHasKey('ancestors', $responseContent['category']);
        
        if ($responseContent['category']['ancestors']) {
        
        $this->assertArrayHasKey('edges', $responseContent['category']['ancestors']);
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges']);
        
        $this->assertIsArray($responseContent['category']['ancestors']['edges']);
        
        for($g = 0; $g < count($responseContent['category']['ancestors']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['category']['ancestors']['edges'][$g]);
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges'][$g]['node']);
        
        $this->assertEquals('Category' , $responseContent['category']['ancestors']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('name', $responseContent['category']['ancestors']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['category']['ancestors']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('id', $responseContent['category']['ancestors']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['ancestors']['edges'][$g]['node']['id']);
        
        }
        
        }
        
        $this->assertArrayHasKey('children', $responseContent['category']);
        
        if ($responseContent['category']['children']) {
        
        $this->assertArrayHasKey('edges', $responseContent['category']['children']);
        
        $this->assertNotNull($responseContent['category']['children']['edges']);
        
        $this->assertIsArray($responseContent['category']['children']['edges']);
        
        for($g = 0; $g < count($responseContent['category']['children']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['category']['children']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['category']['children']['edges'][$g]);
        
        $this->assertNotNull($responseContent['category']['children']['edges'][$g]['node']);
        
        $this->assertEquals('Category' , $responseContent['category']['children']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('name', $responseContent['category']['children']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['children']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['category']['children']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('id', $responseContent['category']['children']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['children']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('slug', $responseContent['category']['children']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['children']['edges'][$g]['node']['slug']);
        
        $this->assertIsString($responseContent['category']['children']['edges'][$g]['node']['slug']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('products', $responseContent);
        
        if ($responseContent['products']) {
        
        $this->assertEquals('ProductCountableConnection' , $responseContent['products']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['products']);
        
        $this->assertNotNull($responseContent['products']['edges']);
        
        $this->assertIsArray($responseContent['products']['edges']);
        
        for($g = 0; $g < count($responseContent['products']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['products']['edges'][$g]);
        
        $this->assertEquals('ProductCountableEdge' , $responseContent['products']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['products']['edges'][$g]);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']);
        
        $this->assertEquals('Product' , $responseContent['products']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('isAvailable', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['isAvailable']) {
        
        $this->assertIsBool($responseContent['products']['edges'][$g]['node']['isAvailable']);
        
        }
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('pricing', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']) {
        
        $this->assertEquals('ProductPricingInfo' , $responseContent['products']['edges'][$g]['node']['pricing']['__typename']);
        
        $this->assertArrayHasKey('discount', $responseContent['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['discount']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['products']['edges'][$g]['node']['pricing']['discount']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['products']['edges'][$g]['node']['pricing']['discount']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['discount']['gross']);
        
        $this->assertEquals('Money' , $responseContent['products']['edges'][$g]['node']['pricing']['discount']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['discount']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['discount']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['discount']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['discount']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['discount']['gross']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['discount']['gross']['currency']);
        
        }
        
        $this->assertArrayHasKey('priceRange', $responseContent['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']) {
        
        $this->assertEquals('TaxedMoneyRange' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['__typename']);
        
        $this->assertArrayHasKey('stop', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertEquals('Money' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['gross']['currency']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['currency']);
        
        }
        
        $this->assertArrayHasKey('start', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertEquals('Money' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['currency']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['currency']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('thumbnailUrl1x', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['thumbnailUrl1x']) {
        
        $this->assertArrayHasKey('url', $responseContent['products']['edges'][$g]['node']['thumbnailUrl1x']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['thumbnailUrl1x']['url']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['thumbnailUrl1x']['url']);
        
        }
        
        $this->assertArrayHasKey('thumbnailUrl2x', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['thumbnailUrl2x']) {
        
        $this->assertArrayHasKey('url', $responseContent['products']['edges'][$g]['node']['thumbnailUrl2x']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['thumbnailUrl2x']['url']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['thumbnailUrl2x']['url']);
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['products']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['products']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['products']['pageInfo']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['products']['pageInfo']['hasNextPage']);
        
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
        
        $this->assertEquals('Attribute' , $responseContent['attributes']['edges'][$g]['node']['__typename']);
        
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
        
        $this->assertEquals('AttributeValue' , $responseContent['attributes']['edges'][$g]['node']['values'][$f]['__typename']);
        
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