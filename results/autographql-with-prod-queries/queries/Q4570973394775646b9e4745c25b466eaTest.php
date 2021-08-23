<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q4570973394775646b9e4745c25b466eaTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment Price on TaxedMoney {\n  gross {\n    amount\n    currency\n    __typename\n  }\n  net {\n    amount\n    currency\n    __typename\n  }\n  __typename\n}\n\nfragment ProductPricingField on Product {\n  pricing {\n    onSale\n    priceRangeUndiscounted {\n      start {\n        ...Price\n        __typename\n      }\n      stop {\n        ...Price\n        __typename\n      }\n      __typename\n    }\n    priceRange {\n      start {\n        ...Price\n        __typename\n      }\n      stop {\n        ...Price\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n  __typename\n}\n\nquery SearchProducts($query: String!, $attributes: [AttributeInput], $pageSize: Int, $sortBy: ProductOrder, $after: String) {\n  products(filter: {search: $query, attributes: $attributes}, first: $pageSize, sortBy: $sortBy, after: $after) {\n    totalCount\n    edges {\n      node {\n        ...ProductPricingField\n        id\n        name\n        thumbnail {\n          url\n          alt\n          __typename\n        }\n        thumbnail2x: thumbnail(size: 510) {\n          url\n          __typename\n        }\n        category {\n          id\n          name\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      endCursor\n      hasNextPage\n      __typename\n    }\n    __typename\n  }\n  attributes(filter: {filterableInStorefront: true}, first: 100) {\n    edges {\n      node {\n        id\n        name\n        slug\n        values {\n          id\n          name\n          slug\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"attributes": [{"slug": "bucket-size", "value": "25l"}, {"slug": "color", "value": "black"}, {"slug": "color", "value": "cyan"}, {"slug": "color", "value": "orange"}, {"slug": "color", "value": "blue"}, {"slug": "color", "value": "white"}, {"slug": "ebook-format", "value": "epub"}, {"slug": "ebook-format", "value": "mobi"}, {"slug": "cushion-size", "value": "55cm-x-55cm"}, {"slug": "cushion-size", "value": "45cm-x-45cm"}, {"slug": "flavor", "value": "orange"}, {"slug": "flavor", "value": "banana"}, {"slug": "flavor", "value": "bean"}, {"slug": "flavor", "value": "carrot"}, {"slug": "flavor", "value": "sprouty"}, {"slug": "flavor", "value": "salty-like-the-tears-of-your-enemy"}, {"slug": "flavor", "value": "pineapple"}], "pageSize": 6, "priceGte": null, "priceLte": null, "sortBy": {"field": "MINIMAL_PRICE", "direction": "DESC"}, "id": "Q2F0ZWdvcnk6dW5kZWZpbmVk", "query": "wine"}, "operationName": "SearchProducts"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('products', $responseContent);
        
        if ($responseContent['products']) {
        
        $this->assertEquals('ProductCountableConnection' , $responseContent['products']['__typename']);
        
        $this->assertArrayHasKey('totalCount', $responseContent['products']);
        
        if ($responseContent['products']['totalCount']) {
        
        $this->assertIsInt($responseContent['products']['totalCount']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['products']);
        
        $this->assertNotNull($responseContent['products']['edges']);
        
        $this->assertIsArray($responseContent['products']['edges']);
        
        for($g = 0; $g < count($responseContent['products']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['products']['edges'][$g]);
        
        $this->assertEquals('ProductCountableEdge' , $responseContent['products']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['products']['edges'][$g]);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']);
        
        $this->assertEquals('Product' , $responseContent['products']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('pricing', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']) {
        
        $this->assertEquals('ProductPricingInfo' , $responseContent['products']['edges'][$g]['node']['pricing']['__typename']);
        
        $this->assertArrayHasKey('onSale', $responseContent['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['onSale']) {
        
        $this->assertIsBool($responseContent['products']['edges'][$g]['node']['pricing']['onSale']);
        
        }
        
        $this->assertArrayHasKey('priceRangeUndiscounted', $responseContent['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']) {
        
        $this->assertEquals('TaxedMoneyRange' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['__typename']);
        
        $this->assertArrayHasKey('start', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertEquals('Money' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']);
        
        $this->assertEquals('Money' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['start']['net']['currency']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']);
        
        if ($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']) {
        
        $this->assertEquals('TaxedMoney' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['__typename']);
        
        $this->assertArrayHasKey('gross', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertEquals('Money' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']);
        
        $this->assertEquals('Money' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRangeUndiscounted']['stop']['net']['__typename']);
        
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
        
        $this->assertEquals('TaxedMoneyRange' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['__typename']);
        
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
        
        $this->assertArrayHasKey('net', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']);
        
        $this->assertEquals('Money' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['currency']);
        
        }
        
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
        
        $this->assertArrayHasKey('net', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']);
        
        $this->assertEquals('Money' , $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['__typename']);
        
        $this->assertArrayHasKey('amount', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['currency']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['pricing']['priceRange']['stop']['net']['currency']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('id', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('thumbnail', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['thumbnail']) {
        
        $this->assertEquals('Image' , $responseContent['products']['edges'][$g]['node']['thumbnail']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['products']['edges'][$g]['node']['thumbnail']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['thumbnail']['url']);
        
        $this->assertArrayHasKey('alt', $responseContent['products']['edges'][$g]['node']['thumbnail']);
        
        if ($responseContent['products']['edges'][$g]['node']['thumbnail']['alt']) {
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['thumbnail']['alt']);
        
        }
        
        }
        
        $this->assertArrayHasKey('thumbnail2x', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['thumbnail2x']) {
        
        $this->assertEquals('Image' , $responseContent['products']['edges'][$g]['node']['thumbnail2x']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['products']['edges'][$g]['node']['thumbnail2x']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['thumbnail2x']['url']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['thumbnail2x']['url']);
        
        }
        
        $this->assertArrayHasKey('category', $responseContent['products']['edges'][$g]['node']);
        
        if ($responseContent['products']['edges'][$g]['node']['category']) {
        
        $this->assertEquals('Category' , $responseContent['products']['edges'][$g]['node']['category']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['products']['edges'][$g]['node']['category']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['category']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['products']['edges'][$g]['node']['category']);
        
        $this->assertNotNull($responseContent['products']['edges'][$g]['node']['category']['name']);
        
        $this->assertIsString($responseContent['products']['edges'][$g]['node']['category']['name']);
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['products']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['products']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['products']['pageInfo']);
        
        if ($responseContent['products']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['products']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['products']['pageInfo']);
        
        $this->assertNotNull($responseContent['products']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['products']['pageInfo']['hasNextPage']);
        
        }
        
        $this->assertArrayHasKey('attributes', $responseContent);
        
        if ($responseContent['attributes']) {
        
        $this->assertEquals('AttributeCountableConnection' , $responseContent['attributes']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['attributes']);
        
        $this->assertNotNull($responseContent['attributes']['edges']);
        
        $this->assertIsArray($responseContent['attributes']['edges']);
        
        for($g = 0; $g < count($responseContent['attributes']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['attributes']['edges'][$g]);
        
        $this->assertEquals('AttributeCountableEdge' , $responseContent['attributes']['edges'][$g]['__typename']);
        
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