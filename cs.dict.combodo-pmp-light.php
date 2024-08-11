<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
 /**
 * @author Martin Tesař <martin.tesar@yourwifi.cz>
 *
 */

// Contact class
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Class:Contact/Attribute:project_list' => 'Otevřené projekty, na kterých se podílím',
	'Class:Contact/Attribute:projects_list' => 'Projekty',
	'Contact:Info:ProjectManager'=> 'Projekty, které spravuji, nebo sponzoruji',
	'Contact:Info:WBSManager'=> 'Výstupy za které jsem odpovědný',
	'Class:Contact/Attribute:wbs_list' => 'Otevřené výstupy na kterých se podílím',
	'Class:Contact/Attribute:wbss_list' => 'Výstupy',
	'Class:Contact/Attribute:wbss_list+' => 'Výstupy na kterých je třeba pracovat',
	'Class:Contact/Tab:PMP' => 'Projekty & výstupy',
	'Class:Contact/Tab:PMP+' => 'Všechny otevřené projekty a výstupy na kterých pracuji',
	'Class:lnkContactToProject' => 'Propojení kontakt / projekt',
	'Class:lnkContactToProject/Attribute:contact_id' => 'Kontakt',
	'Class:lnkContactToProject/Attribute:project_id' => 'Projekt',
	'Class:lnkContactToProject/Attribute:role/Value:1' => 'Zákazník',
	'Class:lnkContactToProject/Attribute:role/Value:2' => 'Zdroj',
	'Class:lnkContactToProject/Name' => '%1$s - %2$s',
	'Class:lnkContactToTicket/Attribute:allocated_days' => 'Alokované dny',
	'Class:lnkContactToTicket/Attribute:allocated_percent' => 'Alokováno procent',
	'Class:lnkContactToTicket/Attribute:category' => 'Zodpovědnost',
	'Class:lnkContactToTicket/Attribute:category/Value:1' => 'Zákazník',
	'Class:lnkContactToTicket/Attribute:category/Value:2' => 'Zdroj',
	'Class:lnkContactToTicket/Attribute:influence' => 'Vliv',
	'Class:lnkContactToTicket/Attribute:influence/Value:objector' => 'Objector',
	'Class:lnkContactToTicket/Attribute:influence/Value:partner' => 'Partner',
	'Class:lnkContactToTicket/Attribute:influence+' => 'Chování v tomto projektu',
	'Class:lnkContactToTicket/Attribute:power/Value:low' => 'Nízká',
	'Class:lnkContactToTicket/Attribute:power/Value:strong' => 'Vysoká',
	'Class:lnkContactToTicket/Attribute:power' => 'Síla',
	'Class:lnkContactToTicket/Attribute:power+' => 'Rozhodovací síla',
	'Class:lnkContactToWBS' => 'Propojení kontakt / WBS',
	'Class:lnkContactToWBS/Attribute:allocated_days' => 'Alokované dny',
	'Class:lnkContactToWBS/Attribute:allocated_percent' => 'Alokováno procent',
	'Class:lnkContactToWBS/Attribute:category' => 'Zodpovědnost',
	'Class:lnkContactToWBS/Attribute:category/Value:1' => 'Zákazník',
	'Class:lnkContactToWBS/Attribute:category/Value:2' => 'Zdroj',
	'Class:lnkContactToWBS/Attribute:contact_id' => 'Zúčastněné strany',
	'Class:lnkContactToWBS/Attribute:influence' => 'Vliv',
	'Class:lnkContactToWBS/Attribute:influence+' => 'Chování v tomto projektu',
	'Class:lnkContactToWBS/Attribute:influence/Value:objector' => 'Objector',
	'Class:lnkContactToWBS/Attribute:influence/Value:partner' => 'Partner',
	'Class:lnkContactToWBS/Attribute:power/Value:low' => 'Nízká',
	'Class:lnkContactToWBS/Attribute:power/Value:strong' => 'Vysoká',
	'Class:lnkContactToWBS/Attribute:power' => 'Síla',
	'Class:lnkContactToWBS/Attribute:power+' => 'Rozhodovací síla',
	'Class:lnkContactToWBS/Attribute:wbs_id' => 'Výstupy',
	'Class:lnkContactToWBS/Name' => '%1$s - %2$s',
));

