If when adding photos to the photo pages, there becomes need for a verticle scroll bar, then there is
a bit of CSS that needs to be removed:

	@media only screen and (max-device-width: 530px) {
		.footer {
			bottom: 0;
		}
	}

This needs to be removed so the footer will go below the content of the page.