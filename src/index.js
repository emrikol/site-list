/**
 * Multisite Sites List Block
 *
 * Registers and handles the edit function of the multisite sites list block in Gutenberg.
 * The block relies on server-side rendering for content output.
 *
 * These just makes things messy:
 * phpcs:disable WordPress.WhiteSpace.OperatorSpacing
 * phpcs:disable Generic.Formatting.MultipleStatementAlignment.IncorrectWarning
 */

import { registerBlockType } from '@wordpress/blocks';
import ServerSideRender from '@wordpress/server-side-render';

/**
 * Internal dependencies
 */
import metadata from './block.json';

registerBlockType(
	metadata.name,
	{
		edit: function () {
			return (
			<div>
				<ServerSideRender
					block={metadata.name}
				/>
			</div>
			);
		},
	}
);
