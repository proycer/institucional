<?php
/**
 * Pop PHP Framework (http://www.popphp.org/)
 *
 * @link       https://github.com/popphp/popphp-framework
 * @author     Nick Sagona, III <dev@nolainteractive.com>
 * @copyright  Copyright (c) 2009-2020 NOLA Interactive, LLC. (http://www.nolainteractive.com)
 * @license    http://www.popphp.org/license     New BSD License
 */

/**
 * @namespace
 */
namespace Pop\Pdf\Build\Font\Standard;


/**
 * Pdf standard Arial Bold Italic font class
 *
 * The values in this class have been forked from ZendPdf's values in the repository's standard font classes:
 * https://github.com/zendframework/ZendPdf/tree/master/library/ZendPdf/Resource/Font/Simple/Standard
 *
 * @category   Pop
 * @package    Pop\Pdf
 * @author     Nick Sagona, III <dev@nolainteractive.com>
 * @copyright  Copyright (c) 2009-2020 NOLA Interactive, LLC. (http://www.nolainteractive.com)
 * @license    http://www.popphp.org/license     New BSD License
 * @version    4.0.0
 */
class ArialBoldItalic extends AbstractStandard
{

    /**
     * Font units per em
     * @var int
     */
    protected $unitsPerEm = 1000;

