<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qefac2519afaa5b2abb15e66f59548d12Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment StaffMemberFragment on User {\n  id\n  email\n  firstName\n  isActive\n  lastName\n  __typename\n}\n\nquery StaffList($first: Int, $after: String, $last: Int, $before: String, $filter: StaffUserInput, $sort: UserSortingInput) {\n  staffUsers(before: $before, after: $after, first: $first, last: $last, filter: $filter, sortBy: $sort) {\n    edges {\n      cursor\n      node {\n        ...StaffMemberFragment\n        avatar(size: 48) {\n          url\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      hasPreviousPage\n      hasNextPage\n      startCursor\n      endCursor\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"first": 20, "filter": {"status": "ACTIVE"}, "sort": {"direction": "ASC", "field": "LAST_NAME"}}, "operationName": "StaffList"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('staffUsers', $responseContent);
        
        if ($responseContent['staffUsers']) {
        
        $this->assertEquals('UserCountableConnection' , $responseContent['staffUsers']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['staffUsers']);
        
        $this->assertNotNull($responseContent['staffUsers']['edges']);
        
        $this->assertIsArray($responseContent['staffUsers']['edges']);
        
        for($g = 0; $g < count($responseContent['staffUsers']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['staffUsers']['edges'][$g]);
        
        $this->assertEquals('UserCountableEdge' , $responseContent['staffUsers']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('cursor', $responseContent['staffUsers']['edges'][$g]);
        
        $this->assertNotNull($responseContent['staffUsers']['edges'][$g]['cursor']);
        
        $this->assertIsString($responseContent['staffUsers']['edges'][$g]['cursor']);
        
        $this->assertArrayHasKey('node', $responseContent['staffUsers']['edges'][$g]);
        
        $this->assertNotNull($responseContent['staffUsers']['edges'][$g]['node']);
        
        $this->assertEquals('User' , $responseContent['staffUsers']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['staffUsers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['staffUsers']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('email', $responseContent['staffUsers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['staffUsers']['edges'][$g]['node']['email']);
        
        $this->assertIsString($responseContent['staffUsers']['edges'][$g]['node']['email']);
        
        $this->assertArrayHasKey('firstName', $responseContent['staffUsers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['staffUsers']['edges'][$g]['node']['firstName']);
        
        $this->assertIsString($responseContent['staffUsers']['edges'][$g]['node']['firstName']);
        
        $this->assertArrayHasKey('isActive', $responseContent['staffUsers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['staffUsers']['edges'][$g]['node']['isActive']);
        
        $this->assertIsBool($responseContent['staffUsers']['edges'][$g]['node']['isActive']);
        
        $this->assertArrayHasKey('lastName', $responseContent['staffUsers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['staffUsers']['edges'][$g]['node']['lastName']);
        
        $this->assertIsString($responseContent['staffUsers']['edges'][$g]['node']['lastName']);
        
        $this->assertArrayHasKey('avatar', $responseContent['staffUsers']['edges'][$g]['node']);
        
        if ($responseContent['staffUsers']['edges'][$g]['node']['avatar']) {
        
        $this->assertEquals('Image' , $responseContent['staffUsers']['edges'][$g]['node']['avatar']['__typename']);
        
        $this->assertArrayHasKey('url', $responseContent['staffUsers']['edges'][$g]['node']['avatar']);
        
        $this->assertNotNull($responseContent['staffUsers']['edges'][$g]['node']['avatar']['url']);
        
        $this->assertIsString($responseContent['staffUsers']['edges'][$g]['node']['avatar']['url']);
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['staffUsers']);
        
        $this->assertNotNull($responseContent['staffUsers']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['staffUsers']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['staffUsers']['pageInfo']);
        
        $this->assertNotNull($responseContent['staffUsers']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['staffUsers']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['staffUsers']['pageInfo']);
        
        $this->assertNotNull($responseContent['staffUsers']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['staffUsers']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['staffUsers']['pageInfo']);
        
        if ($responseContent['staffUsers']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['staffUsers']['pageInfo']['startCursor']);
        
        }
        
        $this->assertArrayHasKey('endCursor', $responseContent['staffUsers']['pageInfo']);
        
        if ($responseContent['staffUsers']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['staffUsers']['pageInfo']['endCursor']);
        
        }
        
        }
        

    }
}