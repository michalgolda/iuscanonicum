import { useBlockProps } from "@wordpress/block-editor";

export default function save({ attributes }) {
	return (
		<div {...useBlockProps.save()}>
			<div class="wp-block-iuscanonicum-page-bar__box wp-block-iuscanonicum-page-bar__box--title">
				<h2>{attributes.title}</h2>
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
