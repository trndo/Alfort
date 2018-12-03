<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181203170301 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE smb ADD title LONGTEXT DEFAULT NULL, ADD txt LONGTEXT DEFAULT NULL, DROP title1, DROP txt1, DROP txt2, DROP txt3, DROP title2, DROP prdct1, DROP prdct2, DROP prdct3');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE smb ADD title1 LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD txt1 LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD txt2 LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD txt3 LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD title2 LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD prdct1 LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD prdct2 LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD prdct3 LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, DROP title, DROP txt');
    }
}
