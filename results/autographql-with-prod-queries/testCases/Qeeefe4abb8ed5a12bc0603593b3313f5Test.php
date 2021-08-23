<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qeeefe4abb8ed5a12bc0603593b3313f5Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment PageInfoFragment on PageInfo {\n  endCursor\n  hasNextPage\n  hasPreviousPage\n  startCursor\n  __typename\n}\n\nquery SearchStaffMembers($after: String, $first: Int!, $query: String!) {\n  search: staffUsers(after: $after, first: $first, filter: {search: $query}) {\n    edges {\n      node {\n        id\n        email\n        firstName\n        lastName\n        isActive\n        avatar {\n          alt\n          url\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    pageInfo {\n      ...PageInfoFragment\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {"after": null, "first": 20, "query": "deepika"}, "operationName": "SearchStaffMembers"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('search', $responseContent);
        
        if ($responseContent['search']) {
        
        $this->assertEquals('UserCountableConnection' , $responseContent['search']['__typename']);
        
        $this->assertArrayHasKey('edges', $responseContent['search']);
        
        $this->assertNotNull($responseContent['search']['edges']);
        
        $this->assertIsArray($responseContent['search']['edges']);
        
        for($g = 0; $g < count($responseContent['search']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['search']['edges'][$g]);
        
        $this->assertEquals('UserCountableEdge' , $responseContent['search']['edges'][$g]['__typename']);
        
        $this->assertArrayHasKey('node', $responseContent['search']['edges'][$g]);
        
        $this->assertNotNull($responseContent['search']['edges'][$g]['node']);
        
        $this->assertEquals('User' , $responseContent['search']['edges'][$g]['node']['__typename']);
        
        $this->assertArrayHasKey('id', $responseContent['search']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['search']['edges'][$g]['node']['id']);
        
        $this->assertArrayHasKey('email', $responseContent['search']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['search']['edges'][$g]['node']['email']);
        
        $this->assertIsString($responseContent['search']['edges'][$g]['node']['email']);
        
        $this->assertArrayHasKey('firstName', $responseContent['search']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['search']['edges'][$g]['node']['firstName']);
        
        $this->assertIsString($responseContent['search']['edges'][$g]['node']['firstName']);
        
        $this->assertArrayHasKey('lastName', $responseContent['search']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['search']['edges'][$g]['node']['lastName']);
        
        $this->assertIsString($responseContent['search']['edges'][$g]['node']['lastName']);
        
        $this->assertArrayHasKey('isActive', $responseContent['search']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['search']['edges'][$g]['node']['isActive']);
        
        $this->assertIsBool($responseContent['search']['edges'][$g]['node']['isActive']);
        
        $this->assertArrayHasKey('avatar', $responseContent['search']['edges'][$g]['node']);
        
        if ($responseContent['search']['edges'][$g]['node']['avatar']) {
        
        $this->assertEquals('Image' , $responseContent['search']['edges'][$g]['node']['avatar']['__typename']);
        
        $this->assertArrayHasKey('alt', $responseContent['search']['edges'][$g]['node']['avatar']);
        
        if ($responseContent['search']['edges'][$g]['node']['avatar']['alt']) {
        
        $this->assertIsString($responseContent['search']['edges'][$g]['node']['avatar']['alt']);
        
        }
        
        $this->assertArrayHasKey('url', $responseContent['search']['edges'][$g]['node']['avatar']);
        
        $this->assertNotNull($responseContent['search']['edges'][$g]['node']['avatar']['url']);
        
        $this->assertIsString($responseContent['search']['edges'][$g]['node']['avatar']['url']);
        
        }
        
        }
        
        $this->assertArrayHasKey('pageInfo', $responseContent['search']);
        
        $this->assertNotNull($responseContent['search']['pageInfo']);
        
        $this->assertEquals('PageInfo' , $responseContent['search']['pageInfo']['__typename']);
        
        $this->assertArrayHasKey('endCursor', $responseContent['search']['pageInfo']);
        
        if ($responseContent['search']['pageInfo']['endCursor']) {
        
        $this->assertIsString($responseContent['search']['pageInfo']['endCursor']);
        
        }
        
        $this->assertArrayHasKey('hasNextPage', $responseContent['search']['pageInfo']);
        
        $this->assertNotNull($responseContent['search']['pageInfo']['hasNextPage']);
        
        $this->assertIsBool($responseContent['search']['pageInfo']['hasNextPage']);
        
        $this->assertArrayHasKey('hasPreviousPage', $responseContent['search']['pageInfo']);
        
        $this->assertNotNull($responseContent['search']['pageInfo']['hasPreviousPage']);
        
        $this->assertIsBool($responseContent['search']['pageInfo']['hasPreviousPage']);
        
        $this->assertArrayHasKey('startCursor', $responseContent['search']['pageInfo']);
        
        if ($responseContent['search']['pageInfo']['startCursor']) {
        
        $this->assertIsString($responseContent['search']['pageInfo']['startCursor']);
        
        }
        
        }
        

    }
}