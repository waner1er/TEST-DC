# TEST-DC
Un test laravel Dernier Cri

Pour démarrer le projet installer une bdd en local et lancer un composer install puis un yarn install + yarn dev .
ensuite lancer la commmande php artisan key:generate pour reconstruire les clés de salage du projet 

1. Installation d'un laravel clean 
2. ajout d'une bdd Mysql 
3. rédaction du .env 
4. implémentation de jetstream pour faciliter une implémentation de livewire avdec des layouts rédigé et un tailwind coniguré (plus rapide pour l'exercice)
5.Backend
    - Un model News (php artisan mak: model News)
    - Un Controler NewsController avec 2 méthodes 
           • un "index()" qui permettra de retourner la vue de base de l'app
           • un fetch qui retourera la response en json de l'API choisie 
    - une migration pour recréer les chmaps des données obtenue dans l'API en BDD 
    - Ajout des $fillable dans le model 
    - Création de la commande console "importNews" pour remplir la bdd avec 20 articles de l'API
    - creation des routes   
        • web : route / du controller Livewire "NewsApp" pour une route singleApp 
        • API : route /news pour retourner la response de l'API (pas utilisée finalement) 
6. Frontend
    - implementation de Livewire sur le layout principal    
    - création du controller Livewire NewsApp 
    - une méthode render renvoie la liste de tous les articles importés
    - un showArticle() renvoie a l'article cliqué
    - un Toggle()  pour permettre de modifier le DOM entre la liste des articles et l'article cliqué
    
    - création d'ue vue newsApp appelée dans l'index des news 
    - un foreach permet de visualiser les articles avec image, titre et description     
    - un wire click toggle le DOM et bascule sur une div contentnat l'article selcetionné

Pour améliorer le projet, un CRON pourrait être mis en place afin d'importer les articles récents une fois par jour (par exemple) et peut etre mettre en archive autant de plus anciennes news que de nouvelles importées  
