<?php


namespace TheCodingMachine\GraphQL\Controllers\Fixtures\Integration\Controllers;


use TheCodingMachine\GraphQL\Controllers\Annotations\Query;
use TheCodingMachine\GraphQL\Controllers\Fixtures\Integration\Models\Contact;
use TheCodingMachine\GraphQL\Controllers\Fixtures\Integration\Models\User;

class ContactController
{
    /**
     * @Query()
     * @return Contact[]
     */
    public function getContacts(): array
    {
        return [
            new Contact('Joe'),
            new User('Bill', 'bill@example.com'),
        ];
    }
}