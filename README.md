# JMC Fylde Property Management — updated standalone website

## Package contents
- `index.html` — home page
- `about/`, `services/`, `landlords/`, `tenants/`, `areas/`, `contact/` — website pages
- `assets/` — existing JMC logo, stylesheet and responsive navigation script
- `contact.php` — contact form handler for PHP-enabled hosting

## Deployment
This package is configured for a website served from the domain root (for example `https://your-domain.example/`), not from a `/staging/` subfolder. Upload the **contents** of this ZIP to the correct web root on your hosting account (commonly `httpdocs` on Plesk). Back up the current staging files before replacing anything. Test the staging copy before publishing to the live domain.

## Required before launch
1. Open `contact.php` and replace `REPLACE-WITH-JMC-EMAIL` with the approved JMC business email address. The contact form will intentionally show a configuration message until a valid recipient address is set.
2. Confirm the property count. The client content document says “in excess of 60 properties”; an older staging homepage used “around 59”. This updated site follows the supplied client content but visibly flags the figure for approval.
3. Have JMC approve service descriptions, areas covered, and any statements about compliance, licensing and Airbnb/short-term lets before launch.
4. Replace remote stock photography with approved JMC images if available. Current photos are loaded from Unsplash and therefore require an internet connection.
5. Test form delivery on the actual hosting provider. PHP `mail()` must be supported/configured; otherwise use the hosting provider's approved mail or form service.
6. Add the approved contact details, social links, privacy notice and any other company details once supplied.

## Design and functionality
- Retains the navy, white and gold direction and existing JMC logo.
- Responsive navigation and page layouts for desktop and mobile.
- Includes Home, About, Services, Landlords, Tenants, Areas Covered and Contact pages.
- Adds accessible labels, keyboard focus states, skip link, reduced-motion support, page-specific titles and descriptions.
- No new accounts or third-party builder signup is required to edit or host these files.
