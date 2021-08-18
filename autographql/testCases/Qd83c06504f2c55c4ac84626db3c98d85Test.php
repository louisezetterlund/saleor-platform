<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qd83c06504f2c55c4ac84626db3c98d85Test extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query vouchers {\n        vouchers(first: 1) {\n            edges {\n                node {\n                    type\n                    name\n                    code\n                    usageLimit\n                    used\n                    startDate\n                    discountValueType\n                    discountValue\n                    applyOncePerCustomer\n                    countries {\n                        code\n                        country\n                    }\n                }\n            }\n        }\n    }\n    ", "variables": "", "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('vouchers', $responseContent);
        
        if ($responseContent['vouchers']) {
        
        $this->assertArrayHasKey('edges', $responseContent['vouchers']);
        
        $this->assertNotNull($responseContent['vouchers']['edges']);
        
        $this->assertIsArray($responseContent['vouchers']['edges']);
        
        for($g = 0; $g < count($responseContent['vouchers']['edges']); $g++) {
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]);
        
        $this->assertArrayHasKey('node', $responseContent['vouchers']['edges'][$g]);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']);
        
        $this->assertArrayHasKey('type', $responseContent['vouchers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['type']);
        
        $this->assertContains($responseContent['vouchers']['edges'][$g]['node']['type'], ['SHIPPING', 'ENTIRE_ORDER', 'SPECIFIC_PRODUCT']);
        
        $this->assertArrayHasKey('name', $responseContent['vouchers']['edges'][$g]['node']);
        
        if ($responseContent['vouchers']['edges'][$g]['node']['name']) {
        
        $this->assertIsString($responseContent['vouchers']['edges'][$g]['node']['name']);
        
        }
        
        $this->assertArrayHasKey('code', $responseContent['vouchers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['code']);
        
        $this->assertIsString($responseContent['vouchers']['edges'][$g]['node']['code']);
        
        $this->assertArrayHasKey('usageLimit', $responseContent['vouchers']['edges'][$g]['node']);
        
        if ($responseContent['vouchers']['edges'][$g]['node']['usageLimit']) {
        
        $this->assertIsInt($responseContent['vouchers']['edges'][$g]['node']['usageLimit']);
        
        }
        
        $this->assertArrayHasKey('used', $responseContent['vouchers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['used']);
        
        $this->assertIsInt($responseContent['vouchers']['edges'][$g]['node']['used']);
        
        $this->assertArrayHasKey('startDate', $responseContent['vouchers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['startDate']);
        
        $this->assertArrayHasKey('discountValueType', $responseContent['vouchers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['discountValueType']);
        
        $this->assertContains($responseContent['vouchers']['edges'][$g]['node']['discountValueType'], ['FIXED', 'PERCENTAGE']);
        
        $this->assertArrayHasKey('discountValue', $responseContent['vouchers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['discountValue']);
        
        $this->assertIsNumeric($responseContent['vouchers']['edges'][$g]['node']['discountValue']);
        
        $this->assertArrayHasKey('applyOncePerCustomer', $responseContent['vouchers']['edges'][$g]['node']);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['applyOncePerCustomer']);
        
        $this->assertIsBool($responseContent['vouchers']['edges'][$g]['node']['applyOncePerCustomer']);
        
        $this->assertArrayHasKey('countries', $responseContent['vouchers']['edges'][$g]['node']);
        
        if ($responseContent['vouchers']['edges'][$g]['node']['countries']) {
        
        $this->assertIsArray($responseContent['vouchers']['edges'][$g]['node']['countries']);
        
        for($f = 0; $f < count($responseContent['vouchers']['edges'][$g]['node']['countries']); $f++) {
        
        if ($responseContent['vouchers']['edges'][$g]['node']['countries'][$f]) {
        
        $this->assertArrayHasKey('code', $responseContent['vouchers']['edges'][$g]['node']['countries'][$f]);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['countries'][$f]['code']);
        
        $this->assertIsString($responseContent['vouchers']['edges'][$g]['node']['countries'][$f]['code']);
        
        $this->assertArrayHasKey('country', $responseContent['vouchers']['edges'][$g]['node']['countries'][$f]);
        
        $this->assertNotNull($responseContent['vouchers']['edges'][$g]['node']['countries'][$f]['country']);
        
        $this->assertIsString($responseContent['vouchers']['edges'][$g]['node']['countries'][$f]['country']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}