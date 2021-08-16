<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q359f0e7178025fd88a434d0ec8a6bff5Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        fragment BasicProductFields on Product {\n          id\n          name\n          thumbnail {\n            url\n            alt\n          }\n          thumbnail2x: thumbnail(size: 510) {\n            url\n          }\n        }\n\n        fragment Price on TaxedMoney {\n          gross {\n            amount\n            currency\n          }\n          net {\n            amount\n            currency\n          }\n        }\n\n        fragment ProductPricingField on Product {\n          pricing {\n            onSale\n            priceRangeUndiscounted {\n              start {\n                ...Price\n              }\n              stop {\n                ...Price\n              }\n            }\n            priceRange {\n              start {\n                ...Price\n              }\n              stop {\n                ...Price\n              }\n            }\n          }\n        }\n\n        query FeaturedProducts {\n          shop {\n            homepageCollection {\n              id\n              products(first: 20) {\n                edges {\n                  node {\n                    ...BasicProductFields\n                    ...ProductPricingField\n                    category {\n                      id\n                      name\n                    }\n                  }\n                }\n              }\n            }\n          }\n        }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shop', $responseContent);
        
        $this->assertNotNull($responseContent['shop']);
        

    }
}