// Project class
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Class:Project' => 'Projekt',
	'Class:Project/Attribute:agent_id' => 'Manažer projektu',
	'Class:Project/Attribute:allocatedtimes_list' => 'Alokované časy',
	'Class:Project/Attribute:calculated_end_date' => 'Latest deliverable end date',
	'Class:Project/Attribute:calculated_end_date+' => 'Take the latest deliverable date',
	'Class:Project/Attribute:caller_id' => 'Sponsor',
	'Class:Project/Attribute:constraints' => 'Omezení',
	'Class:Project/Attribute:creation_date' => 'Vytvořeno dne',
	'Class:Project/Attribute:description' => 'Popis',
	'Class:Project/Attribute:estimated_budget' => 'Odhadovaný rozpočet',
	'Class:Project/Attribute:exclusions' => 'Výjimky',
	'Class:Project/Attribute:contacts_list' => 'Zúčastněné strany',
	'Class:Project/Attribute:contacts_list+' => 'Všechny kontakty zapojené do projektu',
	'Class:Project/Attribute:projectchanges_list' => 'Změny projektu',
	'Class:Project/Attribute:projectchanges_list_displaybare' => 'Změna projektu neuzavřená ani zamítnutá, spojená s neuzavřeným výstupem',
	'Class:Project/Attribute:status' => 'Stav',
	'Class:Project/Attribute:status/Value:cancelled' => 'Zrušen',
	'Class:Project/Attribute:status/Value:closed' => 'Uzavřen',
	'Class:Project/Attribute:status/Value:executed' => 'Probíhá',
	'Class:Project/Attribute:status/Value:initiated' => 'Zahájen',
	'Class:Project/Attribute:status/Value:monitored' => 'Sledování',
	'Class:Project/Attribute:status/Value:planned' => 'Plánování',
	'Class:Project/Attribute:team_id' => 'Projektový tým',
	'Class:Project/Attribute:title' => 'Název',
	'Class:Project/Attribute:wbs_cost' => 'Náklady na výstupy',
	'Class:Project/Attribute:wbs_costs' => 'Náklady na výstupy',
	'Class:Project/Attribute:wbss_list' => 'Výstupy',
	'Class:Project/Attribute:tickets_list' => 'Související tikety',
	'Class:Project/Attribute:wbss_list_displaybare' => 'Neuzavřené (nedodané) výstupy',
	'Class:Project/Attribute:requirement' => 'Požadavky',
	'Class:Project/Attribute:org_id' => 'Zákazník',
	'Class:Project/Name' => '%1$s %2$s',
	'Class:Project/Stimulus:ev_cancel' => 'Zrušit projekt',
	'Class:Project/Stimulus:ev_close' => 'Uzavřít',
	'Class:Project/Stimulus:ev_execute' => 'Zahájit',
	'Class:Project/Stimulus:ev_monitor' => 'Sledovat',
	'Class:Project/Stimulus:ev_monotir' => 'Sledovat',
	'Class:Project/Stimulus:ev_plan' => 'Plánovat',
	'Class:Project/Stimulus:ev_reexecute' => 'Znovu spustit',
	'Class:Project/Tab:Summary' => 'Souhrn',
	'Class:Project/Tab:Summary+' => 'Shrnutí aktuálního projektu',
	'Class:Project:Display:delivrables_costs' => 'Náklady na všechny výstupy',
	'Class:Project/Attribute:revised_end_date' => 'Revidované datum ukončení',
	'Class:Project/Attribute:mgt_reserve_budget' => 'Rozpočet rezervy na hospodaření',
	'Class:Project/Attribute:mgt_reserve_budget+' => 'Částka rozpočtu vyhrazená pro správu a neznámé/neznámé události',
	'Class:Project/Attribute:gant_wbs' => 'Gantt',
    'Class:Project/Attribute:project_completion' => 'Dokončení projektu',
    'Class:Project/Attribute:project_completion+' => 'Průměrné dokončení (dodání) všech výstupů',
	'Class:Project:Summary_costs' => 'Nákladové informace',
	'Class:Project:Summary_general' => 'Obecné informace',
	'Project:Budget' => 'Rozpočet',
	'Project:Contacts' => 'Kontakty',
	'Project:Costs' => 'Náklady',
	'Project:Dates' => 'Termíny',
	'Project:Details' => 'Podrobnosti',
	'Project:Error:EndDateMustBeGreaterThanStartDate' => 'Datum ukončení musí být vyšší než datum zahájení',
	'Project:Error:ProjectEndDateMustBeGreaterThanWBSEndDate' => 'Datum ukončení projektu musí být vyšší než datum dodání posledního výstupu',
	'Project:GeneralInfo' => 'Informace',

	'Menu:MyProject' => 'Moje projekty',
	'Menu:MyProject+' => 'Projekty, které spravuji',
	'Menu:NewProject' => 'Nový projekt',
	'Menu:Overview' => 'Přehled',
	'Menu:Project:Overview' => 'Přehled',
	'Menu:ProjectChangeMenu' => 'Změna projektu',
	'Menu:ProjectManagement' => 'Projekty',
	'Menu:ProjectMenu' => 'Projekt',
	'Menu:SearchProject' => 'Vyhledat projekt',

	'UI:AddLinkedObjectsOf_Class' => 'Přidat %1$s objektů...',
	'UI:ProjectMgmtMenuOverview:Title' => 'Dashboard',
	'UI-IssueManagementOverview-OpenIssueByProject' => 'Otevřené problémy dle projektu a zákazníka',
	'UI-ProjectManagementOverview-Last-12Months' => 'Projekty za posledních 12 měsíců (dle data zahájení)',
	'UI-ProjectManagementOverview-Last-3Months' => 'Projekty za poslední 3 měsíce (dle zákazníka)',
	'UI-ProjectManagementOverview-OpenProjectByStatus' => 'Otevřené projekty (dle stavu)',

	'Class:Project/CreateDeliverable' => 'Vytvořit výstup',
	'Class:Project/CreateDeliverableForm' => 'Vytvořit výstup z %1$s',
	'Class:Project/ReportLabel' => 'Vytvořeno z %1$s',
	'Class:Project/DuplicateProject' => 'Duplikovat projekt',
	'Class:Project/DuplicateProjectForm' => 'Duplikovat projekt z %1$s',
	'Class:Ticket/Attribute:related_project' => 'Související projekt',
	'Class:Ticket/Attribute:related_project_id' => 'ID souvisejícího projektu',

));


