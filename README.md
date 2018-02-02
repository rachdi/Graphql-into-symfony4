# GraphQL 
  **les architectures REST ne sont pour autant pas parfaitement adaptées à tous les usages et ne peuvent pas facilement répondre à toutes les problématiques car :
  
1. REST est tout ou rien, si vous requêtez un objet vous aurez spontanément tous les champs de l'objet ou rien.

2. REST oblige souvent à enchainer plusieurs appels pour obtenir les données souhaitées.

3. REST n'est pas fait pour gérer facilement les relations entre objets.

4. REST est statique, vous obtenez la réponse que le développeur de l'application a décidé de définir.

5. REST impose des échanges entre développeurs afin que les API REST implémentées puissent convenir à tous les projets.

6. REST n'est d'aucune aide pour vous garantir le type des données échangées.

## qu'est-ce que GraphQL ?

* Créé par Facebook en 2012 qui avait commencé à l’utiliser pour ses propres besoins,  les sources de ce projet en été libéré en 2015. 
* GraphQL est avant tout un langage d'interrogation comme le SQL, où le format de la requête est le même que celui de la réponse. 
![Exemple d'une requete 
](https://screenshots.firefox.com/BslvE5Nbvht8BJyi/yedsdg.ttdev)

## Graphql for backend developer

	" Pour utiliser GraphQl il faut  définir le modèle de donnés ,"
* Le schéma avec les objets et les types de champs,
* Les requêtes,
* Et pour chaque objet métier la source de données.
* * La source de données peut-être :
        --Une base de données relationnelle,
        --Une base NoSQL,
        --Une API REST

 `**Graphql: permet de lié les objects métiers entre eux juste en jouant sur les relations entre ces objets meme s'ils font pas partie de la meme source de données ou de technologies.**
`
----------


----------


> **GraphQL est capable de requêter un nombre inconnu d’éléments et d’y**
> **appliquer des conditions et filtres**
>


## Est ce qu'il repond a notre besoin 
GraphQL utilise l’introspection, ce qui facilite la génération de la documentation et l’autocomplétion. 
	

>  **DES TYPES PERSONNALISÉS** 

Un bundle symfony permet implémentation facile des images et des fichiers dans une API GraphQL (le paquet avec l'implémentation de GraphQL et sa documentation est ici)
ID [GraphQLFilesBundle](https://github.com/Youshido/GraphQLFilesBundle)

GraphQL met à disposition l’objet GraphQLScalarType qui permet de créer des types plus complexes et personnalisés que ceux proposés par défaut pour notre projet Foxnot .
Liste des Types mise a disposition 

 - ID [GraphQLID](http://graphql.org/graphql-js/type/#graphqlid)
 - BOOLEAN[GraphQLBoolean](http://graphql.org/graphql-js/type/#graphqlboolean) 
 - INT [GraphQLInt](http://graphql.org/graphql-js/type/#graphqlint)
 - FLOAT [GraphQlFloat](http://graphql.org/graphql-js/type/#graphqlfloat)
 - STRING [GraphQLString](http://graphql.org/graphql-js/type/#graphqlstring)
 - LIST [GraphQLList](http://graphql.org/graphql-js/type/#graphqllist)


## Query

Une Query est le type de requête possible pour la lecture. On définit le schéma côté API et le client pourra récupérer les champs qui lui sont nécessaires parmis ceux rendus disponibles dans le schéma.
On peut définir des paramètres pour la méthode :
Ex: Filtres, limites, ...

## Mutation

Une Mutation est le type de requête pour l'écriture. De la même façon, on va définir la liste des mutations disponibles avec les type d'objet en `Input`, les données demandées au client. Pour la réponse, on définit un type d'objet `Payload` qui s'utilise de la même façon qu'une Query. 
Ceci permet de faire une requête d'écriture et de demander les données que l'on souhaite en retour dans le Payload.

## Upload de Fichiers

L'upload de fichier fonctionne simplement via les requêtes `multipart/form-data`. On récupère le fichier via l'objet `Request`. 
Côté front, des libs existent aussi bien pour Apollo et Relay.
[Explications avec le bundle Symfony](https://github.com/overblog/GraphQLBundle/blob/master/Resources/doc/definitions/upload-files.md)

## Authentification

L'authentification fonctionne tout comme avec une API REST. Nous avons fait la demo avec les tokens JWT. Donc on ajoute le header `Authorization: Bearer XXXX`.

## Spécifications Relay

Le Bundle et la lib n'obligent en rien à suivre les spécifications Relay. Or, ce sont celles-ci qui sont suivies par les libs front-end (Relay et Apollo). 

[Explications sur les specifications](https://stackoverflow.com/questions/42622912/in-graphql-whats-the-meaning-of-edges-and-node)

[GraphQL Connections](https://dev-blog.apollodata.com/explaining-graphql-connections-c48b7c3d6976)

[Doc](https://facebook.github.io/relay/graphql/connections.htm)

## Simplifier la mise en place d'une API GraphQL/REST

[Api-Platform](https://api-platform.com) - La version 2.2 propose une API GraphQL simplement en ajoutant la [lib GraphQL](https://github.com/webonyx/graphql-php).
Fonctionnaltiés :
- Pagination
- Les filtres (intégrés et personnalisés)
- 100% des principales spécifications, incluant les requêtes et mutations.
- 100% de la spécification serveur relais de GraphQL (et qui est compatible avec aussi bien les clients Relay et Apollo GraphQL)
- La validation
- Les règles de contrôles d’accès
- La génération de requêtes SQL optimisées (jointures automatiques en fonction des données demandées)
- L'UI GraphiQL

Plus d'information sur [le blog de Les-tilleuls.coop](https://les-tilleuls.coop/fr/blog/article/api-platform-2-2-flex-graphql-json-api-kubernetes-et-bien-plus)
 

## Conclusion
L’implémentation de GraphQL Dans notre projet Foxnot est simple à prendre en main et les performances du langage permettent de construire une API performante.

## Ressources
 - https://symfony.fi/entry/adding-a-graphql-api-to-your-symfony-flex-app
 -  http://graphql.org/learn/   
 -  http://www.astrakhan.fr/LeLab/article/Id/6-raisons-de-preferer-GraphQL-a-REST-97

