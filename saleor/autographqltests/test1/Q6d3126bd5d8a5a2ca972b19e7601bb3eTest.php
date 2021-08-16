<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q6d3126bd5d8a5a2ca972b19e7601bb3eTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query translation(\n        $kind: TranslatableKinds!, $id: ID!, $languageCode: LanguageCodeEnum!\n    ){\n        translation(kind: $kind, id: $id){\n            __typename\n            ...on CategoryTranslatableContent{\n                id\n                name\n                translation(languageCode: $languageCode){\n                    name\n                }\n                category {\n                    id\n                    name\n                }\n            }\n        }\n    }\n", "variables": {"id": "Q2F0ZWdvcnk6NTE5", "kind": "CATEGORY", "languageCode": "FR"}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('translation', $responseContent);
        
        if ($responseContent['translation']) {
        
        }
        

    }
}