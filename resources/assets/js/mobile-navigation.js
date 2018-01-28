export class MobileNavigation {
  constructor(nav, trigger) {
    document.addEventListener( 'DOMContentLoaded', () => {
      this.nav = document.getElementById( nav );
      this.trigger = document.getElementById( trigger );
      this.active = false;

      this.trigger.addEventListener( 'click', () => {
        this.trigger.classList.toggle( 'is-active' );
        this.nav.classList.toggle( 'is-active' );
        this.active = !this.active;
      } );
      document.addEventListener( 'scroll', () => {
        if ( this.active ) {
          this.trigger.classList.toggle( 'is-active' );
          this.nav.classList.toggle( 'is-active' );
          this.active = false;
        }
      } );
    } );
  }
}