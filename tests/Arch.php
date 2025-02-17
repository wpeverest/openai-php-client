<?php

test('contracts')->expect('OpenAI\Contracts')->toOnlyUse([
    'OpenAI\ValueObjects',
    'OpenAI\Exceptions',
]);

test('exceptions')->expect('OpenAI\Exceptions')->toOnlyUse([
    'Psr\Http\Client',
]);

test('resources')->expect('OpenAI\Resources')->toOnlyUse([
    'OpenAI\Contracts',
    'OpenAI\ValueObjects',
    'OpenAI\Exceptions',
    'OpenAI\Responses',
]);

test('responses')->expect('OpenAI\Responses')->toOnlyUse([
    'OpenAI\Enums',
    'OpenAI\Contracts',
]);

test('value objects')->expect('OpenAI\ValueObjects')->toOnlyUse([
    'Http\Discovery\Psr17Factory',
    'Http\Message\MultipartStream\MultipartStreamBuilder',
    'Psr\Http\Message\RequestInterface',
    'Psr\Http\Message\StreamInterface',
    'OpenAI\Enums',
    'OpenAI\Contracts',
]);

test('client')->expect('OpenAI\Client')->toOnlyUse([
    'OpenAI\Resources',
    'OpenAI\Contracts',
]);

test('openai')->expect('OpenAI')->toOnlyUse([
    'Http\Discovery\Psr17Factory',
    'Http\Discovery\Psr18ClientDiscovery',
    'Http\Message\MultipartStream\MultipartStreamBuilder',
    'OpenAI\Contracts',
    'OpenAI\Resources',
    'Psr\Http\Client',
    'Psr\Http\Message\RequestInterface',
    'Psr\Http\Message\StreamInterface',
]);
