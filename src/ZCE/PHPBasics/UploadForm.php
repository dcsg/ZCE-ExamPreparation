<?php
/**
 * This file is part of the ZCE - Exam Preparation package.
 *
 * (c) Daniel Gomes <me@danielcsgomes.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * HTML form to upload files and to watch the HTTP headers
 *
 * @author Daniel Gomes <me@danielcsgomes.com>
 */

// Understanding how the headers are sent and the global variables are filled.
var_dump($_GLOBALS);

?>

<html>
<head></head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file"/>
        <input type="text" name="test.name"/>
        <input type="text" name="test.age"/>
        <input type="submit" title="Submit"/>
    </form>
</body>
</html>

