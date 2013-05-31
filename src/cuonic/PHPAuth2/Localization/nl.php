<?php
namespace cuonic\PHPAuth2\Localization;

class en extends Handler
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getActivationEmail()
    {
        $email = array();

        $email['subject'] = 'PHPAuth 2.0 : Account Activering nodig';

        $email['head'] = 'MIME-Version: 1.0' . "\r\n";
        $email['head'] .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $email['head'] .= 'From: PHPAuth 2.0 <no-reply@phpauth.cuonic.com>' . "\r\n";

        $email['body'] = 'Hallo,' . "\r\n";
        $email['body'] .= '<br/><br/>' . "\r\n";
        $email['body'] .= 'U onlangs een account op PHPAuth 2.0.' . "\r\n";
        $email['body'] .= '<br/>' . "\r\n";
        $email['body'] .= 'Om in staat om uw account te gebruiken, moet u deze door op de onderstaande koppeling te activeren: <strong><a href="' . $this->data['base_url'] .'?page=activate&key=' . $this->data['key'] . '" target="_blank">Activeren mijn rekening</a></strong>' . "\r\n";
        $email['body'] .= '<br/><br/>' . "\r\n";
        $email['body'] .= 'Of als alternatief, ga naar <a href="' . $this->data['base_url'] . '?page=activate" target="_blank">deze webpagina</a> en plak de volgende code : <strong>' . $this->data['key'] . '</strong>' . "\r\n";
        $email['body'] .= '<br/><br/>' . "\r\n";
        $email['body'] .= 'Herinnering: Dit unieke activeringscode vervalt binnen 24 uur na aanmaken van een account.' . "\r\n";

        return $email;
    }

    public function getResetEmail()
    {
        $email = array();

        $email['subject'] = 'PHPAuth 2.0 : Wachtwoord reset aanvraag';

        $email['head'] = 'MIME-Version: 1.0' . "\r\n";
        $email['head'] .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $email['head'] .= 'From: PHPAuth 2.0 <no-reply@phpauth.cuonic.com>' . "\r\n";

        $email['body'] = 'Hallo,' . "\r\n";
  	    $email['body'] .= '<br/><br/>' . "\r\n";
		    $email['body'] .= 'U heeft onlangs verzocht om een ??wachtwoord reset aanvraag bij PHPAuth 2.0.' . "\r\n";
		    $email['body'] .= '<br/>' . "\r\n";
		    $email['body'] .= 'Om verder te gaan met het resetten van je wachtwoord, klikt u op de volgende link: <strong><a href="' . $this->data['base_url'] .'?page=reset&step=2&key=' . $this->data['key'] . '" target="_blank">mijn wachtwoord opnieuw in te stellen</a></strong>' . "\r\n";
		    $email['body'] .= '<br/><br/>' . "\r\n";
		    $email['body'] .= 'Or alternatively, go to <a href="' . $this->data['base_url'] . '?page=reset&step=2" target="_blank">deze webpagina</a> en plak de volgende code : <strong>' . $this->data['key'] . '</strong>' . "\r\n";
		    $email['body'] .= '<br/><br/>' . "\r\n";
		    $email['body'] .= 'Herinnering: Dit unieke reset-toets vervalt binnen 24 uur na de reset verzoek wachtwoord.' . "\r\n";

        return $email;
    }
}
