import { useBlockProps, RichText } from "@wordpress/block-editor";

export default function save({ attributes }) {
	return (
		<div {...useBlockProps.save()}>
			<RichText.Content
				tagName="h2"
				className="wp-block-iuscanonicum-banner__title"
				value={attributes.title}
			/>
			<RichText.Content
				tagName="p"
				className="wp-block-iuscanonicum-banner__description"
				value={attributes.description}
			/>
			<RichText.Content
				tagName="a"
				href={attributes.buttonLink}
				className="wp-block-iuscanonicum-banner__button button button--primary"
				value={attributes.buttonLabel}
			/>
		</div>
	);
}
