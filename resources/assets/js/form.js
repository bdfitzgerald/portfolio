export class FormSubmission {

  constructor( id ) {

    document.addEventListener( 'DOMContentLoaded', () => {
      this.form = document.getElementById( id );
      this.errors = [];
      this.fields = this.form.getElementsByClassName( 'c-form__input-field' );
      this.loading = false;
      console.log( this.fields );

      this.form.addEventListener( 'submit', evt => {
        evt.preventDefault();
        this.validate();
        return false;
      } )
    } );
  }

  validate() {
    console.log( 'validating' );
    this._toggleLoading();
    this.valid = true;
    if ( this.valid ) {
      grecaptcha.execute();
      if( grecaptcha.getResponse() !== 0 ) {
        this._send();
      } else {
        this._showError('The captcha check failed, please try again');
      }
    }
  }

  _toggleLoading() {
    this.loading = !this.loading;
  }

  _send() {
    console.log( 'sending' );
  }
}

php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
