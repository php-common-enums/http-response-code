<?php

namespace PhpCommonEnums\HttpResponseCode\Tests\Enumeration;

use PhpCommonEnums\HttpResponseCode\Enumeration\HttpResponseCodeEnum;
use PHPUnit\Framework\TestCase;

class HttpResponseCodeEnumTest extends TestCase
{
    public function testExpectedDescription(): void
    {
        self::assertEquals(
            'Everything so far is OK and the client should continue with the request or ignore it if it is already finished.',
            HttpResponseCodeEnum::Continue->getDescription()
        );
        self::assertEquals(
            'The server is switching to the protocol that was specified in the Upgrade request header received from the client.',
            HttpResponseCodeEnum::SwitchingProtocols->getDescription()
        );
        self::assertEquals(
            'Intended to be used with the Link header to allow the user agent to start preloading resources while the server is still preparing a response.',
            HttpResponseCodeEnum::EarlyHints->getDescription()
        );
        self::assertEquals(
            'The request has succeeded.',
            HttpResponseCodeEnum::Ok->getDescription()
        );
        self::assertEquals(
            'The request has succeeded and has led to the creation of a resource.',
            HttpResponseCodeEnum::Created->getDescription()
        );
        self::assertEquals(
            'The request has been accepted for processing, but the processing has not been completed.',
            HttpResponseCodeEnum::Accepted->getDescription()
        );
        self::assertEquals(
            'The request was successful but the enclosed payload has been modified by a transforming proxy from that of the origin server\'s 200 (OK) response.',
            HttpResponseCodeEnum::NonAuthoritativeInformation->getDescription()
        );
        self::assertEquals(
            'The request has succeeded, but that the client does not need to navigate away from its current page.',
            HttpResponseCodeEnum::NoContent->getDescription()
        );
        self::assertEquals(
            'The client must reset the document view. For example, clear the content of a form, reset a canvas state, or refresh the UI.',
            HttpResponseCodeEnum::ResetContent->getDescription()
        );
        self::assertEquals(
            'The request has succeeded and the body contains the requested ranges of data, as described in the Range header of the request.',
            HttpResponseCodeEnum::PartialContent->getDescription()
        );
        self::assertEquals(
            'The request has more than one possible responses. The user-agent or the user should choose one of them.',
            HttpResponseCodeEnum::MultipleChoices->getDescription()
        );
        self::assertEquals(
            'The requested resource has been definitively moved to the URL given by the Location headers.',
            HttpResponseCodeEnum::MovedPermanently->getDescription()
        );
        self::assertEquals(
            'The resource requested has been temporarily moved to the URL given by the Location headers.',
            HttpResponseCodeEnum::Found->getDescription()
        );
        self::assertEquals(
            'The redirect does not link to the requested resource itself, but to another page.',
            HttpResponseCodeEnum::SeeOther->getDescription()
        );
        self::assertEquals(
            'There is no need to retransmit the requested resources.',
            HttpResponseCodeEnum::NotModified->getDescription()
        );
        self::assertEquals(
            'The resource has been temporarily moved to the URL given by the Location headers.',
            HttpResponseCodeEnum::TemporaryRedirect->getDescription()
        );
        self::assertEquals(
            'The resource has been definitively moved to the URL given by the Location headers.',
            HttpResponseCodeEnum::PermanentRedirect->getDescription()
        );
        self::assertEquals(
            'The server cannot or will not process the request due to something that is perceived to be a client error.',
            HttpResponseCodeEnum::BadRequest->getDescription()
        );
        self::assertEquals(
            'The client request has not been completed because it lacks valid authentication credentials for the requested resource.',
            HttpResponseCodeEnum::Unauthorized->getDescription()
        );
        self::assertEquals(
            'The resource is not available until the client makes a payment.',
            HttpResponseCodeEnum::PaymentRequired->getDescription()
        );
        self::assertEquals(
            'The server understands the request but refuses to authorize it.',
            HttpResponseCodeEnum::Forbidden->getDescription()
        );
        self::assertEquals(
            'The server cannot find the resource.',
            HttpResponseCodeEnum::NotFound->getDescription()
        );
        self::assertEquals(
            'The server knows the request method, but the target resource does not support this method.',
            HttpResponseCodeEnum::MethodNotAllowed->getDescription()
        );
        self::assertEquals(
            'The server cannot produce a response matching the list of acceptable values defined in the request\'s proactive content negotiation headers, and the server is unwilling to supply a default representation.',
            HttpResponseCodeEnum::NotAcceptable->getDescription()
        );
        self::assertEquals(
            'The request lacks valid authentication credentials for a proxy server that is between the browser and the server that can access the resource.',
            HttpResponseCodeEnum::ProxyAuthenticationRequired->getDescription()
        );
        self::assertEquals(
            'The server has shut down this unused connection.',
            HttpResponseCodeEnum::RequestTimeout->getDescription()
        );
        self::assertEquals(
            'The request conflicts with the current state of the resource.',
            HttpResponseCodeEnum::Conflict->getDescription()
        );
        self::assertEquals(
            'The resource is no longer available at the origin server and this condition is likely to be permanent.',
            HttpResponseCodeEnum::Gone->getDescription()
        );
        self::assertEquals(
            'The server refuses to accept the request without a defined Content-Length header.',
            HttpResponseCodeEnum::LengthRequired->getDescription()
        );
        self::assertEquals(
            'Access to the resource has been denied because a precondition was not met.',
            HttpResponseCodeEnum::PreconditionFailed->getDescription()
        );
        self::assertEquals(
            'The request entity is larger than limits defined by server.',
            HttpResponseCodeEnum::PayloadTooLarge->getDescription()
        );
        self::assertEquals(
            'The URI requested by the client is longer than the server is willing to interpret.',
            HttpResponseCodeEnum::UriTooLong->getDescription()
        );
        self::assertEquals(
            'The server refuses to accept the request because the payload format is in an unsupported format.',
            HttpResponseCodeEnum::UnsupportedMediaType->getDescription()
        );
        self::assertEquals(
            'The server cannot serve the requested ranges.',
            HttpResponseCodeEnum::RangeNotSatisfiable->getDescription()
        );
        self::assertEquals(
            'The expectation given in the request\'s Expect header could not be met.',
            HttpResponseCodeEnum::ExpectationFailed->getDescription()
        );
        self::assertEquals(
            'The server refuses to brew coffee because it is, permanently, a teapot.',
            HttpResponseCodeEnum::ImATeapot->getDescription()
        );
        self::assertEquals(
            'The server understands the content type of the request entity, and the syntax of the request entity is correct, but it was unable to process the contained instructions.',
            HttpResponseCodeEnum::UnprocessableEntity->getDescription()
        );
        self::assertEquals(
            'The server is unwilling to risk processing a request that might be replayed, which creates the potential for a replay attack.',
            HttpResponseCodeEnum::TooEarly->getDescription()
        );
        self::assertEquals(
            'The server refuses to perform the request using the current protocol but might be willing to do so after the client upgrades to a different protocol.',
            HttpResponseCodeEnum::UpgradeRequired->getDescription()
        );
        self::assertEquals(
            'The server requires the request to be conditional.',
            HttpResponseCodeEnum::PreconditionRequired->getDescription()
        );
        self::assertEquals(
            'The client has sent too many requests in a given amount of time ("rate limiting").',
            HttpResponseCodeEnum::TooManyRequests->getDescription()
        );
        self::assertEquals(
            'The server refuses to process the request because the request\'s HTTP headers are too long. The request may be resubmitted after reducing the size of the request headers.',
            HttpResponseCodeEnum::RequestHeaderFieldsTooLarge->getDescription()
        );
        self::assertEquals(
            'The client requested a resource that is not available due to legal reasons, such as a web page for which a legal action has been issued.',
            HttpResponseCodeEnum::UnavailableForLegalReasons->getDescription()
        );
        self::assertEquals(
            'The server encountered an unexpected condition that prevented it from fulfilling the request.',
            HttpResponseCodeEnum::InternalServerError->getDescription()
        );
        self::assertEquals(
            'The server does not support the functionality required to fulfill the request.',
            HttpResponseCodeEnum::NotImplemented->getDescription()
        );
        self::assertEquals(
            'The server, while acting as a gateway or proxy, received an invalid response from the upstream server.',
            HttpResponseCodeEnum::BadGateway->getDescription()
        );
        self::assertEquals(
            'The server is not ready to handle the request.',
            HttpResponseCodeEnum::ServiceUnavailable->getDescription()
        );
        self::assertEquals(
            'The server, while acting as a gateway or proxy, did not get a response in time from the upstream server that it needed in order to complete the request.',
            HttpResponseCodeEnum::GatewayTimeout->getDescription()
        );
        self::assertEquals(
            'The HTTP version used in the request is not supported by the server.',
            HttpResponseCodeEnum::HttpVersionNotSupported->getDescription()
        );
        self::assertEquals(
            'The client must retrieve the best variant of a given resource, because the server supports multiple variants.',
            HttpResponseCodeEnum::VariantAlsoNegotiates->getDescription()
        );
        self::assertEquals(
            'The Web Distributed Authoring and Versioning (WebDAV) protocol does not have sufficient storage to service the request.',
            HttpResponseCodeEnum::InsufficientStorage->getDescription()
        );
        self::assertEquals(
            'The Web Distributed Authoring and Versioning (WebDAV) protocol detected a loop and cannot service the request.',
            HttpResponseCodeEnum::LoopDetected->getDescription()
        );
        self::assertEquals(
            'The requested HTTP Extension Framework extension is not supported for the request.',
            HttpResponseCodeEnum::NotExtended->getDescription()
        );
        self::assertEquals(
            'The client needs to authenticate to gain network access.',
            HttpResponseCodeEnum::NetworkAuthenticationRequired->getDescription()
        );
    }