// WBS class
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Class:WBS' => 'Výstup',
	'Class:WBS/Attribute:acceptance' => 'Schvalovací kritéria',
	'Class:WBS/Attribute:available_budget' => 'Dostupný rozpočet',
	'Class:WBS/Attribute:completion' => '% hotovo',
	'Class:WBS/Attribute:contacts_list' => 'Zúčastněné strany',
	'Class:WBS/Attribute:contacts_list_proj_displaybare' => 'Zúčastněné strany spojené s projektem',
	'Class:WBS/Attribute:contacts_list_wbs_displaybare' => 'Zúčastněné strany spojené s otevřenými výstupy',
	'Class:WBS/Attribute:contacts_list+' => 'Všechny kontakty související s výstupy',
	'Class:WBS/Attribute:delay' => 'Zpoždění',
	'Class:WBS/Attribute:description' => 'Popis',
	'Class:WBS/Attribute:end_date' => 'Požadované datum ukončení',
	'Class:WBS/Attribute:freetime' => 'Od nynějška do data ukončení',
	'Class:WBS/Attribute:labor_cost' => 'Mzdové náklady',
	'Class:WBS/Attribute:material_cost' => 'Materiálové náklady',
	'Class:WBS/Attribute:name' => 'Název',
	'Class:WBS/Attribute:project_id' => 'Projekt',
	'Class:WBS/Attribute:re_estimated_end_date' => 'Plánované datum ukončení',
	'Class:WBS/Attribute:re_estimated_start_date' => 'Plánované datum zahájení',
	'Class:WBS/Attribute:ref' => 'Ref',
	'Class:WBS/Attribute:start_date' => 'Požadované datum zahájení',
	'Class:WBS/Attribute:status' => 'Stav',
	'Class:WBS/Attribute:status/Value:cancel' => 'Zrušeno',
	'Class:WBS/Attribute:status/Value:closed' => 'Dokončeno',
	'Class:WBS/Attribute:status/Value:pending_parent' => 'Čekající nadřazený výstup',
	'Class:WBS/Attribute:status/Value:running' => 'Probíhá',
	'Class:WBS/Attribute:status+' => 'Stav WBS',
	'Class:WBS/Attribute:technical_info' => 'Technické informace',
	'Class:WBS/Attribute:time_planned' => 'Plánovaný čas',
	'Class:WBS/Attribute:wbs_budget' => 'Rozpočet',
	'Class:WBS/Attribute:wbs_cost' => 'Celkové náklady',
	'Class:WBS/Attribute:wbs_log' => 'Protokol výstupů',
	'Class:WBS/Attribute:wbs_owner_id' => 'Vlastník',
	'Class:WBS/Attribute:wbs_real_costs' => 'WBS skutečné náklady',
	'Class:WBS/Attribute:wbss_child_list' => 'Podřízené výstupy',
	'Class:WBS/Attribute:wbss_parent_list' => 'Nadřazené výstupy',
	'Class:WBS/Name' => '%1$s-%2$s',
	'Class:WBS/Stimulus:ev_cancel' => 'Zrušit výstup',
	'Class:WBS/Stimulus:ev_closed' => 'Dokončeno',
	'Class:WBS/Stimulus:ev_reopen' => 'Znovu otevřít',
	'Class:WBS/Stimulus:ev_running_admin' => 'Aktivovat podřízený úkol',
	'Class:WBS+' => 'Seznam výstupů Work Breakdown Structure',
	'WBS:Cost' => 'Náklady',
	'WBS:Dates' => 'Termíny',
	'WBS:Error:ParentCantBeChildren' => 'Nemůžete být svým vlastním nadřízeným výstupem',
	'WBS:Execution' => 'Probíhá',
	'WBS:Info' => 'Informace',
	'Class:WBS/Error:Contactnotfound' => '%1$s není definován jako zainteresovaná strana související s projektem. Je třeba ho nejdříve přidat.',

	'Class:lnkWBSToWBS' => 'Spojit podřízené WBS s nadřízeným WBS',
	'Class:lnkWBSToWBS/Attribute:child_wbs_id' => 'Podřízený výstup',
	'Class:lnkWBSToWBS/Attribute:parent_wbs_id' => 'Nadřízený výstup',
	'Class:lnkWBSToWBS/Attribute:wbs_id' => 'Nadřízený výstup',
	'Class:lnkWBSToWBS/Name' => '%1$s - %2$s',

	'Menu:MyWBS' => 'Moje výstupy',
	'Menu:MyWBS+' => 'WBS které vlastním',
	'Menu:NewWBS' => 'Nový výstup',
	'Menu:WBSMenu' => 'Výstupy',
	'Menu:SearchWBS' => 'Vyhledat výstup',
	'UI-WBSManagementOverview-OpenWBSByProject' => 'Otevřené výstupy (dle projektu)',
));


