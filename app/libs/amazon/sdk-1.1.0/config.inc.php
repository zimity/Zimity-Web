<?php if (!class_exists('CFRuntime')) die('No direct access allowed.');
/**
 * File: Configuration
 * 	Stores your AWS account information. Add your account information, and then rename this file to 'config.inc.php'.
 *
 * Version:
 * 	2010.09.30
 *
 * License and Copyright:
 * 	See the included NOTICE.md file for more information.
 *
 * See Also:
 * 	[PHP Developer Center](http://aws.amazon.com/php/)
 * 	[AWS Security Credentials](http://aws.amazon.com/security-credentials)
 */


/**
 * Constant: AWS_KEY
 * 	Amazon Web Services Key. Found in the AWS Security Credentials. You can also pass this value as the first parameter to a service constructor.
 */
define('AWS_KEY', 'AKIAI7JT3V7OQHJ77LQA');

/**
 * Constant: AWS_SECRET_KEY
 * 	Amazon Web Services Secret Key. Found in the AWS Security Credentials. You can also pass this value as the second parameter to a service constructor.
 */
define('AWS_SECRET_KEY', 'c0ww8yx5nsG8kRv10BE1j/Zn45P59tZcbrzVzx6S');

/**
 * Constant: AWS_ACCOUNT_ID
 * 	Amazon Account ID without dashes. Used for identification with Amazon EC2. Found in the AWS Security Credentials.
 */
define('AWS_ACCOUNT_ID', '8154-2358-7184');

/**
 * Constant: AWS_CANONICAL_ID
 * 	Your CanonicalUser ID. Used for setting access control settings in AmazonS3. Found in the AWS Security Credentials.
 */
define('AWS_CANONICAL_ID', '12d21fcebf489a759b03153f25a63012240350b16e731d3c798dbe75b4bcad95');

/**
 * Constant: AWS_CANONICAL_NAME
 * 	Your CanonicalUser DisplayName. Used for setting access control settings in AmazonS3. Found in the AWS Security Credentials (i.e. "Welcome, AWS_CANONICAL_NAME").
 */
define('AWS_CANONICAL_NAME', 'Melvin Parinas');

/**
 * Constant: AWS_MFA_SERIAL
 * 	12-digit serial number taken from the Gemalto device used for Multi-Factor Authentication. Ignore this if you're not using MFA.
 */
define('AWS_MFA_SERIAL', '');

/**
 * Constant: AWS_CLOUDFRONT_KEYPAIR_ID
 * 	Amazon CloudFront key-pair to use for signing private URLs. Found in the AWS Security Credentials. This can be set programmatically with AmazonCloudFront::set_keypair_id().
 */
define('AWS_CLOUDFRONT_KEYPAIR_ID', 'APKAJOMLDR63VV2BN75A');

/**
 * Constant: AWS_PRIVATE_KEY_PEM
 * 	The contents of the *.pem private key that matches with the CloudFront key-pair ID. Found in the AWS Security Credentials. This can be set programmatically with AmazonCloudFront::set_private_key().
 */
define('AWS_CLOUDFRONT_PRIVATE_KEY_PEM', 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDI1NIIdeMu7VZflAz9mi0G2tWlwaJQKbGOGaqEF6BSGuZ+Qs/6I5VDk0VpSBf6e8WJiovk8Gu4GNzqgZzDDzB6Y+C2l2GIWKmfCJ8mu7aUZyLICLqNXHcHQJTEjMUSuEFA//O8kbocVY6uOoPRPm35Iqvr8vkz5kEgH5GavlUCGwIDAQAB');

/**
 * Constant: AWS_ENABLE_EXTENSIONS
 * 	Set the value to true to enable autoloading for classes not prefixed with "Amazon" or "CF". If enabled, load sdk.class.php last to avoid clobbering any other autoloaders.
 */
define('AWS_ENABLE_EXTENSIONS', 'false');
