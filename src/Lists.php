<?php

namespace Maropost\Api;

use Maropost\Api\Abstractions\OperationResult;
use Maropost\Api\Abstractions\Api;
use Maropost\Api\ResultTypes\GetResult;

/**
 * Class Contacts
 * @package Maropost\Api
 */
class Lists
{
    use Api;

    /**
     * Contacts constructor.
     * @param $accountId
     * @param $authToken
     */
    public function __construct($accountId, $authToken)
    {
        $this->auth_token = $authToken;
        $this->accountId = $accountId;
        $this->resource = 'lists';
    }

    /**
     * Searches a contact with email and get all the details of the contact
     *
     * @param string $email Email for which to get the contact
     * @return OperationResult
     */
    public function get(): OperationResult
    {
        return $this->_get(null);
    }
}