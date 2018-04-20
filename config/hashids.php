<?php

/**
 * Warekit CodeIgniter Hashids
 *
 * @package		Warekit
 * @author		Vincent C. Meng
 * @copyright	Copyright (c) 2018, Warekit Ltd.
 * @license		http://www.opensource.org/licenses/mit-license.php
 * @link		https://warekit.io
 * @version		v3.0.0
 */

// Custom value that will make your hashes unique to your salt.
// If salt is changed, your hashes cannot be decrypted properly.
// Empty string by default.
$config['hashids_salt']             = '';

// Minimum hash length to set for your hashes. Default is 0,
// meaning your hashes will be the shortest possible.
$config['hashids_min_hash_length']  = 8;

// Custom alphabet to set for your hashes. By default it's set
// to lower case letters, upper case letters, and numbers.
$config['hashids_alphabet']         = 'abcdefghijklmnopqrstuvwxyzABCBCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

/* End of file hashids.php */