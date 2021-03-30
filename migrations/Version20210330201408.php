<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210330201408 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Candidat ADD is_verified BIT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA db_accessadmin');
        $this->addSql('CREATE SCHEMA db_backupoperator');
        $this->addSql('CREATE SCHEMA db_datareader');
        $this->addSql('CREATE SCHEMA db_datawriter');
        $this->addSql('CREATE SCHEMA db_ddladmin');
        $this->addSql('CREATE SCHEMA db_denydatareader');
        $this->addSql('CREATE SCHEMA db_denydatawriter');
        $this->addSql('CREATE SCHEMA db_owner');
        $this->addSql('CREATE SCHEMA db_securityadmin');
        $this->addSql('CREATE SCHEMA dbo');
        $this->addSql('DROP TABLE candidat_postule');
        $this->addSql('DROP TABLE offreresearch');
        $this->addSql('ALTER TABLE Candidat DROP COLUMN is_verified');
        $this->addSql('ALTER TABLE Client ALTER COLUMN VilleIdentifiant INT NOT NULL');
        $this->addSql('ALTER TABLE Contact ALTER COLUMN Identifiant INT NOT NULL');
        $this->addSql('ALTER TABLE Erreur ALTER COLUMN Identifiant INT NOT NULL');
        $this->addSql('ALTER TABLE Metier ALTER COLUMN IdentifiantDomaine INT NOT NULL');
        $this->addSql('ALTER TABLE Offre ALTER COLUMN IdentifiantContrat INT NOT NULL');
        $this->addSql('ALTER TABLE Offre ALTER COLUMN IdentifiantMetier INT NOT NULL');
        $this->addSql('ALTER TABLE Offre ALTER COLUMN Localisation INT NOT NULL');
        $this->addSql('ALTER TABLE OffreClient ALTER COLUMN IdentifiantClient INT NOT NULL');
        $this->addSql('ALTER TABLE OffreClient ALTER COLUMN IdentifiantOffre INT NOT NULL');
        $this->addSql('ALTER TABLE Postule ALTER COLUMN IdentifiantCandidat INT NOT NULL');
        $this->addSql('ALTER TABLE Postule ALTER COLUMN IdentifiantOffre INT NOT NULL');
        $this->addSql('ALTER TABLE Ville ALTER COLUMN IdentifiantPays INT NOT NULL');
    }
}
