<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q6e883996a0f05baca819cda822346f34Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query (\n        $first: Int, $last: Int, $after: String, $before: String,\n        $sortBy: OrderSortingInput, $filter: OrderDraftFilterInput\n    ){\n        draftOrders(\n            first: $first, last: $last, after: $after, before: $before,\n            sortBy: $sortBy, filter: $filter\n        ) {\n            totalCount\n            edges {\n                node {\n                    id\n                    number\n                    total{\n                        gross{\n                            amount\n                        }\n                    }\n                    created\n                }\n            }\n            pageInfo{\n                startCursor\n                endCursor\n                hasNextPage\n                hasPreviousPage\n            }\n        }\n    }\n", "variables": {"first": 2, "after": null, "filter": {"created": {"gte": "2021-08-12"}}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('draftOrders', $responseContent);
        
        if ($responseContent['draftOrders']) {
        
        $this->assertArrayHasKey('totalCount', $responseContent['draftOrders']);
        
        if ($responseContent['draftOrders']['totalCount']) {
        
        $this->assertIsInt($responseContent['draftOrders']['totalCount']);
        
        }
        
        $this->assertArrayHasKey('edges', $responseContent['draftOrders']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges']);
        
        $this->assertIsArray($responseContent['draftOrders']['edges']);
        
        for($g = 0; $g < count($responseContent['draftOrders']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['draftOrders']['edges'][$g]);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('id', $responseContent['draftOrders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('number', $responseContent['draftOrders']['edges'][$g]['node']);
        
        if ($responseContent['draftOrders']['edges'][$g]['node']['number']) {
        
        $this->assertIsString($responseContent['draftOrders']['edges'][$g]['node']['number']);
        
        }
        
        $this->assertArrayHasKey('total', $responseContent['draftOrders']['edges'][$g]['node']);
        
        if ($responseContent['draftOrders']['edges'][$g]['node']['total']) {
        
        $this->assertArrayHasKey('gross', $responseContent['draftOrders']['edges'][$g]['node']['total']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['total']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['draftOrders']['edges'][$g]['node']['total']['gross']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['total']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['draftOrders']['edges'][$g]['node']['total']['gross']['amount']);
        
        }
        
        $this->assertArrayHasKey('created', $responseContent['draftOrders']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['draftOrders']['edges'][$g]['node']['created']);
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['draftOrders']);
        
        $this->assertNotNull($responseContent['draftOrders']['pageInfo']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['draftOrders']['pageInfo']);
        
        if ($responseContent['draftOrders']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['draftOrders']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('endCursor', $responseContent['draftOrders']['pageInfo']);
        
        if ($responseContent['draftOrders']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['draftOrders']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['draftOrders']['pageInfo']);
        
        $this->assertNotNull($responseContent['draftOrders']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['draftOrders']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['draftOrders']['pageInfo']);
        
        $this->assertNotNull($responseContent['draftOrders']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['draftOrders']['pageInfo']['hasPreviousPage']);
        
        }
        

    }
}