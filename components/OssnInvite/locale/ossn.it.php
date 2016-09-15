<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014-2016 SOFTLAB24 LIMITED
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$it = array(
	'com:ossn:invite' => 'Invita',			
	'com:ossn:invite:friends' => 'Invita Amici',
	'com:ossn:invite:friends:note' => 'Per invitare i tuoi amici a far parte del Social Network, inserisci i loro indirizzi email e un piccolo messaggio. Loro riceveranno un email con il tuo invito.',
	'com:ossn:invite:emails:note' => 'Indirizzi email (separati da una virgola)',
	'com:ossn:invite:emails:placeholder' => 'smith@example.it, john@example.com',
	'com:ossn:invite:message' => 'Messaggio',
		
    	'com:ossn:invite:mail:subject' => 'Invito per entrare in %s',	
    	'com:ossn:invite:mail:message' => 'Tu sei stato invitato in %s da %s. Il tuo amico include questo messaggio:

%s

Per entrare, clicca sui seguenti link:

%s

Link Profilo: %s
',	
	'com:ossn:invite:mail:message:default' => 'Ciao,

Io ho voluto invitarti sul Social Network %s.

Link Profilo del tuo amico: %s

Cordiali Saluti.
%s',
	'com:ossn:invite:sent' => 'I tuoi amici sono stati invitati. Inviti inviati: %s.',
	'com:ossn:invite:wrong:emails' => 'I seguenti indirizzi non sono validi: %s.',
	'com:ossn:invite:sent:failed' => 'Impossibile invitare i seguenti indirizzi: %s.',
	'com:ossn:invite:already:members' => 'I seguenti indirizzi sono già utenti: %s',
	'com:ossn:invite:empty:emails' => 'Per favore aggiungi almeno un indirizzo email',
);
ossn_register_languages('it', $it); 
