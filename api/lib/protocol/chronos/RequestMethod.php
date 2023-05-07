<?php
namespace chronos;

/**
 * Autogenerated by Thrift Compiler (0.18.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

final class RequestMethod
{
    const GET = 0;

    const POST = 1;

    const OPTIONS = 2;

    const HEAD = 3;

    const PUT = 4;

    const DELETE = 5;

    const TRACE = 6;

    const CONNECT = 7;

    const PATCH = 8;

    static public $__names = array(
        0 => 'GET',
        1 => 'POST',
        2 => 'OPTIONS',
        3 => 'HEAD',
        4 => 'PUT',
        5 => 'DELETE',
        6 => 'TRACE',
        7 => 'CONNECT',
        8 => 'PATCH',
    );
}

