<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserService.proto

namespace GPBMetadata;

class UserService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Models\Status::initOnce();
        \GPBMetadata\Models\User::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac80f0a1155736572536572766963652e70726f746f12107265616c7469" .
            "6d65436861742e7270631a116d6f64656c732f557365722e70726f746f22" .
            "210a1346696e64557365724279496452657175657374120a0a0269641801" .
            "2001280522740a1446696e645573657242794964526573706f6e7365122f" .
            "0a0673746174757318012001280b321f2e7265616c74696d65436861742e" .
            "7270632e6d6f64656c732e537461747573122b0a04646174611802200128" .
            "0b321d2e7265616c74696d65436861742e7270632e6d6f64656c732e5573" .
            "657222240a1546696e645573657273427949647352657175657374120b0a" .
            "0369647318012003280522760a1646696e64557365727342794964735265" .
            "73706f6e7365122f0a0673746174757318012001280b321f2e7265616c74" .
            "696d65436861742e7270632e6d6f64656c732e537461747573122b0a0464" .
            "61746118022003280b321d2e7265616c74696d65436861742e7270632e6d" .
            "6f64656c732e5573657222270a1646696e64557365724279456d61696c52" .
            "657175657374120d0a05656d61696c18012001280922770a1746696e6455" .
            "7365724279456d61696c526573706f6e7365122f0a067374617475731801" .
            "2001280b321f2e7265616c74696d65436861742e7270632e6d6f64656c73" .
            "2e537461747573122b0a046461746118022001280b321d2e7265616c7469" .
            "6d65436861742e7270632e6d6f64656c732e55736572226f0a1143726561" .
            "7465557365725265717565737412120a0a66697273745f6e616d65180120" .
            "01280912110a096c6173745f6e616d65180220012809120d0a05656d6169" .
            "6c18032001280912100a0870617373776f726418042001280912120a0a61" .
            "76617461725f75726c18052001280922720a124372656174655573657252" .
            "6573706f6e7365122f0a0673746174757318012001280b321f2e7265616c" .
            "74696d65436861742e7270632e6d6f64656c732e537461747573122b0a04" .
            "6461746118022001280b321d2e7265616c74696d65436861742e7270632e" .
            "6d6f64656c732e55736572229a010a155570646174655573657242794964" .
            "52657175657374120a0a02696418012001280512120a0a66697273745f6e" .
            "616d6518022001280912110a096c6173745f6e616d65180320012809120d" .
            "0a05656d61696c18042001280912100a0870617373776f72641805200128" .
            "0912120a0a6176617461725f75726c18062001280912190a11656d61696c" .
            "5f76657269666965645f617418072001280922760a165570646174655573" .
            "657242794964526573706f6e7365122f0a0673746174757318012001280b" .
            "321f2e7265616c74696d65436861742e7270632e6d6f64656c732e537461" .
            "747573122b0a046461746118022001280b321d2e7265616c74696d654368" .
            "61742e7270632e6d6f64656c732e5573657222230a1544656c6574655573" .
            "65724279496452657175657374120a0a02696418012001280522490a1644" .
            "656c6574655573657242794964526573706f6e7365122f0a067374617475" .
            "7318012001280b321f2e7265616c74696d65436861742e7270632e6d6f64" .
            "656c732e537461747573223c0a195665726966795573657250617373776f" .
            "726452657175657374120d0a05656d61696c18012001280912100a087061" .
            "7373776f7264180220012809224d0a1a5665726966795573657250617373" .
            "776f7264526573706f6e7365122f0a0673746174757318012001280b321f" .
            "2e7265616c74696d65436861742e7270632e6d6f64656c732e5374617475" .
            "7332b0050a0b557365725365727669636512590a0866696e644279496412" .
            "252e7265616c74696d65436861742e7270632e46696e6455736572427949" .
            "64526571756573741a262e7265616c74696d65436861742e7270632e4669" .
            "6e645573657242794964526573706f6e7365125e0a0966696e6442794964" .
            "7312272e7265616c74696d65436861742e7270632e46696e645573657273" .
            "4279496473526571756573741a282e7265616c74696d65436861742e7270" .
            "632e46696e6455736572734279496473526573706f6e736512620a0b6669" .
            "6e644279456d61696c12282e7265616c74696d65436861742e7270632e46" .
            "696e64557365724279456d61696c526571756573741a292e7265616c7469" .
            "6d65436861742e7270632e46696e64557365724279456d61696c52657370" .
            "6f6e736512530a0663726561746512232e7265616c74696d65436861742e" .
            "7270632e43726561746555736572526571756573741a242e7265616c7469" .
            "6d65436861742e7270632e43726561746555736572526573706f6e736512" .
            "5f0a0a7570646174654279496412272e7265616c74696d65436861742e72" .
            "70632e5570646174655573657242794964526571756573741a282e726561" .
            "6c74696d65436861742e7270632e55706461746555736572427949645265" .
            "73706f6e7365125f0a0a64656c6574654279496412272e7265616c74696d" .
            "65436861742e7270632e44656c6574655573657242794964526571756573" .
            "741a282e7265616c74696d65436861742e7270632e44656c657465557365" .
            "7242794964526573706f6e7365126b0a0e76657269667950617373776f72" .
            "64122b2e7265616c74696d65436861742e7270632e566572696679557365" .
            "7250617373776f7264526571756573741a2c2e7265616c74696d65436861" .
            "742e7270632e5665726966795573657250617373776f7264526573706f6e" .
            "73654203d00201620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

