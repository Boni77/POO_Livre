<?php

class Auteur
{
    private $nom;
    private $prenom;
    private $livres;

    function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->_livres = [];
    }

    public function ajouterLivre(Livre $_livre)
    {
        $this->_livres[] = $_livre;
        // array_push($this->_livres, $livre);
    }

    public function afficherLivres()
    {
        echo "Les livres de $this sont :<br/><ul>";
        foreach ($this->_livres as $livre) {
            echo "<li>$livre</li>";
        }
        echo "</ul>";
    }



    public function __toString()
    {
        return $this->nom . " " . $this->prenom . "";
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
}
