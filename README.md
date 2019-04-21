<h1>Projet auv3base - Tuto Symfony 4.2</h1>

<h2>Préparation de l’environnement</h2>

<h3>Les logiciels nécessaires</h3>

Que vous soyez dans un environnement linux, osx ou windows, vous aurez besoin des mêmes types de logiciels :

* Un logiciel permettant d’émuler un serveur web (wamp, uwamp, amp..) <http://www.wampserver.com/>
* Un logiciel IDE, un environnement de développement (Visual studio code) <https://code.visualstudio.com/>

1 - Création du projet Symfony
==

Installation de Symfony
-

Par le biais de l’installeur de symfony : 


    symfony new --full auv3base

Par le biais de composer :


    composer create-project symfony/website-skeleton auv3base

Création et configuration de la base de données
-

Vous pouvez créer la base de données par le biais de phpMyAdmin en choisissant le chartype en utf8-general_ci. Pour cette exemple, on va nommer la base de données auv3base.
Dans symfony 4, la configuration de l’environnement est stockée dans le fichier .env à la racine du projet : 


    DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name

Modifier en fonction du nom utilisateur (db_user), du mot de passe (db_password) et du nom de la base de données (db_name)

2 - Le controleur principal
==

Utilisation d'AbstractController
-

Création du fichier MainController.php dans le dossier src/Controller du projet avec le namespace App\Controller.<br />
On utilisera les annotations pour définir les routes "use Symfony\Component\Routing\Annotation\Route;"


    /**
    * @Route("/", name="home") ("chemin de l'url", "nom de la route")
    */


Toutes les actions retournent un objet Response "use Symfony\Component\HttpFoundation\Response;"<br />
Étendre AbstractController permet d'avoir directement accès aux services du container (twig, doctrine...)


    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    class MainController extends AbstractController
    {
        /**
        * @Route("/", name="home")
        */
        public function index(): Response
        {
            return $this->render('main/index.html.twig');
        }
    }


Les templates Twig
-
