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

class ChronosNode_getTimeSeriesData_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'identifier',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\chronos\JobIdentifier',
        ),
        2 => array(
            'var' => 'p',
            'isRequired' => false,
            'type' => TType::DOUBLE,
        ),
    );

    /**
     * @var \chronos\JobIdentifier
     */
    public $identifier = null;
    /**
     * @var double
     */
    public $p = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['identifier'])) {
                $this->identifier = $vals['identifier'];
            }
            if (isset($vals['p'])) {
                $this->p = $vals['p'];
            }
        }
    }

    public function getName()
    {
        return 'ChronosNode_getTimeSeriesData_args';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRUCT) {
                        $this->identifier = new \chronos\JobIdentifier();
                        $xfer += $this->identifier->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::DOUBLE) {
                        $xfer += $input->readDouble($this->p);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('ChronosNode_getTimeSeriesData_args');
        if ($this->identifier !== null) {
            if (!is_object($this->identifier)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('identifier', TType::STRUCT, 1);
            $xfer += $this->identifier->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->p !== null) {
            $xfer += $output->writeFieldBegin('p', TType::DOUBLE, 2);
            $xfer += $output->writeDouble($this->p);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