//
// Class: Ticket
//

Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Class:Ticket/Attribute:related_project_ref' => 'Ref souvisejícího projektu',
	'Class:Ticket/Attribute:related_project_ref+' => 'Reference na související projekt',
));

//
// Class: WBS
//

Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Class:WBS/Stimulus:ev_pending_parent' => 'Čekající nadřazený',
	'Class:WBS/Stimulus:ev_pending_parent+' => '',
	'Class:WBS/Stimulus:ev_running' => 'Probíhá',
	'Class:WBS/Stimulus:ev_running+' => '',
));

//
// Class: lnkWBSToWBS
//

Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Class:lnkWBSToWBS/Attribute:child_start_date' => 'Datum zahájení podřízeného',
	'Class:lnkWBSToWBS/Attribute:child_start_date+' => '',
	'Class:lnkWBSToWBS/Attribute:child_end_date' => 'Datum ukončení podřízeného',
	'Class:lnkWBSToWBS/Attribute:child_end_date+' => '',
	'Class:lnkWBSToWBS/Attribute:parent_start_date' => 'Datum zahájení nadřízeného',
	'Class:lnkWBSToWBS/Attribute:parent_start_date+' => '',
	'Class:lnkWBSToWBS/Attribute:parent_end_date' => 'Datum ukončení nadřízeného',
	'Class:lnkWBSToWBS/Attribute:parent_end_date+' => '',
));

//
// Class: lnkContactToWBS
//

Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Class:lnkContactToWBS/Attribute:project_id' => 'ID projektu',
	'Class:lnkContactToWBS/Attribute:project_id+' => '',
));
