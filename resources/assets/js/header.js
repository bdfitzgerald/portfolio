export class StickyHeader {
  constructor( id, transparent = true, hideOnRead = true, breakpoint = 300 ) {

    document.addEventListener( 'DOMContentLoaded', () => {
      this.nav = document.getElementById( id );
      console.log(this.nav);
      this.transparent = transparent;
      this.hideOnRead = hideOnRead;
      this.breakpoint = breakpoint;
      this.currentScrollPosition = document.body.scrollTop;

      if ( this.transparent ) {
        this._changeTransparency();
      }

      document.addEventListener( 'scroll', () => {
        this.currentScrollPosition = document.body.scrollTop;
        if ( this.transparent ) {
          this._changeTransparency();
        }
        if ( this.hideOnRead ) {
          this._changeHide();
        }
        this.previousScrollPosition = document.body.scrollTop;
      } )
    } );

  }

  _changeHide() {
    console.log(this.previousScrollPosition, this.currentScrollPosition);
    if ( this.previousScrollPosition < this.currentScrollPosition ) {
      if ( !this.nav.classList.contains( 'is-out-of-view' ) ) {
        this.nav.classList.add( 'is-out-of-view' );
      }
    } else {
      if ( this.nav.classList.contains( 'is-out-of-view' ) ) {
        this.nav.classList.remove( 'is-out-of-view' );
      }
    }
  }

  _changeTransparency() {
    if ( this.currentScrollPosition < this.breakpoint ) {
      console.log(this.currentScrollPosition, this.breakpoint );
      if ( !this.nav.classList.contains( 'is-transparent' ) ) {
        this.nav.classList.add( 'is-transparent' );
      }
    } else {
      if ( this.nav.classList.contains( 'is-transparent' ) ) {
        this.nav.classList.remove( 'is-transparent' );
      }
    }
  }
}