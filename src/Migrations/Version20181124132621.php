<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181124132621 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE useful ADD image_path VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE adr ADD image_path VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE smb ADD image_path VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE home_page ADD image_path VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE adr DROP image_path');
        $this->addSql('ALTER TABLE home_page DROP image_path');
        $this->addSql('ALTER TABLE smb DROP image_path');
        $this->addSql('ALTER TABLE useful DROP image_path');
    }
}