    public function testExpectedLabel(): void
    {
        self::assertEquals(
            'Continue',
            HttpResponseCodeEnum::Continue->getLabel()
        );
        self::assertEquals(
            'Switching Protocols',
            HttpResponseCodeEnum::SwitchingProtocols->getLabel()
        );
        self::assertEquals(
            'Early Hints',
            HttpResponseCodeEnum::EarlyHints->getLabel()
        );
        self::assertEquals(
            'Ok',
            HttpResponseCodeEnum::Ok->getLabel()
        );
        self::assertEquals(
            'Created',
            HttpResponseCodeEnum::Created->getLabel()
        );
        self::assertEquals(
            'Accepted',
            HttpResponseCodeEnum::Accepted->getLabel()
        );
        self::assertEquals(
            'Non-Authoritative Information',
            HttpResponseCodeEnum::NonAuthoritativeInformation->getLabel()
        );
        self::assertEquals(
            'No Content',
            HttpResponseCodeEnum::NoContent->getLabel()
        );
        self::assertEquals(
            'Reset Content',
            HttpResponseCodeEnum::ResetContent->getLabel()
        );
        self::assertEquals(
            'Partial Content',
            HttpResponseCodeEnum::PartialContent->getLabel()
        );
        self::assertEquals(
            'Multiple Choices',
            HttpResponseCodeEnum::MultipleChoices->getLabel()
        );
        self::assertEquals(
            'Moved Permanently',
            HttpResponseCodeEnum::MovedPermanently->getLabel()
        );
        self::assertEquals(
            'Found',
            HttpResponseCodeEnum::Found->getLabel()
        );
        self::assertEquals(
            'See Other',
            HttpResponseCodeEnum::SeeOther->getLabel()
        );
        self::assertEquals(
            'Not Modified',
            HttpResponseCodeEnum::NotModified->getLabel()
        );
        self::assertEquals(
            'Temporary Redirect',
            HttpResponseCodeEnum::TemporaryRedirect->getLabel()
        );
        self::assertEquals(
            'Permanent Redirect',
            HttpResponseCodeEnum::PermanentRedirect->getLabel()
        );
        self::assertEquals(
            'Bad Request',
            HttpResponseCodeEnum::BadRequest->getLabel()
        );
        self::assertEquals(
            'Unauthorized',
            HttpResponseCodeEnum::Unauthorized->getLabel()
        );
        self::assertEquals(
            'Payment Required',
            HttpResponseCodeEnum::PaymentRequired->getLabel()
        );
        self::assertEquals(
            'Forbidden',
            HttpResponseCodeEnum::Forbidden->getLabel()
        );
        self::assertEquals(
            'Not Found',
            HttpResponseCodeEnum::NotFound->getLabel()
        );
        self::assertEquals(
            'Method Not Allowed',
            HttpResponseCodeEnum::MethodNotAllowed->getLabel()
        );
        self::assertEquals(
            'Not Acceptable',
            HttpResponseCodeEnum::NotAcceptable->getLabel()
        );
        self::assertEquals(
            'Proxy Authentication Required',
            HttpResponseCodeEnum::ProxyAuthenticationRequired->getLabel()
        );
        self::assertEquals(
            'Request Timeout',
            HttpResponseCodeEnum::RequestTimeout->getLabel()
        );
        self::assertEquals(
            'Conflict',
            HttpResponseCodeEnum::Conflict->getLabel()
        );
        self::assertEquals(
            'Gone',
            HttpResponseCodeEnum::Gone->getLabel()
        );
        self::assertEquals(
            'Length Required',
            HttpResponseCodeEnum::LengthRequired->getLabel()
        );
        self::assertEquals(
            'Precondition Failed',
            HttpResponseCodeEnum::PreconditionFailed->getLabel()
        );
        self::assertEquals(
            'Payload Too Large',
            HttpResponseCodeEnum::PayloadTooLarge->getLabel()
        );
        self::assertEquals(
            'Uri Too Long',
            HttpResponseCodeEnum::UriTooLong->getLabel()
        );
        self::assertEquals(
            'Unsupported Media Type',
            HttpResponseCodeEnum::UnsupportedMediaType->getLabel()
        );
        self::assertEquals(
            'Range Not Satisfiable',
            HttpResponseCodeEnum::RangeNotSatisfiable->getLabel()
        );
        self::assertEquals(
            'Expectation Failed',
            HttpResponseCodeEnum::ExpectationFailed->getLabel()
        );
        self::assertEquals(
            'I\'m a teapot',
            HttpResponseCodeEnum::ImATeapot->getLabel()
        );
        self::assertEquals(
            'Unprocessable Entity',
            HttpResponseCodeEnum::UnprocessableEntity->getLabel()
        );
        self::assertEquals(
            'Too Early',
            HttpResponseCodeEnum::TooEarly->getLabel()
        );
        self::assertEquals(
            'Upgrade Required',
            HttpResponseCodeEnum::UpgradeRequired->getLabel()
        );
        self::assertEquals(
            'Precondition Required',
            HttpResponseCodeEnum::PreconditionRequired->getLabel()
        );
        self::assertEquals(
            'Too Many Requests',
            HttpResponseCodeEnum::TooManyRequests->getLabel()
        );
        self::assertEquals(
            'Request Header Fields Too Large',
            HttpResponseCodeEnum::RequestHeaderFieldsTooLarge->getLabel()
        );
        self::assertEquals(
            'Unavailable For Legal Reasons',
            HttpResponseCodeEnum::UnavailableForLegalReasons->getLabel()
        );
        self::assertEquals(
            'Internal Server Error',
            HttpResponseCodeEnum::InternalServerError->getLabel()
        );
        self::assertEquals(
            'Not Implemented',
            HttpResponseCodeEnum::NotImplemented->getLabel()
        );
        self::assertEquals(
            'Bad Gateway',
            HttpResponseCodeEnum::BadGateway->getLabel()
        );
        self::assertEquals(
            'Service Unavailable',
            HttpResponseCodeEnum::ServiceUnavailable->getLabel()
        );
        self::assertEquals(
            'Gateway Timeout',
            HttpResponseCodeEnum::GatewayTimeout->getLabel()
        );
        self::assertEquals(
            'Http Version Not Supported',
            HttpResponseCodeEnum::HttpVersionNotSupported->getLabel()
        );
        self::assertEquals(
            'Variant Also Negotiates',
            HttpResponseCodeEnum::VariantAlsoNegotiates->getLabel()
        );
        self::assertEquals(
            'Insufficient Storage',
            HttpResponseCodeEnum::InsufficientStorage->getLabel()
        );
        self::assertEquals(
            'Loop Detected',
            HttpResponseCodeEnum::LoopDetected->getLabel()
        );
        self::assertEquals(
            'Not Extended',
            HttpResponseCodeEnum::NotExtended->getLabel()
        );
        self::assertEquals(
            'Network Authentication Required',
            HttpResponseCodeEnum::NetworkAuthenticationRequired->getLabel()
        );
    }

