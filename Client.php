<?php

class Client {
    private int $idNat;
    private string $prenom;
    private string $nom;
    private DateTime $dateNaissance;
    private string $ville;
    private array $listeComptes;


    public function __construct(int $idNat, string $prenom, string $nom, DateTime $dateNaissance, string $ville) {
        $this->idNat = $idNat;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = $dateNaissance;
        $this->ville = $ville;
        $this->listeComptes = [];
    }
 
    public function __toString()
    {
        return $this->idNat;
    }
    
    // Ajouter nouveau compte à la liste de comptes
    public function ajoutCompte(Compte $listeComptes) {
        $this->listeComptes[] = $listeComptes;
    }

    // obtenir infos sur un titulaire

    public function getInfos(){
        
    }


    # Début des Getter and Setter----------------------------------
    public function getIdNat(): int
    {
        return $this->idNat;
    }
        
    public function setIdNat($idNat)
    {
        $this->idNat = $idNat;
        
        return $this;
    }
        
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        
        return $this;
    }
    
    public function getNom(): string
    {
        return $this->nom;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
        
        return $this;
    }
    
    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }
    
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
        
        return $this;
    }
    
    public function getVille(): string
    {
        return $this->ville;
    }
    
    public function setVille($ville)
    {
        $this->ville = $ville;
        
        return $this;
    }
    
    public function getListeComptes(): array
    {
        return $this->listeComptes;
    }
    
    public function setListeComptes($listeComptes)
    {
        $this->listeComptes = $listeComptes;
        
        return $this;
    }
    # Fin des Getter and Setter ----------------------------------
}

?>