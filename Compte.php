<?php

class Compte {
    private Client $titulaire;
    private string $libelle;
    private string $devise;
    private float $soldeInitial;
    private float $soldeActuel;

    public function __construct(Client $titulaire, string $libelle, float $soldeInitial, string $devise) {
        $this->titulaire = $titulaire;
        $this->titulaire->ajoutCompte($this);
        $this->libelle = $libelle;
        $this->devise = $devise;
        $this->soldeInitial = $soldeInitial;
        $this->soldeActuel = $soldeInitial;
    }
    
    public function __toString() {
        return $this->titulaire;
    }

    // Créditer de l'argent
    public function crediter($crediter) {
        if ($crediter > 0) {
            $this->soldeActuel = $this->soldeActuel + $crediter;
            return $crediter . " " . $this->devise . " ont été crédité au compte " . $this->libelle . "<br>";
        } else {
            return "Veuillez entrer une somme positive";
        }
    }

    // Débiter de l'argent
    public function debiter($debiter) {
        if ($debiter > $this->soldeActuel) {
            return "Solde du compte insuffisant<br>";
        } elseif ($debiter > 0) {
            $this->soldeActuel = $this->soldeActuel - $debiter;
            return $debiter . " " . $this->devise . " ont été débité du compte " . $this->libelle . "<br>";
        } else {
            return "Veuillez entrer une somme valide";
        }
    }

    // Virer de l'argent
    public function virerArgent($comptedebit, $sommeavirer){
        if ($comptedebit->soldeActuel < $sommeavirer) {
            return "Solde du compte à débiter insuffisant<br>";
        }else {
            $comptedebit->soldeActuel = $comptedebit->soldeActuel - $sommeavirer;
            $this->soldeActuel = $this->soldeActuel + $sommeavirer;
            return "Virement de " . $sommeavirer . " " . $comptedebit->devise . " du compte '" . $comptedebit->libelle . "' de " . $this . " vers le compte '" . $this->libelle . "' de " . $this . "<br>";
            }
    }

    // obtenir libelle du compte
    public function getlibelleCompte(){
        return $this->libelle;
    }

    // Infos du compte
    public function getInfoCompte(){
        return "Le compte '". $this-> libelle . "' de " . $this->titulaire . " a actuellement " . $this->soldeActuel . " Euros <br>";
    }

    // Début des Getter and Setter---------------
    public function getTitulaire()
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
    
    public function getSoldeInitial(): float
    {
        return $this->soldeInitial;
    }
    
    public function setSoldeInitial($soldeInitial)
    {
        $this->soldeInitial = $soldeInitial;
        
        return $this;
    }
    
    public function getSoldeActuel(): float
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