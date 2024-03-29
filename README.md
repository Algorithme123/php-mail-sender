# php-mail-sender


# Projet d'Envoi d'Email avec PHP et PHPMailer



Ce projet consiste en un formulaire de contact simple qui permet aux utilisateurs de soumettre leur nom, leur adresse e-mail et leur message. Une fois le formulaire soumis, les données sont traitées côté serveur avec PHP et envoyées par e-mail à une adresse spécifiée à l'aide de PHPMailer, une bibliothèque PHP populaire pour l'envoi d'e-mails.

## Fonctionnalités

- Formulaire de contact avec champs pour le nom, l'e-mail et le message.
- Validation minimale des données côté client avec HTML5.
- Traitement des données côté serveur avec PHP.
- Utilisation de PHPMailer pour envoyer l'e-mail avec les données du formulaire.

## Instructions d'Installation

1. Clonez ce dépôt sur votre machine locale.
2. Assurez-vous d'avoir un serveur web avec PHP installé.
3. Configurez les détails de votre serveur SMTP dans le fichier `traitement.php`.
4. Assurez-vous que les dépendances PHPMailer sont installées.

## Comment Utiliser

1. Ouvrez le fichier `index.php` dans votre navigateur.
2. Remplissez le formulaire avec votre nom, votre e-mail et votre message.
3. Appuyez sur le bouton "Envoyer".
4. Un message de confirmation s'affichera si l'e-mail est envoyé avec succès, sinon une erreur sera affichée.

## Structure du Projet

- `index.php`: Contient le formulaire de contact HTML.
- `traitement.php`: Script PHP pour traiter les données du formulaire et envoyer l'e-mail via PHPMailer.
- `PHPMailer/`: Dossier contenant les fichiers de la bibliothèque PHPMailer.

## Remarque

Assurez-vous de configurer correctement les paramètres SMTP dans `traitement.php` pour que l'envoi d'e-mail fonctionne correctement. De plus, pour des raisons de sécurité, évitez de stocker les informations sensibles comme les mots de passe en clair dans votre code. Utilisez plutôt des variables d'environnement ou des méthodes de stockage sécurisé.
