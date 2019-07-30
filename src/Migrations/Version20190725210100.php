<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190725210100 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE specialite MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE specialite DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE specialite DROP id, CHANGE id_code_cis id_code_cis BIGINT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE specialite ADD PRIMARY KEY (id_code_cis)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE specialite MODIFY id_code_cis BIGINT NOT NULL');
        $this->addSql('ALTER TABLE specialite DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE specialite ADD id INT AUTO_INCREMENT NOT NULL, CHANGE id_code_cis id_code_cis BIGINT NOT NULL');
        $this->addSql('ALTER TABLE specialite ADD PRIMARY KEY (id)');
    }
}
