<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Q5cc3b8e975a153f39f01c0b9b573c8e4Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n        query getProductVariants($id: ID!) {\n            product(id: $id) {\n                variants {\n                    pricing {\n                        priceUndiscounted {\n                            gross {\n                                amount\n                            }\n                        }\n                    }\n                }\n            }\n        }\n        ", "variables": {"id": "UHJvZHVjdDo1OTU="}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('product', $responseContent);
        
        if ($responseContent['product']) {
        
        $this->assertArrayHasKey('variants', $responseContent['product']);
        
        if ($responseContent['product']['variants']) {
        
        $this->assertIsArray($responseContent['product']['variants']);
        
        for($g = 0; $g < count($responseContent['product']['variants']); $g++) {
        
        if ($responseContent['product']['variants'][$g]) {
        
        $this->assertArrayHasKey('pricing', $responseContent['product']['variants'][$g]);
        
        if ($responseContent['product']['variants'][$g]['pricing']) {
        
        $this->assertArrayHasKey('priceUndiscounted', $responseContent['product']['variants'][$g]['pricing']);
        
        if ($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']) {
        
        $this->assertArrayHasKey('gross', $responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['gross']);
        
        $this->assertArrayHasKey('amount', $responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['gross']);
        
        $this->assertNotNull($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['gross']['amount']);
        
        $this->assertIsNumeric($responseContent['product']['variants'][$g]['pricing']['priceUndiscounted']['gross']['amount']);
        
        }
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}