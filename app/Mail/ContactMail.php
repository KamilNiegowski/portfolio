<?php

    namespace App\Mail;

    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Mail\Mailable;
    use Illuminate\Mail\Mailables\Content;
    use Illuminate\Mail\Mailables\Envelope;
    use Illuminate\Queue\SerializesModels;

    class ContactMail extends Mailable
    {
        use Queueable, SerializesModels;

        /**
         * Create a new message instance.
         *
         * @return void
         */
        public function __construct( public string $name, public string $email, public string $body )
        {
            //
        }

        /**
         * Get the message envelope.
         *
         * @return Envelope
         */
        public function envelope()
        {
            return new Envelope(
                subject: 'Mail kontaktowy',
            );
        }

        public function build(): ContactMail
        {
            return $this->subject( 'Kontakt ze strony internetowej' )->replyTo( $this->email )->view( 'email.contact' );
        }

        /**
         * Get the message content definition.
         *
         * @return Content
         */
        public function content()
        {
            return new Content(
                view: 'email.contact',
            );
        }

        /**
         * Get the attachments for the message.
         *
         * @return array
         */
        public function attachments()
        {
            return [];
        }
    }
