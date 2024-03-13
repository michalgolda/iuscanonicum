import { useBlockProps, RichText } from "@wordpress/block-editor";
import emailIcon from "../../../assets/images/email-icon.svg";
import phoneIcon from "../../../assets/images/phone-icon.svg";
import locationIcon from "../../../assets/images/location-icon.svg";
import clockIcon from "../../../assets/images/clock-icon.svg";

export default function save({ attributes }) {
	return (
		<div {...useBlockProps.save()}>
			<div class="wp-block-iuscanonicum-contact-details__content container">
				<div class="wp-block-iuscanonicum-contact-details__box">
					<div class="icon">
						<img class="icon__img" src={emailIcon} alt="e-mail icon" />
					</div>
					<div class="wp-block-iuscanonicum-contact-details__details">
						<h3>E-mail</h3>
						<RichText.Content
							tagName="p"
							id="wp-block-iuscanonicum-contact-details-email"
							value={attributes.email}
						/>
					</div>
				</div>
				<div class="wp-block-iuscanonicum-contact-details__box">
					<div class="icon">
						<img class="icon__img" src={locationIcon} alt="location icon" />
					</div>
					<div class="wp-block-iuscanonicum-contact-details__details">
						<h3>Lokalizacja</h3>
						<RichText.Content
							tagName="p"
							id="wp-block-iuscanonicum-contact-details-location"
							value={attributes.location}
						/>
					</div>
				</div>
				<div class="wp-block-iuscanonicum-contact-details__box">
					<div class="icon">
						<img class="icon__img" src={phoneIcon} alt="phone icon" />
					</div>
					<div class="wp-block-iuscanonicum-contact-details__details">
						<h3>Numer kontaktowy</h3>
						<RichText.Content
							tagName="p"
							id="wp-block-iuscanonicum-contact-details-phoneNumber"
							value={attributes.phoneNumber}
						/>
					</div>
				</div>
				<div class="wp-block-iuscanonicum-contact-details__box">
					<div class="icon">
						<img class="icon__img" src={clockIcon} alt="clock icon" />
					</div>
					<div class="wp-block-iuscanonicum-contact-details__details">
						<h3>Godziny otwarcia</h3>
						<RichText.Content
							tagName="p"
							id="wp-block-iuscanonicum-contact-details-openHours"
							value={attributes.openHours}
						/>
					</div>
				</div>
			</div>
		</div>
	);
}
