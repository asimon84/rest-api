<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    CONST ITEMS = [
        [
            'title' => 'What is this?',
            'content' => 'This is a simple example of a REST API.',
            'open' => false
        ],
        [
            'title' => 'What is a REST API?',
            'content' => 'An API is an Application Programming Interface. It allows different software applications to communicate with each other. It enables the exchange of data, features, and functionality between applications, simplifying and accelerating software development. A REST API is an API that uses RESTful principles. REST stands for Representational State Transfer. REST defines how the architecture of a large-scale distributed system, such as the Web, should behave. The REST architectural style emphasises uniform interfaces, independent deployment of components, the scalability of interactions between them, and creating a layered architecture to promote caching to reduce user-perceived latency, enforce security, and encapsulate legacy systems. REST has been employed throughout the software industry to create stateless, reliable web-based applications.',
            'open' => false
        ],
    ];

    public static function getItems(): string
    {
        return json_encode([ 'items' => self::ITEMS]);
    }
}
