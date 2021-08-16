<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q8fe3a7da37c45482a05f5b8c8527801bTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query (\n        $first: Int, $last: Int, $after: String, $before: String,\n        $sortBy: OrderSortingInput, $filter: OrderFilterInput\n    ){\n        orders(\n            first: $first, last: $last, after: $after, before: $before,\n            sortBy: $sortBy, filter: $filter\n        ) {\n            totalCount\n            edges {\n                node {\n                    id\n                    number\n                    total{\n                        gross{\n                            amount\n                        }\n                    }\n                }\n            }\n            pageInfo{\n                startCursor\n                endCursor\n                hasNextPage\n                hasPreviousPage\n            }\n        }\n    }\n", "variables": {"first": 2, "after": null, "filter": {"created": {"lte": "2021-08-08"}}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('orders', $responseContent);
        
        if ($responseContent['orders']) {
        
        $this->assertArrayHasKey('totalCount', $responseContent['orders']);
        
        if ($responseContent['orders']['totalCount']) {
        
        $this->assertIsInt($responseContent['orders']['totalCount']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['orders']);
        
        $this->assertNotNull($responseContent['orders']['edges']);
        
        $this->assertIsArray($responseContent['orders']['edges']);
        
        for($g = 0; $g < count($responseContent['orders']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['orders']['edges'][$g]);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['orders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('number', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['number']) {
        
        $this->assertIsString($responseContent['orders']['edges'][$g]['node']['number']);
        
        }
        
        $this->assertArrayHasKey('total', $responseContent['orders']['edges'][$g]['node']);
        
        if ($responseContent['orders']['edges'][$g]['node']['total']) {
        
        $this->assertArrayHasKey('gross', $responseContent['orders']['edges'][$g]['node']['total']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['total']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['orders']['edges'][$g]['node']['total']['gross']);
        
        $this->assertNotNull($responseContent['orders']['edges'][$g]['node']['total']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['orders']['edges'][$g]['node']['total']['gross']['amount']);
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['orders']);
        
        $this->assertNotNull($responseContent['orders']['pageInfo']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['orders']['pageInfo']);
        
        if ($responseContent['orders']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['orders']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('endCursor', $responseContent['orders']['pageInfo']);
        
        if ($responseContent['orders']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['orders']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['orders']['pageInfo']);
        
        $this->assertNotNull($responseContent['orders']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['orders']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['orders']['pageInfo']);
        
        $this->assertNotNull($responseContent['orders']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['orders']['pageInfo']['hasPreviousPage']);
        
        }
        

    }
}