    /**
     * Font glyph widths
     * @var array
     */
    protected $glyphWidths = [
        0x00 => 0x01f4,   0x01 => 0x0116,   0x02 => 0x014d,   0x03 => 0x01da,
        0x04 => 0x022c,   0x05 => 0x022c,   0x06 => 0x0379,   0x07 => 0x02d2,
        0x08 => 0x0116,   0x09 => 0x014d,   0x0a => 0x014d,   0x0b => 0x0185,
        0x0c => 0x0248,   0x0d => 0x0116,   0x0e => 0x014d,   0x0f => 0x0116,
        0x10 => 0x0116,   0x11 => 0x022c,   0x12 => 0x022c,   0x13 => 0x022c,
        0x14 => 0x022c,   0x15 => 0x022c,   0x16 => 0x022c,   0x17 => 0x022c,
        0x18 => 0x022c,   0x19 => 0x022c,   0x1a => 0x022c,   0x1b => 0x014d,
        0x1c => 0x014d,   0x1d => 0x0248,   0x1e => 0x0248,   0x1f => 0x0248,
        0x20 => 0x0263,   0x21 => 0x03cf,   0x22 => 0x02d2,   0x23 => 0x02d2,
        0x24 => 0x02d2,   0x25 => 0x02d2,   0x26 => 0x029b,   0x27 => 0x0263,
        0x28 => 0x030a,   0x29 => 0x02d2,   0x2a => 0x0116,   0x2b => 0x022c,
        0x2c => 0x02d2,   0x2d => 0x0263,   0x2e => 0x0341,   0x2f => 0x02d2,
        0x30 => 0x030a,   0x31 => 0x029b,   0x32 => 0x030a,   0x33 => 0x02d2,
        0x34 => 0x029b,   0x35 => 0x0263,   0x36 => 0x02d2,   0x37 => 0x029b,
        0x38 => 0x03b0,   0x39 => 0x029b,   0x3a => 0x029b,   0x3b => 0x0263,
        0x3c => 0x014d,   0x3d => 0x0116,   0x3e => 0x014d,   0x3f => 0x0248,
        0x40 => 0x022c,   0x41 => 0x0116,   0x42 => 0x022c,   0x43 => 0x0263,
        0x44 => 0x022c,   0x45 => 0x0263,   0x46 => 0x022c,   0x47 => 0x014d,
        0x48 => 0x0263,   0x49 => 0x0263,   0x4a => 0x0116,   0x4b => 0x0116,
        0x4c => 0x022c,   0x4d => 0x0116,   0x4e => 0x0379,   0x4f => 0x0263,
        0x50 => 0x0263,   0x51 => 0x0263,   0x52 => 0x0263,   0x53 => 0x0185,
        0x54 => 0x022c,   0x55 => 0x014d,   0x56 => 0x0263,   0x57 => 0x022c,
        0x58 => 0x030a,   0x59 => 0x022c,   0x5a => 0x022c,   0x5b => 0x01f4,
        0x5c => 0x0185,   0x5d => 0x0118,   0x5e => 0x0185,   0x5f => 0x0248,
        0x60 => 0x014d,   0x61 => 0x022c,   0x62 => 0x022c,   0x63 =>   0xa7,
        0x64 => 0x022c,   0x65 => 0x022c,   0x66 => 0x022c,   0x67 => 0x022c,
        0x68 =>   0xee,   0x69 => 0x01f4,   0x6a => 0x022c,   0x6b => 0x014d,
        0x6c => 0x014d,   0x6d => 0x0263,   0x6e => 0x0263,   0x6f => 0x022c,
        0x70 => 0x022c,   0x71 => 0x022c,   0x72 => 0x0116,   0x73 => 0x022c,
        0x74 => 0x015e,   0x75 => 0x0116,   0x76 => 0x01f4,   0x77 => 0x01f4,
        0x78 => 0x022c,   0x79 => 0x03e8,   0x7a => 0x03e8,   0x7b => 0x0263,
        0x7c => 0x014d,   0x7d => 0x014d,   0x7e => 0x014d,   0x7f => 0x014d,
        0x80 => 0x014d,   0x81 => 0x014d,   0x82 => 0x014d,   0x83 => 0x014d,
        0x84 => 0x014d,   0x85 => 0x014d,   0x86 => 0x014d,   0x87 => 0x014d,
        0x88 => 0x014d,   0x89 => 0x03e8,   0x8a => 0x03e8,   0x8b => 0x0172,
        0x8c => 0x0263,   0x8d => 0x030a,   0x8e => 0x03e8,   0x8f => 0x016d,
        0x90 => 0x0379,   0x91 => 0x0116,   0x92 => 0x0116,   0x93 => 0x0263,
        0x94 => 0x03b0,   0x95 => 0x0263,   0x96 => 0x0116,   0x97 => 0x022c,
        0x98 => 0x022c,   0x99 => 0x0263,   0x9a => 0x022c,   0x9b => 0x029b,
        0x9c => 0x0248,   0x9d => 0x029b,   0x9e => 0x02d2,   0x9f => 0x022c,
        0xa0 => 0x02d2,   0xa1 => 0x022c,   0xa2 => 0x022c,   0xa3 => 0x022c,
        0xa4 => 0x02d2,   0xa5 => 0x02d2,   0xa6 => 0x022c,   0xa7 => 0x02d2,
        0xa8 => 0x0263,   0xa9 => 0x029b,   0xaa => 0x02d2,   0xab =>   0xfa,
        0xac => 0x02e1,   0xad => 0x029b,   0xae => 0x022c,   0xaf => 0x022c,
        0xb0 => 0x02d2,   0xb1 => 0x0116,   0xb2 => 0x022c,   0xb3 => 0x0263,
        0xb4 => 0x02d2,   0xb5 => 0x022c,   0xb6 => 0x029b,   0xb7 => 0x022c,
        0xb8 => 0x022c,   0xb9 => 0x0116,   0xba => 0x01ee,   0xbb => 0x02d2,
        0xbc => 0x030a,   0xbd => 0x0263,   0xbe => 0x022c,   0xbf => 0x02d2,
        0xc0 => 0x0185,   0xc1 => 0x022c,   0xc2 => 0x0263,   0xc3 => 0x029b,
        0xc4 => 0x030a,   0xc5 => 0x02d2,   0xc6 => 0x029b,   0xc7 => 0x02e7,
        0xc8 => 0x02d2,   0xc9 => 0x0263,   0xca => 0x014d,   0xcb => 0x030a,
        0xcc => 0x02d2,   0xcd => 0x02d2,   0xce => 0x0248,   0xcf => 0x0263,
        0xd0 => 0x0263,   0xd1 => 0x01ee,   0xd2 => 0x022c,   0xd3 => 0x02d2,
        0xd4 => 0x0116,   0xd5 => 0x029b,   0xd6 => 0x022c,   0xd7 => 0x022c,
        0xd8 => 0x022c,   0xd9 => 0x0263,   0xda => 0x0263,   0xdb => 0x02d2,
        0xdc => 0x0116,   0xdd => 0x0248,   0xde => 0x0118,   0xdf => 0x02e1,
        0xe0 => 0x030a,   0xe1 => 0x0116,   0xe2 => 0x0258,   0xe3 => 0x029b,
        0xe4 => 0x0185,   0xe5 => 0x0263,   0xe6 => 0x0263,   0xe7 => 0x0263,
        0xe8 => 0x0225,   0xe9 => 0x02d2,   0xea => 0x02d2,   0xeb => 0x0116,
        0xec => 0x0185,   0xed => 0x022c,   0xee => 0x02d2,   0xef => 0x02d2,
        0xf0 => 0x02d2,   0xf1 => 0x022c,   0xf2 => 0x01f4,   0xf3 => 0x0116,
        0xf4 => 0x030a,   0xf5 => 0x0263,   0xf6 => 0x022c,   0xf7 => 0x022c,
        0xf8 => 0x0116,   0xf9 => 0x030a,   0xfa => 0x02d2,   0xfb => 0x0264,
        0xfc => 0x0263,   0xfd => 0x014d,   0xfe => 0x030a,   0xff => 0x0263,
        0x0100 => 0x0116, 0x0101 => 0x0263, 0x0102 => 0x029b, 0x0103 => 0x0263,
        0x0104 => 0x0342, 0x0105 => 0x029b, 0x0106 => 0x0190, 0x0107 => 0x02d2,
        0x0108 => 0x0263, 0x0109 => 0x03e8, 0x010a => 0x022c, 0x010b => 0x0116,
        0x010c => 0x0116, 0x010d => 0x0263, 0x010e => 0x0342, 0x010f => 0x0225,
        0x0110 => 0x0263, 0x0111 => 0x0263, 0x0112 => 0x02d2, 0x0113 => 0x029b,
        0x0114 => 0x022c, 0x0115 => 0x0263, 0x0116 => 0x0342, 0x0117 => 0x029b,
        0x0118 => 0x029b, 0x0119 => 0x030a, 0x011a => 0x0190, 0x011b => 0x0263,
        0x011c => 0x02d2, 0x011d => 0x0263, 0x011e => 0x0225, 0x011f => 0x02d2,
        0x0120 => 0x0185, 0x0121 => 0x02d2, 0x0122 => 0x0263, 0x0123 => 0x02d2,
        0x0124 => 0x0263, 0x0125 => 0x02d2, 0x0126 => 0x02d2, 0x0127 => 0x02d2,
        0x0128 => 0x030a, 0x0129 => 0x01f4, 0x012a => 0x029b, 0x012b => 0x0116,
        0x012c => 0x022c, 0x012d => 0x0248, 0x012e => 0x0116, 0x012f => 0x0263,
        0x0130 => 0x014d, 0x0131 => 0x0248, 0x0132 => 0x0263, 0x0133 => 0x0263,
        0x0134 => 0x0225, 0x0135 => 0x0263, 0x0136 => 0x0263, 0x0137 => 0x01f4,
        0x0138 => 0x0263, 0x0139 => 0x014d, 0x013a => 0x0116, 0x013b => 0x022c
    ];