    public function testExpectedValue(): void
    {
        self::assertEquals(
            100,
            HttpResponseCodeEnum::Continue->value
        );
        self::assertEquals(
            101,
            HttpResponseCodeEnum::SwitchingProtocols->value
        );
        self::assertEquals(
            103,
            HttpResponseCodeEnum::EarlyHints->value
        );
        self::assertEquals(
            200,
            HttpResponseCodeEnum::Ok->value
        );
        self::assertEquals(
            201,
            HttpResponseCodeEnum::Created->value
        );
        self::assertEquals(
            202,
            HttpResponseCodeEnum::Accepted->value
        );
        self::assertEquals(
            203,
            HttpResponseCodeEnum::NonAuthoritativeInformation->value
        );
        self::assertEquals(
            204,
            HttpResponseCodeEnum::NoContent->value
        );
        self::assertEquals(
            205,
            HttpResponseCodeEnum::ResetContent->value
        );
        self::assertEquals(
            206,
            HttpResponseCodeEnum::PartialContent->value
        );
        self::assertEquals(
            300,
            HttpResponseCodeEnum::MultipleChoices->value
        );
        self::assertEquals(
            301,
            HttpResponseCodeEnum::MovedPermanently->value
        );
        self::assertEquals(
            302,
            HttpResponseCodeEnum::Found->value
        );
        self::assertEquals(
            303,
            HttpResponseCodeEnum::SeeOther->value
        );
        self::assertEquals(
            304,
            HttpResponseCodeEnum::NotModified->value
        );
        self::assertEquals(
            307,
            HttpResponseCodeEnum::TemporaryRedirect->value
        );
        self::assertEquals(
            308,
            HttpResponseCodeEnum::PermanentRedirect->value
        );
        self::assertEquals(
            400,
            HttpResponseCodeEnum::BadRequest->value
        );
        self::assertEquals(
            401,
            HttpResponseCodeEnum::Unauthorized->value
        );
        self::assertEquals(
            402,
            HttpResponseCodeEnum::PaymentRequired->value
        );
        self::assertEquals(
            403,
            HttpResponseCodeEnum::Forbidden->value
        );
        self::assertEquals(
            404,
            HttpResponseCodeEnum::NotFound->value
        );
        self::assertEquals(
            405,
            HttpResponseCodeEnum::MethodNotAllowed->value
        );
        self::assertEquals(
            406,
            HttpResponseCodeEnum::NotAcceptable->value
        );
        self::assertEquals(
            407,
            HttpResponseCodeEnum::ProxyAuthenticationRequired->value
        );
        self::assertEquals(
            408,
            HttpResponseCodeEnum::RequestTimeout->value
        );
        self::assertEquals(
            409,
            HttpResponseCodeEnum::Conflict->value
        );
        self::assertEquals(
            410,
            HttpResponseCodeEnum::Gone->value
        );
        self::assertEquals(
            411,
            HttpResponseCodeEnum::LengthRequired->value
        );
        self::assertEquals(
            412,
            HttpResponseCodeEnum::PreconditionFailed->value
        );
        self::assertEquals(
            413,
            HttpResponseCodeEnum::PayloadTooLarge->value
        );
        self::assertEquals(
            414,
            HttpResponseCodeEnum::UriTooLong->value
        );
        self::assertEquals(
            415,
            HttpResponseCodeEnum::UnsupportedMediaType->value
        );
        self::assertEquals(
            416,
            HttpResponseCodeEnum::RangeNotSatisfiable->value
        );
        self::assertEquals(
            417,
            HttpResponseCodeEnum::ExpectationFailed->value
        );
        self::assertEquals(
            418,
            HttpResponseCodeEnum::ImATeapot->value
        );
        self::assertEquals(
            422,
            HttpResponseCodeEnum::UnprocessableEntity->value
        );
        self::assertEquals(
            425,
            HttpResponseCodeEnum::TooEarly->value
        );
        self::assertEquals(
            426,
            HttpResponseCodeEnum::UpgradeRequired->value
        );
        self::assertEquals(
            428,
            HttpResponseCodeEnum::PreconditionRequired->value
        );
        self::assertEquals(
            429,
            HttpResponseCodeEnum::TooManyRequests->value
        );
        self::assertEquals(
            431,
            HttpResponseCodeEnum::RequestHeaderFieldsTooLarge->value
        );
        self::assertEquals(
            451,
            HttpResponseCodeEnum::UnavailableForLegalReasons->value
        );
        self::assertEquals(
            500,
            HttpResponseCodeEnum::InternalServerError->value
        );
        self::assertEquals(
            501,
            HttpResponseCodeEnum::NotImplemented->value
        );
        self::assertEquals(
            502,
            HttpResponseCodeEnum::BadGateway->value
        );
        self::assertEquals(
            503,
            HttpResponseCodeEnum::ServiceUnavailable->value
        );
        self::assertEquals(
            504,
            HttpResponseCodeEnum::GatewayTimeout->value
        );
        self::assertEquals(
            505,
            HttpResponseCodeEnum::HttpVersionNotSupported->value
        );
        self::assertEquals(
            506,
            HttpResponseCodeEnum::VariantAlsoNegotiates->value
        );
        self::assertEquals(
            507,
            HttpResponseCodeEnum::InsufficientStorage->value
        );
        self::assertEquals(
            508,
            HttpResponseCodeEnum::LoopDetected->value
        );
        self::assertEquals(
            510,
            HttpResponseCodeEnum::NotExtended->value
        );
        self::assertEquals(
            511,
            HttpResponseCodeEnum::NetworkAuthenticationRequired->value
        );
    }
}
