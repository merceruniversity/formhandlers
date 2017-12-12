<?php

/*
 * Error Codes
 * ===========
 * - honeypot
 * - no-to
 * - not-https
 * - not-post
 * - not-sent
 */

switch ($_GET['error-code']) {
    case 'honeypot':
        $title = 'Honeypot has a value';
        $description = <<<EOD
            <p>
                The honeypot should not be filled in.
            </p>
EOD;
	    break;
	case 'no-to':
		$title = '&ldquoto&rdquo; address missing';
		$description = <<<EOD
			<p>
				The URI should have a to address in it.
			</p>
EOD;
		break;
	case 'not-https':
		$title = 'Request was not secure';
		$description = <<<EOD
			<p>
				The request submitting the form should be https.
			</p>
EOD;
		break;
	case 'not-post':
		$title = 'Request was not post';
		$description = <<<EOD
			<p>
				The request submitting the form should use the post http verb.
			</p>
EOD;
case 'not-sent':
		$title = 'Email was not sent';
		$description = <<<EOD
			<p>
				The email was not sent.
			</p>
EOD;
		break;
	case 'to-invalid':
		$title = 'Probable Spam';
		$description = <<<EOD
			<p>
				Invalid &ldquo;to&rdquo; address.
			</p>
EOD;
		break;
	default:
		$title = 'Unrecognized error';
		$description = <<<EOD
			<p>
				That error code is not recognized.
			</p>
EOD;
}

?>

<!doctype html>
<html>
	<head>
		<title><?php print $title ?></title>
	</head>
	<body>

		<?php print $description ?>

	</body>
</html>
