<?php

class Livre
{
    private $titre;
    private $NbPages;
    private $annee;
    private $prix;
    private $auteur;

    function __construct($titre, $NbPages, $annee, $prix, $auteur)
    {
        $this->titre = $titre;
        $this->NbPages = $NbPages;
        $this->annee = $annee;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $auteur->ajouterLivre($this);
    }
    public function __toString()
    {
        return $this->titre . " (" . $this->annee . ") : " . $this->NbPages . " pages / " . $this->prix . "€";
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNbPages()
    {
        return $this->NbPages;
    }

    public function setNbPages($NbPages)
    {
        $this->NbPages = $NbPages;

        return $this;
    }
    public function getAnnee()
    {
        return $this->annee;
    }

    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }
}
