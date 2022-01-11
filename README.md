# chatForum - Gestion Hopital
 Un chatForum qui permettra des conversations entre les utilisateurs du système de gestion hospitalière en cours de développement. Les patients pourront poster leurs problèmes et recevoir des réponses de professionnels de la santé. Les patients pourront également partager leurs expériences via le forum. Ce module sera ajouté au projet original qui se trouve sur github ici : "https://github.com/Kiengo12/projetGL.git"  Traduit avec www.DeepL.com/Translator (version gratuite)

Procédure de déploiement :
Télécharger le code complet dans un fichier zip sur votre PC. 
Faites extraire ce fichier rar dans un autre fichier de votre PC, puis lancer la commande prompte. 
Ensuite, faite “cd” vers le fichier contenant le code, et lancer le serveur Laravel, en saisissant la commande “php artisan serve.”
Copier l’adresse du serveur qui sera afficher sur votre fenêtre commande prompt, cet a dire le “http//127…” et coller cette adresse sur votre navigateur. Ce si vous donnera accès a notre interface.
NB : attacher à ce document est un fichier SQL, qui contient la base de données construit a base de MySQL. Faites importez cette base de données dans votre serveur local ; XAMPP ou WAMPP.
Lancer une autre fenêtre commande prompt, cd vers le projet GL, et saisissez la commande :
“php artisan migrate”
Ceci permettra la communication avec la base de données.
