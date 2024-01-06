import { useState, useEffect } from "react";
import {
	useBlockProps,
	RichText,
	InspectorControls,
} from "@wordpress/block-editor";
import apiFetch from "@wordpress/api-fetch";
import { addQueryArgs } from "@wordpress/url";
import {
	TextControl,
	PanelBody,
	SelectControl,
	ToggleControl,
} from "@wordpress/components";
import "./editor.scss";

const PageSelectControl = (props) => {
	return <SelectControl label="Wybierz stronę" {...props} />;
};

const ExternalLinkControl = (props) => {
	return <TextControl label="Odnośnik" {...props} />;
};

const transformPagesResponse = (pages) =>
	pages.map((page) => {
		return { label: page.title.rendered, value: page.link };
	});

const usePages = () => {
	const [pages, setPages] = useState([]);

	useEffect(() => {
		apiFetch({
			path: addQueryArgs("/wp/v2/pages", { _fields: ["link", "title"] }),
		})
			.then(transformPagesResponse)
			.then((pages) => setPages(pages));
	}, []);

	return pages;
};

export default function Edit({ attributes, setAttributes }) {
	const pages = usePages();
	const [useExternalLink, setUseExternalLink] = useState(false);

	return (
		<>
			<InspectorControls>
				<PanelBody>
					<ToggleControl
						label="Użyj zewnętrznego odnośnika"
						checked={useExternalLink}
						onChange={(newUseExternalLinkValue) =>
							setUseExternalLink(newUseExternalLinkValue)
						}
					/>
					{useExternalLink ? (
						<ExternalLinkControl
							value={attributes.buttonLink}
							onChange={(buttonLink) => setAttributes({ buttonLink })}
						/>
					) : (
						<PageSelectControl
							value={attributes.buttonLink}
							options={pages}
							onChange={(buttonLink) => setAttributes({ buttonLink })}
						/>
					)}
				</PanelBody>
			</InspectorControls>
			<div {...useBlockProps()}>
				<RichText
					tagName="h2"
					className="wp-block-iuscanonicum-banner__title"
					value={attributes.title}
					allowedFormats={["core/bold"]}
					onChange={(title) => setAttributes({ title })}
					placeholder="Ustaw tytuł"
				/>
				<RichText
					tagName="p"
					className="wp-block-iuscanonicum-banner__description"
					value={attributes.description}
					allowedFormats={["core/regular"]}
					onChange={(description) => setAttributes({ description })}
					placeholder="Ustaw opis"
				/>
				<RichText
					tagName="a"
					className="wp-block-iuscanonicum-banner__button button button--primary"
					href={attributes.buttonLink}
					withoutInteractiveFormating
					value={attributes.buttonLabel}
					allowedFormats={["core/regular"]}
					onChange={(buttonLabel) => setAttributes({ buttonLabel })}
					placeholder="Ustaw etykietę"
				/>
			</div>
		</>
	);
}
