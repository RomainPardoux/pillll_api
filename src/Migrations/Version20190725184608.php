<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190725184608 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE specialite ADD id BIGINT AUTO_INCREMENT NOT NULL, DROP id_code_cis, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE presentation ADD specialite_id BIGINT NOT NULL');
        $this->addSql('ALTER TABLE presentation ADD CONSTRAINT FK_9B66E8932195E0F0 FOREIGN KEY (specialite_id) REFERENCES specialite (id)');
        $this->addSql('CREATE INDEX IDX_9B66E8932195E0F0 ON presentation (specialite_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE presentation DROP FOREIGN KEY FK_9B66E8932195E0F0');
        $this->addSql('DROP INDEX IDX_9B66E8932195E0F0 ON presentation');
        $this->addSql('ALTER TABLE presentation DROP specialite_id');
        $this->addSql('ALTER TABLE specialite MODIFY id BIGINT NOT NULL');
        $this->addSql('ALTER TABLE specialite DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE specialite ADD id_code_cis BIGINT NOT NULL, DROP id');
    }
}
