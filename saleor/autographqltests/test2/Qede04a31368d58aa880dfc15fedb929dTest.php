<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qede04a31368d58aa880dfc15fedb929dTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query (\n        $first: Int, $last: Int, $after: String, $before: String,\n        $sortBy: UserSortingInput, $filter: CustomerFilterInput\n    ){\n        customers(\n            first: $first, last: $last, after: $after, before: $before,\n            sortBy: $sortBy, filter: $filter\n        ) {\n            edges {\n                node {\n                    firstName\n                }\n            }\n            pageInfo{\n                startCursor\n                endCursor\n                hasNextPage\n                hasPreviousPage\n            }\n        }\n    }\n", "variables": {"first": 2, "after": null, "sortBy": {"field": "EMAIL", "direction": "DESC"}}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('customers', $responseContent);
        
        if ($responseContent['customers']) {
        
        $this->assertArrayHasKey('edges', $responseContent['customers']);
        
        $this->assertNotNull($responseContent['customers']['edges']);
        
        $this->assertIsArray($responseContent['customers']['edges']);
        
        for($g = 0; $g < count($responseContent['customers']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['customers']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['customers']['edges'][$g]);
        
        $this->assertNotNull($responseContent['customers']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('firstName', $responseContent['customers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['customers']['edges'][$g]['node']['firstName']);
        
        $this->assertIsString($responseContent['customers']['edges'][$g]['node']['firstName']);
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['customers']);
        
        $this->assertNotNull($responseContent['customers']['pageInfo']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['customers']['pageInfo']);
        
        if ($responseContent['customers']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['customers']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('endCursor', $responseContent['customers']['pageInfo']);
        
        if ($responseContent['customers']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['customers']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['customers']['pageInfo']);
        
        $this->assertNotNull($responseContent['customers']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['customers']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['customers']['pageInfo']);
        
        $this->assertNotNull($responseContent['customers']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['customers']['pageInfo']['hasPreviousPage']);
        
        }
        

    }
}