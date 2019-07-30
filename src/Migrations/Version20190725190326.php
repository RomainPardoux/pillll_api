<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190725190326 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE presentation DROP specialite_id');
        $this->addSql('ALTER TABLE specialite MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE specialite DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE specialite DROP id');
        $this->addSql('ALTER TABLE specialite ADD PRIMARY KEY (id_code_cis)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE presentation ADD specialite_id INT NOT NULL');
        $this->addSql('ALTER TABLE specialite DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE specialite ADD id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE specialite ADD PRIMARY KEY (id)');
    }
}
