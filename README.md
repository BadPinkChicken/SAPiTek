# SAPiTek
School Intranet little API next line are in French because this project concern a French school.
Ce projet se base sur les URLs de https://gist.github.com/Cylix/d73c6b4cada15e3c337b .

##### Je ne suis pas responsable de l'utilisation que vous faites de ce code (même si il n'est pas dangereux).

#### Description
Le but de ce projet est de fournir une lib permetant de récuperer facilement des informations sur l'intra.
Il sera (ou pas) amélioré au fil du temps en fonctions des besoins.
J'ai déliberément omis de gerer les forums car ils ne sont plus trop utilisés.

#### Utilisation

SAPitek est composé de 3 éléments :

* `Epicon.php ` qui contient les élements de connection

* `Request.php` qui contient les éléments de requettes

* `SAPiTek.php` qui contient les appels aux fonctions deux classe précédentes

##### La classe SAPiTek gère toute seule les requettes et la connection mais il est possible de passer outre.

#### Exemple d'utilisation :

Je souhaite récuperer mes messages , mes Projets ainsi que les information de L'utilisateur bar_f

```
$login = MON_LOGIN;
$password =  MON_PASSWORD;

$Sapi = new SapiTek($login, $password);

$messages = $Sapi->getMessage();
$projets = $Sapi->getProjets();
$user_info = $Sapi->getUserInfos("bar_f");
```

#### Liste des fonctions principales:

Les fonctions appartiennent toute a la classe SAPiTek :
(toutes les fonctions retournent un Array la pluspart du temps. Man php var_dump pour plus d'info sur leur contenu)

- date -> 'date'
- image -> 'image'
- titre -> 'title'
- categorie -> 'category'
- lieux -> 'placement'
- prix -> 'price'
