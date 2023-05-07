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

class NodeStatsEntry
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'd',
            'isRequired' => false,
            'type' => TType::BYTE,
        ),
        2 => array(
            'var' => 'm',
            'isRequired' => false,
            'type' => TType::BYTE,
        ),
        3 => array(
            'var' => 'y',
            'isRequired' => false,
            'type' => TType::I16,
        ),
        4 => array(
            'var' => 'h',
            'isRequired' => false,
            'type' => TType::BYTE,
        ),
        5 => array(
            'var' => 'i',
            'isRequired' => false,
            'type' => TType::BYTE,
        ),
        6 => array(
            'var' => 'jobs',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        7 => array(
            'var' => 'jitter',
            'isRequired' => false,
            'type' => TType::DOUBLE,
        ),
    );

    /**
     * @var int
     */
    public $d = null;
    /**
     * @var int
     */
    public $m = null;
    /**
     * @var int
     */
    public $y = null;
    /**
     * @var int
     */
    public $h = null;
    /**
     * @var int
     */
    public $i = null;
    /**
     * @var int
     */
    public $jobs = null;
    /**
     * @var double
     */
    public $jitter = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['d'])) {
                $this->d = $vals['d'];
            }
            if (isset($vals['m'])) {
                $this->m = $vals['m'];
            }
            if (isset($vals['y'])) {
                $this->y = $vals['y'];
            }
            if (isset($vals['h'])) {
                $this->h = $vals['h'];
            }
            if (isset($vals['i'])) {
                $this->i = $vals['i'];
            }
            if (isset($vals['jobs'])) {
                $this->jobs = $vals['jobs'];
            }
            if (isset($vals['jitter'])) {
                $this->jitter = $vals['jitter'];
            }
        }
    }

    public function getName()
    {
        return 'NodeStatsEntry';
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
                    if ($ftype == TType::BYTE) {
                        $xfer += $input->readByte($this->d);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::BYTE) {
                        $xfer += $input->readByte($this->m);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::I16) {
                        $xfer += $input->readI16($this->y);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::BYTE) {
                        $xfer += $input->readByte($this->h);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::BYTE) {
                        $xfer += $input->readByte($this->i);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->jobs);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::DOUBLE) {
                        $xfer += $input->readDouble($this->jitter);
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
        $xfer += $output->writeStructBegin('NodeStatsEntry');
        if ($this->d !== null) {
            $xfer += $output->writeFieldBegin('d', TType::BYTE, 1);
            $xfer += $output->writeByte($this->d);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->m !== null) {
            $xfer += $output->writeFieldBegin('m', TType::BYTE, 2);
            $xfer += $output->writeByte($this->m);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->y !== null) {
            $xfer += $output->writeFieldBegin('y', TType::I16, 3);
            $xfer += $output->writeI16($this->y);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->h !== null) {
            $xfer += $output->writeFieldBegin('h', TType::BYTE, 4);
            $xfer += $output->writeByte($this->h);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->i !== null) {
            $xfer += $output->writeFieldBegin('i', TType::BYTE, 5);
            $xfer += $output->writeByte($this->i);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->jobs !== null) {
            $xfer += $output->writeFieldBegin('jobs', TType::I64, 6);
            $xfer += $output->writeI64($this->jobs);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->jitter !== null) {
            $xfer += $output->writeFieldBegin('jitter', TType::DOUBLE, 7);
            $xfer += $output->writeDouble($this->jitter);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
