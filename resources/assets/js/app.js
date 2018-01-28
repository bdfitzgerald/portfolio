import { SmoothScroll } from "./smooth-scroll";
import { StickyHeader } from "./header";
import { MobileNavigation } from "./mobile-navigation";
import { FormSubmission } from "./form";

new SmoothScroll();
new StickyHeader( 'main-nav' );
new MobileNavigation( 'mobile-nav', 'mobile-trigger' )
const contactForm = new FormSubmission( 'contact' );

function submitForm(token) {
  console.log(token);
  contactForm.submit()
}
