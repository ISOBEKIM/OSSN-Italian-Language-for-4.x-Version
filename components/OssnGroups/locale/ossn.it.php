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
    'groups' => 'Gruppi',
    'add:group' => 'Aggiungi Gruppo',
    'requests' => 'Richieste',

    'members' => 'Utenti',
    'member:add:error' => 'Qualcosa è andato storto! Per favore riprova più tardi.',
    'member:added' => 'Richiesta iscrizione approvata!',

    'member:request:deleted' => 'Richiesta iscrizione declinata!',
    'member:request:delete:fail' => 'Impossibile declinare la richiesta! Per favore riprova più tardi.',
    'membership:cancel:succes' => 'Richiesta iscrizione annullata!',
    'membership:cancel:fail' => 'Impossibile cancellare la richiesta! Per favore riprova più tardi.',

    'group:added' => 'Gruppo creato correttamente!',
    'group:add:fail' => 'Impossibile creare il gruppo! Per favore riprova più tardi.',

    'memebership:sent' => 'La richiesta è stata spedita!',
    'memebership:sent:fail' => 'Impossibile inviare la richiesta! Per favore riprova più tardi.',

    'group:updated' => 'Il gruppo è stato aggiornato!',
    'group:update:fail' => 'Impossibile aggiornare il gruppo! Per favore riprova più tardi.',

    'group:name' => 'Nome Gruppo',
    'group:desc' => 'Descrizione Gruppo',
    'privacy:group:public' => 'Tutti possono vedere questo gruppo e i suoi messaggi. Solo i membri possono postare in questo gruppo.',
    'privacy:group:close' => 'Tutti possono vedere questo gruppo. Solo i membri possono postare e vedere in questo gruppo.',

    'group:memb:remove' => 'Rimuovi',
    'leave:group' => 'Lascia il gruppo',
    'join:group' => 'Entra nel gruppo',
    'total:members' => 'Utenti Totali',
    'group:members' => "Utenti (%s)",
    'view:all' => 'Vedi tutti',
    'member:requests' => 'RICHIESTE (%s)',
    'about:group' => 'Gruppo:',
    'cancel:membership' => 'Annulla Richiesta',

    'no:requests' => 'Nessuna Richiesta',
    'approve' => 'Approva',
    'decline' => 'Declina',
    'search:groups' => 'Ricerca Gruppi',

    'close:group:notice' => 'Entra in questo gruppo per vedere i post, le foto e i commenti.',
    'closed:group' => 'Chiudi gruppo',
    'group:admin' => 'Admin',
	
	'title:access:private:group' => 'Post del gruppo',

	// #186 group join request message var1 = user, var2 = name of group
	'ossn:notifications:group:joinrequest' => '%s ha richiesto di entrare nel gruppo "%s"',
	'ossn:group:by' => 'Da:',
	
	'group:deleted' => 'Gruppo e di gruppo contenuti cancellati',
	'group:delete:fail' => 'Il gruppo non puo essere eliminato',	
);
ossn_register_languages('it', $it); 
