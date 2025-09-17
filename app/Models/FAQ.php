<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    /**
     * @array>array>
     */
    CONST ITEMS = [
        [
            'title' => 'What is this?',
            'content' => 'This is a simple example of a REST API.',
            'open' => false
        ],
        [
            'title' => 'What is an API?',
            'content' => 'An API is an Application Programming Interface. It allows different software applications to communicate with each other. It enables the exchange of data, features, and functionality between applications without duplicating code, thereby simplifying and accelerating software development.',
            'open' => false
        ],
        [
            'title' => 'What is a REST API?',
            'content' => 'A REST API is an API that uses RESTful principles. REST stands for Representational State Transfer. REST defines how the architecture of a large-scale distributed system, such as the Web, should behave. The REST architectural style emphasises uniform interfaces, independent deployment of components, the scalability of interactions between them, and creating a layered architecture to promote caching to reduce user-perceived latency, enforce security, and encapsulate legacy systems. REST has been employed throughout the software industry to create stateless, reliable web-based applications.',
            'open' => false
        ],
        [
            'title' => 'What is stateless?',
            'content' => 'A stateless system does not store information about past interactions. Each interaction is independent, with all necessary information stored within the request itself, rather than relying on data previously stored by the server.',
            'open' => false
        ],
        [
            'title' => 'What is the benefit of statelessness?',
            'content' => 'Stateless systems are easier to scale, as there is no management of user session data. Stateless systems are more resilient; even if a server fails mid request, the request can be retried without issue as there is no data to recover. The design and management of a stateless system is therefore much more simple.',
            'open' => false
        ],
    ];

    /**
     * JSON Encode items into string
     *
     * @return string
     */
    public static function getItems(): string
    {
        return json_encode([ 'items' => self::ITEMS]);
    }
}
