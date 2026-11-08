# JMC Fylde Property Management website

## Package contents
- `index.html` — homepage
- `about/`, `services/`, `landlords/`, `tenants/`, `areas/`, `contact/` — website pages
- `privacy/` and `complaints/` — privacy notice and complaints information
- `assets/` — JMC and scheme logos, certificates, fee schedule, complaints procedure, stylesheet and responsive navigation script
- `contact.php` — contact form handler configured for `jmcfyldepm@outlook.com`

## Deployment
This package is configured for a website served from the domain root (for example `https://your-domain.example/`), not from a `/staging/` subfolder. Upload the contents of this folder to the correct web root on the hosting account. Back up current staging files before replacing anything, and test the staging copy before publishing to the live domain.

## Required before launch
1. Have JMC approve service descriptions, areas covered, and statements about compliance, licensing and Airbnb/short-term lets.
2. Check actual cookie and similar technology use on the hosted site. Current repository code has no analytics or advertising scripts; if non-essential storage/access technologies are added, implement a valid consent mechanism before they run.
3. Test contact form delivery on the actual hosting provider. PHP `mail()` must be supported/configured; otherwise use the hosting provider's approved mail or form service.
4. Replace remote stock photography with approved JMC images if available. Current photos load from Unsplash and need an internet connection.
5. Check the site on mobile and desktop, then test navigation, legal links and the contact form.
6. Back up current staging/live files before deployment. Publish only after client approval.

## Design and functionality
- Retains the navy, white and gold direction and existing JMC logo.
- Responsive navigation and page layouts for desktop and mobile.
- Includes Home, About, Services, Landlords, Tenants, Areas Covered, Contact, Privacy Notice and Complaints Procedure pages.
- Includes the company number, registered office, email address and telephone number supplied by Chloe.
- Includes the supplied tenant-fee wording, with a link to current GOV.UK tenant guidance.
- Accessible labels, keyboard focus states, skip link, reduced-motion support, page-specific titles and descriptions.
