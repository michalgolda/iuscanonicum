import { useBlockProps, RichText } from "@wordpress/block-editor";

export default function save({ attributes }) {
	const { className: blockClassName, ...blockProps } = useBlockProps.save();
	const className = `${blockClassName} ${attributes.themeClassName}`;

	return (
		<div {...blockProps} className={className}>
			<input
				type="hidden"
				name="wp-block-iuscanonicum-banner-theme-class-name"
				value={attributes.themeClassName}
			/>
			<div className="wp-block-iuscanonicum-banner__container">
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
		</div>
	);
}
