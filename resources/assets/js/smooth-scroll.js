export class SmoothScroll {

  constructor() {
    document.addEventListener( 'DOMContentLoaded', () => {
      this.links = document.body.querySelectorAll( 'a' );
      this.currentHash = '';
      this.links.forEach( link => {
        const hash = link.href.split( "/" ).pop();
        if ( hash.indexOf( '#' ) === 0 ) {
          link.addEventListener( 'click', ( evt ) => {
            evt.preventDefault();
            if ( !evt.target.hash ) {
              this.currentHash = evt.srcElement.baseURI.split( "/" ).pop().substring( 1 );
            } else {
              this.currentHash = evt.target.hash.substring( 1 );
            }
            document.getElementById( this.currentHash ).scrollIntoView( {
              behavior: "smooth",
              block: "start",
              inline: "start"
            } );
            return false;
          } )
        }
      } );
    } );
  }

}

