<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qf1332cad8e7754ac98d608183e6675c4Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "fragment MainMenuSubItem on MenuItem {\n  id\n  name\n  category {\n    id\n    name\n    __typename\n  }\n  url\n  collection {\n    id\n    name\n    __typename\n  }\n  page {\n    slug\n    __typename\n  }\n  parent {\n    id\n    __typename\n  }\n  __typename\n}\n\nquery MainMenu {\n  shop {\n    navigation {\n      main {\n        id\n        items {\n          ...MainMenuSubItem\n          children {\n            ...MainMenuSubItem\n            children {\n              ...MainMenuSubItem\n              __typename\n            }\n            __typename\n          }\n          __typename\n        }\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n", "variables": {}, "operationName": "MainMenu"}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjgyNTQ4NDYsImV4cCI6MTYyODI1NTE0NiwidG9rZW4iOiJEUG1Qa0ZkQ3ZQenUiLCJlbWFpbCI6ImFkbWluQGV4YW1wbGUuY29tIiwidHlwZSI6ImFjY2VzcyIsInVzZXJfaWQiOiJWWE5sY2pveU5BPT0iLCJpc19zdGFmZiI6dHJ1ZX0.v7mrbSD5ONo95cIQ1Jk91lC3l_lO7Nd8fHTSahtClBc']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('shop', $responseContent);
        
        $this->assertNotNull($responseContent['shop']);
        
        $this->assertEquals('Shop' , $responseContent['shop']['__typename']);
        

    }
}