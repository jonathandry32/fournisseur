-- Création de la table Entreprises
CREATE TABLE Entreprises (
    idEntreprise SERIAL PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    telephone VARCHAR(20),
    adresse TEXT
);

-- Création de la table Produits
CREATE TABLE Produits (
    idProduit SERIAL PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    unite VARCHAR(50),
    prix NUMERIC(10,2)
);

-- Création de la table Stocks
CREATE TABLE Stocks (
    idStock SERIAL PRIMARY KEY,
    idProduit INT REFERENCES Produits(idProduit),
    quantite DOUBLE PRECISION,
    prixUnitaire DOUBLE PRECISION,
    type VARCHAR(50)
);
