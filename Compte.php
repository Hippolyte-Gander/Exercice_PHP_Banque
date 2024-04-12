<?php

class Compte {
    private int $titulaire;
    private string $libelle;
    private string $devise;
    private int $soldeInitial;
    private int $soldeActuel;

    public function __construct(int $titulaire, string $libelle, int $soldeInitial, string $devise) {
        $this->titulaire = $titulaire;
        $this->libelle = $libelle;
        $this->devise = $devise;
        $this->soldeInitial = $soldeInitial;
        $this->soldeActuel;
    }
    
    public function __toString() {

    }

    // Créditer de l'argent
    public function crediter() {
        
    }


    // Débiter de l'argent

    


    
    // Début des Getter and Setter---------------
    public function getTitulaire(): int
    {
        return $this->titulaire;
    }
    
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;
        
        return $this;
    }
    
    public function getLibelle(): string
    {
        return $this->libelle;
    }
    
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
        
        return $this;
    }
    
    public function getDevise(): string
    {
        return $this->devise;
    }
    
    public function setDevise($devise)
    {
        $this->devise = $devise;
        
        return $this;
    }
    
    public function getSoldeInitial(): int
    {
        return $this->soldeInitial;
    }
    
    public function setSoldeInitial($soldeInitial)
    {
        $this->soldeInitial = $soldeInitial;
        
        return $this;
    }
    
    public function getSoldeActuel(): int
    {
        return $this->soldeActuel;
    }
    
    public function setSoldeActuel($soldeActuel)
    {
        $this->soldeActuel = $soldeActuel;
        
        return $this;
    }
    // Fin des Getter and Setter---------------
}

?>