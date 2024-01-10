<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240110101031 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE education DROP FOREIGN KEY FK_DB0A5ED2CCFA12B8');
        $this->addSql('DROP INDEX IDX_DB0A5ED2CCFA12B8 ON education');
        $this->addSql('ALTER TABLE education DROP profile_id, CHANGE is_graduate is_graduate SMALLINT NOT NULL');
        $this->addSql('ALTER TABLE profile CHANGE civil_status civil_status SMALLINT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE education ADD profile_id INT NOT NULL, CHANGE is_graduate is_graduate SMALLINT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE education ADD CONSTRAINT FK_DB0A5ED2CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_DB0A5ED2CCFA12B8 ON education (profile_id)');
        $this->addSql('ALTER TABLE profile CHANGE civil_status civil_status SMALLINT DEFAULT 0 NOT NULL');
    }
}
