<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: models/Error.proto

namespace GPBMetadata\Models;

class Error
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a84010a126d6f64656c732f4572726f722e70726f746f12177265616c74" .
            "696d65436861742e7270632e6d6f64656c73224d0a054572726f72120c0a" .
            "04636f6465180120012805120f0a076d6573736167651802200128091225" .
            "0a0764657461696c7318032003280b32142e676f6f676c652e70726f746f" .
            "6275662e416e79620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

