import { useBlockProps, RichText } from "@wordpress/block-editor";

export default function save({ attributes }) {
	return (
		<div {...useBlockProps.save()}>
			<RichText.Content tagName="h1" value={attributes.title} />
		</div>
	);
}
