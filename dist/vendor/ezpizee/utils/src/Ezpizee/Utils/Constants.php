<?php

namespace Ezpizee\Utils;

class Constants
{
    const ACCESS_TOKEN_TLS_VALUE = 1 * 60 * 60 * 1000;

    const HEADER_CONTENT_TYPE = 'Content-Type';
    const HEADER_CONTENT_TYPE_VALUE_JSON = 'application/json';
    const HEADER_CONTENT_TYPE_VALUE_MULTIPARTS = 'multipart/form-data';
    const HEADER_ACCESS_TOKEN = 'Access-Token';
    const HEADER_APP_NAME = 'App-Name';
    const HEADER_APP_NAME_VALUE = 'Ezpizee Ecosystem';
    const HEADER_STORE_ID = 'Store-ID';
    const HEADER_AUTHORIZATION = 'Authorization';
    const HEADER_SESSION_ID = 'Session-Id';
    const HEADER_CUSTOMER_USER_ID = 'Customer-UserId';
    const HEADER_USER_ID = 'User-Id';
    const HEADER_EMPLOYEE_USER_ID = 'Employee-UserId';
    const HEADER_LANGUAGE_TAG = 'Ez-X-Lang';
    const HEADER_USER_AGENT = 'User-Agent';
    const HEADER_X_USER_AGENT = 'x-user-agent';
    const HEADER_APP_VERSION = 'App-Version';
    const HEADER_APP_PLATFORM = 'App-Platform';
    const HEADER_OS_PLATFORM_VERSION = 'OS-Platform-Version';
    const HEADER_AUTHORIZATION_BEARER_TOKEN = 'AuthorizationBearerToken';
    const HEADER_AUTHORIZATION_BEARER_PFX = 'Bearer ';
    const HEADER_AUTHORIZATION_BASIC_PFX = 'Basic ';
    const HEADER_KEY_FORM_TOKEN = 'EZ-Form-Authorized-Token';
    const HEADER_KEY_FORM_PUB_KEY = 'EZ-Form-Public-Key';
    const HEADER_KEY_REQUESTED_WITH = 'X-Requested-With';
    const HEADER_KEY_REQUEST_TIMESTAMP = 'X-Request-Timestamp';

    const EZPZ_FAKE_PHONE_PFX = 'ezpznotphone';
    const EZPZ_FAKE_EMAIL_PFX = 'ezpznotemail';

    const NUMERICS = [0,1,2,3,4,5,6,7,8,9];
    const ALPHABETS = ['a','A','b','B','c','C','d','D','e','E','f','F','g','G','h','H','i','I','j','J','k','K','l','L','m','M','n','N','o','O','p','P','q','Q','r','R','s','S','t','T','u','U','v','V','w','W','x','X','y','Y','z','Z'];
    const ALLOWED_ENVS = ['local', 'dev', 'stage', 'prod'];
}
