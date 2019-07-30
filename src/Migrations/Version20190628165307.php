<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190628165307 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE asmr (id INT AUTO_INCREMENT NOT NULL, motif_evaluation VARCHAR(255) DEFAULT NULL, date_avis_ct DATE DEFAULT NULL, valeur VARCHAR(10) NOT NULL, libelle VARCHAR(255) DEFAULT NULL, lien_ct_code_dossier_has VARCHAR(255) DEFAULT NULL, specialite_id_code_cis BIGINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE composition (id INT AUTO_INCREMENT NOT NULL, element_pharmaceutique VARCHAR(255) DEFAULT NULL, code_substance VARCHAR(255) DEFAULT NULL, denomination_substance VARCHAR(255) DEFAULT NULL, dosage_substance VARCHAR(255) DEFAULT NULL, reference_dosage VARCHAR(255) DEFAULT NULL, nature_composant VARCHAR(255) DEFAULT NULL, numero_liaison INT DEFAULT NULL, specialite_id_code_cis BIGINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE condition_prescription (id INT AUTO_INCREMENT NOT NULL, condition_prescription VARCHAR(255) DEFAULT NULL, specialite_id_code_cis BIGINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE generique (id INT AUTO_INCREMENT NOT NULL, specialite_id_code_cis BIGINT NOT NULL, identifiant_groupe VARCHAR(255) DEFAULT NULL, libelle_groupe VARCHAR(255) DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, numero_tri VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE info_importante (id INT AUTO_INCREMENT NOT NULL, date_debut DATE DEFAULT NULL, date_fin DATE DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, specialite_id_code_cis BIGINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lien_ct (id INT AUTO_INCREMENT NOT NULL, code_dossier_has VARCHAR(255) NOT NULL, lien_avis_ct VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE presentation (id INT AUTO_INCREMENT NOT NULL, code_cip7 VARCHAR(7) DEFAULT NULL, code_cip13 VARCHAR(13) DEFAULT NULL, libelle VARCHAR(255) DEFAULT NULL, statut_administratif VARCHAR(255) DEFAULT NULL, etat_commercialisation VARCHAR(255) DEFAULT NULL, date_commercialisation DATE DEFAULT NULL, agrement_collectivites TINYINT(1) DEFAULT NULL, taux_remboursement INT DEFAULT NULL, prix_euros DOUBLE PRECISION DEFAULT NULL, precision_remboursement VARCHAR(255) DEFAULT NULL, specialite_id_code_cis BIGINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE smr (id INT AUTO_INCREMENT NOT NULL, motif_evaluation VARCHAR(255) DEFAULT NULL, date_avis_ct DATE DEFAULT NULL, valeur VARCHAR(255) DEFAULT NULL, libelle VARCHAR(255) DEFAULT NULL, lien_ct_code_dossier_has VARCHAR(255) DEFAULT NULL, specialite_id_code_cis BIGINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialite (id INT AUTO_INCREMENT NOT NULL, id_code_cis BIGINT NOT NULL, denomination VARCHAR(255) NOT NULL, forme_pharmaceutique VARCHAR(255) DEFAULT NULL, statut_administratif_amm VARCHAR(255) DEFAULT NULL, type_procedure_amm VARCHAR(255) DEFAULT NULL, date_amm DATE DEFAULT NULL, statut_bdm VARCHAR(255) DEFAULT NULL, numero_autorisation_euro VARCHAR(255) DEFAULT NULL, surveillance_renforcee TINYINT(1) DEFAULT NULL, etat_commercialisation VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE titulaire_specialite (id INT AUTO_INCREMENT NOT NULL, titulaire VARCHAR(255) NOT NULL, specialite_id_code_cis BIGINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voies_administration (id INT AUTO_INCREMENT NOT NULL, voies_administration VARCHAR(255) NOT NULL, specialite_id_code_cis BIGINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE asmr');
        $this->addSql('DROP TABLE composition');
        $this->addSql('DROP TABLE condition_prescription');
        $this->addSql('DROP TABLE generique');
        $this->addSql('DROP TABLE info_importante');
        $this->addSql('DROP TABLE lien_ct');
        $this->addSql('DROP TABLE presentation');
        $this->addSql('DROP TABLE smr');
        $this->addSql('DROP TABLE specialite');
        $this->addSql('DROP TABLE titulaire_specialite');
        $this->addSql('DROP TABLE voies_administration');
    }
}
