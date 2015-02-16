<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Pancake
 *
 * A simple, fast, self-hosted invoicing application
 *
 * @package     Pancake
 * @author      Pancake Dev Team
 * @copyright   Copyright (c) 2010, Pancake Payments
 * @license     http://pancakeapp.com/license
 * @link        http://pancakeapp.com
 * @since       Version 1.0
 */

// ------------------------------------------------------------------------

$lang = array(

    /** Global Words **/
    'global:overview'				=> 'Overview',
    'global:error'					=> 'Feil',
    'global:pancakeby7am'			=> 'Pancake :1',
    'global:allrelatedmediacopyright'		=> 'Pancake and all related media is Copyright :1 :2',
    'global:insecure_action'		=> 'Insecure action was attempted but caught',
    'global:disabled_in_demo'		=> 'Some features on this page are disabled for the demo.',
    'global:estimates'				=> 'Estimater',
    'global:estimate'				=> 'Estimat',
    'global:incomplete_tasks'		=> 'Pågående Oppgaver',
    'global:completed_tasks'		=> 'Fullførte Oppgaver',
    'global:projects'				=> 'Prosjekter',
    'global:tickets'				=> 'Tickets',
    'global:project'				=> 'Prosjekt',
    'global:upload_failed'			=> 'Det er et problem med opplastingen av filen. Prøv igjen. Vis det fortsatt er problemer, kontakt support@pancakeapp.com.',
    'global:upload_not_allowed'		=> 'The file type of the file you were trying to upload is not allowed. If you need to upload a file of that type, please compress it into a .zip or any other archive format you might find appropriate.',
    'global:copied'					=> 'Kopiert!',
    'global:sentbutunpaid'			=> 'Outstanding (Sent but unpaid)',
    'global:task'					=> 'Oppgaver',
    'global:clients'				=> 'Kunder',
    'global:access_denied'                      => "Access Denied",
    'global:users'					=> 'Brukere',
    'global:send_to_client'			=>  'Send til kunde',
    'global:couldnotsendemail'		=> 'Could not send the email.  Please check your settings.',
    'global:emailsent'				=> 'Email er blitt sendt!',
    'global:yes'					=> 'Ja',
    'global:no'						=> 'Nei',
    'global:notyetsent'				=> 'Not sent to client',
    'global:dontshowagain'			=> "Don't show this again",
    'global:enable'					=> 'Enable',
    'global:is_enabled'				=> 'Enabled?',
    'global:is_completed'			=> 'Completed?',
    'global:Y'						=> 'J',
    'global:N'						=> 'N',
    'global:notes'					=> 'Notater',
    'global:description'			=> 'Beskrivelse',
    'global:backtoadmin'			=> 'Tilbake til Admin',
    'global:type'					=> 'Type',
    'global:name'    				=>  'Navn',
    'global:first_name'     		=>  'Fornavn',
    'global:last_name'     			=>  'Etternavn',
    'global:company'    			=>  'Firma',
    'global:for'    				=>  'til',
    'global:from'   				=>  'fra',
    'global:phone'     				=>  'Telefon',
    'global:email'      			=>  'Email',
    'global:contacts'   			=>  'Kontakter',
    'global:week'					=> 'Ukentlig',
    'global:na'						=> 'N/A',
    'global:quarterly'				=> 'Kvartal',
    'global:statistics' => "Statistics",
	'global:month'					=> 'Måndtlig',
	'global:year'					=> 'Årlig',
	'global:fax'					=>	'Fax',
	'global:mobile'					=>	'Mobile',
	'global:address'				=>	'Adresse',
	'global:api_key'				=> 'API Key',
	'global:website'				=>	'Hjemmeside',
	'global:action'					=>	'Action',
	'global:items'					=>	'Items',
	'global:reusableinvoiceitems'	=> 'Gjenbrukbare Faktura Items',
	'global:reusableinvoiceitems_description'	=> 'You should use Reusable Invoice Items when you want to reuse the same item in different invoices. To use them when you\'re creating or editing an invoice, simply start typing the name of the item you saved, and it\'ll offer to autocomplete the item\'s details for you.',
	'global:create_invoice_estimate'	=>	'Create invoices and estimates to collect money.',
	'global:createinvoice' 			=> 'Lag Faktura',
	'global:paid' 					=> 'Betalt',
	'global:unpaid'					=> 'Ikke Betalt',
	'global:overdue'				=> 'Overdue',
	'global:time_entries'			=> 'Time Entries',
	'global:invoices'				=> 'Fakturaer',
	'global:invoice'				=>	'Faktura',
        'global:tasks' => 'Oppgaver',
	'global:dashboard'				=> 'Dashboard',
	'global:settings'				=> 'Innstillinger',
	'global:plugins'				=> 'Plugins',
	'global:installed'				=> 'Innstalert',
	'global:changepassword'			=> 'Bytt Passord',
	'global:logout' 				=> 'Logg av',
	'global:status'					=> 'Status',
	'global:client'					=> 'Kunde',
	'global:user'					=> 'Bruker',
	'global:title'					=> 'Titel',
	'global:subtitle'				=> 'Undertitel',
	'global:to'						=> 'Til (bruk komma , for å legge til flere)',
	'global:subject'				=> 'Subject',
	'global:thanks'					=> 'Takk!',
	'global:proposals'				=> 'Proposals',
	'global:proposal'				=> 'Proposal',
	'global:reports'				=> 'Reports',
	'global:item'					=> 'Item',
	'global:report'					=> 'Rapport',
	'global:saveandinsert'			=> 'Lagre og legg til',
	'global:details'				=>	'Detaljer',
	'global:license_key'			=> 'License Key',
	'global:version'				=> 'Version :1',
	'global:content'				=> 'Innhold',
	'global:add'					=>	'Legg til',
	'global:edit'					=>	'Rediger',
	'global:resend'					=>	'Send igjen',
	'global:sent'					=> 'Sendt',
	'global:not_sent'				=> 'Ikke sendt',
	'global:view'					=>	'View',
	'global:delete'					=>	'Delete',
	'global:remove'					=>	'Remove',
	'global:sort'					=>	'Sort',
	'global:deleteitem'				=> 'Delete Item',
	'global:dragtoreorder'			=> 'Drag To Reorder',
	'global:start'					=> 'Start',
	'global:stop'					=> 'Stop',
    'global:start_timer'			=> 'Start Timer',
    'estimates:create' => "Lag Estimat",
	'global:stop_timer'				=> 'Stop Timer',
	'global:created'				=>	'Created',
	'global:updated'				=>	'Updated',
	'global:update'					=>	'Update',
    'global:update_available'					=>	':1 update available',
    'global:updates_available'					=>	':1 updates available',
	'global:downloadpdf'			=> 'Last ned PDF',
	'global:yesdelete'				=> 'Ja, slett!',
	'global:confirm_emphisised'		=>	'Er du sikker, du kan ikke gå tilbake!',
	'global:color'					=> 'Farge',
	'global:save'					=> 'Lagre',
	'global:unknown'				=> 'Ukjent',
	'global:upload_ini_size'		=> 'Filen du lastet opp er for stor enn det som er angitt i PHP installasjonen.',
	'global:upload_error'			=> 'A problem occurred while uploading the file. Please try again.',
	'global:recurring'				=> 'Recurring',
	'global:unsent'					=> 'Usendt',
	'global:converttoproject'		=> 'Convert to Project',
    'global:converttoinvoice'		=> 'Convert to Invoice',
	'global:viewpdf'				=> 'Se PDF',
	'global:duplicate'				=> 'Dupliser/Kopier',
	'global:urltosend'				=>	'Her er adressen du skal sende:',
	'global:copytoclipboard'		=>	'Kopiert til clipboard',
	'global:you_need_pancake_cron_job'		=> 'To use recurring invoices, you must be running the Pancake cron job.',
    'global:if_you_dont_know_how_to_set_it_up'		=> 'If you don\'t know how to set it up, <a href="https://www.pancakeapp.com/documentation/cron">click here</a>.',
	'global:quick_links'			=> 'Quick Links',
	'global:view_all'				=> 'View All',
	'global:deleted'				=>	'Deleted',

        'global:add_more' => "Add More",
        'global:upload_files' => "Upload Files",
	'global:optional_increment'		=> '<strong>Optional</strong> - will auto increment',

	'login:ahoy'					=> 'Ahoy!',
	'login:readytodothis'			=> 'Klar til å gjøre dette?',
	'login:sup'						=> 'Sup?',
	'global:actions'				=> 'Actions',
        'global:select' => "--- Select ---",

	/** Greetings **/
	'global:greetings'	=>	array('Ahoy!', 'Hello,', 'Hey,', 'Sup,'),

        'global:mark_as_unanswered' => 'Mark as unanswered',
        'global:mark_as_accepted' => 'Mark as accepted',
        'global:mark_as_rejected' => 'Mark as rejected',
        'global:reject_estimate' => 'Reject estimate',
        'global:accept_estimate' => 'Accept estimate',
        'global:estimate_rejected' => 'Estimate Rejected',
        "global:estimate_accepted" => "Estimate Accepted",
        'global:reject_proposal' => 'Reject proposal',
        'global:accept_proposal' => 'Accept proposal',
        'global:proposal_rejected' => 'Proposal Rejected',
        "global:proposal_accepted" => "Proposal Accepted",
        "global:client_area" => "Client Area",
        "global:admin" => "Admin",
        "global:all_settings" => "All Settings",
        'global:viewable' => 'Viewable in client area',
        'global:not_viewable' => 'Not viewable in client area',
        'global:milestones' => "Milestones",

	/** End Greetings **/

	/** Dashboard **/
	'dashboard:collected'		=>	'Inntjent',
	'dashboard:outstanding'		=>	'Utestående',
	'dashboard:latest_activity'	=>	'Sist Aktivitet',
        'dashboard:these_are_your_upcoming_tasks' => "Dette er de neste oppgavene dine, :1.",
	'dashboard:upcoming_tasks' 	=> 	'Neste oppgave',
	/** End Dashboard **/

	/** Timesheets **/
	'global:timesheets'			=>	'Timelister',
	'timesheets:todays'			=>  'Idag\'s',
	'timesheets:all_users'		=>	'Alle brukere',
        'timesheets:rounded_time' => 'Avrundet til nærmeste :1',
        'timesheets:there_are_no_time_entries' => "Det er ingen timer å vise i oppgitt tidsrom.",
	/** END Timesheets **/


	/** Users **/

	// ==============================
	'login:forgotinstructions'	=>	'Vennligst fyll inn eposten din så sender vi en epost med instruks til å resette passordet.',
	'login:reset'				=>	'resett &raquo;',
	'login:reset'				=>	'Resett Passord',
	'login:username'			=>	'Brukernavn',
	'login:password'			=>	'Passord',
	'login:changepassword'		=>	'Bytt Passord',
	'login:email'				=>	'Email Addesse',
	'login:login'				=>	'Logg inn',
	'login:logout'				=>	'Logg ut',
	'login:remember'			=>	'Husk meg',
	'login:forgot'				=>	'Glemt passordet?',
	'login:cancel'				=>	'&laquo; Avbryt',
	/** End Users **/

	/** User Groups **/
	'groups:edit_title'			=> 'Rediger Gruppe %s',
	'groups:add_title'			=> 'Legg til bruker gruppe',

	/** Clients **/
	'clients:title'				=>	'Alle Kunder',
	'clients:filter'			=>	'Kunde Filter',
	'clients:add'				=>	'Legg til Kunde',
	'clients:removefilter'		=>	'Fjern Filter',
	'clients:edit'				=>	'Rediger Kunde',
	'clients:noclienttitle' 	=> 'Du må legge til noen kunder!',
	'clients:noclientbody'		=> 	'Slik at du kan sende dem fakturaer. Legg til en nå?',
	'clients:noclienttitlefilter' 	=> 'Finner ikke kunde med angitt filter',
	'clients:hasnoinvoicetitle'		=>	'Sweet! Denne kunden er klar!',
	'clients:hasnoinvoicebody'	=> 	'La oss lage en faktura til de så vi kan få betalt, lage en nå?',
	'clients:added' 			=> 'Kunden har blitt lagt til!',
	'clients:edited' 			=> 'Kunden har blitt oppdatert!',
	'clients:deleted' 			=> 'Kunden har blitt slettet!',
	'clients:does_not_exist' 	=> 'Den kunden finnes ikke!',
	'clients:health_check'		=> 	'Health Check',
	'clients:all' 				=> 'Alle',
	'clients:delete_title'		=>	'Slett denne kunden?!?!',
	'clients:delete_message'	=>	'Er du sikker på at du vil slette denne kunden?<br />ALT vil bli slettet, fakturaer, estimater, mm. ang denne kunden.',
	'clients:clientaction'		=>	'&nbsp;',
	'clients:passphrase'		=> 'Løsningsord',
	'clients:bad_passphrase'	=> 'Løsningsord er feil.',
	'clients:total_clients'		=>	'Totalt Kunder',
	'clients:support'			=>  'Support',
	'clients:support_rates'		=>  'Support Priser',
	'clients:edit_support_rates'		=>  'Sett Priser',
	/** End Clients **/


	/** Contact Log **/
	'contact:method'			=>	'Kontakt metode',
	'contact:contact'			=>	'Kontakt',
	'contact:subject'			=>	'Subject',
	'contact:content'			=>	'Inhold',
	'contact:method'			=>	'Kontakt Metode',
	'contact:calling_title'		=>	'Ring Kunde ":1"',
	// 'contact:view_all'		=>	'View All',
	/** End Contact Log **/

	/** Invoices **/
	'invoices:markassent'			=> 'Marker som Sendt',
        'invoices:invoicedate'			=> 'Opprettet',
        'invoices:file_name' => "Fil navn",
        'invoices:date_created' => "Faktura Dato",
        'invoices:size' => "Størelse",
        'invoices:files' => "Filer",
	'invoices:sentbutunpaid'		=> 'Faktura sendt kunde, men den er ennå ikke betalt',
	'invoices:duplicated'			=> 'Duplicated invoice #:1. The new invoice\'s number is #:2.',
	'invoices:all'					=>	'Alle Fakturaer',
	'invoices:empty'				=>	'Ingen Fakturaer ennå.',
	'invoices:overdue'				=>	'Forfalt Fakturaer',
        'invoices:tax_collected' => "Tax Collected",
	'invoices:paid'					=>	'Betalt Fakturaer',
	'invoices:recurringinvoices'	=> 'Faste Fakturaer',
	'invoices:unsentinvoices'		=> 'Fakturaer som ikke er sendt',
	'invoices:unpaid'				=>	'Ubetalte Fakturaer',
	'invoices:thisinvoicewaspaidon'	=> 'Denne fakturaen ble betalt :1. Tusen takk!',
	'invoices:senton'				=> 'Sendt den :1',
	'invoices:lastsenton'				=> 'Sist sendt den :1 at :2',
	'invoices:paidon'				=> 'Betalt den :1',
	'invoices:paidonsingle'			=>	'Betalt',
	'invoices:thisinvoiceisunpaid'	=> "Denne fakturaen er ikke betalt ennå.",
	'invoices:noinvoicetitle'		=>	'Du har ingen fakturaer ennå!',
        'invoices:noinvoicesforthefilteredclient' => "Du har ingen fakturaer til :1.",
	'invoices:noinvoicebody'		=>	'Du bør lage en faktura nå! <br /> Kundene digger fakturaer!',
	'invoices:send_now_title'		=> 'Send faktura nå?',
	'invoices:send_now_body'		=> 'Fill out the form below and we\'ll deliver this invoice for you.',
	'invoices:newinvoice'			=>	'Lag Faktura',
	'invoices:send_now'				=> 'Send Faktura',
	'invoices:timequantity'			=> 'Timer/Antall',
	'invoices:ratewithcurrency'		=> 'Pris (:1)',
	'invoices:taxable' 				=> 'Taxable',
	'invoices:total' 				=> 'Total',
	'invoices:amount'				=>	'Sum',
	'invoices:due'					=>	'Forfallsdato',
	'invoices:subtotal'				=> 'Subtotal',
	'invoices:totaltax'				=> 'Total Tax',
	'invoices:filestodownload'		=> 'Files for Download',
	'invoices:added'				=> 'The invoice has been added!',
	'invoices:fileswillbeavailableafterpay'		=> 'These files will be available for download once the invoice has been fully paid.',
	'invoices:no_payment_gateways_enabled'		=> 'No payment gateways have been enabled, which might make it tricky to be paid. Enable in <a href=":1">Settings</a>',
	'invoices:invoicenumber'		=> 'Faktura #:1',
	'invoices:number'				=> 'Faktura #',
	'invoices:type'					=>	'Faktura Type',
	'invoices:is_recurring'			=> 'Recurring?',
	'invoices:is_paid'				=> 'Betalt?',
	'invoices:is_sent'				=> 'Send?',
	'invoices:date_entered'			=> 'Opprettet dato',
	'invoices:delete_title'			=>	'Slett denne Fakturaen?',
        'items:select_time_entry' => 'Timeføring',
	'invoices:delete_message'		=>	'Er du sikker på at du vil slette denne Fakturaen?',
	'invoices:create'				=> 'Lag Faktura',
	'invoices:edit'					=> 'Endre Faktura',
	'invoices:amountrequired'		=> 'Beløp feltet er påkrevd',
	'invoices:currencydoesnotexist'	=> 'Denne valutaen finnes ikke.',
	'invoices:unique_id'			=> 'Unik ID',
	'invoices:willreoccurin'		=> 'Denne fakturaen vil sendes igjen den :1.',
	'invoices:willbesentautomatically'		=> 'Kunden vil bli informert om denne fakturaen på mail den :1.',
	'invoices:clientlastnotifiedon'		=> 'Kunden fikk informasjon om denne fakturaen på mail den :1.',
	'invoices:simple'				=> 'Enkel',
	'invoices:simple_help'			=> 'En enkel faktura har kun et beløp og ingen produktlinjer.',
	'invoices:detailed'				=> 'Detaljert',
	'invoices:detailed_help'		=> 'Detaljert fakturaer tillater flere produktlinjer.',
	'invoices:unpaid_totalamount'	=>	'Ikke betalt / Total sum',
	'invoices:saveinvoice'			=> 'Lagre Faktura',
	'invoices:deleted'				=> 'Fakturaen er blitt slettet!',
	'invoices:view'					=> 'Se Faktura',
	'invoices:is_viewable'			=>	'Vis i Kunde område?',
	'invoices:no_invoices'			=> 'Det er ikke noen fakturaer.',
	'invoices:addedsuccess'			=>	'Du har lagt til en faktura for',
	'invoices:invoice'				=>	'Faktura',
	'invoices:preview'				=>	'Forhåndsvis Faktura',
	'invoices:editinvoice'			=>	'Rediger faktura #:1',
	'invoices:messageupdated'		=>	'Fakturaen har blitt oppdatert!',
	'invoices:resend'				=>	'Gjenta Faktura forsendelsen',
	'invoices:client_viewed'		=>	':1 Sett <a href=":2">Faktura #:3</a> den :4',
	'invoices:client_paid'			=>	':1 Betalt <a href=":2">Faktura #:3</a> den :4',
	'invoice:paid_amount'			=>	'Sum Betalt',
	/** End Invoices **/

	/** Estimates **/
	'estimates:attachedtoproposal'		=> 'Attached to proposal #:1',
	'estimates:duplicated'			=> 'Duplicated estimate #:1. The new estimate\'s number is #:2.',
	'estimates:alltitle'			=>	'All Estimates',
	'estimates:attachingtoproposal'		=>     'Attaching estimate to proposal, please wait...',
	'estimates:delete_title'		=>	'Delete this estimate?',
	'estimates:delete_message'		=>	'Are you sure you want to delete this estimate?',
	'estimates:createnew'			=>	'Create Estimate',
	'estimates:generate_estimate'		=> 'Generate Estimate',
	'estimates:converted'			=> 'Converted estimate #:1 to a project.',
    'estimates:converted_to_invoice'			=> 'Converted estimate #:1 to an invoice.',
	'estimates:noestimatetitle'		=>	'You have no estimates',
	'estimates:noestimatesforthisclient'	=>	'You have no estimates for this client.',
        'estimates:noestimatesforthefilteredclient' => "You have no estimates for :1.",
	'estimates:deleted'				=> 'The estimate has been deleted!',
	'estimates:noestimatebody'		=>	'You should get on that! Would you like to create one now?',
	'estimates:estimatenumber'		=>	'Estimate #:1',
	'estimates:view'				=> 'View Estimate',
	'estimates:no_estimates'		=> 'There are no estimates.',
	'estimates:addedsuccess'		=>	'You have added an estimate for',
	'estimates:estimate'			=>	'estimate',
	'estimates:added'				=>	'Success! The estimate has been added.',
	'estimates:addedconf'			=>	'You have added estimate # <strong>:1</strong>, totalling <strong>:2</strong> for :3:4.',
	'estimates:send_now_title'		=> 'Send estimate now?',
	'estimates:send_now_body'		=> 'Fill out the form below and we\'ll deliver this estimate for you.',
	'estimates:send_now'			=>	'Send Estimate',
	'estimates:edit'				=>	'Edit Estimate',
	'estimates:preview'				=>	'Preview Estimate',
	'estimates:editestimate'		=>	'Edit estimate #:1',
	'estimates:messageupdated'		=>	'The estimate has been updated!',
    'estimates:client_viewed'		=>	':1 viewed <a href=":2">estimate #:3</a> on :4',
    'estimates:client_accepted'		=>	':1 accepted <a href=":2">estimate #:3</a> on :4',
    'estimates:client_rejected'		=>	':1 rejected <a href=":2">estimate #:3</a> on :4',
	'estimates:resend'				=>	'Resend Estimate',
    'estimates:estimatedate'			=> 'Estimate Date',
	/** End Estimates **/

	/** Projects **/
    'projects:status_id'			=> 'Oppgave Status',
    'projects:projected'			=> 'Prosjektert',
	'projects:projected_hours'		=> 'Prosjektert Timer',
	'projects:navigationitem'		=> 'Prosjekter',
    'projects:hours_worked'			=> 'Antall timer jobbet',
	'projects:hours_worked_short'	=> 'Timer jobbet',
	'projects:alltitle'				=>	'Alle Prosjekter',
	'projects:totalprojects'		=>	'Total Projects',
	'projects:noprojecttitle'		=> 'Det er ikke noen prosjekter ennå!',
	'projects:noprojecttext'		=> 'Vil du lage et nå? ',
	'projects:add'					=> 'Lag Prosjekt',
	'projects:createfromtemplate'	=> 'Lag fra Mal',
	'projects:doesnotexist'			=> 'Prosjektet du prøver å nå finnes ikke.',
	'projects:edit'					=> 'Rediger Prosjekt',
	'projects:delete'				=> 'Slett Prosjekt',
	'projects:project'				=> 'Prosjekt',

        'projects:new_project_from_estimate_without_number' => "Nytt Prosjekt fra Estimat",
        'projects:new_project_from_estimate_with_number' => "Nytt Prosjekt fra Estimat #:1",

	'projects:due_date'				=> 'Tidsfrist',
	'projects:is_completed'			=> 'Fullført?',
	'projects:manage_project'		=> 'Administrere Prosjekt',
	'projects:areyousuredeletetask'	=> 'Er du sikker på at du vil slette denne oppgaven?',
	'projects:add_time'				=> 'Legg til Timer',
    'projects:add_hours'			=> 'Legg til Timer',
	'projects:generate_invoice'		=> 'Generate Invoice',
	'projects:no_projects'			=> 'There are no projects.',
	'projects:archive_proj'			=> 'Archive Project',
	'projects:archive'				=> 'View Archive',
	'projects:active'				=> 'Active Projects',
	'projects:archived'				=> 'Archived Projects',
	'projects:noarchivedprojecttitle'		=> 'You have no archived projects.',
	'projects:noarchivedprojecttext'		=> 'You can archive a project from your project page ',
	'projects:allarchivedtitle'		=>	'All Archived Projects',
	'projects:templatize'			=>	'Save as template',
    'projects:milestone_identifier' => "[Milestone: :1]",
	/** End Projects **/


	/** Milestones **/
	'milestones:add'				=> 'Add Milestone',
	'milestones:edit'				=> 'Edit Milestone',
	'milestones:delete'				=> 'Delete Milestone',
	'milestones:milestone'			=> 'Milestone',
	'milestones:target_date'		=> 'Target Date',
	'milestones:assigned_user'		=> 'Assigned User',
	'milestones:select_default'		=> '-- No milestone --',
	'milestones:no_milestone'		=> 'Tasks without Milestone',
	'milestones:add_success'		=> 'Milestone ":1" added successfully!',
    'milestones:edit_success'		=> 'Milestone ":1" edited successfully!',
    'milestones:add_failed'			=> 'Milestone ":1" could not be edited.',
    'milestones:edit_failed'		=> 'Milestone ":1" could not be added.',
    'milestones:are_you_sure_delete'		=> 'Are you sure you want to delete this milestone?',
    'milestones:delete_success'		=> 'Milestone ":1" deleted successfully!',
    'milestones:does_not_exist'		=> 'This milestone does not exist.',
    'milestones:target_date'		=>  'Target Date',
    'milestones:select_assignee_default'	=> 'No Assignee',
    /** End Milestones **/

    /** Proposals **/
    'proposal:outline'  =>  'Proposal Outline',


    /** End Proposals **/

	/** Reminders **/

	'reminders:reminders'	=>	'Reminders',
	'reminders:send'		=>	'Send Reminders',
	'reminders:success'		=>	'Those reminders have been sent!!',
	'reminders:remind'		=>  'Remind',
	'reminders:message'		=>	'Message',
	'reminders:due'			=>	'Days',
	'reminders:details'		=>	'Details',
	'reminders:log'			=>	'Log',

	/** End Reminders **/


	/** Email Templates **/
	'emailtemplates:email_templates'	=>  'Email Templates',
	'emailtemplates:create_template'	=>	'Create new template',
	'emailtemplates:add'				=>	'Create new email template',
	'emailtemplates:edit'				=>	'Edit email template',
	'emailtemplates:manage'				=>	'Manage Templates',
	'emailtemplates:name'				=>	'Email Name',
	'emailtemplates:subject'			=>	'Email Subject',
	'emailtemplates:days'				=>	'Day Range',
	'emailtemplates:type'				=>	'Template Type',
	'emailtemplates:success'			=>	'Successfully created email template',
	'emailtemplates:edited'				=>	'Successfully edited email template',
	'emailtemplates:does_not_exist'		=>	'Email template does not exist',
	'emailtemplates:deleted'			=>	'Email template successfully deleted',
	'emailtemplates:delete_title'		=>	'Delete email template',
	'emailtemplates:delete_message'		=>	'Are you sure you\'d like to delete this email template?',


	/** End Email Templates **/

    /** Reports **/
    'reports:perclient'		=> 'per kunde',
    'reports:datefrom'		=> 'Fra',
    'reports:allclients'	=> 'Alle Kunder',
    'reports:dateto'		=> 'Til',
    'reports:byclient'		=> 'Kunde',

    'reports:view'			=> 'View Report',
    'reports:show_all'		=> 'Show Reports',

    'reports:paid_and_unpaid' => "Paid and Unpaid",
    'reports:paid_vs_unpaid_over_time' => "Paid vs. Unpaid over time",
    'reports:per_client' => 'per kunde',
    'reports:total_with_tax' => "Total (w/ tax)",
    'reports:total_without_tax' => "Total (no tax)",
    'reports:total_collected' => 'Total Collected',
    'reports:fees_paid' => 'Fees Paid',
    'reports:total_amount' => 'Total sum',
    'reports:paid_amount' => "Betalt sum",
    'reports:unpaid_amount' => "Ubetalt sum",
    'reports:client_name' => "Kunde Navn",

    'reports:nodata'		=> 'No :1.',
    /** End Reports **/

    /** Currencies **/
    'currencies:default'	=> '[Default] :1',
    'currencies:cad'		=> 'Canadian Dollar',
    'currencies:eur'		=> 'Euro',
    'currencies:usd'		=> 'U.S. Dollar',
    'currencies:gbp'		=> 'Pound Sterling',
    'currencies:hkd'		=> 'Hong Kong Dollar',
    'currencies:php'		=> 'Philippine Peso',
    'currencies:zar'		=> 'South Africa, Rand',
    /** End Currencies **/

    /** Proposals **/
    'proposals:duplicated'				=> 'Duplicated proposal #:1. The new proposal\'s number is #:2.',
    'proposals:usesectiontemplate'		=> 'Use this Section Template',
    'proposals:showcontents'			=> 'Show Contents',
    'proposals:hidecontents'			=> 'Hide Contents',
    'proposals:deletepremadesection'	=> 'Delete Section Template',
    'proposals:nopremadesections'		=> 'You have no saved section templates.',
    'proposals:newproposal'				=> 'New Proposal',
    'proposals:number'					=> 'Proposal #',
    'proposals:all'						=> 'All Proposals',
    'proposals:noproposaltitle'			=> "There are no proposals!",
    'proposals:noproposalbody'			=> "You should create a proposal now. Definitely.",
    'proposals:client_viewed'		=>	':1 sett <a href=":2">forslag #:3</a> on :4',
    'proposals:client_accepted'		=>	':1 akseptert <a href=":2">forslag #:3</a> on :4',
    'proposals:client_rejected'		=>	':1 avvist <a href=":2">forslag #:3</a> on :4',
    'proposals:rejected'				=> 'Avvist den :1',
    'proposals:accepted'				=> 'Akseptert den :1',
    'proposals:lastviewed'				=> 'Last viewed by the client on :1, at :2.',
    'proposals:neverviewed'				=> 'not viewed by the client.',
    'proposals:noanswer'				=> 'No answer',
    'proposals:createproposal'			=> 'Create Proposal',
    'proposals:editproposal'			=> 'Edit Proposal',
    'proposals:createdsuccessfully'		=> 'Proposal created!',
    'proposals:sections'				=> 'Sections',
    'proposals:section'					=> 'Section',
    'proposals:createsection'			=> 'Add New Section',
    'proposals:createpage'				=> 'Add Page',
    'proposals:emptysection'			=> '(no title)',
    'proposals:emptycontents'			=> '(no contents)',
    'proposals:emptysubtitle'			=> '(no subtitle)',
    'proposals:for'						=> 'Proposal for:',
    'proposals:pagexofcount'			=> 'Page :1 of :2',
    'proposals:saving'					=> 'Saving...',
    'proposals:save'					=> 'Save Proposal',
    'proposals:savepremade'				=> 'Save as Section Template',
    'proposals:addestimate'				=> 'Add Estimate',
    'proposals:saved'					=> 'Saved!',
    'proposals:createandedit'			=> 'Next: Edit proposal contents',
    'proposals:delete_message'			=> 'Are you sure you want to delete this proposal?',
    'proposals:createpremadesection'	=> 'Add from Section Template',
    'proposals:selected_attachments'	=> 'Select Estimate',
    'proposals:attach_selected_estimate'		=> 'Attach Selected Estimate',
    'proposals:proposal'				=> 'Proposal',
    'proposals:status'					=> 'Status',
    'proposals:view'					=> 'View Proposal',
    'proposals:estimate'				=> 'Estimate',
    'proposals:no_proposals'			=> 'There are no proposals.',
    'proposals:proposal_title' => 'Proposal Title',
    'proposals:kitchennotice'			=> 'Note: Proposals will appear in the :1 once the client has viewed the proposal link. This means you can edit it all you want and the client wont see it until you want them too.',
    /** End Proposals **/

    /** Tasks **/
    'tasks:task'						=> 'Oppgave',
    'tasks:edit_succeeded'				=> 'Edited task successfully.',
    'tasks:hours'						=> 'Hours',
    'tasks:due_date'					=> 'Due Date',
    'tasks:is_completed'				=> 'Completed?',
    'tasks:timer'						=> 'Timer',
    'tasks:rate'						=> 'Rate',
    'tasks:default_rate'				=> 'Default Rate',
    'tasks:entries'						=> 'Time Entries',
	'tasks:view_entries'				=> 'View Entries',
    'tasks:edit_entry'					=> 'Edit Time Entry',
	'tasks:create'						=> "Add Task",
	'tasks:create_sub'					=> "Add Sub-Task",
	'tasks:task_parent'					=> "Task Parent",
	'tasks:edit'						=> "Edit Task",
	'tasks:create_succeeded'			=> "The task has been created!",
	'tasks:no_task_title'				=> 'Hmm, no tasks yet...',
    'tasks:no_task' => "No Task",
	'tasks:no_task_message'				=> 'You should create some!',
	'tasks:is_viewable'					=> 'Viewable in client area?',
	'tasks:no_milestones'				=> 'Tasks with no milestones',
    'tasks:not_related_to_a_task'		=> "-- Not related to a task --",
    'tasks:select_parent_default'		=> '-- No parent task --',
	'tasks:timers_running'				=>	'Timers Running',
	'tasks:task_completed_by'			=>	':1 completed <a href=":2">task :3</a> at :4',
	'tasks:discussion'					=>	'Discussion: ',
'tasks:billed_hours' => "Billed Hours",
    'tasks:unbilled_hours' => "Unbilled Hours",


	/** Users **/
	'users:create_user'					=> 'Create User',
        'users:confirm_delete_emphasised' => "There is no going back!",

	/** Items **/
	'items:name'						=> 'Item Name',
	'items:description'					=> 'Item Description',
	'items:qty_hrs'						=> 'Qty / Hrs',
	'items:quantity'					=> 'Quantity',
	'items:rate'						=> 'Rate',
	'items:tax_rate'					=> 'Tax Rate',
	'items:cost'						=> 'Cost',
	'items:line_items'					=> 'Line Items',
	'items:add'							=> 'Add Item',
	'items:edit'						=> 'Edit Item',
	'items:noitemtitle'					=>	'You have no items yet!',
	'items:noitembody'					=>	'You should add some items now, it makes creating invoices loads easier!',
	'items:delete_title'				=>	'Delete this item?',
	'items:delete_message'				=>	'Are you sure you want to delete item ":1"?',
	'items:type'						=> 'Type',
	'items:select_standard'				=> 'Standard',
	'items:select_expense'				=> 'Utgift',
	'items:add_expense_to_project'		=> 'Add Expense',
	'items:expenses'					=> 'Utgifter',
	/** END Items **/

	/** Expenses **/
	'expenses:expenses'					=>	'Utgifter',
	'expenses:add'						=>	'Legg til Utgift',
	'expenses:edit_expense'				=>	'Rediger Utgift',
	'expenses:delete'					=>	'Slett Utgift',
	'expenses:deleted'					=>	'Ugift Slettet',
	'expenses:all'						=>	'Alle Utgifter',
	'expenses:amount'					=>	'Sum',
	'expenses:supplier'					=>	'Supplier',
	'expenses:suppliers'				=>	'Suppliers',
	'expenses:category'					=>	'Category',
	'expenses:categories'				=>	'Categories',
	'expenses:add_supplier'				=>	'Add Supplier',
	'expenses:edit_supplier'			=>	'Edit Supplier',
	'expenses:add_category'				=>	'Add Category',
	'expenses:edit_category'			=>	'Edit Category',
	'expenses:parent_category'			=>	'Parent Category',
	'expenses:filter'					=>	'Filter Expenses',
	'expenses:start_date'				=>	'Start Date',
	'expenses:end_date'					=>	'End Date',


	/** END Expenses **/

	/** Transactions **/
	'transactions:paymentcancelled'				=> 'Betaling kansellert',
	'transactions:extrapaymentcancelled'		=> 'Betalingen din har blitt kansellert.',
	'transactions:paymentreceived'				=> 'Betaling mottatt!',
	'transactions:fee_applied'					=> 'Siden :1 legger til administrasjonskostnader, har vi lagt til :2% tillegg i prisen.',
	'transactions:orderbeingprocessed'			=> 'Vennligst vent, din betaling blir bearbeidet og du vil bli sendt videre til :1 hjemmesiden.',
	'transactions:ifyouarenotredirected'		=> 'Vis du ikke blir videresendt automatisk til :1 innen 5 sekunder...',
	'transactions:thankyouforyourpayment'		=> 'Tusen takk for din betaling. Du vil snart motta en kvittering på mail.',
	'transactions:ifyouhavefilesyouwillgetanemail'		=> 'Vis du har filer ventende vil du straks motta en mail med link til nedlasting.',
	'transactions:ifyoudonotreceiveemail'		=> 'Vis du derimot ikke mottar denne mailen innen en time, kontakt oss her :1',
	/** End Transactions **/

	/** Timesheets **/
	'timesheet:taskname'			=> 'Oppgave Navn',
	'timesheet:starttime'			=> 'Start Tid',
	'timesheet:endtime'				=> 'Stop Tid',
	'timesheet:timeframe'			=> 'Timeframe',
	'timesheet:duration'			=> 'Varighet',
	'timesheet:date'				=> 'Dato',
	'timesheet:forproject'			=> 'Timeliste for Prosjekt ":1"',
	'timesheet:timesheet'			=> 'Timeliste',
	'timesheet:for'					=> 'Timeliste til:',
	'timesheet:totalbillable'		=> 'Total Fakturerbare Timer',
	'timesheet:view_pdf'			=> 'Se Timeliste',
	'timesheet:user'			    => 'Bruekr',
	'timesheet:entries'			    => 'Oppføringer',
        'timesheet:no_entries'                  => "Det er ikke ført noe timer.",
	/** End Timesheets **/


	/** Support Tickets **/

	'tickets:all_tickets'			=>	'Support Tickets',
        'tickets:support_tickets' => "Support Tickets",
	'tickets:pending'				=>	'Påvente',
	'tickets:open'					=>	'Åpen',
	'tickets:resolved'				=>	'Løst',
	'tickets:closed'				=>	'Lukket',
	'tickets:respond'				=>	'Svar på ticket',
	'tickets:ticket_options'		=>	'Ticket Options',
	'tickets:attachment'			=>	'Attachment',
	'tickets:updated_status'		=>	':1 oppdatert ticket status til :2',
        'tickets:add_a_new_ticket' => "Legg til en ny Ticket",
        'tickets:create_a_new_ticket' => 'Lag en ny Ticket',
        'tickets:add_ticket' => 'Legg til Ticket',
        'tickets:assign_to_user' => 'Angi bruker',
        'tickets:select_client' => 'Velg Kunde',
        'tickets:ticket_subject' => 'Ticket Subject',
        'tickets:ticket_message' => 'Ticket Melding',
        'tickets:ticket_priority' => 'Ticket Prioritet',
        'tickets:ticket_status' => 'Ticket Status',
        'tickets:no_priority' => '-- Ingen Prioritert --',
        'tickets:no_status' => '-- Ingen status --',
        'tickets:no_posts' => "Ingen meldinger.",

	/** End Support Tickets **/

	/** Frontend **/
	'frontend:hithere'						=> 'Hei',
	'frontend:followthemaillinkdude'		=> 'For å se fakturaen du har fått må du klikke på hele linken du fikk i mailen. Eg :1.',
	'frontend:contactadminforassistance'	=> 'Prøv det eller kontakt :1 på :2 for hjelp',
	/** End Frontend **/

	/** Settings **/

    'settings:task_statuses'						=> "Task Statuses",
    'settings:ticket_statuses'						=> "Ticket Statuses",
    'settings:ticket_priorities'					=> "Ticket Priorities",
    'settings:background_color'						=> "Background Color",
    'settings:text_color'							=> "Text Color",
    'settings:text_shadow'							=> "Text Shadow",
    'settings:box_shadow'							=> "Box Shadow",
    'settings:default_rate'							=> "Default Rate",
    'settings:allowed_extensions'					=> 'Allowed Upload Extensions',
    'settings:comma_separated'						=> 'comma-separated',
    'settings:pdf_page_size'						=> 'PDF Page Size',
    'settings:default_invoice_notes'				=> 'Default Invoice Notes',
    'settings:default_invoice_title'				=> 'Default Invoice Title',
    'settings:default_invoice_due_date'				=> 'Default Invoice Due Date',
    'settings:autosave_proposals'					=> 'Autosave Proposals',
    'settings:default_invoice_due_date_explain'		=> 'days after invoice is created. If you don\'t want a default date, leave this empty.',
    'settings:testemailsettings'					=> 'Test Email Settings',
    'settings:kitchen_route'						=> 'Client Access Link Prefix',
    'settings:kitchen_route_explain'				=> "(Preview: :1)",
    'settings:include_remittance_slip'				=> 'Remittance Slips',
    'settings:include_remittance_slip_explain'		=> "If checked, invoice PDFs will include a remittance slip.",
    'settings:items_per_page'						=> 'Items Per Page',
    'settings:items_per_page_explain'				=> 'Number of items (invoices/estimates/proposals/projects/tasks) to show per page.',
    'settings:send_x_days_before'					=> 'Default "send days before"',
    'settings:send_x_days_before_explain'			=> "Default number of days before a recurring invoice is due to send it to a client.",
    'settings:file_to_import'						=> 'File To Import',
    'settings:file_should_be_csv'					=> 'Pancake will automatically process your file and import everything in it. If Pancake is unable to process your file, it will let you know, and it will give you the option to send us some information to help us make Pancake work with your file.',
    'settings:importnow'							=> 'Import now!',
    'settings:whatimporting'						=> 'What are you importing?',
    'settings:whatexporting'						=> 'What are you exporting?',
    'settings:nouploadedimportfile'					=> 'You did not upload a file to import.',
    'settings:import'								=> 'Import',
    'settings:importedclients'						=> 'Imported :1 clients successfully.',
    'settings:importedprojects'                                         => "Imported :1 projects successfully.",
    'settings:importedusers'                                            => "Imported :1 users successfully.",
    'settings:importedinvoices'						=> 'Imported :1 invoices successfully.',
    'settings:importedtasks'						=> 'Imported :1 tasks successfully.',
    'settings:importedestimates' => 'Imported :1 estimates successfully.',
    'settings:importedtime_entries'					=> 'Imported :1 time entries successfully.',
    'settings:xwereduplicates'						=> ':1 were duplicates, and were ignored.',
    'settings:import_desc'							=> 'Import data into Pancake.',
    'settings:export'								=> 'Export',
    'settings:exportnow'							=> 'Export now!',
    'settings:importexport'							=> 'Import / Export',
    'settings:removelogo'							=> 'Remove Logo',
    'settings:wrong_license_key'					=> 'The license key you have entered is not valid.',
    'settings:noopenssl'							=> 'Your PHP server does not have OpenSSL configured, which means you can\'t use Gmail or Google Apps for sending email. Please contact your host and let them know you need OpenSSL.',
    'settings:logoremoved'							=> 'Logo removed successfully!',
    'settings:save'									=> 'Save Settings',
    'settings:logodimensions'						=> 'The logo can be uploaded in any size, and will be resized automatically.',
    'settings:logoformatsallowed'					=> 'BMP, PNG, JPG (JPEG) and GIF are allowed.',
    'settings:ftp_user'								=> 'FTP User',
    'settings:ftp_pass'								=> 'FTP Password',
    'settings:ftp_path'								=> 'FTP Path',
    'settings:ftp_port'								=> 'FTP Port',
    'settings:ftp_pasv'								=> 'Passive Mode?',
    'settings:nophpupdates'							=> "Because of the way your server is configured, you need to enter your FTP details so that Pancake can update itself. These details are used internally by Pancake and are never transmitted to anyone.",
    'settings:ftp_host'								=> 'FTP Host',
    'settings:uptodate'								=> 'Pancake is up to date (:1)',
    'settings:newversionavailable'					=> 'There is a new version of Pancake available (:1)!',
    'settings:updatenow'							=> 'Update now!',
    'settings:checkforupdates' => "Check for updates",
    'settings:youneedtoconfigurefirst'				=> 'Your Pancake is not yet configured to update itself. Please enter your FTP details below, then press "Save Settings".<br /> Pancake will then let you update.',
    'settings:general'								=> 'General',
    'settings:emails'						=> 'Emails',
    'settings:taxes'								=> 'Taxes',
    'settings:currencies'							=> 'Currencies',
    'settings:branding'								=> 'Branding',
    'settings:payment_methods'						=> 'Payments',
    'settings:feeds'								=> 'Feeds',
    'settings:api_keys'								=> 'API Keys',

    'settings:time_entry_times' => "Time Entry Times",
    "settings:include_dates_and_times_in_line_items" => 'Include dates and times in "Time Entry" line item descriptions.',
    "settings:when_generating_invoice" => "When generating invoices, use a line item per",
    "settings:use_utf8_font" => "Use UTF-8 font in PDFs",
    "settings:use_utf8_font_explanation" => "Use this if characters are broken in your PDFs.",
    "settings:pdf_attachments" => "PDF Attachments",
    "settings:pdf_attachments_explanation" => "If checked, Pancake will attach the corresponding PDF to invoice, estimate or proposal emails.",
    "" => "",
    "" => "",
    "" => "",
    "" => "",
    "" => "",



    'settings:site_name'			=> 'Site name',
    'settings:language'				=> 'Language',
    'settings:timezone'				=> 'Timezone',
    'settings:currency'				=> 'Currency',
    'settings:theme'				=> 'Frontend Theme',
    'settings:admin_theme'			=> 'Admin Theme',
    'settings:date_format'			=> 'Date Format',
    'settings:time_format' => "Time Format",
    'settings:task_time_interval'	=> 'Time Entry Rounding (Leave empty for no rounding)',
    'settings:task_time_interval_description' => '(eg. 00:30 or 0.5 - all time entries are rounded up to the nearest 00:30 when billing for them in an invoice.)',
    'settings:mailing_address'		=> 'Mailing Address',

    'settings:default_subject'			=> 'Default Subject',
    'settings:default_contents'			=> 'Default Message',
    'settings:new_estimate'				=> 'New Estimate',
    'settings:new_invoice'				=> 'New Invoice',
    'settings:new_proposal'				=> 'New Proposal',
    'settings:paid_notification'		=> 'Paid Notification',
    'settings:payment_receipt'			=> 'Payment Receipt',
    'settings:new_ticket'				=> 'New Ticket',
    'settings:ticket_invoice'			=> "New Ticket Invoice",
    'settings:ticket_updated'			=> 'Ticket Updated',
    'settings:ticket_status_updated'	=> 'Ticket Status Updated',

    'settings:logo'					=> 'Your logo',
    'settings:frontend_css'			=> 'Frontend Custom CSS',
    'settings:backend_css'			=> 'Backend Custom CSS',

    'settings:rss_password'			=> 'RSS Password',
    'settings:default_feeds'		=> 'Default Feeds',
    'settings:cron_job_feed'		=> 'Cron Job',
    'settings:feed_generator'		=> 'Feed Generator',
    'settings:your_link'			=> 'Your Link',
    'settings:bcc'					=> 'BCC',
    'settings:api_note'				=> 'Name / Note',
    'settings:api_key'				=> 'Key',

    'settings:tax_name'				=> 'Tax Name',
    'settings:tax_value'			=> 'Value',
    'settings:add_tax'				=> 'Add Another Tax',

    'settings:currency_name'		=> 'Currency Name',
    'settings:currency_code'		=> 'Currency Code',
    'settings:exchange_rate'		=> 'Exchange Rate',
    'settings:add_currency'			=> 'Add Another Currency',
    /** End Settings **/

    'update:ifyourenotsurecontactus'		=> "If you're not sure what to do, please <a href='https://www.pancakeapp.com/account/support/ticket/new'>open a <strong>free</strong> support ticket</a>.",
    'update:youmodified'					=> 'You modified',
    'update:youdeleted'						=> 'You deleted',
    'update:loadingpleasewait'				=> 'Loading, please wait...',
    'update:errordownloading'				=> 'An update to Pancake is available, but Pancake is having problems downloading it.',
    'update:herearestepstofix'				=> 'Here are a few steps you can try to fix it:',
    'update:makesureuploadsiswritable'		=> 'Make sure that your uploads folder is writable (CHMOD 0777).',
    'update:deletepancakesystemupdate'		=> 'Delete the pancake-update-system folder (inside the uploads folder), and all its contents.',
    'update:loadpancakeagain'				=> "Load Pancake again. If the error persists, change the owner of the Pancake folder (chown) so it matches the web server's user. If you can't do that, or don't know how to, please send an email to support@pancakeapp.com, and we'll help you.",
    'update:whatschanged'					=> "What's new in :1",
    'update:ftp_conn'						=> 'Pancake could not connect to the FTP host.',
    'update:ftp_login'						=> 'Pancake could not login via FTP (wrong FTP username/password?).',
    'update:ftp_chdir'						=> 'Pancake could not set the FTP path (path probably does not exist).',
    'update:ftp_no_uploads'					=> 'Pancake could not obtain permission to upload files via FTP.',
    'update:ftp_indexwrong'					=> 'The FTP Path you entered is incorrect. It should be the path to Pancake\'s directory.',
    'update:ftp_indexnotfound'				=> 'The FTP Path you entered is incorrect. It should be the path to Pancake\'s directory.',
    'update:update_conflict'				=> 'You modified some files since the last update. In order to safeguard your customizations, here is a list of files that you have modified, that conflict with the latest upgrade.',
    'update:update_no_perms'				=> 'Pancake does not have enough permissions to update itself, nor does it have access to an FTP account from which it can update itself. Update cannot continue.',
    'update:review_files'					=> 'Please review these files and make backups of them before proceeding. When the upgrade is finished, you will have to re-integrate your modifications back into them. Please do not just replace the updated files with your outdated modified copies, as that may break Pancake.',
    'update:internetissues'					=> "Pancake is unable to connect to the Internet.",
    'update:pancakeneedsinternet'			=> 'For Pancake to function correctly, your server must allow it to fetch some information from the Internet (port 80).',
    'update:maybefirewall'					=> "It appears that your server is blocking Pancake from accessing the Internet. This could be a firewall issue in your server. Please contact your host for help. Ask them to allow PHP to access :1.",
    'update:nointernetaccess'				=> 'No Internet Access',
    'update:pancakeupdated'					=> 'Pancake was upgraded from :1 to :2',
    /** Action Logger  **/

    /** End Action Logger **/

    /** Partial Payments **/
    'partial:totalamounttobepaid'		=> "Total sum som kunde skal betale",
    'partial:amount'        			=> 'Sum',
    'partial:add_payment'				=> 'Legg til betalingsform',
    'partial:dueon'         			=> 'Forfallsdato',
    'partial:paymentdetails'			=> 'Betalingsdetaljer',
    'partial:savepaymentdetails'		=> 'Lagre Betalingsdetaljer',
    'partial:proceedtopayment'			=> 'Fortsett til betaling',
    'partial:topaynowgoto'				=> 'Betal nå? gå hit :1',
    'partial:pay_part_x_now' => "Delbetal #:1 av fakturaen nå",
    'partial:dueondate'					=> 'Forfallsdato :1',
    'partial:paymentmethod'				=> 'Betalingsmetode',
    'partial:paymentdate'				=> 'Betalings Dato',
    'partial:paymentstatus'				=> 'Betalings Status',
    'partial:transactionid'				=> 'Transaksjon ID',
    'partial:markaspaid'				=> 'Marker som betalt',
    'partial:transactionfee'			=> 'Administrasjonskostnad',
    /** End Partial Payments **/

    /** Payment Gateways **/
    'paypal:clickhere'					=> 'Klikk her for å fortsette',
    'authorize:transaction_key'			=> 'Transaction Key',
    'paypal:email'   					=> 'PayPal Email',
    'paypal:fee'    					=> 'PayPal Fee (%)',
    'paypalpro:paypalpro'				=> 'PayPal Payments Pro (BETA)',
    'paypalpro:viacreditcard'			=> 'Pay via Credit Card',
    'cash:cash'							=> 'Cash',
    'check:check'						=> 'Check',
    'moneyorder:moneyorder'				=> 'Money Order',
    'creditcard:creditcard'				=> 'Credit Card',
    'banktransfer:banktransfer'			=> 'Bank Transfer',
    'gateways:errorupdating'			=> 'There was an error updating your payment method settings.  Please contact support.',
    'gateways:paymentmethods'			=> 'Payment Methods',
    'gateways:selectpaymentmethod'		=> 'Select Payment Method',
    'gateways:nogatewayused'			=> 'No method used: Part is unpaid',
    'gateways:completed'				=> 'Completed',
    'gateways:refunded'					=> 'Refunded',
    'gateways:unpaid'					=> 'Unpaid',
    'gateways:paymentrejected'			=> ':1 Payment Rejected',
    'gateways:rejectedemail'			=> 'Pancake was notified about a :1 payment that one of your clients (:2) made, but :1 rejected it.',
    'gateways:pending'					=> 'Pending',
    'gateways:returntowebsite'			=> 'Return to :1',
    'gateways:cc_type'					=> 'Credit Card Type',
    'gateways:cc_number'				=> 'Credit Card Number',
    'gateways:cc_exp'					=> 'Expiry Date',
	'gateways:cc_cardholder'			=> 'Name on card',
    'gateways:cc_code'					=> 'CVV Code',
    'gateways:payment_details'			=> 'Payment Details',
    'gateways:api_signature'			=> 'API Signature',
    'gateways:api_password'				=> 'API Password',
    'gateways:api_username'				=> 'API Username',
    /** End Payment Gateways **/

    /** Kitchen Area **/
    'kitchen:edit_comment'				=> 'Edit Comment',
    'kitchen:add_a_comment' => "Add a comment",
    'kitchen:kitchen_name' 				=>  'Kundeområde',
    'kitchen:pleaselogin' 				=>  'Vennligst skriv inn løsningsordet til din konto',
    'kitchen:nocomments'    			=>  'Det er ingen kommentarer ennå.',
    'kitchen:comment'   				=>  'Kommentar',
    'kitchen:comments'  				=>  'Kommentarer',
    'kitchen:comments_x'                            => 'Kommentarer (:1)',
    'kitchen:file'  					=>  'Fil',
    'kitchen:submitcomment'				=>  'Legg til kommentar',
    'kitchen:attachment'    			=>  'Attachment',
    'kitchen:saidon'    				=>  'said on :1, at :2',
    'kitchen:subjectinvoice'			=> 'Ny kommentar til Faktura #',
    'kitchen:subjectestimate'			=> 'Ny kommentar til Estimat #',
    'kitchen:subjectproject'			=> 'Ny kommentar til Prosjekt:',
    'kitchen:subjecttask'				=> 'Ny kommentar til Oppgave:',
    'kitchen:subjectproposal'			=> 'Ny kommentar til Tilbud:',
    'kitchen:backtodashboard'   		=>  'Tilbake til Dashboard',
    'kitchen:client_welcome'    		=>  'Kundeområde til:',
    'kitchen:urltosend'					=>  'Kundeområde url',
    'kitchen:nopassphrase'  			=>  'Kunden har ikke satt et "Løsningsord", dette betyr om du trykker på linken kommer du rett inn i kundeområdet. Vis du ønsker å sikre siden ved hjelp av et "Løsningsord", rediger kunden og opprett et.',
    'kitchen:passphraseset'				=>  'Denne kunden har satt et Løsningsord',
    'kitchen:passphrase'    			=>  'Løsningsord',
    'kitchen:description'   			=>  'Dette er url som du kan sende til kunden for å gi dem tilgang til kundeområdet. Her kan de se Fakturaer, Prosjekter mm.',
	'kitchen:people_in_discussion'		=>  'Diskusjon',

    'kitchen:latest_invoice' => 'Nyeste Faktura',
    'kitchen:unpaid_balance' => 'Ubetalt sum: :1',
    'kitchen:total_paid_to_date' => 'Betalt sum: :1',

    /** END Kitchen Area **/

    'store:store' => 'Store',
    'store:buy' => "Buy ($:1)",
    'store:update' => "Update",
    'store:install' => "Install",
    'store:settings' => "Settings",
    'store:already_bought' => "You've already purchased this item!",
    'store:installed_successfully' => "You've installed the :1 :2 successfully.",
    'store:plugin' => "Plugin",
    'store:payment_gateway' => "Payment Gateway",
    'store:frontend_theme' => "Frontend Theme",
    'store:backend_theme' => "Backend Theme",
    'store:unknown' => "Unknown",
    'store:updatestoreitems' => "Update store items",
    'store:download_free' => "Download (FREE)",
    'store:error1000' => "Your authorization token is no longer valid. You will have to enter your payment details in pancakeapp.com once more.",
    'store:error1001' => "You have already purchased this store item!",
    'store:error1002' => "A problem occurred while trying to charge your credit card. Try again later.",
    'store:error1003' => "You have made an invalid request.",

    'email_templates:new_invoice' => 'New Invoice',
    'email_templates:new_estimate' => 'New Estimate',
    'email_templates:new_proposal' => 'New Proposal',
    'email_templates:invoice_payment_notification_for_admin' => 'Payment Notification (sent to admin)',
    'email_templates:invoice_payment_notification_for_client' => 'Payment Receipt Notification (sent to client)',
    'email_templates:new_ticket' => 'New Ticket',
    'email_templates:new_ticket_invoice' => 'New Ticket Invoice',
    'email_templates:ticket_updated' => 'Ticket Update Notification',
    'email_templates:ticket_status_updated' => 'Ticket Status Update Notification',
    'email_templates:assigned_to_task' => "Task Assignment Notification",
    'email_templates:assigned_to_milestone' => "Milestone Assignment Notification",
    'email_templates:new_comment' => "New Comment Notification",

    'global:timer_app' => "Pancake Timer App",
    'global:there_is_no_activity' => "There is no team activity to display.",
    'global:there_are_no_tasks_assigned_to_you' => "There are no tasks assigned to you.",

    /** Dashboard **/


	/** END Dashboard **/

    # v4.0.5

    # Begin v4.1.2 changes
    'invoices:converted_to_estimate' => "Converted invoice #:1 to an estimate.",
    'global:converttoestimate' => 'Convert to Estimate',
    # End v4.1.2 changes

    # Begin v4.1.3 changes
    'tickets:view_archived' => "View Archived Tickets",
    'tickets:view_unarchived' => "Se pågående Tickets",
    'tickets:archiving_ticket' => "Archiving ticket",
    'tickets:unarchiving_ticket' => "Unarchiving ticket",
    "tickets:unknown_error_ticket_not_altered" => "An unknown error occurred. Your ticket was not altered.",
    # End v4.1.3 changes

    # Begin v4.1.4 changes
    "tasks:starting_timer" => "Starting timer",
    "tasks:stopping_timer" => "Stopping timer",
    "global:all_comments" => "All Comments",
    "dashboard:view_all_comments" => "View All Comments",
    "dashboard:latest_comments" => "Latest Comments",
    "dashboard:written_by" => "Written by :1 on :2",
    "dashboard:client_activity" => "Client Activity",
    "dashboard:view_all_client_activity" => "View All Client Activity",
    "dashboard:team_activity" => "Team Activity",
    "dashboard:view_all_team_activity" => "View All Team Activity",
    "dashboard:my_tasks" => "My Tasks",
    "dashboard:view_all_my_tasks" => "View All My Tasks",
    "dashboard:what_the_team_is_working_on" => "What the team is working on.",
    # End v4.1.4 changes

    # Begin v4.1.6 changes
    "global:save_milestone" => "Save Milestone",
    "global:save_task" => "Save Task",
    "global:private_comment" => "This comment is private. Your client won't see it.",
    "global:clients_cant_see_private" => "Clients can't see private comments.",
    "global:is_private" => "Private?",
    # End v4.1.6 changes

    # Begin v4.1.7 changes
    "tickets:disable_client" => "-- Disable Support Tickets --",
    # End v4.1.7 changes

    # Begin v4.1.8 changes
    "global:css" => "Custom CSS",
    "global:js" => "Custom JavaScript",
    "global:js_explanation" => "You can use jQuery at will. Your code will be added just before &lt;/body&gt;.",
    "settings:frontend_js" => "Frontend Custom JavaScript",
    "settings:backend_js" => "Backend Custom JavaScript",
    # End v4.1.8 changes

    # Begin v4.1.9 changes
    "proposals:estimate_number_and_amount" => "Estimate #:1 (:2)",
    # End v4.1.9 changes

    # Begin v4.1.10 changes
    "clients:delete" => "Delete Client",
    # End v4.1.10 changes

    # Begin v4.1.11 changes
    "global:nolongerexists" => "[NO LONGER EXISTS]",
    "global:billed_amount" => "Fakturert sum",
    "global:unbilled_amount" => "Ufakturert sum",
    "global:is_billed" => "Fakturert?",
    # End v4.1.11 changes

    # Begin v4.1.14 changes
    "settings:year_start" => "Fiscal Year Start Date",
    "dashboard:since_explanation" => "Since :1",
    # End v4.1.14 changes

    # Begin v4.1.15 changes
    "export:invoices_csv" => "Invoices (CSV)",
    # End v4.1.15 changes

    # Begin v4.1.17 changes
    "projects:createdtemplate" => "Project template created. You can now create projects based on this template.",
    "projects:delete_template" => "Delete Template",
    "projects:deleted_template" => "Success! Template deleted.",
    # End v4.1.17 changes

    # Begin v4.1.19 changes
    "export:expenses_csv" => "Expenses (CSV)",
    "export:clients_csv" => "Clients (CSV)",
    "projects:expense_date" => "Expense Date",
    # End v4.1.19 changes

    # Begin v4.1.20 changes
    "clients:can_create_support_tickets" => "Tillat kunde å opprette support tickets?",
    "tickets:submit_new" => "Opprett en Support Ticket",
    "global:cancel" => "Avbryt",
    "global:timers" => "Timers",
    "global:more" => "Mer",
    # End v4.1.20 changes

    # Begin v4.1.23 changes
    "global:search" => "Search",
    "authorize:api_login_id" => "API Login ID",
    "authorize:api_login_id_description" => "You can find this in Authorize.net, under Account > API Login ID and Transaction Key.",
    "authorize:md5_hash" => "MD5-Hash",
    "authorize:md5_hash_description" => "By default, this is your API Login ID. You can change this in Authorize.net, under Account > MD5-Hash. If you see 'Hash Value Set: No', leave this empty.",
    "transactions:paymentfailed" => "Payment Failed",
    "transactions:extrapaymentfailed" => "An unknown problem occurred while trying to process your payment. Please contact :1 at :2 for assistance.",
    # End v4.1.23 changes

    # Begin v4.1.24 changes
    "projects:tracked" => "Tracked",
    "invoices:partially_paid" => "Partially",
    # End v4.1.24 changes

    # Begin v4.1.27 changes
    "global:projects_ommitted" => ":1 projects not shown",
    "global:tasks_ommitted" => ":1 tasks not shown",
    # End v4.1.27 changes

    # Begin v4.1.28 changes
    "login:username_email" => "Brukernavn / Email",
    # End v4.1.28 changes

    # Begin v4.1.31 changes
    "settings:when_new_updates_are_available" => "When new updates are available",
    "settings:dont_install_just_notify_me" => "Don't install, just notify me",
    "settings:install_automatically" => "Install automatically",
    "settings:loading_update_details" => "Loading update details... This may take a minute or two. Feel free to refresh at any time.",
    "settings:updating_please_wait" => "Updating, please wait. This page will refresh once the update has finished.",
    "settings:will_have_to_overwrite_single_file" => "Pancake will have to overwrite 1 file that you have modified manually!",
    "settings:will_have_to_overwrite_multiple_files" => "Pancake will have to overwrite :1 files that you have modified manually!",
    "settings:checking_for_updates" => "Checking for updates, please wait. This page will refresh automatically.",
    "settings:updating_please_wait" => "Updating, please wait. This page will refresh once the update has finished.",
    "settings:description" => "Save your updated settings before changing tab or leaving the page.",
    "settings:business_identities" => "Business Identities",
    "settings:business_name" => "Business Name",
    "settings:new_business" => "New Business",
    "settings:business_identity" => "Business Identity",
    "settings:business_identity_explanation" => "Your client will see the above business identity on all of their emails, PDFs and pages.",
    # End v4.1.31 changes

    # Begin v4.1.33 changes
    "settings:have_been_updated" => 'The settings have been updated.',
    "tasks:all" => "All Tasks",
    "projects:progress" => "Progress",
    "expenses:name" => "Expense Name",
    "tasks:add_hours_to" => "Add Hours To :1",
    "global:today" => "Today",
    "global:yesterday" => "Yesterday",
    "global:other" => "Other",
    "global:now" => "Now",
    "timesheet:view_for_clients" => "View timesheet (for clients)",
    "global:not_billed_yet" => "Not billed yet.",
    "tasks:total_logged_time" => "Total logged time",
    "global:biweekly" => "Biweekly",
    # End v4.1.33 changes

    # Begin v4.2 changes
    'settings:default_task_due_date' => 'Default Task Due Date',
    'settings:default_task_due_date_explain' => "days after task is created. If you don't want a default date, leave this empty.",
    # End v4.2 changes

    # Note: 4.2.x brought changes to the language file that weren't appended to the end of the file.
    # If you're updating your translation, make sure to check out a diff of the language file, instead of relying on just checking the bottom of the file.

    # Begin v4.2.4 changes
    "expenses:sort_or_filter" => "Sort/Filter Expenses",
    "expenses:show" => "Show Expenses",
    "global:sort_by" => "Sort by",
    "global:sort_order" => "Sort order",
    "global:asc" => "Ascending (A-Z)",
    "global:desc" => "Descending (Z-A)",
    # End v4.2.4 changes

    # Begin v4.3.0 changes
    "settings:tax_compound" => "Compound?",
    "settings:no_tax" => "No Tax",
    "settings:default_taxes" => "Default Taxes",
    "global:and" => "and",
    "global:tax" => "Tax",
    # End v4.3.0 changes

    # Begin v4.3.6 changes
    "global:youarenotallowed" => "You are not allowed to access this page.",
    # End v4.3.6 changes

    # Begin v4.3.7 changes
    'settings:notify_email' => 'Support Email',
    'settings:billing_email' => 'Faktura Email',
    'settings:brand_name' => 'Brand Name',
    'settings:admin_name' => 'Admin Name',
    'settings:brand_name_explanation' => 'This is the name you want your clients to see. It will be displayed everywhere except invoices.',
    'settings:business_name_explanation' => 'This is your legal business name. It will be displayed on your invoices.',
    'settings:admin_name_explanation' => 'By default, this appears at the bottom of your emails to clients.',
    'settings:billing_email_explanation' => 'This is the "From" address used for Invoice, Estimate and Proposal emails.',
    'settings:notify_email_explanation' => 'This is the "From" address used for comment notifications and support tickets.',
    'settings:show_name_along_with_logo' => 'Show your brand name alongside your logo?',
    'dashboard:your_projects' => 'Dine Prosjekter',
    'dashboard:today' => 'Idag',
    'dashboard:team_activity' => 'Updates',
    'dashboard:snapshot' => 'Snapshot',
    'invoices:frequency' => 'Frequency',
    'invoices:auto_send' => 'Auto Send?',
    'invoices:send' => 'Send',
    'invoices:days_before_invoice_is_due' => 'days before invoice is due',
    'invoices:cannot_change_recurrences' => 'You cannot change the recurrence settings of an invoice that is a recurrence of another invoice.',
    # End v4.3.7 changes

    # Begin v4.3.8 changes
    'email_templates:client_area_details' => 'Kundeområde informasjon',
    'settings:always_https' => 'Tving bruken av HTTPS?',
    'settings:always_https_explanation' => 'This will make Pancake always load via HTTPS. Use this only if you have an SSL certificate installed and can access Pancake via HTTPS.',
    'settings:remittance_slip' => 'Remittance Slip',
    'invoices:mail_to' => 'Sendes til',
    'clients:send_client_area_email' => 'Send Kundeområde informasjonen',
    'clients:you_cannot_send' => 'Kan ikke sende kundeområde informasjonen, det er ikke tilknyttet en epost til denne kunden.',
    # End v4.3.8 changes

    # Begin v4.4.0 changes
    'invoices:discount' => 'Rabatt',
    'invoices:discount_explain' => 'Bruk % for prosent.',
    'invoices:addedconf' => 'YDu har lagt til kreditnota # <strong>:1</strong>, totalt <strong>:2</strong> (:3 med mva) for :4:5.',
    'estimates:addedconf' => 'You have added estimate # <strong>:1</strong>, totalt <strong>:2</strong> (:3 med mva) for :4:5.',
    'credit_notes:edit_credit_note' => 'Rediger Kreditnota #:1',
    'credit_notes:create_credit_note' => 'Lag Kreditnota',
    'global:credit_notes' => 'Kreditnotaer',
    'global:credit_note' => 'Kreditnota',
    'credit_notes:alltitle' => 'Alle Kreditnotaer',
    'credit_notes:nocredit_notesforthefilteredclient' => 'Du har ingen kreditnotaer til :1.',
    'credit_notes:no_credit_notes' => 'Du har ingen kreditnotaer.',
    'credit_notes:create' => 'Lag kreditnota',
    'credit_notes:no_credit_notes_body' => 'Du bør komme i gang! Ønsker du å opprette en nå?',
    'credit_notes:edit' => 'Rediger Kreditnota',
    'credit_notes:credit_note_number' => 'Kreditnota #:1',
    'credit_notes:credit_note_date' => 'Kreditnota Dato',
    'credit_notes:delete_title' => 'Slett denne kreditnota ?',
    'credit_notes:delete_message' => 'Er du sikker på at du vil slette denne kreditnota ?',
    'credit_notes:addedconf' => 'Du har lagt kreditnota # <strong>:1</strong>, totalt <strong>:2</strong> (:3 med mva) for :4:5.',
    'credit_notes:send_now_title' => 'Send kreditnota nå ?',
    'credit_notes:send_now_body' => "Fyll ut skjemaet nedenfor og vi vil levere denne kreditnota for deg.",
    'email_templates:new_credit_note' => 'Ny Kreditnote',
    'credit_notes:send_now' => 'Send Kreditnote',
    'credit_notes:preview' => 'Forhåndsvis Kreditnota',
    'credit_notes:duplicated' => "Duplicated credit note #:1. The new credit note's number is #:2.",
    'credit_notes:client_viewed' => ":1 så <a href=':2'>kreditnota #:3</a> den :4",
    'invoices:make_bulk_payment' => 'Gjør flere Betaling',
    'global:success' => 'Suksess!',
    'clients:view' => 'Se Kunde',
    'invoices:store_bulk_payment' => 'Lagre flere Betaling',
    'invoices:x_invoices' => ':1 fakturaer',
    'invoices:amount_to_pay' => 'Marker sum som betalt',
    'invoices:bulk_payment_added' => "The bulk payment was added successfully.",
    'clients:credit_balance_currently' => "Kreditt balanse (for tiden :1)",
    'clients:has_no_unpaid_invoices' => ":1 har ingen ubetalte fakturaer.",
    'invoices:send_payment_notification' => "Send en betalingspåmindelse epost til kunde?",
    'invoices:send_bulk_payment_notification' => "Send betalingspåmindelse eposter til kundene?",
    'invoices:specify_bulk_payment_details' => "Spesifisere detaljene i kundens betaling , og velge hvilke fakturaer betalingen gjelder.",
    'global:credit_balance' => "Kreditt Balanse",
    # End v4.4.0 changes

    # Begin v4.4.1 changes
    'credit_notes:view' => 'Se Kreditnota',
    # End v4.4.1 changes

    # Begin v4.4.3 changes
    'tickets:ticket_number' => "Ticket #:1",
    'settings:ticket_status_for_sending_invoice' => "Ticket Status for Invoicing",
    'settings:ticket_status_for_sending_invoice_description' => "When a paid ticket is updated to this status, an invoice will automatically be generated and sent to the client.",
    'settings:never_send_ticket_invoices_automatically' => "-- Never send ticket invoices automatically --",
    # End v4.4.3 changes

    # Begin v4.4.6 changes
    'expenses:added' => "The expense was added successfully.",
    # End v4.4.6 changes

    # Begin v4.4.9 changes
    'global:error_submitting_ajax' => "An unknown error occurred while trying to submit this form. Please try again later. If the error persists, please start a free support ticket at pancakeapp.com.",
    'store:error1004' => "An unknown error occurred while trying to purchase this item. Please try again later. If the error persists, please start a free support ticket at pancakeapp.com.",
    # End v4.4.9 changes

    # Begin v4.5.0 changes
    'invoices:pancake_will_automatically_change_is_viewable' => "This will automatically be changed to 'Yes' when you email the invoice to the client.",
    "global:incorrect_login" => "The username/password combination you have entered is invalid.",
    # End v4.5.0 changes

    # Begin v4.5.3 changes
    'contact:title' => 'Contact History',
    # End v4.5.3 changes

    # Begin v4.5.5 changes
    'settings:hide_tax_column' => "Hide Tax Column?",
    'settings:hide_tax_column_explanation' => "This will hide the tax column in invoices that have no tax information.",
    'tickets:not_yet_generated' => "Invoice not yet generated",
    'tickets:invoice_will_be_generated' => "A :1 invoice for this ticket will be generated when the ticket's status is changed to \":2\".",
    'global:accepted' => "Accepted",
    'global:rejected' => "Rejected",
    'global:unanswered' => "Unanswered",
    'estimates:accepted' => "Accepted Estimates",
    'estimates:rejected' => "Rejected Estimates",
    'estimates:unanswered' => "Unanswered Estimates",
    'emailtemplates:content' => "Email Content",
    'global:every_six_months' => 'Biannually (twice a year)',
    'global:biyearly' => 'Biennially (every 2 years)',
    'global:triennially' => "Triennially",
    # End v4.5.5 changes

    # Begin v4.5.6 changes
    'settings:automaticallybccclientemail' => 'Automatically send a copy of all client emails to your main business identity\'s support email address.',
    # End v4.5.6 changes

    # Begin v4.5.7 changes
    'invoices:send_to_client' => "Email Invoice To Client",
    'estimates:send_to_client' => "Email Estimate To Client",
    'global:beforeunload' => "You are about to leave this page. If you do so, all the data you have entered so far will be lost. Are you sure that you wish to leave this page?",
    # End v4.5.7 changes

    # Begin v4.5.8 changes
    'global:appendtoproject' => 'Convert into tasks for ":1"',
    'estimates:appended' => 'Converted estimate #:1 into tasks for ":2".',
    # End v4.5.8 changes

    # Begin v4.6.0 changes
    'items:percentage_discount' => "Rabatt (%)",
    'items:fixed_discount' => "Rabatt (:1)",
    'invoices:discount_percentage' => "Rabatt (:1%)",
    'invoices:sub_total_after_discounts' => "Subtotal (after discounts)",
    'settings:tax_reg' => 'Org. Nummer / IDs',
    'clients:tax_registration_number' => ':1 Number / ID',
    'clients:add_custom_field' => "Add another custom field",
    'clients:tax_numbers' => 'Org. Nummer / IDs',
    'clients:custom_fields' => "Custom Fields",
    'expenses:category_added' => "Success! The expense category was created successfully.",
    'clients:update_balance' => "Update Credit Balance",
    'clients:balance_updated' => "Success! The client's credit balance was updated successfully.",
    'clients:what_do_you_want_to_do' => "What do you want to do",
    'clients:save_balance_alteration' => "Save balance alteration",
    'clients:no_amount_specified' => "You didn't specify an amount.",
    'expenses:attach_receipt' => "Attach Receipt (Maximum Size: :1)",
    'expenses:no_project_business_expense' => "Business Expense (No Project)",
    'expenses:expense_date' => "Date",
    'expenses:receipt' => "Receipt",
    'expenses:no_receipt' => "No Receipt",
    # End v4.6.0 changes

    # Begin v4.6.3 changes
    'expenses:edited' => "Success! The expense was edited successfully.",
    'expenses:expense_receipts' => "Expense Receipts",
    # End v4.6.3 changes
    
    # Begin v4.6.7 changes
    'reports:payments' => "Payments",
    'reports:verb_created' => "Created",
    'reports:verb_paid' => "Paid",
    'reports:verb_from_to' => ":1 from :2 to :3",
    # Deleted "reports:selection_explanation_accrual"
    # Deleted "reports:selection_explanation_cash"
    # Deleted "settings:accounting_type"
    # Deleted "settings:accrual"
    # Deleted "settings:cash"
    # End v4.6.7 changes
    
    # Begin v4.6.8 changes
    'reports:amount_paid' => "Payment Amount",
    # End v4.6.8 changes
    
    # Begin v4.6.9 changes
    'dashboard:upcoming_invoices' => 'Kommende Fakturaer',
    'dashboard:there_are_no_upcoming_invoices' => "Det er ikke noen kommende fakturaer å vise deg nå.",
    "dashboard:view_all_upcoming_invoices" => "Se alle kommende fakturaer",
    # End v4.6.9 changes
    
    # Begin v4.7.0 changes
    "error:cannot_send_error_details" => "You cannot send error details to Pancake Support because you are not logged in.",
    "error:unknown_error_reporting" => "An unknown error occurred. Please report this error manually.",
    "error:sending_details" => "Sending details...",
    "error:response_will_be_sent_to_email" => "You will be notified of replies at {email}.",
    "settings:errors_and_diagnostics" => "Errors & Diagnostics",
    "error:already_reported" => "This error has already been reported to Pancake Support.",
    "error:title" => "Unknown Error",
    "error:subtitle" => "An unknown error has occurred.",
    "error:not_logged_in_intro" => "These errors are logged automatically.",
    "error:not_logged_in_extra" => "If the problem persists please contact :1.",
    "error:logged_in_intro" => "These errors are stored in the admin, under 'Settings > Errors & Diagnostics'.",
    "error:logged_in_extra" => "Click here to submit a free support ticket with the error's details to Pancake Support.",
    "error:no_logged_errors" => "You have no logged errors.",
    "errors:subject" => "Error Title",
    "errors:report" => "Report Error",
    "errors:number_of_occurrences" => "# of occurrences",
    "global:errors" => "Errors",
    "settings:error_reported" => "Error Reported",
    "settings:report_error" => "Report Error",
    "settings:delete_error" => "Delete Error",
    "global:once" => "Once",
    "global:twice" => "Twice",
    "global:x_times" => ":1 times",
    "global:occurred_times" => "Occurred :1",
    "settings:view_error_details" => "View Error Details",
    "error:deleting" => "Deleting...",
    "error:reporting" => "Reporting...",
    "clients:noclientbodyfiltered" => "None of your clients' names start with ':1'.", 
    "tickets:archive" => "Archive",
    "tickets:unarchive" => "Restore",
    'projects:unarchive_proj' => 'Restore Project',
    'invoices:lastreoccurrence' => 'Last Recurrence: :1',
    'invoices:thisisareoccurrence' => 'This invoice is a recurrence of Invoice :1.',
    
    ### This was moved here from the Projects language files, which were in a separate folder.
    'projects:role_view' => 'View',
    'projects:role_create' => 'Create',
    'projects:role_edit' => 'Edit',
    'projects:role_delete' => 'Delete',
    'projects:role_add_task' => 'Add Task',
    'projects:role_edit_task' => 'Edit Task',
    'projects:role_delete_task' => 'Delete Task',
    'projects:role_add_milestone' => 'Add Milestone',
    'projects:role_edit_milestone' => 'Edit Milestone',
    'projects:role_delete_milestone' => 'Delete Milestone',
    'projects:role_track_time' => 'Track Time',
    "projects.title" => "Projects",
    "projects.create.title" => "Create Project",
    "projects.edit.title" => "Update Project",
    "projects.label.name" => "Name:",
    "projects.label.client" => "Client:",
    "projects.label.due_date" => "Due Date:",
    "projects.label.rate" => "Hourly Rate:",
    "projects.label.description" => "Description:",
    "projects.label.is_viewable" => "Viewable in client area?",
    "projects.button.create" => "Create Project &rarr;",
    "projects.create.succeeded" => "The project has been created!",
    "projects.button.edit" => "Update Project &rarr;",
    "projects.button.delete" => "Delete Project &rarr;",
    "projects.update.succeeded" => "The project has been updated!",
    "projects.delete.title" => "Are you sure you want to delete this project?",
    "times.title" => "Times",
    "times.create.title" => "Add Time",
    "times.label.start_time" => "Start time:",
    "times.label.end_time" => "End time:",
    "times.label.date" => "Date:",
    "times.label.task_id" => "Task:",
    "times.label.note" => "Note:",
    "times.label.notes" => "Notes:",
    "times.button.create" => "Add Time &rarr;",
    "times.create.succeeded" => "The time has been entered successfully!",
    "times.edit.succeeded" => "The time has been edited successfully!",
    # End v4.7.0 changes
    
    # Begin v4.7.1 changes
    "global:estimates_unsent" => "Unsent",
    "invoices:estimates_unsent" => "Unsent Estimates",
    # End v4.7.1 changes
    
    # Begin v4.7.3 changes
    "error:not_enough_disk_space" => "Not Enough Disk Space",
    "error:cant_send_email" => "Can't Send Email",
    "error:not_enough_disk_space_explanation" => "Your database server (:1) does not have enough disk space.",
    "error:you_cannot_report_this_error" => "You cannot report this issue to Pancake Support, because it is an issue with your server. Please contact your server administrator about this issue. When discussing it with them, tell them:",
    "error:not_enough_disk_space_solutions" => "If you have root access to the database server, try clearing /tmp. If that doesn't work, check your database server's disk space usage, and try freeing some disk space.",
    "error:cant_send_email_explanation" => "You've specified that you want to use Sendmail (:1) to send email, but it was not possible to do so. Either the path to Sendmail is incorrect, or something else has gone wrong.",
    "error:email_settings_not_valid" => "Your email settings are not valid.",
    "error:cant_send_email_solutions" => "If you have root access to the server, make sure you've got sendmail installed and try finding it with <code>which sendmail</code>.",
    # End v4.7.3 changes
    
    # Begin v4.7.5 changes
    "error:server_error" => "Server Error",
    "error:xcache_extension_broken" => "Your server has a problem with the XCache extension.",
    "error:xcache_extension_broken_explanation" => "Something went wrong while your server was trying to load the XCache extension. This is not related to Pancake at all, but it's preventing Pancake from running.",
    "error:permissions_not_valid" => "There is a problem with the file permissions on your server.",
    "error:no_tmp_dir_permissions_explanation" => "Your server is configured in a way that does not allow Pancake to create temporary files in <code>:1</code>.",
    "error:no_tmp_dir_permissions_solutions" => "If you have root access to the server, you can change the <code>open_basedir</code> setting in your php.ini so that <code>:1</code> is included in the list of allowed folders.",
    # End v4.7.5 changes

    # Begin v4.7.7 changes
    "error:cant_php_mail_explanation" => "You've specified that you want to use PHP mail() to send email, but this method of sending email isn't working correctly on your server. This method of sending email requires zero configuration, but it is not recommended because email servers can't verify who's sending the email. Some of them will even automatically mark your emails as spam. Change your email server setting in the admin, under 'Settings > Emails', to use one of the SMTP options, or, if you can't, use the Sendmail option as a last resort. If none of them work, you will have to contact your server administrator.",
    "invoices:see_payment_schedule_below" => "See Payment Schedule Below",
    "invoices:see_payment_schedule" => "See Payment Schedule",
    
    'partial:partialpayments' => 'Payment Schedule',
    'partial:amountlefttobeadded' => "Amount left to be added to the payment schedule",
    'partial:amounttoobig' => "Amount that needs to be removed from the payment schedule",
    'partial:noamountneeded' => "Your payment schedule is complete.",
    'partial:wrongtotal' => 'The sum of all the parts of your payment schedule does not match the total amount you are invoicing.',
    'partial:problemsaving' => 'A problem occurred while saving the payment schedule. Please try again.',
    'partial:wrongtotalbutsaved' => 'The sum of all the parts of your payment schedule does not match the total amount you are invoicing.<br />The changes to your invoice were saved, but you need to fix your payment schedule.',
    'partial:problemsavingbutsaved' => 'A problem occurred while saving the payment schedule. Please try again.<br />The changes to your invoice were saved, it is only the payment schedule that wasn\'t.',
    'partial:addanother' => 'Add another part to the payment schedule',
    'partial:disabledforrecurring' => 'Recurring invoices are limited to one-part payment schedules',
    'partial:partpaidthanks' => "This part of your invoice's payment schedule has been paid. Thank You.",
    
    "error:page_not_found" => "Page Not Found",
    "error:page_does_not_exist" => "The page you were trying to access does not exist.",
    "error:page_does_not_exist_explanation" => "You were trying to access :1, but it does not exist. If this is unexpected, you can report the error to Pancake Support. You'll find it in 'Settings > Errors & Diagnostics'.",
    # End v4.7.7 changes
    
    # Begin v4.7.8 changes
    "settings:importedcredit_notes" => "Imported :1 credit notes successfully.",
    # End v4.7.8 changes
    
    # Begin v4.7.10 changes
    "expenses:supplier_added" => "Success! The supplier was created successfully.",
    # End v4.7.10 changes
    
    # Begin v4.7.11 changes
    'reports:per_payment_method' => 'per payment method',
    # End v4.7.11 changes
    
    # Begin v4.7.12 changes
    "gateways:just_for_logging" => "Note: This payment method does not affect invoices in any way.<br />It is here so that you can track which payments you received by :1.",
    "projects:no_data_provided" => "You did not enter any information for creating a project from a template.",
    "projects:invalid_template" => "You did not select a valid project template.",
    "settings:test_email_subject" => "This a test email.",
    "settings:test_email_message" => "This is a test email. If you've received this, it means emails are working in Pancake.",
    "settings:send_test_email" => "Send Test Email",
    "settings:sending" => "Sending email...",
    "settings:test_email_sent" => "Sent to :1 successfully!",
    "settings:test_email_error_header" => "Error sending test email",
    "settings:test_email_error" => "An error occurred while trying to send the test email:<br /><br />:1<br /><br />Please make sure the details you entered are correct. If you're using SMTP, make sure the port you're trying to use is open in your server's firewall.",
    "settings:test_email_connection_error" => "Your server can't connect to :1 on port :2. You will need to get in touch with your system administrator and allow this port in your server's firewall.<br /><br />The error message was:<br /><br />:3"
    # End v4.7.12 changes
    
);

/** End of file: pancake_lang.php **/