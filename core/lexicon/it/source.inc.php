<?php
/**
 * Sources English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['access'] = 'Permessi Accesso';
$_lang['base_path'] = 'Percorso Base (Base Path)';
$_lang['base_path_relative'] = 'Percorso Base (Base Path) Relativo?';
$_lang['base_url'] = 'Base URL';
$_lang['base_url_relative'] = 'Base URL Relativo?';
$_lang['minimum_role'] = 'Ruolo Minimo';
$_lang['path_options'] = 'Opzioni Percorso';
$_lang['policy'] = 'Politica';
$_lang['source'] = 'Sorgente media';
$_lang['source_access_add'] = 'Aggiungi Gruppo Utenti';
$_lang['source_access_remove'] = 'Rimuovere Accesso';
$_lang['source_access_remove_confirm'] = 'Sei sicuro di voler rimuovere l\' Accesso a questa Sorgente per questo Gruppo Utenti?';
$_lang['source_access_update'] = 'Aggiorna Accesso';
$_lang['source_create'] = 'Creare Nuova Sorgente Media';
$_lang['source_description_desc'] = 'Breve Descrizione della Sorgente Media.';
$_lang['source_duplicate'] = 'Duplicare Sorgente Media';
$_lang['source_err_ae_name'] = 'Una Sorgente media con questo Nome esiste gia\'! Specificare un nuovo Nome.';
$_lang['source_err_nf'] = 'Srgente Media non trovata!';
$_lang['source_err_nfs'] = 'Nessuna Sorgente media trovata con id: [[+id]].';
$_lang['source_err_ns'] = 'Specificare la Sorgente Media.';
$_lang['source_err_ns_name'] = 'Specificare un Nome per la Sorgente Media.';
$_lang['source_name_desc'] = 'Nome della Sorgente Media.';
$_lang['source_properties.intro_msg'] = 'Gestire le Proprieta\' della seguente Sorgente.';
$_lang['source_remove'] = 'Eliminare Sorgente Media.';
$_lang['source_remove_confirm'] = 'Sei sicuro di voler eliminare questa Sorgente Media? Questo potrebbe danneggiare qualsiasi TV assegnata a questa Sorgente.';
$_lang['source_remove_multiple'] = 'Eliminazione Multipla Sorgenti Media.';
$_lang['source_remove_multiple_confirm'] = 'Sei sicuro di voler eliminare queste Sorgenti Media? Questo potrebbe danneggiare qualsiasi TV assegnata a queste Sorgenti.';
$_lang['source_update'] = 'Aggiorna Sorgente Media.';
$_lang['source_type'] = 'Tipo Sorgente';
$_lang['source_type_desc'] = 'Tipo, o driver, della Sorgente Media. La Sorgente utilizza questo driver per connettersi e raccogliere i suoi dati. Per esempio:File System catturera i file dal file system. S3 otterra\' i file da un Bucket S3.';
$_lang['source_type.file'] = 'File System';
$_lang['source_type.file_desc'] = 'La Sorgente filesystem-based che naviga i tuoi files server.';
$_lang['source_type.s3'] = 'Amazon S3';
$_lang['source_type.s3_desc'] = 'Navigare un Amazon S3 bucket.';
$_lang['source_types'] = 'Tipi Sorgente';
$_lang['source_types.intro_msg'] = 'Lista di tutti i tipi di Sorgente media presenti in questa installazione.';
$_lang['source.access.intro_msg'] = 'Qui puoi limitare una Sorgente Media ad uno specifico Gruppo Utenti e applicare la Politica del Gruppo Utenti stesso. Una Sorgente Media che non ha associato nessun Gruppo Utenti e\' disponibile da tutti gli Utenti del Manager.';
$_lang['sources'] = 'Sorgenti Media';
$_lang['sources.intro_msg'] = 'Gestire tutte le Sorgenti Media.';
$_lang['user_group'] = 'Gruppo Utenti';

/* file source type */
$_lang['prop_file.allowedFileTypes_desc'] = 'Se Impostata, limitera\' i file mostrati alla sola estenzione specificata. Specificare una lista separata da virgole, senza la .';
$_lang['prop_file.basePath_desc'] = 'Il Percorso file (file path) a cui punta la Sorgente.';
$_lang['prop_file.basePathRelative_desc'] = 'Se il Percorso Base (Base Path) impostato sopra non e\' relativo al percorso di installazione di MODX, impostare questo valore a NO.';
$_lang['prop_file.baseUrl_desc'] = 'L\' URL a cui questa Sorgente puo\' accedere.';
$_lang['prop_file.baseUrlPrependCheckSlash_desc'] = 'Se vero (1), MODX prepone il baseUrl solo se non trova uno slash (/) all\'inizio della URL quando fa il rendering della TV. Utile per impostare un valore della TV al di fuori baseurl.';
$_lang['prop_file.baseUrlRelative_desc'] = 'Se il Base URL impostato sopra non e\' relativo al percorso di installazione di MODX, impostare questo valore a NO.';
$_lang['prop_file.imageExtensions_desc'] = 'Un elenco separato da virgole di estensioni di file da utilizzare come immagini. MODX tentera\' di effettuare le miniature (Thumbnails) dei file con queste estensioni.';
$_lang['prop_file.skipFiles_desc'] = 'Elenco separato da Virgole. MODX saltera\' e nascondere file e cartelle che corrispondono a uno di questi.';
$_lang['prop_file.thumbnailQuality_desc'] = 'La qualita\' di resa delle miniature (thumbnails), in una scala 0-100.';
$_lang['prop_file.thumbnailType_desc'] = 'Il Tipo di immagine di come rendere le miniature (thumbnails).';

/* s3 source type */
$_lang['bucket'] = 'Bucket';
$_lang['prop_s3.bucket_desc'] = 'Il S3 Bucket da cui caricare i dati.';
$_lang['prop_s3.key_desc'] = 'La chiave Amazon per la autenticazione al bucket.';
$_lang['prop_s3.imageExtensions_desc'] = 'Un elenco separato da virgole di estensioni di file da utilizzare come immagini. MODX tentera\' di effettuare le miniature (Thumbnails) dei file con queste estensioni.';
$_lang['prop_s3.secret_key_desc'] = 'La chiave segreta Amazon per la autenticazione al bucket.';
$_lang['prop_s3.skipFiles_desc'] = 'Elenco separato da virgole. MODX saltera\' e nascondere file e cartelle che corrispondono a uno di questi.';
$_lang['prop_s3.thumbnailQuality_desc'] = 'La qualita\' di resa delle miniature (thumbnails), in una scala 0-100.';
$_lang['prop_s3.thumbnailType_desc'] = 'Il Tipo di immagine di come rendere le miniature (thumbnails).';
$_lang['prop_s3.url_desc'] = 'L\'URL di installazione di Amazon S3.';
$_lang['s3_no_move_folder'] = 'Il driver S3 non supporta lo spostamento di cartelle in questo momento.';