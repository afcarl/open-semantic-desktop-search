<?php

//
// Show debug infos
//
$cfg['debug'] = false;


//
// Language
//

// English
//$cfg['language'] = 'en';

// German / Deutsch
$cfg['language'] = 'de';



//
// Solr Host, Port and path / core
//

// default: localhost:8983/solr/

// $cfg['solr']['host'] = 'localhost';
// $cfg['solr']['port'] = 8983;
// $cfg['solr']['path'] = '/solr';
$cfg['solr']['core'] = 'core1';

//
// Additional facets (f.e. fields imported by some connector which should be shown in the sidebar)
//
// $cfg['facets']['yourfacet_s'] = array ('label'=>'Additional own facet');
// $cfg['facets']['anotherfacet_s'] = array ('label'=>'Another additonal facet');


//
// show admin link?
//
// default solr admin uri
$cfg['solr']['admin']['uri'] = 'http://' . $cfg['solr']['host'] . ':' . $cfg['solr']['port'] . $cfg['solr']['path'];

// if your solr admin uri is not the same like the uri of your solr server, change here
// $cfg['solr']['admin']['uri'] = 'https://sslproxy.localdomain/solr/';

// no link to admin interface
// $cfg['solr']['admin']['uri'] = false;


//
// Annotation Tool
//

// URI to the metadata wiki
//$cfg['metadata']['server'] = 'http://localhost/metawiki/index.php/Special:FormEdit/Meta/';

// URI to open semantic search tagger
$cfg['metadata']['server'] = '/search-apps/annotate/edit?uri=';


//
// If no query, show newest documents
//

// if set to false only search form will be shown before search query input
$cfg['newest_on_empty_query'] = true;

//
// Preview
//
// Set to false, if you have not the copyrhight to show the complete content in preview
$cfg['preview_allowed'] = true;

?>