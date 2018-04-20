# Hashids Helper Library for CodeIgniter, support up to [Hashids] 3.0 - Using Composer

A [CodeIgniter](http://codeigniter.com) Plugin for implementing [Hashids](http://www.hashids.org) to generate hashes (like YouTube or Bitly) from numbers to obfuscate database IDs.

## Installation

1.  Install the composer if you don't have: `https://getcomposer.org/download/`
2.  Under your project root run `composer require hashids/hashids`
3.  Copy `hashids_helper.php` to your `application/helpers` folder & Append `config/hashids.php` array items to the relevent array items under your `application/config` folder.
4.  You are all set

## Usage

    Encrypt: <?=hashids_encode(1234)?>
    Decrypt: <?=hashids_decode("1lj")?>

    Custom Encrypt: <?=hashids_encode(1234, 'alternate config salt', 10)?>
    Custom Encrypt: <?=hashids_decode('pjxalngQJ3', 'alternate config salt', 10)?>

## Quick Test

    Insert following to the last line of your index.php


    `echo "<script>console.log('" . json_encode(hashids_encrypt(22341234123423452345)) . "');</script>";
    echo "<script>console.log('" . json_encode(hashids_decrypt("MVznLP3v")) . "');</script>";`

## License

Copyright © 2018 Vincent C. Meng, Warekit Ltd. All Rights Reserved.

Released under the MIT License: [http://www.opensource.org/licenses/mit-license.php](http://www.opensource.org/licenses/mit-license.php)

    The MIT License

    Permission is hereby granted, free of charge, to any person obtaining a copy of this software and
    associated documentation files (the “Software”), to deal in the Software without restriction,
    including without limitation the rights to use, copy, modify, merge, publish, distribute,
    sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is
    furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included in all copies or
    substantial portions of the Software.

    THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING
    BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
    NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
    DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
    OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
