import { useBlockProps, RichText } from "@wordpress/block-editor";
import "./editor.scss";

export default function Edit({ attributes, setAttributes }) {
	return (
		<div {...useBlockProps()}>
			<RichText
				tagName="h1"
				value={attributes.title}
				allowedFormats={["core/bold"]}
				onChange={(title) => setAttributes({ title })}
				placeholder="Ustaw tytuł"
			/>
		</div>
	);
}
