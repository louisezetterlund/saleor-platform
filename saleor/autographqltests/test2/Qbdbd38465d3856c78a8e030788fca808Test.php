<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qbdbd38465d3856c78a8e030788fca808Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query {\n        category(id: \"Q2F0ZWdvcnk6Mzcz\") {\n            products(first: 20) {\n                edges {\n                    node {\n                        id\n                        name\n                        url\n                        slug\n                        thumbnail{\n                            url\n                            alt\n                        }\n                        images {\n                            url\n                        }\n                        variants {\n                            name\n                        }\n                        isAvailable\n                        pricing {\n                            priceRange {\n                                start {\n                                    gross {\n                                        amount\n                                        currency\n                                        localized\n                                    }\n                                    net {\n                                        amount\n                                        currency\n                                        localized\n                                    }\n                                    currency\n                                }\n                            }\n                        }\n                        purchaseCost {\n                            start {\n                                amount\n                            }\n                            stop {\n                                amount\n                            }\n                        }\n                        margin {\n                            start\n                            stop\n                        }\n                    }\n                }\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('category', $responseContent);
        
        if ($responseContent['category']) {
        
        $this->assertArrayHasKey('products', $responseContent['category']);
        
        if ($responseContent['category']['products']) {
        
        $this->assertArrayHasKey('edges', $responseContent['category']['products']);
        
        $this->assertNotNull($responseContent['category']['products']['edges']);
        
        $this->assertIsArray($responseContent['category']['products']['edges']);
        
        for($g = 0; $g < count($responseContent['category']['products']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['category']['products']['edges'][$g]);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['category']['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('name', $responseContent['category']['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['name']);
        
        $this->assertIsString($responseContent['category']['products']['edges'][$g]['node']['name']);
        
        $this->assertArrayHasKey('slug', $responseContent['category']['products']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['slug']);
        
        $this->assertIsString($responseContent['category']['products']['edges'][$g]['node']['slug']);
        
        $this->assertArrayHasKey('thumbnail', $responseContent['category']['products']['edges'][$g]['node']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['thumbnail']) {
        
        $this->assertArrayHasKey('url', $responseContent['category']['products']['edges'][$g]['node']['thumbnail']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['thumbnail']['url']);
        
        $this->assertIsString($responseContent['category']['products']['edges'][$g]['node']['thumbnail']['url']);
        
        $this->assertArrayHasKey('alt', $responseContent['category']['products']['edges'][$g]['node']['thumbnail']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['thumbnail']['alt']) {
        
        $this->assertIsString($responseContent['category']['products']['edges'][$g]['node']['thumbnail']['alt']);
        
        }
        
        }
        
        $this->assertArrayHasKey('images', $responseContent['category']['products']['edges'][$g]['node']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['images']) {
        
        $this->assertIsArray($responseContent['category']['products']['edges'][$g]['node']['images']);
        
        for($f = 0; $f < count($responseContent['category']['products']['edges'][$g]['node']['images']); $f++) {
        
        if ($responseContent['category']['products']['edges'][$g]['node']['images'][$f]) {
        
        $this->assertArrayHasKey('url', $responseContent['category']['products']['edges'][$g]['node']['images'][$f]);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['images'][$f]['url']);
        
        $this->assertIsString($responseContent['category']['products']['edges'][$g]['node']['images'][$f]['url']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('variants', $responseContent['category']['products']['edges'][$g]['node']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['variants']) {
        
        $this->assertIsArray($responseContent['category']['products']['edges'][$g]['node']['variants']);
        
        for($f = 0; $f < count($responseContent['category']['products']['edges'][$g]['node']['variants']); $f++) {
        
        if ($responseContent['category']['products']['edges'][$g]['node']['variants'][$f]) {
        
        $this->assertArrayHasKey('name', $responseContent['category']['products']['edges'][$g]['node']['variants'][$f]);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['variants'][$f]['name']);
        
        $this->assertIsString($responseContent['category']['products']['edges'][$g]['node']['variants'][$f]['name']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('isAvailable', $responseContent['category']['products']['edges'][$g]['node']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['isAvailable']) {
        
        $this->assertIsBool($responseContent['category']['products']['edges'][$g]['node']['isAvailable']);
        
        }
        
        $this->assertArrayHasKey('pricing', $responseContent['category']['products']['edges'][$g]['node']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['pricing']) {
        
        $this->assertArrayHasKey('priceRange', $responseContent['category']['products']['edges'][$g]['node']['pricing']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']) {
        
        $this->assertArrayHasKey('start', $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']) {
        
        $this->assertArrayHasKey('gross', $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['currency']);
        
        $this->assertIsString($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['gross']['currency']);
        
        $this->assertArrayHasKey('net', $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']);
        
        $this->assertArrayHasKey('amount', $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['amount']);
        
        $this->assertIsNumeric($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['amount']);
        
        $this->assertArrayHasKey('currency', $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['currency']);
        
        $this->assertIsString($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['net']['currency']);
        
        $this->assertArrayHasKey('currency', $responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['currency']);
        
        $this->assertIsString($responseContent['category']['products']['edges'][$g]['node']['pricing']['priceRange']['start']['currency']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('purchaseCost', $responseContent['category']['products']['edges'][$g]['node']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['purchaseCost']) {
        
        $this->assertArrayHasKey('start', $responseContent['category']['products']['edges'][$g]['node']['purchaseCost']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['purchaseCost']['start']) {
        
        $this->assertArrayHasKey('amount', $responseContent['category']['products']['edges'][$g]['node']['purchaseCost']['start']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['purchaseCost']['start']['amount']);
        
        $this->assertIsNumeric($responseContent['category']['products']['edges'][$g]['node']['purchaseCost']['start']['amount']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['category']['products']['edges'][$g]['node']['purchaseCost']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['purchaseCost']['stop']) {
        
        $this->assertArrayHasKey('amount', $responseContent['category']['products']['edges'][$g]['node']['purchaseCost']['stop']);
        
        $this->assertNotNull($responseContent['category']['products']['edges'][$g]['node']['purchaseCost']['stop']['amount']);
        
        $this->assertIsNumeric($responseContent['category']['products']['edges'][$g]['node']['purchaseCost']['stop']['amount']);
        
        }
        
        }
        
        $this->assertArrayHasKey('margin', $responseContent['category']['products']['edges'][$g]['node']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['margin']) {
        
        $this->assertArrayHasKey('start', $responseContent['category']['products']['edges'][$g]['node']['margin']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['margin']['start']) {
        
        $this->assertIsInt($responseContent['category']['products']['edges'][$g]['node']['margin']['start']);
        
        }
        
        $this->assertArrayHasKey('stop', $responseContent['category']['products']['edges'][$g]['node']['margin']);
        
        if ($responseContent['category']['products']['edges'][$g]['node']['margin']['stop']) {
        
        $this->assertIsInt($responseContent['category']['products']['edges'][$g]['node']['margin']['stop']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}