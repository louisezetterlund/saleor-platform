<?php
declare(strict_types=1);

namespace GraphQL;

use PHPUnit\Framework\TestCase;

class Qfd6d54587cae53218414f64f35784aeeTest extends TestCase
{

    public function testGraphQL()
    {
        $client = new \GuzzleHttp\Client();

        $query = <<<'JSON'
{"query": "\n    query getValidator(\n        $country_code: CountryCode!, $country_area: String, $city_area: String) {\n        addressValidationRules(\n                countryCode: $country_code,\n                countryArea: $country_area,\n                cityArea: $city_area) {\n            countryCode\n            countryName\n            countryAreaType\n            countryAreaChoices {\n                verbose\n                raw\n            }\n            cityType\n            cityChoices {\n                raw\n                verbose\n            }\n            cityAreaType\n            cityAreaChoices {\n                raw\n                verbose\n            }\n        }\n    }\n    ", "variables": {"country_code": "CN", "country_area": "Fujian Sheng", "city_area": null}, "operationName": ""}
JSON;

        
        $response = $client->request('POST', 'http://localhost:8000/graphql/', ['body' => $query, 'headers' => ['Content-Type' => 'application/json', 'Authorization' => 'JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MjY3MDY1NTcsImV4cCI6MTYyNjcwNjg1NywidG9rZW4iOiJzOHYybHE1dU1KdVYiLCJlbWFpbCI6ImxvdWlzZXplQGt0aC5zZSIsInR5cGUiOiJhY2Nlc3MiLCJ1c2VyX2lkIjoiVlhObGNqb3lOQT09IiwiaXNfc3RhZmYiOnRydWV9.prCNTqlOaPYkTTGnfILkID6ZxqvjdCvdUYBMbV2xOF4']]);
        
        $this->assertEquals(200, $response->getStatusCode());

        $responseArray = json_decode((string)$response->getBody(), true);

        $this->assertIsArray($responseArray, 'Response is not valid JSON');

        $this->assertArrayNotHasKey('errors', $responseArray, 'Response contains errors');

        $responseContent = $responseArray['data'];


        
        $this->assertArrayHasKey('addressValidationRules', $responseContent);
        
        if ($responseContent['addressValidationRules']) {
        
        $this->assertArrayHasKey('countryCode', $responseContent['addressValidationRules']);
        
        if ($responseContent['addressValidationRules']['countryCode']) {
        
        $this->assertIsString($responseContent['addressValidationRules']['countryCode']);
        
        }
        
        $this->assertArrayHasKey('countryName', $responseContent['addressValidationRules']);
        
        if ($responseContent['addressValidationRules']['countryName']) {
        
        $this->assertIsString($responseContent['addressValidationRules']['countryName']);
        
        }
        
        $this->assertArrayHasKey('countryAreaType', $responseContent['addressValidationRules']);
        
        if ($responseContent['addressValidationRules']['countryAreaType']) {
        
        $this->assertIsString($responseContent['addressValidationRules']['countryAreaType']);
        
        }
        
        $this->assertArrayHasKey('countryAreaChoices', $responseContent['addressValidationRules']);
        
        if ($responseContent['addressValidationRules']['countryAreaChoices']) {
        
        $this->assertIsArray($responseContent['addressValidationRules']['countryAreaChoices']);
        
        for($g = 0; $g < count($responseContent['addressValidationRules']['countryAreaChoices']); $g++) {
        
        if ($responseContent['addressValidationRules']['countryAreaChoices'][$g]) {
        
        $this->assertArrayHasKey('verbose', $responseContent['addressValidationRules']['countryAreaChoices'][$g]);
        
        if ($responseContent['addressValidationRules']['countryAreaChoices'][$g]['verbose']) {
        
        $this->assertIsString($responseContent['addressValidationRules']['countryAreaChoices'][$g]['verbose']);
        
        }
        
        $this->assertArrayHasKey('raw', $responseContent['addressValidationRules']['countryAreaChoices'][$g]);
        
        if ($responseContent['addressValidationRules']['countryAreaChoices'][$g]['raw']) {
        
        $this->assertIsString($responseContent['addressValidationRules']['countryAreaChoices'][$g]['raw']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('cityType', $responseContent['addressValidationRules']);
        
        if ($responseContent['addressValidationRules']['cityType']) {
        
        $this->assertIsString($responseContent['addressValidationRules']['cityType']);
        
        }
        
        $this->assertArrayHasKey('cityChoices', $responseContent['addressValidationRules']);
        
        if ($responseContent['addressValidationRules']['cityChoices']) {
        
        $this->assertIsArray($responseContent['addressValidationRules']['cityChoices']);
        
        for($g = 0; $g < count($responseContent['addressValidationRules']['cityChoices']); $g++) {
        
        if ($responseContent['addressValidationRules']['cityChoices'][$g]) {
        
        $this->assertArrayHasKey('raw', $responseContent['addressValidationRules']['cityChoices'][$g]);
        
        if ($responseContent['addressValidationRules']['cityChoices'][$g]['raw']) {
        
        $this->assertIsString($responseContent['addressValidationRules']['cityChoices'][$g]['raw']);
        
        }
        
        $this->assertArrayHasKey('verbose', $responseContent['addressValidationRules']['cityChoices'][$g]);
        
        if ($responseContent['addressValidationRules']['cityChoices'][$g]['verbose']) {
        
        $this->assertIsString($responseContent['addressValidationRules']['cityChoices'][$g]['verbose']);
        
        }
        
        }
        
        }
        
        }
        
        $this->assertArrayHasKey('cityAreaType', $responseContent['addressValidationRules']);
        
        if ($responseContent['addressValidationRules']['cityAreaType']) {
        
        $this->assertIsString($responseContent['addressValidationRules']['cityAreaType']);
        
        }
        
        $this->assertArrayHasKey('cityAreaChoices', $responseContent['addressValidationRules']);
        
        if ($responseContent['addressValidationRules']['cityAreaChoices']) {
        
        $this->assertIsArray($responseContent['addressValidationRules']['cityAreaChoices']);
        
        for($g = 0; $g < count($responseContent['addressValidationRules']['cityAreaChoices']); $g++) {
        
        if ($responseContent['addressValidationRules']['cityAreaChoices'][$g]) {
        
        $this->assertArrayHasKey('raw', $responseContent['addressValidationRules']['cityAreaChoices'][$g]);
        
        if ($responseContent['addressValidationRules']['cityAreaChoices'][$g]['raw']) {
        
        $this->assertIsString($responseContent['addressValidationRules']['cityAreaChoices'][$g]['raw']);
        
        }
        
        $this->assertArrayHasKey('verbose', $responseContent['addressValidationRules']['cityAreaChoices'][$g]);
        
        if ($responseContent['addressValidationRules']['cityAreaChoices'][$g]['verbose']) {
        
        $this->assertIsString($responseContent['addressValidationRules']['cityAreaChoices'][$g]['verbose']);
        
        }
        
        }
        
        }
        
        }
        
        }
        

    }
}