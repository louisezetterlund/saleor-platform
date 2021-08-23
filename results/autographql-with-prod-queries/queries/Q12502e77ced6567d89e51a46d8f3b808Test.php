<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q12502e77ced6567d89e51a46d8f3b808Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment CustomerFragment on User {\n  id\n  email\n  firstName\n  lastName\n  __typename\n}\n\nquery ListCustomers($after: String, $before: String, $first: Int, $last: Int, $filter: CustomerFilterInput, $sort: UserSortingInput) {\n  customers(after: $after, before: $before, first: $first, last: $last, filter: $filter, sortBy: $sort) {\n    edges {\n      node {\n        ...CustomerFragment\n        orders {\n          totalCount\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      endCursor\n      hasNextPage\n      hasPreviousPage\n      startCursor\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "filter": {"dateJoined": null, "moneySpent": null, "numberOfOrders": null, "search": "ka"}, "sort": {"direction": "ASC", "field": "LAST_NAME"}}, "operationName": "ListCustomers"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('customers', $responseContent);
        
        if ($responseContent['customers']) {
        
        $this->assertEquals('UserCountableConnection' , $responseContent['customers']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['customers']);
        
        $this->assertNotNull($responseContent['customers']['edges']);
        
        $this->assertIsArray($responseContent['customers']['edges']);
        
        for($g = 0; $g < count($responseContent['customers']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['customers']['edges'][$g]);
        
        $this->assertEquals('UserCountableEdge' , $responseContent['customers']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['customers']['edges'][$g]);
        
        $this->assertNotNull($responseContent['customers']['edges'][$g]['node']);
        
        $this->assertEquals('User' , $responseContent['customers']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['customers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['customers']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('email', $responseContent['customers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['customers']['edges'][$g]['node']['email']);
        
        $this->assertIsString($responseContent['customers']['edges'][$g]['node']['email']);
        
        $this->assertArrayHasKey('firstName', $responseContent['customers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['customers']['edges'][$g]['node']['firstName']);
        
        $this->assertIsString($responseContent['customers']['edges'][$g]['node']['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['customers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['customers']['edges'][$g]['node']['lastName']);
        
        $this->assertIsString($responseContent['customers']['edges'][$g]['node']['lastName']);
        
        $this->assertArrayHasKey('orders', $responseContent['customers']['edges'][$g]['node']);
        
        if ($responseContent['customers']['edges'][$g]['node']['orders']) {
        
        $this->assertEquals('OrderCountableConnection' , $responseContent['customers']['edges'][$g]['node']['orders']['__typename']);
        
        $this->assertArrayHasKey('totalCount', $responseContent['customers']['edges'][$g]['node']['orders']);
        
        if ($responseContent['customers']['edges'][$g]['node']['orders']['totalCount']) {
        
        $this->assertIsInt($responseContent['customers']['edges'][$g]['node']['orders']['totalCount']);
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['customers']);
        
        $this->assertNotNull($responseContent['customers']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['customers']['pageInfo']['__typename']);
        
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
        
        $this->assertArrayHasKey('startCursor', $responseContent['customers']['pageInfo']);
        
        if ($responseContent['customers']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['customers']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}