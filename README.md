# SAPiTek
School Intranet little API next lines are in French because this project concern a French school.
Ce projet se base sur les URLs de https://gist.github.com/Cylix/d73c6b4cada15e3c337b .

##### Je ne suis pas responsable de l'utilisation que vous faites de ce code (même si il n'est pas dangereux).

#### Description
Le but de ce projet est de fournir une lib permettant de récupérer facilement des informations sur l'intra.
Il sera (ou pas) amélioré au fil du temps en fonctions des besoins.
J'ai délibérément omis de gérer les forums car ils ne sont plus trop utilisés.

#### Utilisation

SAPitek est composé de 3 éléments :

* `Epicon.php ` qui contient les éléments de connexion

* `Request.php` qui contient les éléments de requêtes

* `SAPiTek.php` qui contient les appels aux fonctions deux classe précédentes

##### La classe SAPiTek gère toute seule les requêtes et la connexion mais il est possible de passer outre.

#### Exemple d'utilisation :

Je souhaite récupérer mes messages, mes Projets ainsi que les informations de L'utilisateur bar_f :

```
$login = MON_LOGIN;
$password =  MON_PASSWORD;

$Sapi = new SapiTek($login, $password);

$messages = $Sapi->getMessage();
$projets = $Sapi->getProjets();
$user_info = $Sapi->getUserInfos("bar_f");
```

Je souhaite récupérer les modules de bar_f ainsi que mes modules :

```
$login = MON_LOGIN;
$password =  MON_PASSWORD;

$Sapi = new SapiTek($login, $password);

$modules_user = $Sapi->getUserModules("bar_f");
$mes_modules = $Sapi->getCurrent();

```

#### Liste des fonctions principales:

Les fonctions appartiennent toute à la classe SAPiTek :
(Toutes les fonctions retournent un Array la plupart du temps. Man PHP var_dump pour plus d'info sur leur contenu)
Les noms sont ultra Explicit mais bon.

##### Chaque appel ce fait avec `$Sapi->getNOM_DE_LA_FONCTION();`

  - `getModules()`
      Récupère les modules de la personne connectée

  - `getProjets()`  
      Récupère les projets de la personne connectée

  - `getNotes()`
      Récupère les notes de la personne connectée

  - `getSusies()`
      Récupère les susies (Plus d'actualité ?)

  - `getActivites()`
      Récupère les activités dispos

  - `getStages()`
      Récupère les infos concernant les stages en cours

  - `getTickets()`
      Récupère les Tickets Bocal de la personne connectée

  - `getHistory()`
      Récupère l'historique des informations

  - `getInfos()`
      Récupère les infos de la personne connectée

  - `getCurrent()`
      Récupère les modules/crédits de la personne connectée

  - `getRDV()`
      Récupère les Rendez-Vous de la personne connectée

  - `getMessage()`
      Récupère les messages de la personne connectée

  - `getAlert()`
      Récupère les alertes de la personne connectée

  - `getUserInfos($login)`
      Récupère les infos de `$login`

  - `getUserModules($login)`
      Récupère les modules de `$login`

  - `getUserNetsoul($login)`
      Récupère les logs Netsoul de `$login`
