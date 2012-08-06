<?php

/**
 * This file is part of the ZCE - Exam Preparation package.
 *
 * (c) Daniel Gomes <me@danielcsgomes.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ZCE\Files;

/**
 * Handling files using PHP file and stream functions
 *
 * @author Daniel Gomes <me@danielcsgomes.com>
 */
class FileAndStreamFunctions
{
    static $BASE_RESOURCES_DIR = '../../Resources/';

}

$src = fopen('http://www.example.com', 'r');
$dest1 = fopen(FileAndStreamFunctions::$BASE_RESOURCES_DIR . 'stream_file1.txt', 'rw+');
$dest2 = fopen(FileAndStreamFunctions::$BASE_RESOURCES_DIR . 'stream_file2.txt', 'rw+');

echo stream_copy_to_stream($src, $dest1, 1024) . " bytes copied to stream_file1.txt\n";
echo stream_copy_to_stream($src, $dest2) . " bytes copied to stream_file2.txt\n";

// Printing the contents of one of the files.
rewind($dest1);
print_r(fgets($dest1));

// remove the files
unlink(FileAndStreamFunctions::$BASE_RESOURCES_DIR . "stream_file1.txt");
unlink(FileAndStreamFunctions::$BASE_RESOURCES_DIR . "stream_file2.txt");
