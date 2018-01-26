# GraphQL 
  **les architectures REST ne sont pour autant pas parfaitement adaptées à tous les usages et ne peuvent pas facilement répondre à toutes les problématiques car :
  
1. REST est tout ou rien. Si vous requêtez un objet vous aurez spontanément tous les champs de l'objet ou rien,

2. REST oblige souvent à enchainer plusieurs appels pour obtenir les données souhaitées,

3. REST n'est pas fait pour gérer facilement les relations entre objets,

4. REST est statique, vous obtenez la réponse que le développeur de l'application a décidé de définir,

5. REST impose des échanges entre développeurs afin que les API REST implémentées puissent convenir à tous les projets,

6. REST n'est d'aucune aide pour vous garantir le type des données échangées.

## qu'est-ce que GraphQL ?

* Créé par Facebook en 2012 qui avait commencé à l’utiliser pour ses propres besoins,  les sources de ce projet en été libéré en 2015. 
* GraphQL est avant tout un langage d'interrogation comme le SQL, où le format de la requête est le même que celui de la réponse. 
![Exemple d'une requete 
](https://screenshots.firefox.com/BslvE5Nbvht8BJyi/yedsdg.ttdev)

## Graphql for backend developer

	" Pour utulisé GraphQl il faut  définir le modèle de donnés ,"
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

GraphQL met à disposition l’objet GraphQLScalarType qui permet de créer des types plus complexes et personnalisés que ceux proposés par défaut pour notre projet  .
Liste des Types mise a disposition 

 - ID [GraphQLID](http://graphql.org/graphql-js/type/#graphqlid)
 - BOOLEAN[GraphQLBoolean](http://graphql.org/graphql-js/type/#graphqlboolean) 
 - INT [GraphQLInt](http://graphql.org/graphql-js/type/#graphqlint)
 - FLOAT [GraphQlFloat](http://graphql.org/graphql-js/type/#graphqlfloat)
 - STRING [GraphQLString](http://graphql.org/graphql-js/type/#graphqlstring)
 - LIST [GraphQLList](http://graphql.org/graphql-js/type/#graphqllist)
 
 >   **Implimentation des Images et des fichiers** 	
 

## Conclusion
L’implémentation de GraphQL Dans notre projet XXX est simple à prendre en main et les performances du langage permettent de construire une API performante.

## Ressources
 - https://symfony.fi/entry/adding-a-graphql-api-to-your-symfony-flex-app
 -  http://graphql.org/learn/   
 -  http://www.astrakhan.fr/LeLab/article/Id/6-raisons-de-preferer-GraphQL-a-REST-97
