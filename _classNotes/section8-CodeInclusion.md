# Code Inclusion
## Include
- Example: `include "folder/header.php"` (can be HTML file too)
- You can use all thing of the included file, like variables, functions, etc.
- Don't cause a problem if the file doesn't exist, just a warning. The script will continue.

## Require
- Example: `require "/../header.php"` (can be HTML file too)
- You can use all thing of the required file, like variables, functions, etc.
- If the file doesn't exist, generates a fatal error and stops the script at the point of the error.

## Include_once and Require_once
- Include_once and Require_once are similar to include and require, but they only include the file once on the same page.

## Short tags
- Example: `<?php echo "Hello World"; ?>`
- You can use short tags to include PHP code in HTML.
- It's desencoraged to use it, because require previous configuration on the server.

## Content exhibitor
- Example: `<?= "Hello World"; ?>` | `<?= $name; ?>`
- It's a good way to print PHP in HTML. Like echo.

## PHP extensions
- You can use: .php or .phtml