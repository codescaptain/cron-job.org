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

final class TestRunState
{
    const PREPARING = 0;

    const CONNECTING = 1;

    const SENDING_HEADERS = 2;

    const SENDING_DATA = 3;

    const RECEIVING_HEADERS = 4;

    const RECEIVING_DATA = 5;

    const DONE = 6;

    static public $__names = array(
        0 => 'PREPARING',
        1 => 'CONNECTING',
        2 => 'SENDING_HEADERS',
        3 => 'SENDING_DATA',
        4 => 'RECEIVING_HEADERS',
        5 => 'RECEIVING_DATA',
        6 => 'DONE',
    );
}

