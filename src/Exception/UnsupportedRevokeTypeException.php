<?php
/**
 * OAuth 2.0 Unsupported Revoke Exception
 *
 * @package     league/oauth2-server
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 * @link        https://github.com/thephpleague/oauth2-server
 */

namespace League\OAuth2\Server\Exception;
use League\OAuth2\Server\Exception\OAuthException;

/**
 * Exception class
 */
class UnsupportedRevokeTypeException extends OAuthException
{
    /**
     * {@inheritdoc}
     */
    public $httpStatusCode = 400;

    /**
     * {@inheritdoc}
     */
    public $errorType = 'unsupported_revoke_type';

    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        parent::__construct('The authorization server does not support revoking an access token using this method.');
    }
}
