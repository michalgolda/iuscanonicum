import { useBlockProps, RichText } from "@wordpress/block-editor";
import "./editor.scss";

export default function Edit({ attributes, setAttributes }) {
	return (
		<div {...useBlockProps()}>
			<div class="wp-block-iuscanonicum-page-bar__box wp-block-iuscanonicum-page-bar__box--title">
				<RichText
					tagName="h2"
					value={attributes.title}
					allowedFormats={["core/bold"]}
					onChange={(title) => setAttributes({ title })}
					placeholder="Ustaw tytuł"
				/>
			</div>
			<div class="wp-block-iuscanonicum-page-bar__box wp-block-iuscanonicum-page-bar__box--breadcrumbs">
				<div class="wp-block-iuscanonicum-page-bar__breadcrumbs">
					<a href="#">
						<span>Strona główna</span>
					</a>
					<span class="wp-block-iuscanonicum-page-bar__breadcrumbs-separator"></span>
					<span>Aktualna strona</span>
				</div>
			</div>
		</div>
	);
}
