<?php

namespace App\Controller;

use App\Entity\Article;
use App\Helpers\EntityManagerHelper;
use App\Models\AbstractRepository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class ArticleController
{

    const NEEDLES = [
        "title",
        "resume",
        "author",
        "editor",
        "isbnNum",
        "note"
    ];

    public function index()
    {
        echo "Hello";
    }

    public function addArticle()
    {
        if (!empty($_POST)) {
            foreach (self::NEEDLES as $value) {
                if (!array_key_exists($value, $_POST)) {
                    echo "Il manque des champs à remplir";
                    include("./src/Views/Article.php");
                    exit;
                }

                $_POST[$value] = htmlentities(strip_tags($_POST[$value]));
            }

            $isbnNum = (int) $_POST["isbnNum"];
            $note = (int) $_POST["note"];

            $article =  new Article($_POST["title"], $_POST["resume"], $_POST["author"], $_POST["editor"], $isbnNum, $note);

            $entityManager = EntityManagerHelper::getEntityManager();
            $entityManager->persist($article);
            
            try {
                $entityManager->flush();
                echo 'article ajouté';
            } catch (\Throwable $th) {
                exit("Livre déjà ajouté");
            }
        }

        // include("./src/Views/Article.php");
    }


    public function showArticles()
    {
        $entityManager = EntityManagerHelper::getEntityManager();
        $articleRepo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Article"));

        $aArticles = $articleRepo->findAll();

        include("./src/Views/afficherArticles.php");
    }


    public function modifyArticle(string $id)
    {
        $entityManager = EntityManagerHelper::getEntityManager();
        $articleRepo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Article"));

        $article = $articleRepo->find($id);

        include("./src/Views/modifyArticle.php");

        if (!empty($_POST)) {
            foreach (self::NEEDLES as $value) {
                if (!array_key_exists($value, $_POST)) {
                    echo "Il manque des champs à remplir";
                    include("");
                    exit;
                }

                $_POST[$value] = htmlentities(strip_tags($_POST[$value]));
            }

            $article->setTitle($_POST["title"]);
            $article->setResume($_POST["resume"]);
            $article->setAuthor($_POST["author"]);
            $article->setEditor($_POST["editor"]);
            $article->setIsbnNum($_POST["isbnNum"]);

            $entityManager->persist($article);
            $entityManager->flush();
        }

        include("./src/Views/modifyArticle.php");
    }


    public function deleteArticle($id)
    {
        $entityManager = EntityManagerHelper::getEntityManager();
        $articleRepo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Article"));

        $article = $articleRepo->find($id);

        $entityManager->remove($article);
        $entityManager->flush();
    }

    public function addNote()
    {
        # code...
    }
}
