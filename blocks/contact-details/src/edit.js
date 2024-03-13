import { useBlockProps, RichText } from "@wordpress/block-editor";
import emailIcon from "../../../assets/images/email-icon.svg";
import phoneIcon from "../../../assets/images/phone-icon.svg";
import locationIcon from "../../../assets/images/location-icon.svg";
import clockIcon from "../../../assets/images/clock-icon.svg";
import "./editor.scss";

export default function Edit({ attributes, setAttributes }) {
	return (
		<div {...useBlockProps()}>
			<div class="wp-block-iuscanonicum-contact-details__content container">
				<div class="wp-block-iuscanonicum-contact-details__box">
					<div class="icon">
						<img class="icon__img" src={emailIcon} alt="e-mail icon" />
					</div>
					<div class="wp-block-iuscanonicum-contact-details__details">
						<h3>E-mail</h3>
						<RichText
							tagName="p"
							value={attributes.email}
							allowedFormats={["core/regular"]}
							onChange={(email) => setAttributes({ email })}
							placeholder="Ustaw e-mail"
						/>
					</div>
				</div>
				<div class="wp-block-iuscanonicum-contact-details__box">
					<div class="icon">
						<img class="icon__img" src={locationIcon} alt="location icon" />
					</div>
					<div class="wp-block-iuscanonicum-contact-details__details">
						<h3>Lokalizacja</h3>
						<RichText
							tagName="p"
							value={attributes.location}
							allowedFormats={["core/regular"]}
							onChange={(location) => setAttributes({ location })}
							placeholder="Ustaw lokalizacje"
						/>
					</div>
				</div>
				<div class="wp-block-iuscanonicum-contact-details__box">
					<div class="icon">
						<img class="icon__img" src={phoneIcon} alt="phone icon" />
					</div>
					<div class="wp-block-iuscanonicum-contact-details__details">
						<h3>Numer kontaktowy</h3>
						<RichText
							tagName="p"
							value={attributes.phoneNumber}
							allowedFormats={["core/regular"]}
							onChange={(phoneNumber) => setAttributes({ phoneNumber })}
							placeholder="Ustaw numer kontaktowy"
						/>
					</div>
				</div>
				<div class="wp-block-iuscanonicum-contact-details__box">
					<div class="icon">
						<img class="icon__img" src={clockIcon} alt="clock icon" />
					</div>
					<div class="wp-block-iuscanonicum-contact-details__details">
						<h3>Godziny otwarcia</h3>
						<RichText
							tagName="p"
							value={attributes.openHours}
							allowedFormats={["core/regular"]}
							onChange={(openHours) => setAttributes({ openHours })}
							placeholder="Ustaw godziny otwarcia"
						/>
					</div>
				</div>
			</div>
		</div>
	);
}
