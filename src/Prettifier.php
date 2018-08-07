<?php declare(strict_types=1);

namespace hollodotme\Readis\Prettifiers\Base64Image;

use function preg_match;

final class Prettifier
{
	public function canPrettify( string $data ) : bool
	{
		$startPattern = '#^data\:image/[^;]+;base64,.+#';

		return (bool)preg_match( $startPattern, $data );
	}

	public function prettify( string $data ) : string
	{
		/** @noinspection HtmlUnknownTarget */
		return sprintf( '<img src="%s" alt="Image from base64 data">', $data );
	}
}