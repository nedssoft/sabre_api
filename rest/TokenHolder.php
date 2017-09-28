<?php
include_once 'rest/Auth.php';

class TokenHolder {

    private static $token = 'T1RLAQIDWsvlrZ+1ZB2Zlq5sB/iVh17YuxAavumOP5YyEwy3hGkfI3acAADAjOx7MqgymJZ/e9nQ8oN0PM5LhtLIWZOUEFqxe/vyxPPqTbK2Kkf4mr+uZCnJ+8uLmnj6jJsCxhKR1U07cN+avMw5U+DtZ5N/xHWHckGkXcoo13Oq8p6wmNnJCi+63HNguwobsk1YODHIH5oTpSV4P0H9OYZf2hVUeA85bN0pHqVSpNX+omCDavB0La4gQZlclU8x/SvbD9SYznKv6hNpl5XObKsXMqRgRKz2JRUAMl1OMAscaDBrX4EIWYgu7wO1';
    
    private static $expirationDate = 0;
    
    public static function getToken() {
        
        if (TokenHolder::$token == null || time() > TokenHolder::$expirationDate) {
            $authCall = new Auth();
            TokenHolder::$token = $authCall->callForToken();
            TokenHolder::$expirationDate = time() + TokenHolder::$token->expires_in;
            
        }
        return TokenHolder::$token;
    }
}