    /**
     * Font character map
     * @var array
     */
    protected $cmap = [
        0x20 =>   0x01,   0x21 =>   0x02,   0x22 =>   0x03,   0x23 =>   0x04,
        0x24 =>   0x05,   0x25 =>   0x06,   0x26 =>   0x07, 0x2019 =>   0x08,
        0x28 =>   0x09,   0x29 =>   0x0a,   0x2a =>   0x0b,   0x2b =>   0x0c,
        0x2c =>   0x0d,   0x2d =>   0x0e,   0x2e =>   0x0f,   0x2f =>   0x10,
        0x30 =>   0x11,   0x31 =>   0x12,   0x32 =>   0x13,   0x33 =>   0x14,
        0x34 =>   0x15,   0x35 =>   0x16,   0x36 =>   0x17,   0x37 =>   0x18,
        0x38 =>   0x19,   0x39 =>   0x1a,   0x3a =>   0x1b,   0x3b =>   0x1c,
        0x3c =>   0x1d,   0x3d =>   0x1e,   0x3e =>   0x1f,   0x3f =>   0x20,
        0x40 =>   0x21,   0x41 =>   0x22,   0x42 =>   0x23,   0x43 =>   0x24,
        0x44 =>   0x25,   0x45 =>   0x26,   0x46 =>   0x27,   0x47 =>   0x28,
        0x48 =>   0x29,   0x49 =>   0x2a,   0x4a =>   0x2b,   0x4b =>   0x2c,
        0x4c =>   0x2d,   0x4d =>   0x2e,   0x4e =>   0x2f,   0x4f =>   0x30,
        0x50 =>   0x31,   0x51 =>   0x32,   0x52 =>   0x33,   0x53 =>   0x34,
        0x54 =>   0x35,   0x55 =>   0x36,   0x56 =>   0x37,   0x57 =>   0x38,
        0x58 =>   0x39,   0x59 =>   0x3a,   0x5a =>   0x3b,   0x5b =>   0x3c,
        0x5c =>   0x3d,   0x5d =>   0x3e,   0x5e =>   0x3f,   0x5f =>   0x40,
        0x2019 =>   0x41,   0x61 =>   0x42,   0x62 =>   0x43,   0x63 =>   0x44,
        0x64 =>   0x45,   0x65 =>   0x46,   0x66 =>   0x47,   0x67 =>   0x48,
        0x68 =>   0x49,   0x69 =>   0x4a,   0x6a =>   0x4b,   0x6b =>   0x4c,
        0x6c =>   0x4d,   0x6d =>   0x4e,   0x6e =>   0x4f,   0x6f =>   0x50,
        0x70 =>   0x51,   0x71 =>   0x52,   0x72 =>   0x53,   0x73 =>   0x54,
        0x74 =>   0x55,   0x75 =>   0x56,   0x76 =>   0x57,   0x77 =>   0x58,
        0x78 =>   0x59,   0x79 =>   0x5a,   0x7a =>   0x5b,   0x7b =>   0x5c,
        0x7c =>   0x5d,   0x7d =>   0x5e,   0x7e =>   0x5f,   0xa1 =>   0x60,
        0xa2 =>   0x61,   0xa3 =>   0x62, 0x2044 =>   0x63,   0xa5 =>   0x64,
        0x0192 =>   0x65,   0xa7 =>   0x66,   0xa4 =>   0x67,   0x27 =>   0x68,
        0x201c =>   0x69,   0xab =>   0x6a, 0x2039 =>   0x6b, 0x203a =>   0x6c,
        0xfb01 =>   0x6d, 0xfb02 =>   0x6e, 0x2013 =>   0x6f, 0x2020 =>   0x70,
        0x2021 =>   0x71,   0xb7 =>   0x72,   0xb6 =>   0x73, 0x2022 =>   0x74,
        0x201a =>   0x75, 0x201e =>   0x76, 0x201d =>   0x77,   0xbb =>   0x78,
        0x2026 =>   0x79, 0x2030 =>   0x7a,   0xbf =>   0x7b,   0x60 =>   0x7c,
        0xb4 =>   0x7d, 0x02c6 =>   0x7e, 0x02dc =>   0x7f,   0xaf =>   0x80,
        0x02d8 =>   0x81, 0x02d9 =>   0x82,   0xa8 =>   0x83, 0x02da =>   0x84,
        0xb8 =>   0x85, 0x02dd =>   0x86, 0x02db =>   0x87, 0x02c7 =>   0x88,
        0x2014 =>   0x89,   0xc6 =>   0x8a,   0xaa =>   0x8b, 0x0141 =>   0x8c,
        0xd8 =>   0x8d, 0x0152 =>   0x8e,   0xba =>   0x8f,   0xe6 =>   0x90,
        0x0131 =>   0x91, 0x0142 =>   0x92,   0xf8 =>   0x93, 0x0153 =>   0x94,
        0xdf =>   0x95,   0xcf =>   0x96,   0xe9 =>   0x97, 0x0103 =>   0x98,
        0x0171 =>   0x99, 0x011b =>   0x9a, 0x0178 =>   0x9b,   0xf7 =>   0x9c,
        0xdd =>   0x9d,   0xc2 =>   0x9e,   0xe1 =>   0x9f,   0xdb =>   0xa0,
        0xfd =>   0xa1, 0x0219 =>   0xa2,   0xea =>   0xa3, 0x016e =>   0xa4,
        0xdc =>   0xa5, 0x0105 =>   0xa6,   0xda =>   0xa7, 0x0173 =>   0xa8,
        0xcb =>   0xa9, 0x0110 =>   0xaa, 0xf6c3 =>   0xab,   0xa9 =>   0xac,
        0x0112 =>   0xad, 0x010d =>   0xae,   0xe5 =>   0xaf, 0x0145 =>   0xb0,
        0x013a =>   0xb1,   0xe0 =>   0xb2, 0x0162 =>   0xb3, 0x0106 =>   0xb4,
        0xe3 =>   0xb5, 0x0116 =>   0xb6, 0x0161 =>   0xb7, 0x015f =>   0xb8,
        0xed =>   0xb9, 0x25ca =>   0xba, 0x0158 =>   0xbb, 0x0122 =>   0xbc,
        0xfb =>   0xbd,   0xe2 =>   0xbe, 0x0100 =>   0xbf, 0x0159 =>   0xc0,
        0xe7 =>   0xc1, 0x017b =>   0xc2,   0xde =>   0xc3, 0x014c =>   0xc4,
        0x0154 =>   0xc5, 0x015a =>   0xc6, 0x010f =>   0xc7, 0x016a =>   0xc8,
        0x016f =>   0xc9,   0xb3 =>   0xca,   0xd2 =>   0xcb,   0xc0 =>   0xcc,
        0x0102 =>   0xcd,   0xd7 =>   0xce,   0xfa =>   0xcf, 0x0164 =>   0xd0,
        0x2202 =>   0xd1,   0xff =>   0xd2, 0x0143 =>   0xd3,   0xee =>   0xd4,
        0xca =>   0xd5,   0xe4 =>   0xd6,   0xeb =>   0xd7, 0x0107 =>   0xd8,
        0x0144 =>   0xd9, 0x016b =>   0xda, 0x0147 =>   0xdb,   0xcd =>   0xdc,
        0xb1 =>   0xdd,   0xa6 =>   0xde,   0xae =>   0xdf, 0x011e =>   0xe0,
        0x0130 =>   0xe1, 0x2211 =>   0xe2,   0xc8 =>   0xe3, 0x0155 =>   0xe4,
        0x014d =>   0xe5, 0x0179 =>   0xe6, 0x017d =>   0xe7, 0x2265 =>   0xe8,
        0xd0 =>   0xe9,   0xc7 =>   0xea, 0x013c =>   0xeb, 0x0165 =>   0xec,
        0x0119 =>   0xed, 0x0172 =>   0xee,   0xc1 =>   0xef,   0xc4 =>   0xf0,
        0xe8 =>   0xf1, 0x017a =>   0xf2, 0x012f =>   0xf3,   0xd3 =>   0xf4,
        0xf3 =>   0xf5, 0x0101 =>   0xf6, 0x015b =>   0xf7,   0xef =>   0xf8,
        0xd4 =>   0xf9,   0xd9 =>   0xfa, 0x2206 =>   0xfb,   0xfe =>   0xfc,
        0xb2 =>   0xfd,   0xd6 =>   0xfe,   0xb5 =>   0xff,   0xec => 0x0100,
        0x0151 => 0x0101, 0x0118 => 0x0102, 0x0111 => 0x0103,   0xbe => 0x0104,
        0x015e => 0x0105, 0x013e => 0x0106, 0x0136 => 0x0107, 0x0139 => 0x0108,
        0x2122 => 0x0109, 0x0117 => 0x010a,   0xcc => 0x010b, 0x012a => 0x010c,
        0x013d => 0x010d,   0xbd => 0x010e, 0x2264 => 0x010f,   0xf4 => 0x0110,
        0xf1 => 0x0111, 0x0170 => 0x0112,   0xc9 => 0x0113, 0x0113 => 0x0114,
        0x011f => 0x0115,   0xbc => 0x0116, 0x0160 => 0x0117, 0x0218 => 0x0118,
        0x0150 => 0x0119,   0xb0 => 0x011a,   0xf2 => 0x011b, 0x010c => 0x011c,
        0xf9 => 0x011d, 0x221a => 0x011e, 0x010e => 0x011f, 0x0157 => 0x0120,
        0xd1 => 0x0121,   0xf5 => 0x0122, 0x0156 => 0x0123, 0x013b => 0x0124,
        0xc3 => 0x0125, 0x0104 => 0x0126,   0xc5 => 0x0127,   0xd5 => 0x0128,
        0x017c => 0x0129, 0x011a => 0x012a, 0x012e => 0x012b, 0x0137 => 0x012c,
        0x2212 => 0x012d,   0xce => 0x012e, 0x0148 => 0x012f, 0x0163 => 0x0130,
        0xac => 0x0131,   0xf6 => 0x0132,   0xfc => 0x0133, 0x2260 => 0x0134,
        0x0123 => 0x0135,   0xf0 => 0x0136, 0x017e => 0x0137, 0x0146 => 0x0138,
        0xb9 => 0x0139, 0x012b => 0x013a, 0x20ac => 0x013b
    ];

}