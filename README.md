## Base MVC pour RecruteAnim ##


> # Important !
> **Ce MVC na pas pour but d'être partager ou être réutiliser, il est conçue pour la plateforme RecruteAnim et donc adapter a ces besoin, aucun support d'aide ne pourras être fournis si vous ne faite pas partis de la réalisation.**

### Conçu exclusivement pour RecruteAnim ###

Le créateur Angelus76 vous autorise a utiliser le MVC comme model, a le critiquer, a le conseiller ^^, ceci est sont premier MVC, il ce peut qu'il y ais pas mal de bug.

----------

### Utilisation. ###

Type de requette :
- /consulter/offres/de/56QS65SQ
- /consulter/offres/tous
- /consulter/offres/
- /consulter/profiles/de/121351-RTGDF
- /consulter/profiles/tous
- /consulter/profiles/


/consulter => Controller ( consulterController )
 
/offres => pages qui serras inclus dans le layout

/de , /tous , /  => Action  appellé dans le Controller
 

### Explication d'appelle des "Controller". ###
Les Controllers font ofice de catégorie,
Appeller le controller consulterController.php revien a appeller la categorie "consulter"

pour chaque categorie sur le site, il y auras donc 1 controller, chaque controller execute la demande de la catégorie
Ex : 
consulter/offres
consulter/profile
consulter/evenement

consulter es le controller " la categorie " (offres, profile, evenement ...) sont des pages qui serons executer par le controller

Suite a vennir.

### Explication d'appelle d' "Action". ###

A vennir.

### Explication d'appelle de "Pages". ###

A vennir.

### Explication Chargement et appelle de "Model". ###

A vennir.






----------
**Angelus76 - 26/10/2013 00:14:17 **
